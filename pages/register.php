<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking App - Registration page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <header>
        <nav class="navbar bg-light">
            <picture>
                <img src="../images/images.png" alt="Bootstrap" width="30" height="30">
            </picture>
        </nav>
    </header>

    <section id="app-register">
        <div class="wrapper">
            <h3>Create an account</h3><br>

            <input type="text" class="firstname" name="firstname" placeholder="Enter your firstname" v-model="input.firstname">
            <br><br>

            <input type="text" class="surname" name="surname" placeholder="Enter your surname" v-model="input.surname">
            <br><br>

            <input type="email" class="email" name="email" placeholder="Email or phone number" v-model="input.email">
            <br><br>

            <input type="password" class="password" name="pw" placeholder="Password" maxLength="8"
                v-model="input.password"><br><br>

            <input type="password" class="password" id="pw" name="pw" placeholder="Confirm password"
                v-model="input.confirmpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required maxLength="8"><br><br>


            <div class="btn">
                <!--When the user clicks the sign up button, they should be directed to the sign in webpage-->
                <button class="btn-primary" type="submit" value="Submit" v-on:click="register()">Register</button>
                <br><br>
            </div>
            <p>By signing in or creating an account, you agree with our <a href="Terms & conditions">Terms &
                    conditions</a> and <a href="Privacy statement">Privacy statement</a></p>
            </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>

    <script src="../js/register.js"></script>
</body>

</html>