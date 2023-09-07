@extends('layouts.index')
@section('content')
    <h1 class="text-danger">Home</h1>
    <a href={{route("studio.index")}}>studio</a>

    @foreach ($studio_imgs as $studio_img)
<h1>
    {{$studio_img->id}}
</h1>
    @endforeach
@endsection
