@extends('layouts.estilos')
@section('content')
<div class="card col-md-4 mx-auto p-1 shadow-lg bgc bordec">
    <div class="card-header">
        <h1 class="text-center fuente1"> CREAR CURSO </h1>
    </div>
    <div class="card-body">
        <form action="{{url('/cursos')}}" method="POST" role="form">
            @csrf()
            <div class="form-group px-5">
                <h5 class="text-center" for="">Título</h5>
                <input type="text" class="form-control text-center" id="curso" name="curso" placeholder="Escriba el nombre del curso">
            </div>
            <div class="form-group px-5">
                <h5 class="text-center" for="">Descripcion</h5>
                <input type="text" class="form-control text-center" id="descripcion" name="descripcion" placeholder="Escriba el nombre del curso">
            </div>
            <div class="form-group px-5">
                <h5 class="text-center" for="">Imagen</h5>
                <input type="text" class="form-control text-center" id="imagen" name="imagen" placeholder="Escriba el nombre del curso">
            </div>


            <div class="d-flex justify-content-center rounded-circle">
                <button type="submit" class="btn btn-primary btn-lg rounded-circle"><i class="fas fa-thumbs-up"></i></button>
            </div>
        </form>
    </div>
</div>
@endsection
