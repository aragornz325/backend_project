@extends('base')
@section('title') Editar Noticia @endsection
@section('content')
<form action="{{ route('post.update', $post->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field("PATCH") }}
    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title}}">
        <div id="emailHelp" class="form-text">Verifica si debes modificar el titulo, cambiara en al posicion de la busqueda.</div>
      </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="image" name="image" value= "{{ $post->image}}">
            <div id="emailHelp" class="form-text">actualiza la imagen si corresponde, sino deja la que ya tienes</div>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Resumen</label>
            <textarea name="summary" id="summary" class="form-control" cols="30" rows="10">{{ $post->summary }}</textarea>
            <div id="emailHelp" class="form-text">actualiza el resumen.</div>
        </div>
      <div class="mb-3">
        <label for="description" class="form-label">descripcion</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $post->description }}</textarea>
        <div id="emailHelp" class="form-text">actualiza el contenido de la noticia, siempre recuerda citar fuenfes.</div>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Autor</label>
        <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}">
        <div id="emailHelp" class="form-text">No olvides mencionarte como autor.</div>
      </div>
     <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection
