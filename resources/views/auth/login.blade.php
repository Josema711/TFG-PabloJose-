<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
          font-family: 'Noto Sans', sans-serif;
          font-family: 'Reggae One', cursive;
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
          <form method="POST" action="{{ route('login') }}">
              @csrf
              <!-- Email Address -->
              <div  class="email">
                  <x-label for="email" :value="__('Email')" /><br>
                  <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
              </div>
<br>
              <!-- Password -->
              <div class="password">
                  <x-label for="password" :value="__('Password')" /><br>
                  <x-input id="password" type="password" name="password" required autocomplete="current-password" />
              </div>
<br>
            <!-- Button -->
                  <x-button class="login">
                      {{ __('Log in') }}
                  </x-button>
            </form>
          </div>
        </div>

  </body>
</html>
