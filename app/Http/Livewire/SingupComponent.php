<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingupComponent extends Component
{
    public  $page =1;
    public $name, $email, $nick_name , $password, $looking , $sex ,$birth_day , $city, $country , $post_code,$photo;
    public $setting ;

    public function mount(){
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



    public function render()
    {
        return view('livewire.singup-component');
    }
}
