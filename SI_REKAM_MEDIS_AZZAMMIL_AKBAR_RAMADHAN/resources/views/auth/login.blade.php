<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;

        }

        .wrapper {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 40px;
            width: 60%;
            height: 60%;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            color: white;

        }

        .login-form {
            width: 50%;
            max-width: 400px;
            margin-right: 10px;
        }

        .text {
            text-align: left;
        }

        .login-form h2 {
            text-align: center;
            text-size-adjust: 10px;
        }

        .image-container {
            width: 45%;
        }

        .image {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            width: 400px;
            height: 550px;
            border-radius: 10px;
        }

        .fa {
            margin-right: 10px;
            color: #8fc4fd;
        }
    </style>

    <title>Login | Akbar Medical Excellence Center</title>
</head>

<body>
    <div class="container">
        <div style="background: #185ca4;" class="wrapper  text-center p-3">
            <form method="post" action="/store_login" class="login-form">
                @csrf
                <h2 class="mb-4">Login</h2>

                @if (session('register'))
                    <div class="alert alert-success my-4">
                        {{ session('register') }}
                    </div>
                @endif

                @if (session('username'))
                    <div class="alert alert-danger my-4">
                        {{ session('username') }}
                    </div>
                @endif

                @if (session('password'))
                    <div class="alert alert-danger my-4">
                        {{ session('password') }}
                    </div>
                @endif

                <div class="mb-3 text">
                    <label for="username"><i class="fas fa-user"></i> Username</label><br>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="mb-3 text">
                    <label for="password"><i class="fas fa-lock"></i> Password</label><br>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div><br><br>
                <div class="mb-3">
                    <button type="submit" class="btn btn-light fw-bold btn-block">SUBMIT</button>
                </div>
                <a href="/register" class="nav-link" style="color: white;">Belum punya akun? daftar sekarang</a>
            </form>
            <div class="image-container">
                <img src="/gambar/hospital.jpg" alt="Hospital Image" class="image">
            </div>
        </div>

    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
