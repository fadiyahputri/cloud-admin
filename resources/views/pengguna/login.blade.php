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
                        <input type="text"  name="username" id="exampleInputEmail1" class="form__input" autocomplete="off" placeholder=" " >
                        <label for="username" class="form__label">username</label>
                        <!-- <p>Password salah</p> -->
                    </div>
                    <div class="input-pw">
                        <input type="password"  name="password" id="exampleInputPassword1" class="form__input" autocomplete="off" placeholder=" ">
                        <label for="password" class="form__label">password</label>
                        <!-- <p>Username salah</p> -->
                        <button type="submit" class="btn-login">Login</button>
                        
                    </div>
                </div>
        </form>
    </div>
</body>
</html>