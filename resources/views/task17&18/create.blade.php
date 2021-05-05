<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Add Question</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Create New Question</h1>
        <br>
        <hr>
        
        <form action="{{url('/database/show/pertanyaan')}}" method="POST">
          @csrf
          <label>Questions</label>
          <input type="text" name="isi" placeholder="New Questions">
          <input type="text" name="id" placeholder="Id User">
          <input type="submit">
        </form>
  
      </div>
    </div>
  </div>
</body>
</html>