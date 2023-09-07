<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    //

    public function index ()
{
    $classes=Classe::all();
    return view("Admin.pages.classe",compact("classes"));
}

//* fonction d'ajout un studio

public function store(Request $request)
{
    request()->validate([
        "name"=>["required"],
        "description"=>["required"],
    ]);

    $data=[
        "name"=>$request->name,
        "description"=>$request->description
    ];
     Classe::create($data);
    // & Methode de jointure
//     $studio = Studio::create($data);
    //
    // StudioImg::create([
    //     'studio_id' => $studio->id,
    //     'img_url' => 'test.jpg'

    //     // $table->string("img_url");
    //     // $table->foreignId("studio_id")->constrained();


    // ]);
    return redirect()->back();
}

}
