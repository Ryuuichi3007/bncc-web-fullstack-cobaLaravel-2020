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
  <h1>List Pertanyaan</h1>
  <a class="btn btn-primary" href="{{url('/pertanyaan/create')}}" role="button">Add Question</a>
  {{-- @include('task15\create') --}}

  <hr>
  <br>
  
  <table style="width:50%">
    <tr>
      <th>List Questions</th>
      <th>Details</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    
    @foreach ($newquestion as $table) 
      <tr>
        <td>{{$table->task}} &nbsp;</td>
        <td><a class="btn btn-success" href="{{url('/pertanyaan/show') . '/' . $table->id}}" role="button">Details</a></td>
        <td><a class="btn btn-primary" href="{{url('/pertanyaan/edit') . '/' . $table->id}}" role="button">Edit</a> &nbsp;</td>
        <td><a class="btn btn-danger" href="{{url('/pertanyaan') . '/' . $table->id}}" role="button">Delete</a></td>
      </tr>
    @endforeach
  </table>
</body>
</html>