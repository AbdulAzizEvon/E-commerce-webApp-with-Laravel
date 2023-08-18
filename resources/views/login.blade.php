<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/apps.css') }}" >
    <title>SignIn</title>
</head>
<body>
    <div class="s-cntainer">
        <div class="signup" ><a href="resources/views/Register.blade.php">SignUp</a></div>
    </div>
    <div class="container">
     <div class="signin-container"> 
        <span>Login</span>
        <form action="{{url('/')}}/authenticate" method="post">
         @csrf
         @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
         @endif
        <div class="fields">
            <div class="input-field">
                <label for="un" >User Name</label>
                <div class="inpt">
                    <input type="text" id="un" name="email" placeholder="Enter User Name" required></div>
                </dev>
            </div>
            <div class="input-field">
             <label for="pw">Password</label>
                <div class="inpt">
                    <input type="password" id="pw" name="password" placeholder="Enter Your password" required>
                </div>
            </div>
            <div>
                <input type="checkbox" id="rm" >
                <label for="rm" name="remember">Remember Me</label>
            </div>
            <div class="input-field-1">
                <button type="submit">Login</button>
            </div>
        </div>
        </form>
        <div class="fg-pass"> <a href="">Forgotten account?</a></div>
     </div>
     </div>   
</body>
</html>