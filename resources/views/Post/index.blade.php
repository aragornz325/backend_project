@extends('base')
@section('title') Lista de noticias @endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>{{ "ID"  }}</th>
                <th>{{ "ID" }}</th>
                <th>{{ "ID" }}</th>
                <th>{{ "ACCIONES" }}</th>
            </tr>
        </thead>
        <tbody>
            @if (count($posts) >= 1 )
                @foreach ($posts as $post)
                <tr>
                    <td scope="row"> {{ $post->id }} </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <a href="{{ route("post.edit",$post->id ) }}" class="btn btn-sm btn-info"> Actualizar </a>

                        <form action="{{ route("post.destroy", $post->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field("DELETE") }}
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('estas seguro?, si clickeas ACEPTAR lo hago mierda!!!')">Hacer mierda</button>


                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr><td scope="row">{{ "Ups, no hay nada por aca" }}</td>
            @endif

        </tbody>
    </table>
@endsection
