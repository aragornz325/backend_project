{{-- @extends('base')
@section('title') Inicio @endsection
@section('content')
    <main class="container-fluid">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">ABM de Tareas</h1>
            <p class="lead">Ejercicio práctico de un ABM completo de un modelo de tarea y categoría.</p>
        </div>
    </main>
@endsection --}}

@extends('base')
@section('title') Inicio @endsection
@section('content')
    <main class="container-fluid">

        <div  class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <div class="alert alert-dark">

                    <h1 class="display-2">ABM de Tareas <br>El Blog del Iniciado</h1>
                    <p class="lead">Ejercicio práctico de un ABM completo de un modelo de tarea y categoría.</p>
                    <p class="lead"><mark>en construccion</mark></p>
                    <p class="lead"> <strong> Ing. Alberto J Urbaez R. </strong> </p>
                    <p class="lead"> <p><u>Por ARAGORNZ.</u></p>
                    <p class="lead">Contacto: rodrigo.m.quintero@gmail.com</p>
                    <blockquote class="blockquote">
                        <p class="mb-0">Lo dificil me cuesta un poco, lo imposible un poco mas... como es arriba es abajo.</p>
                    <br><footer class="blockquote-footer"> YO <cite title="Source Title"> copiando codigos de otras paginas</cite></footer>
                    </blockquote>

                    <h5>Prueba de Api contactos</h5>
                    <h6>Ingrese datos aqui en el formulario, envie y confirme en el menu contacto la información </h6>
            <div>
                    <form action="http://localhost:8000/api/contact/create" method="post">
                        <label>
                            Name
                            <input type="text" name="name">
                        </label>

                        <label>
                            Email
                            <input type="email" name="email">
                        </label>

                        <label>
                            Phone
                            <input type="text" name="phone">
                        </label>
                        <br>
                        <label>
                            Message
                            <textarea name="message" cols="30" rows="5"></textarea>
                        </label>
                        <br>
                        <button type="submit">Send</button>
                    </form>
                </div>

            </section>

        </div>
    </main>
@endsection
