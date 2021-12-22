<?php

namespace App\Http\Controllers;

use App\Models\MetaSettings;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function dashboard(){

        $con = mysqli_connect('139.162.54.146' ,'hushcupid_main','m8a?Md1e{jha','hushcupid_main');

        $sql ="SELECT * FROM ph7_admins";
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
