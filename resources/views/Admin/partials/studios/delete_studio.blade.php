<form action={{route("studio.destroy",$studio->id)}} method="POST">
    @csrf
    @method("DELETE")
    <button type="submit" class=" btn btn-primary text-white ">supprimer studio</button>
</form>
