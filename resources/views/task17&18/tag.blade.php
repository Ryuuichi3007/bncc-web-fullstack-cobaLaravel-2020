<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Data Pertanyaan yang ingin ditampilkan</title>
</head>
<body>
  <table style="width:50%">
    <tr>
      <th>Tag</th>
      <th>Created_At</th>
      <th>Updated_At</th>
    </tr>
  
    @foreach ($data4 as $table)
      @foreach ($table->tag as $tag)
      <tr>
        <td>{{$tag->isi}}</td>
        <td>{{$tag->created_at}}</td>
        <td>{{$tag->updated_at}}</td>
      </tr>
      @endforeach
    @endforeach

  </table>

  <br>

  <a class="btn btn-primary" href="{{url('/')}}" role="button">Back</a>
</body>
</html>