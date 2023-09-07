<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#show{{$studio->id}}">
    Supprimer une image
  </button>

  <!-- Modal -->
  <div class="modal fade" id="show{{$studio->id}}" tabindex="-1" aria-labelledby="show{{$studio->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="show{{$studio->id}}Label">{{$studio->name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
{{-- ici c'est la suppression des images  --}}

<div id="carousel{{$studio->id}}" class="carousel slide">
    <div class="carousel-inner">
    @foreach ($studio->studioimgs as $key => $studio_img)
        <div class="carousel-item @if ($key === 0) active @endif">
            <img height="200" src="{{ asset("storage/Imgs/studioImgs/".$studio_img->img_url) }}" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                    <form action={{route("image.destroy",$studio_img->id)}} method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

    <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{$studio->id}}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel{{$studio->id}}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>








         {{-- <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                @foreach ($studio->studioimgs as $key=>$studio_img)
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to={{$key}} class="@if ($key===0)
             active
             @endif" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>

                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($studio->studioimgs as $key=>$studio_img)
                <div class="carousel-item @if ($key===0)
                active
                @endif">

                <img height="200" src={{asset("storage/img/".$studio_img->img_url)}} alt="">
            </div>
               @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> --}}




{{-- {{$studio->studioimgs}} --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


