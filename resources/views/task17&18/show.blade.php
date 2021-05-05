<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Pertanyaan</title>
</head>
<body>
  <h1>List Pertanyaan</h1>
  <a class="btn btn-primary" href="{{url('/pertanyaan/create')}}" role="button">Add Question</a>
  
  <br>
  <hr>
  <br>

  <table style="width:50%">
    <tr>
      <th>List Pertanyaan</th>
      <th>Details</th>
      <th>Edit</th>
      <th>Delete</th>
      <th>Tag</th>
    </tr>
    @foreach ($data as $pertanyaan)
      @foreach ($pertanyaan->pertanyaan as $table) 
        <tr>
          <td>{{$table->isi}} &nbsp;</td>
          <td><a class="btn btn-success" href="{{url('/database/show/pertanyaan/details') . '/' . $table->id}}" role="button">Details</a></td>
          <td><a class="btn btn-primary" href="{{url('/database/pertanyaan/edit') . '/' . $table->id}}" role="button">Edit</a> &nbsp;</td>
          <td><a class="btn btn-danger" href="{{url('/database/show/pertanyaan') . '/' . $table->id}}" role="button">Delete</a></td>
          <td>
            @foreach ($table->tag as $hashtag)
                <p>{{$hashtag->isi}}</p>
            @endforeach
          </td>
        </tr>
      @endforeach
    @endforeach
  </table>
  <br>
  <a class="btn btn-primary" href="{{url('/database')}}" role="button">Back</a>
</body>
</html>