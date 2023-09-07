<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Models\StudioImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudioImageController extends Controller
{
    //
    public function index()
    {
        $studio_images = StudioImg::all();
        return view("Admin.partials.studios.create_studio_img", compact("studio_images"));
    }

    public function store(Request $request , Studio $studio)
    {
        request()->validate([
            "img_url" => "required|image|mimes:png,jpg,jpeg,gif|max:2048"
        ]);

        $request->file("img_url")->storePublicly('Imgs/studioImgs/', 'public');

        $data = [
            "img_url" => $request->file("img_url")->hashName(),
            "studio_id" => $studio->id
        ];

        StudioImg::create($data);

        return redirect()->back();
    }

    public function destroy(StudioImg $studioImg)
    {
        Storage::disk("public")->delete('Imgs/studioImgs/' . $studioImg->img_url);
        $studioImg->delete();
        return redirect()->back();
    }

}
