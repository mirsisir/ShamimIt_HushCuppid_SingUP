<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SingupComponent extends Component
{
    const DEFAULT_LENGTH = 40;

    const PWD_ALGORITHM = PASSWORD_BCRYPT;
    const PWD_WORK_FACTOR = 12;

    const SHA512_ALGORITHM = 'sha512';
    const WHIRLPOOL_ALGORITHM = 'whirlpool';
    private static $aPwdOptions = ['cost' => self::PWD_WORK_FACTOR];
    public  $page =1;

    public $name, $email, $nick_name , $password, $looking , $sex ,$birth_day , $city, $country , $post_code,$photo;
    public $setting ;
    /**
     * @var mixed
     */
    private $ip;

    public function mount(Request $request){
       $this->id = $request->ip() ?? "127.0.0.1";
        $this->setting = \App\Models\MetaSettings::find(1);
    }

    private $validationRules = [
        1 => [
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'nick_name' => ['required', 'string'],
            'password' => ['required', 'string'],

        ],
        2 => [
            'password' => ['required', 'string', 'min:8'],
        ],
    ];


    public function increment(){
        $this->validate($this->validationRules[$this->page]);
        $this->page++;
    }

    public static function hashPwd($sPassword)
    {
        return password_hash($sPassword, self::PWD_ALGORITHM, self::$aPwdOptions);
    }

    public function SingUp()
    {


        $sPassword = $this->password;
        $password = $this->hashPwd($sPassword);
        $current_date = Carbon::now();


        $memberId = DB::connection('mysql2')->table('ph7_members')->insertGetId([
            'email' => $this->email,
            'username' => $this->nick_name,
            'password' => $password,
            'firstName' => $this->name,
            'reference' => "LoneelyMeet.com",
            'ip' => "127.0.0.1",
            'hashValidation' => Hash::make($sPassword),
            'joinDate' => $current_date,
            'active' => 1,
            'groupId' => 2,
            'affiliatedId' => 0
        ]);

        DB::connection('mysql2')->table('ph7_members_info')->insert([
            'profileId' => $memberId,
            'country' => (!empty($this->country) ? $this->country : ''),
            'city' => (!empty($this->city) ? $this->city : ''),
            'state' => '',
            'zipCode' => (!empty($this->post_code) ? $this->post_code : ''),
            'description' => " ",
            'punchline' => ''
        ]);

        DB::connection('mysql2')->table('ph7_members_privacy')->insert([
            'profileId' => $memberId,
            'privacyProfile' => 'all',
            'searchProfile' => 'yes',
            'userSaveViews' => 'yes'
        ]);

        DB::connection('mysql2')->table('ph7_members_notifications')->insert([
            'profileId' => $memberId,
            'enableNewsletters' => 1,
            'newMsg' => 1,
            'friendRequest' => 1
        ]);

        return redirect(route('register_successfully'))->with('success','Account created successfully. ');

    }


    public function render()
    {
        return view('livewire.singup-component');
    }
}
