<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Daftar Pertanyaan</title>
</head>
<body>
  <h1>List User</h1>
  {{-- <a class="btn btn-primary" href="{{url('/pertanyaan/create')}}" role="button">Add Question</a> --}}
  {{-- @include('task15\create') --}}

  <hr>
  <br>
  
  <table style="width:50%">
    <tr>
      <th>User</th>
      <th>List Pertanyaan</th>
    </tr>
    
    @foreach ($data as $table) 
      <tr>
        <td>{{$table->name}} &nbsp;</td>
        <td><a href="{{url('database/show/pertanyaan') . '/' . $table->id}}">Klik untuk Details</a></td>
      </tr>
    @endforeach
  </table>
</body>
</html>