<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KEUKEGEN</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&family=Reggae+One&display=swap" rel="stylesheet">

    <style>

    body{

      background-color: #B6B6B6;
    }
      .container{
        text-align: center;
        vertical-align:middle;
        margin-top: 20%;
      }
      .content{
        text-align: center;
        display: inline-block;
        font-family: 'Noto Sans', sans-serif;
        font-family: 'Reggae One', cursive;
      }

      .login{
          text-decoration: none;
          padding: 5%;
          font-weight: 600;
          font-size: 20px;
          color: #000000;
          background-color: #877B79;
          border-radius: 10px;
          border: 2px solid #000000;
        }
      .login:hover{
        color: #34221f;
        background-color: #ff0000;
      }
    </style>

  </head>
  <body>


    <div class="container">
      <div class="content">

        <h1 class="titulo">KEUKEGEN</h1>
        <a class="login" href="{{ route('login') }}" role="button">Log in</a>
      </div>
    </div>
  </body>
</html>
