<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tabla</title>
</head>
<body>
    <h1 class="display-4 text-center">TABLA</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col" class="table-info">#</th>
      <th scope="col" class="table-info">First</th>
      <th scope="col" class="table-info">Last</th>
      <th scope="col" class="table-info">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="table-info" >1</th>
      <td class="table-secondary">Mark</td>
      <td class="table-secondary">Otto</td>
      <td class="table-secondary">@mdo</td>
    </tr>
    <tr>
      <th scope="row" class="table-info">2</th>
      <td class="table-secondary">Jacob</td>
      <td class="table-secondary">Thornton</td>
      <td class="table-secondary">@fat</td>
    </tr>
    <tr>
      <th scope="row" class="table-info">3</th>
      <td colspan="2" class="table-secondary">Larry the Bird</td>
      <td class="table-secondary">@twitter</td>
    </tr>
  </tbody>
</table>

<a href="{{route('regre')}}"><button type="button" class="btn btn-info">Regresar</button></a>

</body>
</html>