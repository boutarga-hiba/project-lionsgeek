<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Models\StudioImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudioController extends Controller
{
    //
// * fonction de navigation de la page studio

public function index ()
{
    $studios=Studio::all();
    return view("Admin.pages.studio",compact("studios"));
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
     Studio::create($data);
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

public function destroy(Studio $studio)
{
    $studioimages=StudioImg::where('studio_id', $studio->id)->get();

    foreach($studioimages as $studioimage ){
        Storage::disk("public")->delete('img/' . $studioimage->img_url);
    }

    $studio->delete();
    return redirect()->back();
}

public function update(Request $request , Studio $studio)
{
    request()->validate([
        "name"=>["required"],
        "description"=>["required"],
    ]);

    $data=[
        "name"=>$request->name,
        "description"=>$request->description
    ];
     $studio->update($data);
     return redirect()->back();
}
}
