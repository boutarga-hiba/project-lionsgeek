<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Ajouter studio  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter studio</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action={{route("index.store")}} method="POST">
                @csrf
                <div>
                    <label for="name">Ajoutez un nom</label>
                    <input type="text" name="name" id="name">
                </div>

                <div>
                    <label for="description">Ajoutez une description</label>
                    <input type="text" name="description" id="description">
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Create</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr >
        <th scope="col">#</th>
        <th scope="col">Nom de studio</th>
        <th scope="col">Description</th>

        <th scope="col">Ajoutez une image</th>
        <th scope="col">Voir plus</th>
        <th scope="col">Supprimez un studio</th>
        <th scope="col">Modifiez</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($studios as $studio)
 <tr valign="middle">
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$studio->name}}</td>
        <td>{{$studio->description}}</td>
        {{-- <td>@mdo</td> --}}
        <td>
            @include("Admin.partials.studios.create_studio_img")
        </td>

        <td>
            @include("Admin.partials.studios.show_studio_imgs")
        </td>

        {{-- la suppression du studio --}}
        <td>
            @include("Admin.partials.studios.delete_studio")
        </td>

        <td>
            @include("Admin.partials.studios.edit_studio")
        </td>
      </tr>
        @endforeach


    </tbody>
  </table>
