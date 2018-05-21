<!DOCTYPE html>
<head>

</head>    
<body>
     <p>Login</p>
    <form method="post" action="/login">
        {{csrf_field()}}
         @if($errors->any())
      <p>
          {{ $errors->first('email') }} <br>
          {{ $errors->first('password') }}

      </p>
      @endif
      <label for="email">Email:</label>
      <input type = "text" name = "email" placeholder = "Your Email" ><br>
      <label for= "password" >Password:</label>
      <input type = "password" name = "password" placeholder = "Your Password" ><br>

      <input type = "submit" value = "Submit">

    </form>
</body>