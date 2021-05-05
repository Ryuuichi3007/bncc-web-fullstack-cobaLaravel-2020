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
  @foreach ($data as $pertanyaan)
    <h1>Pertanyaan</h1>
    <hr><br>
    <h4>{{$pertanyaan->isi}}</h4>
    <p>asked from {{$pertanyaan->user->name}}</p>
  @endforeach
  <table style="width:50%">
    <tr>
      <th>Answer</th>
      <th>Created_At</th>
      <th>Updated_At</th>
    </tr>
  
    @foreach ($data as $table)
      @foreach ($table->jawaban as $answer)
        @if ($table->jawabanBenar_id == $answer['id'])
          <tr>
            <td>{{$answer->isi}}</td>
            <td>{{$answer->created_at}}</td>
            <td>{{$answer->updated_at}}</td>
            <td style="background-color: yellow">Correct Answer</td>
          </tr>
        @else
          <tr>
            <td>{{$answer->isi}}</td>
            <td>{{$answer->created_at}}</td>
            <td>{{$answer->updated_at}}</td>
          </tr>
        @endif
      @endforeach
    @endforeach

  </table>

  <br>

  <a class="btn btn-primary" href="{{url('/database')}}" role="button">Back</a>
</body>
</html>