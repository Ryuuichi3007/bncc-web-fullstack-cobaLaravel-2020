<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FORM PENDAFTARAN</title>

    <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }

      .full-height {
          height: 100vh;
      }

      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }

      .m-b-md {
          margin-bottom: 30px;
      }
  </style>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form method="POST" action="/welcome">
      @csrf
      <p class="Firstname">First Name:</p>
      <input type="text" id="fname" name="fname">
      <p class="Lastname">Last Name:</p>
      <input type="text" id="lname" name="lname">

      <br><br>

      <p class="Gender">Gender:</p>
      <input type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label><br>
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label>

      <br><br>

      <p class="Nationality">Nationality:</p>
      <select id="National" name="National">
              <option value="Indonesia">Indonesia</option>
              <option value="Malaysia">Malaysia</option>
              <option value="Amerika">Amerika</option>
              <option value="Jepang">Jepang</option>
              <option value="Australia">Australia</option>
              <option value="Jerman">Jerman</option>
      </select>

      <br><br>

      <p class="Language">Language:</p>
      <input type="checkbox" id="lang1" name="lang[]" value="Indonesia" size="100">
      <label for="lang1">Indonesia</label><br>
      <input type="checkbox" id="lang2" name="lang[]" value="English" size="100">
      <label for="lang2">English</label><br>
      <input type="checkbox" id="lang3" name="lang[]" value="Other" size="100">
      <label for="lang3">Other</label>

      <br><br>

      <label for="Bio">Bio:</label><br><br>
      <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
      <br><br>
      <button type="Sign Up">Sign Up</button>
    </form>
</body>

</html>