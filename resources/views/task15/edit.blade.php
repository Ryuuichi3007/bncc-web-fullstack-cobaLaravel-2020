<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Edit Question</h1>
        <br>
        <hr>
  
        <form action="{{url('/pertanyaan') . '/' . $newquestion->id}}" method="POST">
          @csrf
          <label>Questions</label>
          <input type="text" name="task" placeholder="Edit Question" value="{{$newquestion->task}}">
          <input type="submit">
        </form>
  
      </div>
    </div>
  </div>
</body>
</html>