<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css" />
    <base href="http://arif/pathwayusa/admin/">
</head>

<body>

    <section class="login-page">
        <div class="login-container">
            <div class="login-top text-center ">
                <div class="mb-3">
                    <img src="./images/logo_purple.png" class="img-fluid" alt="Logo">
                    <!--   <img src="./images/logo_purple_1.png" class="img-fluid " alt="Logo">-->
                </div>
                <h2>Welcome Back</h2> 
            </div>
            <form class="login-form">
                <div class="form-item">
                    <input class="form-control" type="text" placeholder="Username" id="username" autocomplete="off"
                        required>
                </div>

                <div class="form-item ">
                    <input class="form-control" type="password" placeholder="Password" id="loginPassword"
                        autocomplete="off" required>
                    <div class="pass-check position-absolute">
                        <i class="fa-regular fa-eye" id="passwordCheck"></i>
                    </div>
                </div>
                <div class="forgot_area d-flex justify-content-between">
                    <a href="forgot-user.php">Forgot username?</a>
                    <a href="forgot-pass.php">Forgot password?</a>
                </div>
                <div class="form-item loginBtn mb-0">
                    <input class="form-control" type="submit" value="Login">
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>

    <script>
        $(document).ready(function () {
            $('#passwordCheck').click(function () {
                let loginPassword = $('#loginPassword');
                loginPassword.attr('type', loginPassword.attr('type') === 'password' ? 'text' : 'password');
            });

        });
    </script>
</body>

</html>