<h1>Listado de Posts</h1>
<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Contenido</th>
        <th colspan="2">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <button class="btn btn-primary">Editar</button>
                </td>
                <td>
                    <button wire:click="destroy({{$post->id}})" class="btn btn-danger" >Eliminar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$posts->links()}}
