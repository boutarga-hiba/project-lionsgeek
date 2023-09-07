<form action={{route("classe.destroy",$classe->id)}} method="POST">
    @csrf
    @method("DELETE")
    <button type="submit" class=" btn btn-primary text-white ">supprimer classe</button>
</form>

