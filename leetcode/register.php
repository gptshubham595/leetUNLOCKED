<?php
// Checks if form has been submitted
$host = "sql200.epizy.com";
$user = "epiz_28255951";
$password = "9x2NKjOVDdVf";
$db = "epiz_28255951_leetcode";
$mysqli = new mysqli($host, $user, $password, $db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response)
    {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfbpZUaAAAAAPdGtNYKvTDBrhue3IdxkHE-KEm3',
            'response' => $user_response
        );
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res["success"]) {
        // What happens when the CAPTCHA wasn't checked
        echo '<script language="javascript">';
        echo 'alert("Failed Captcha")';
        echo '</script>';
    } else {
        //  echo '<script language="javascript">';
        // echo 'alert("Captcha")';
        // echo '</script>';
        session_start();
        if (isset($_POST['username'])) {
            //echo '<script>alert("hi1")</script>';
            $uname = $_POST['username'];
            $uname = preg_quote($uname, '/');
            $uname = htmlspecialchars($uname, ENT_QUOTES, 'UTF-8');
            $password = $_POST['password'];
            $password = preg_quote($password, '/');
            $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
            $email = $_POST['email'];
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            $email = strval($email);
            if (strlen($password) < 6 || strlen($uname) < 6) {
                echo '<script>';
                echo 'alert("MINIMUM Password LENGHT=6 and User=6!")';
                echo '</script>';
            } else {
                // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                //echo "<script>alert('hi2')</script>";
                $sql = "select * from login where username='" . $uname . "'";
                $result = mysqli_query($mysqli, $sql);
                if (mysqli_num_rows($result) == 1) {
                    //ALready
                    echo '<script>';
                    echo 'alert("You are already registered! Login Please!")';
                    echo '</script>';
                } else {
                    $ciphering = "AES-128-CTR";
                    $iv_length = openssl_cipher_iv_length($ciphering);
                    $options = 0;
                    $encryption_iv = '1234567891011121';
                    $encryption_key = "leetcode";
                    $passencryption = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);
                    //echo '<script>alert('.$passencryption.')</script>';

                    $unmaeencryption = openssl_encrypt($uname, $ciphering, $encryption_key, $options, $encryption_iv);
                    //echo '<script>alert('.$unmaeencryption.')</script>';

                    $emailencryption = openssl_encrypt($email, $ciphering, $encryption_key, $options, $encryption_iv);
                    //echo '<script>alert('.$emailencryption.')</script>';

                    $sql = "insert into login (username,password,email) values ('" . $unmaeencryption . "','" . $passencryption . "','" . $emailencryption . "')";
                    //echo '<script>alert('. $sql .')</script>';
                    if ($mysqli->query($sql) === TRUE) {
                        echo '<script language="javascript">';
                        echo 'alert("Registered! You can login Now!")';
                        echo '</script>';
                    } else {
                        echo '<script>alert("Duplicate Entry!")</script>';
                        sleep(2);
                    }
                }
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="a.validate.01" content="c7e1f68ff3ae2d6e3148e5293a1933d655c1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins");
        /* BASIC */

        .vertical-line {
            display: inline-block;
            border-left: 1px solid #ccc;
            margin: 0 5px -10px 15px;
        }

        html {
            background-color: #56baed;
        }

        body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
            background-image: url("/banner1.jpg");
            margin: 0;
        }

        a {
            color: #92badd;
            display: inline-block;
            text-decoration: none;
            font-weight: 400;
        }

        h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin: 40px 8px 10px 8px;
            color: #cccccc;
        }

        /* STRUCTURE */

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            min-height: 100%;
            padding: 20px;
        }

        #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 90%;
            max-width: 450px;
            position: relative;
            padding: 0px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
        }

        /* TABS */

        h2.inactive {
            color: #cccccc;
        }

        h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #5fbae9;
        }

        /* FORM TYPOGRAPHY*/

        input[type="button"],
        input[type="submit"],
        input[type="reset"] {
            background-color: #127da7;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        input[type="button"]:hover,
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #39ace7;
        }

        input[type="button"]:active,
        input[type="submit"]:active,
        input[type="reset"]:active {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type="text"]:placeholder,
        input[type="email"]:placeholder,
        input[type="password"]::placeholder {
            color: #cccccc;
        }

        /* ANIMATIONS */
        /* Simple CSS3 Fade-in-down Animation */

        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        /* Simple CSS3 Fade-in Animation */

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fadeIn {
            opacity: 0;
            -webkit-animation: fadeIn ease-in 1;
            -moz-animation: fadeIn ease-in 1;
            animation: fadeIn ease-in 1;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            animation-duration: 1s;
        }

        .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
        }

        /* Simple CSS3 Fade-in Animation */

        .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.2s;
        }

        .underlineHover:hover {
            color: #0d0d0d;
        }

        .underlineHover:hover:after {
            width: 100%;
        }

        /* OTHERS */

        *:focus {
            outline: none;
        }

        #icon {
            width: auto;
            height: 3rem;
        }

        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active">Sign Up</h2>
            <!-- <h2 class="inactive underlineHover">Sign Up</h2> -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="/leetcode/user-solid.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" action="/leetcode/register.php">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" />
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email" />
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" />
                <center>
                    <div class="g-recaptcha" data-sitekey="6LfbpZUaAAAAAJm20FRqoL1VRldCMxDdrhHmnJ3s"></div>
                </center>
                <input style="cursor: pointer; " type="submit" class="fadeIn fourth" value="Register" />

            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <div class="container">
                    <a class="underlineHover" href="/index.php">Login Here! </a>
                    <span class="vertical-line"></span>
                    <a class="underlineHover" href="/leetcode/forgot.php">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="float-right pull-right" style="margin:10px 10px;">
        <script type='text/javascript' src='//pl16194254.highperformancecpmnetwork.com/23/5e/06/235e0627bed425690c9d980581fcbff0.js'></script>
        <a class="float-right pull-right" href='https://www.symptoma.es/'>View Counter</a>
        <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=84146a4fa3f35ef7d012b11f6cd277f17bfcb1c3'></script>
        <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/812159/t/10"></script>
    </div><br>
</body>

</html>