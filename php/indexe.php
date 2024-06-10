<?php
session_start();
$error=$_SESSION['$err'];
$err1=$_SESSION['$erro'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web site of education </title>
    <link rel="stylesheet" href="http://localhost/server/project/Style/style.css">
</head>
<body>
    <header>
        <h1 id="h">Web site of Education</h1>
    </header>
    <main>
        <section id="login1">
            <form action="http://localhost/server/project/php/login.php" id="f" method="post">
                <h1 class="lo">Log in as</h1>
                 <p>a student</p>
                 <div>
                <label id="l" for=" username">  User Name:</label>
                <i class="fas fa-user" ></i>
                <input type="text" id="username" name="name1"  required>
                </div>
                <div>
                <label for=" password">  Password:</label>
                <input type="password" name="password"  id="password"  required>
                </div>
                <!-- <a target="_self" href="Student.html" type="submit" >Next</a> -->
                <button type="submit">login</button>
                <p class="p1">
                    <?php
                        echo $error;
                    ?>
                </p>
                
            </form>
        </section>
        <section id="login2">
            <form action="http://localhost/server/project/php/login_admin.php" method="post">
                <h1 class="lo">Log in as</h1>
                 <p> administrator </p>
                <label for=" username"> User Name:</label>
                <input type="text" id="username" name="name2" minlength="4" required>
                <label for=" password">  Password:</label>
                <input type="password" id="password" Minlength="4" name="password2" required>
                <!-- <a target="self" href="Admin.html" type="submit" >Next</a> -->
                <button type="submit">login</button>
                <p class="p1">
                    <?php
                        echo $err1;
                    ?>
                </p>
            </form>
       
        </section>
 
      
    </main>
    <footer>
        <h1 id="h2">Second year engineer</h1>
    </footer>
</body>
<script src="/javascript/main.js"></script>
</html>
