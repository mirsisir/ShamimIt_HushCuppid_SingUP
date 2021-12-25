<?php

namespace App\Http\Controllers;

use App\Models\MetaSettings;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function dashboard(){
        $con = mysqli_connect('139.162.54.146' ,'hushcupid_main','m8a?Md1e{jha','hushcupid_main');
        $sql ="INSERT INTO ph7_members (profileId, email, username,password,sex,matchSex,ip,groupId) VALUES ('999','sisir@test.com','username','password','male','female','120345628','groupId',1);";
        $res = mysqli_query($con,$sql);

        dd($res);
        return view('dashboard');
    }

    public function background(){
        $stor = New MetaSettings();
        $stor->name = "background image";
        $stor->value = \request()->background->store('images', 'public');
        $stor->save();

        return view('dashboard');
    }


}
