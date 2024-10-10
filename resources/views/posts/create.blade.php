<x-layout meta-title="Crear Post" meta-description="crear post">
    
<h1>Crear Post</h1>

<form action="{{route('posts.store')}}" method="POST">
    @csrf

    <label for="title">
        Titulo <br />
        <input name="title" type="text">
    </label>
    <label for="body"> <br />
        Body <br />
        <textarea name="body" id="body"></textarea>
    </label><br />

    <button type="submit">Guardar</button>
</form>

</x-layout>