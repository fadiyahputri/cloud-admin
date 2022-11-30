<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cloud</title>
    <link rel="stylesheet" href="css/cssCloud/login.css">
</head>
<body>
    <div class="content">
        <!-- bagian kiri -->
        <form action="{{route('postlogin')}}" class="left-side" method="POST" class="pt-3">
            {{ csrf_field() }}
            <div class="text-login">
                <img src="assets/imgcloud/logo-tb.png" alt="logo-starbhak" class="img-logo">
                <h4>Login</h4>
                <hr>
            </div>
                
                <div class="input-userpw">
                    <div class="input-user">
                        <label>Username</label>
                        <input type="text"  name="username" id="exampleInputEmail1" placeholder="Username">
                        <!-- <p>Username salah</p> -->
                    </div>
                    
                    <div class="input-pw">
                        <label>Password</label>
                        <input type="text" name="password" id="exampleInputPassword1" placeholder="Password">
                        <!-- <p>Password salah</p> -->
                        <button type="submit">Login</button>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>