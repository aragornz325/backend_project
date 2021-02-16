@extends('base')
@section('title') Crear Nueva Noticia @endsection
@section('content')
<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="title" name="title">
        <div id="emailHelp" class="form-text">Introduzca un titulo que identifique la noticia.</div>
      </div>
      <div class="form-group has-feedback">
        <label class="form-label">Categoria</label>
        <select name="category_id" class="form-select" required>
            <option value="">Seleccione la Categoria</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" >{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
      <div class="mb-3">
        <label for="image" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="image" name="image">
        <div id="emailHelp" class="form-text">la imagen a cargar no debe ser mayor a 800x600px... (poneeeeleee).</div>
      </div>
      <div class="mb-3">
        <label for="summary" class="form-label">Resumen</label>
        <textarea name="summary" id="summary" class="form-control" cols="30" rows="10"></textarea>
        <div id="emailHelp" class="form-text">Haz un resumen de tu noticia.</div>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">descripcion</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        <div id="emailHelp" class="form-text">desarrolla tu notica, recuerda que el lector prefiere el contenido desarrollado de manera calida, no como una exposicion policial. no omitas mencionar las funtes si tomas informacion de otra web, recuerda agradecer.</div>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label">Autor</label>
        <input type="text" class="form-control" id="author" name="author">
        <div id="emailHelp" class="form-text">No olvides mencionarte como autor.</div>
      </div>
     <button type="submit" class="btn btn-primary">Guardar</button>

</form>

@endsection
