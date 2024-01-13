<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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

    <title>Register | Akbar Medical Excellence Center</title>
</head>

<body>
    <div class="container">
        <div style="background: #185ca4;" class="wrapper  text-center p-3">
            <form method="post" action="/store_register" class="login-form">
                @csrf
                <h2 class="mb-4">Register</h2>

                @if ($errors->any())
                    <div class="alert alert-danger my-4">
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3 text">
                    <label for="username"><i class="fas fa-user"></i> Username</label><br>
                    <input type="text" name="username" id="username" class="form-control" required
                        value="{{ old('username') }}">
                </div>
                <div class="mb-3 text">
                    <label for="password"><i class="fas fa-lock"></i> Password</label><br>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3 text">
                    <label for="confirm"><i class="fas fa-lock"></i> Konfirmasi Password</label><br>
                    <input type="password" name="confirm" class="form-control" id="confirm" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-block">Register</button>
                </div>
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

</body>

</html>
