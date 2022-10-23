<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
@if(session()->has('confirmacion'))
      
      {!!"<script>Swal.fire('Informacion Guardada')</script>"!!}

    @endif
<div class="container">

<h1 class="display-4 text-center">FORMULARIO</h1>


</div>
<form method="post" action="guarda">
@csrf 
<label for="inputPassword5" class="form-label fw-light fs-2">Ingresa</label>
<input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="texto">
<p class="text-warning fw-bold text-start text-decoration-underline">{{ $errors->first('texto')}}</p>
<div class="form-text">
Ingrese lo que guste
</div>
<div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-success">Guardar informacion</button>
        </form>
        </div>
        <a href="{{route('regre')}}"><button type="button" class="btn btn-info">Regresar</button></a>
</body>
</html>