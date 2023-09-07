<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\ClassImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClasseImageController extends Controller
{
    //

    public function index()
    {
        $classe_images = ClassImg::all();
        return view("Admin.partials.classess.create_classe_img", compact("classe_images"));
    }

    public function store(Request $request , Classe $classe)
    {
        request()->validate([
            "img_url" => "required|image|mimes:png,jpg,jpeg,gif|max:2048"
        ]);

        $request->file("img_url")->storePublicly('imgs/classImgs/', 'public');

        $data = [
            "img_url" => $request->file("img_url")->hashName(),
            "classe_id" => $classe->id
        ];

        ClassImg::create($data);
        return redirect()->back();
    }


    public function destroy(ClassImg $classeImg)
    {
        Storage::disk("public")->delete('Imgs/classImgs/' . $classeImg->img_url);
        $classeImg->delete();
        return redirect()->back();
    }

}
