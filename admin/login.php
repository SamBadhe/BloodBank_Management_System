    <?php
    require('config.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['M_name'])) {
        $M_name = stripslashes($_REQUEST['M_name']);    // removes backslashes
        $M_name = mysqli_real_escape_string($con, $M_name);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `bbmanager` WHERE M_name='$M_name'
                    AND password='" . $password . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows >= 1) {
            $_SESSION['M_name'] = $M_name;
            // Redirect to user dashboard page
            header("Location: admindashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect M_name/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <!-- favicon -->
        <link href="/favicons/favicon.ico" rel="icon" type="image/x-icon" />
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/miniproject_dbms/css/login.css">
        <!-- font awesome script -->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    </head>

    <body>

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand" href="">Blood bank management</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse nav_elements" id="navbarTogglerDemo02">

                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">About</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <div class="row login">
            <div class="col col-lg-6">
                <form class="form" method="post" name="login">
                    <h1 class="login-title">Manager Login</h1>
                    <input type="text" class="login-input" name="M_name" placeholder="M_name" autofocus="true" />
                    <input type="password" class="login-input" name="password" placeholder="Password" />
                    <input type="submit" value="Login" name="submit" class="btn btn-dark btn-lg login-button" />
                    <p class="link"><a href="register.php">New Registration</a></p>
                </form>
            </div>

            <div class="col col-lg-6">
                <img class="blood3 rounded float-start" src="/miniproject_dbms/images/blood3.jpg" alt="">
            </div>
        </div>
  

    </body>

    </html>