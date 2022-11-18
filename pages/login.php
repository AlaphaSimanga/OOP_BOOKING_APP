<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking App - Login page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    <header>
        <nav class="navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../images/images.png" alt="Bootstrap" width="30" height="30">
                </a>
            </div>
        </nav>
    </header>

    <section id="app-login">
        <div class="wrapper">
            <h2>Login</h2><br>
            <div class="info">
                <input type="email" class="email" placeholder="Email or phone number" name="email"
                    v-model="input.email"><br>

                <br>
                <input type="password" class="password" placeholder="Password" name="pw"
                    v-model="input.password"><br><br>
            </div>
            <div class="help">
                    <input value="true" type="checkbox"><label>Remember me</label>
            </div>

            <div class="btn">
                <!--When the user clicks login button, they should be directed to the booking app home page-->
                <button class="btn-primary" v-on:click="login()">Login</button><br><br>
            </div>

            <div class="register">
                <!--When the user clicks the sign up now link they should be directed to the sign up webpage-->
                <p>Don't have an account yet?<a href="register.php"> Create an account.</a></p>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>

    <script src="../js/login.js"></script>

</body>

</html>