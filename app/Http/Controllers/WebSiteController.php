<?php

namespace App\Http\Controllers;

use App\Models\MetaSettings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        if (!empty($img)){
            $imagePath = public_path('storage/'.$img);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }

        MetaSettings::updateOrCreate(
            ['id' =>  1],
            ['background_image' => \request()->background->store('images', 'public')]
        );

        return redirect()->back()->with('success','Meta Settings Update successfully!');
    }
    public function login_image(){


        $img = MetaSettings::find(1)->login_image ?? "";

        if (!empty($img)){
            $imagePath = public_path('storage/'.$img);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }

        }


        MetaSettings::updateOrCreate(
            ['id' =>  1],
            ['login_image' => \request()->login_image->store('images', 'public')]
        );


        return redirect()->back()->with('success','Meta Settings Update successfully!');
    }
    public function gen_settings( Request $request){

        MetaSettings::updateOrCreate(
            ['id' =>  1],
            [
                'website_name' => $request->web_name,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ]
        );

        return redirect()->back()->with('success','Meta Settings Update successfully!');
    }


}
