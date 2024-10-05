<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>GYM</title>
</head>

<body>
    <div class="wrapper">
        <div class="hero-img1"></div>
        <nav>
            <div class="first">
                <img src="./assets/logo.png" alt="logo" class="logo">
                <div class="nav-links">
                    <ul>
                        <li><a href="#" class="links">Home</a></li>
                        <li><a href="#" class="links">Course</a></li>
                        <li><a href="#" class="links">Pricing</a></li>
                        <li><a href="#" class="links">Contact</a></li>
                        <li><a href="about.php" class="links">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="signup">
                <ul>
                    <li><a href="#" class="log">Log in</a></li>

                </ul>
            </div>
        </nav>

        <section class="hero">
            <h1 id="he1">FREESTYLE GROUP TRAININGS</h1>
            <p>Start your journey with our exciting offers</p>
            <a href="#" class="get">Get Started</a>
            <button class="button" type="button">
                <span class="button-text">Find Out More</span>
            </button>

            <form action="login_prs.php" method='post'>
                <div class="login-form">
                    <h1>Admin Login</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username" name="usr" required>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" name="pass" required>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>
        </section>

        <!-- register form start -->

        <!-- register form stop -->
    </div>

    <script src="script.js"></script>
</body>

</html>