<?php

namespace App\Http\Controllers;

use App\Models\MetaSettings;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function dashboard(){


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
