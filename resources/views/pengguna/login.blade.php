<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cloud</title>
    <link rel="stylesheet" href="css/cssCloud/login.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
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
                    </div>
                    <div class="input-pw">
                        <input type="password" name="password" id="exampleInputPassword1" class="form__input" autocomplete="off" placeholder=" ">
                        <label for="password" class="form__label">password</label>
                        <iconify-icon class="eye" id="eye-off" icon="mdi:eye-off" width="55" height="20" onclick="pass()"></iconify-icon>
                        <iconify-icon class="eye" id="eye-on" icon="ic:baseline-remove-red-eye" width="55" height="20" onclick="pass()" style="display: none;"></iconify-icon>
                        <button type="submit" class="btn-login">Login</button>
                    </div>
                </div>
        </form>
    </div>
    {{-- show pw --}}
    <script>
        var show ;
        function pass() {
            if (show == 1) {
                document.getElementById('exampleInputPassword1').type='password';
                document.getElementById('eye-off').style.display = "flex";
                document.getElementById('eye-on').style.display = "none";
                show = 0;
            }else {
                document.getElementById('exampleInputPassword1').type='text';
                document.getElementById('eye-off').style.display = "none";
                document.getElementById('eye-on').style.display = "flex";
                show = 1;
            }
        }
    </script>
    {{-- end show pw --}}
</body>
</html>