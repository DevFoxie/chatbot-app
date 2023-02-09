<?php
<<<<<<< HEAD
  setcookie("user", "pseudo", time() + (86400 * 30), "/");
=======
setcookie("user", "Guest", time() + (86400 * 30), "/");
>>>>>>> 242b788 (2nd commit)
setcookie("user", "Guest", time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CUSTOM CSS !-->
    <link rel="stylesheet" href="./css/custom.css">

    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href=./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <title>FoxBot Chat</title>



</head>

<body>

    <?php
    require_once('./assets/connexion.php');
    ?>

    <!-- CUSTOM CURSOR -->
    <div class="cursor"></div>
    <div class="cursor2"></div>

    <!-- CUSTOM CURSOR -->
    <div class="cursor"></div>
    <div class="cursor2"></div>

<<<<<<< HEAD
=======
    <!-- CUSTOM CURSOR -->
    <div class="cursor"></div>
    <div class="cursor2"></div>

>>>>>>> 242b788 (2nd commit)
    <!-- MAIN CONTAINER + LOGO -->
    <div class="container">
        <div class="logo">
            <img src="./img/FULL-STACK DEV.png" id="logo">
        </div>

        <div class="box">
            <h1>DevFoxie's ChatBot</h1>
        </div>
    </div>

    <!-- CHATBOT INTERFACE -->
    <div class="container-chatbot">
        <div class="box2">
            <section class="chat">

                <div class="messages">
                    <div class="message">
                        <span class="date">23:22</span>
                        <span class="user">Hakim M.</span>
                        <span class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, ullam!</span>
                    </div>

                </div>

                <div class="user-inputs">
                    <form action="./assets/handler.php?task=write" method="POST">
                        <input type="text" name="user" id="user" placeholder="Pseudo ?" value="<?php echo $_COOKIE['user']; ?>">
                        <input type="text" id="content" name="content" placeholder="Your message">
                        <button type="submit">Envoyer</button>
                        <br>
                        <a href="login.php">Sign up</a>
                    </form>
                </div>

            </section>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="box3">
            <h1>Thanks for using my chatbot!</h1>
            <p>Other projects</p>
            <a href="https://github.com/DevFoxie"><i class="fa-brands fa-github fa-2xl"></i></a>
            <a href="https://www.linkedin.com/in/hakim-merniz-34367b185/"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
        </div>

    </div>

    <!--BACK TO TOP BUTTON-->

    <div id="back-to-top">
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
    </div>

    <!--FONTAWESOME SCRIPT-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--JS SCRIPT-->
    <script src="./js/main.js"></script>
    <script src="./js/back-to-top.js"></script>
    <script src="./js/custom-cursor.js"></script>
</body>

</html>