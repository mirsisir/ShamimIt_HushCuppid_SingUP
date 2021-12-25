<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    const DEFAULT_LENGTH = 40;

    // TODO: Use PASSWORD_ARGON2I instead when PHP 7.2 will be supported
    const PWD_ALGORITHM = PASSWORD_BCRYPT;
    const PWD_WORK_FACTOR = 12;

    const SHA512_ALGORITHM = 'sha512';
    const WHIRLPOOL_ALGORITHM = 'whirlpool';

    /** @var array */
    private static $aPwdOptions = ['cost' => self::PWD_WORK_FACTOR];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'username' => 'required|unique:ph7_members,username',
            'email' => 'required|unique:ph7_members,email',
            'password' => 'required'
        ]);

        $sPassword = $request->password;
        $password = $this->hashPwd($sPassword);
        $current_date = Carbon::now();

        // $member = DB::connection('mysql2')->insert("INSERT INTO ph7_members (firstname, username, email, password) VALUES ('$firstName', '$username', '$email', '$password')");

        $memberId = DB::connection('mysql2')->table('ph7_members')->insertGetId([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $password,
            'firstName' => $request->firstName,
            'reference' => "LoneelyMeet.com",
            'ip' => $request->ip(),
            'hashValidation' => Hash::make($sPassword),
            'joinDate' => $current_date,
            'active' => 1,
            'groupId' => 2,
            'affiliatedId' => 0
        ]);

        DB::connection('mysql2')->table('ph7_members_info')->insert([
            'profileId' => $memberId,
            'country' => (!empty($request->country) ? $request->country : ''),
            'city' => (!empty($request->city) ? $request->city : ''),
            'state' => '',
            'zipCode' => (!empty($request->zipCode) ? $request->zipCode : ''),
            'description' => (!empty($request->description) ? $request->description : ''),
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
        
        return redirect('/')
        ->with('success','Account created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    /**
     * Generate Random Salt for Password encryption.
     *
     * @param string $sPassword
     *
     * @return string The Hash Password
     */
    public static function hashPwd($sPassword)
    {
        return password_hash($sPassword, self::PWD_ALGORITHM, self::$aPwdOptions);
    }
}
