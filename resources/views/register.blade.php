<!DOCTYPE html>
<head>

</head>    
<body>
     <p>Register</p>
    <form method="post" action="/login">
        {{csrf_field()}}
         @if($errors->any())
      <p>
          {{ $errors->first('email') }} <br>
          {{ $errors->first('password') }}

      </p>
      @endif
      <label for="name">Name:</label>
      <input type = "text" name = "name" placeholder = "Your Name" ><br>
      <label for="username">Username:</label>
      <input type = "text" name = "username" placeholder = "Your Username" ><br>
      <label for="email">Email:</label>
      <input type = "text" name = "email" placeholder = "Your Email" ><br>
      <label for= "password" >Password:</label>
      <input type = "password" name = "password" placeholder = "Your Password" ><br>
      <label for="confirmpassword">Confirm Password:</label>
      <input type = "text" name = "name" placeholder = "Confirm again" ><br>
      <input type = "submit" value = "Submit">

    </form>
</body>