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
      <th>Question</th>
      <th>Created_At</th>
      <th>Updated_At</th>
      <th>Answer</th>
      <th>Right Answer</th>
      <th>Tag</th>
    </tr>
  
    @foreach ($data as $table)
      @foreach ($table->pertanyaan as $pertanyaan)
      <tr>
        <td>{{$pertanyaan->isi}}</td>
        <td>{{$pertanyaan->created_at}}</td>
        <td>{{$pertanyaan->updated_at}}</td>
        <td><a href="{{url('/show/pertanyaan/answer') . '/' . $pertanyaan->id}}">Klik untuk melihat semua jawaban</a></td>
        <td><a href="{{url('/show/pertanyaan/right_answer') . '/' . $pertanyaan->id}}">Klik untuk melihat jawaban yang benar</a></td>
        <td><a href="{{url('/show/pertanyaan/tag') . '/' . $pertanyaan->id}}">Tag</a></td>
      </tr>
      @endforeach
    @endforeach

  </table>

  <br>

  <a class="btn btn-primary" href="{{url('/')}}" role="button">Back</a>
</body>
</html>