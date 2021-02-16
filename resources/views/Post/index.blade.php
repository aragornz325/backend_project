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
                    <td>editar -

                        <form action="{{ route("post.destroy", $post->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field("DELETE") }}
                            <button type="submit" class="btn btn-sm btn-danger">Hacer mierda</button>


                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr><td scope="row">{{ "Ups, no hay nada por aca" }}</td>
            @endif

        </tbody>
    </table>
