<?php 
    session_start();
    if (isset($_SESSION['user_id'])) {
        header('location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="assets/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="assets/css/all.min.css" rel="stylesheet" media="all">
    <link href="assets/css/hii.css" rel="stylesheet" media="all">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-image: url('img1.jpg'); /* Add the path to your background image */

        }

        .twt-main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        .twt-login {
            margin-top: -120px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9); /* Add a semi-transparent white background */
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }

        .signin-btn,
        .signup-btn {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .signin-btn:hover,
        .signup-btn:hover {
            background-color: #45a049;
        }
    
        .form-control{
             height:50px;

        }
    </style>
</head>
<body>
<h1>Metabook</h1>
    <main class="twt-main">
        <section class="twt-login">
        <form action="handleSignUp.php" method="post">
            <?php  if (isset($_SESSION['errors_signup'] )) { ?>
            <script>  
                $(document).ready(function(){
                    // Open modal on page load
                    $("#exampleModalCenter").modal('show');
                });
            </script>
            <?php foreach ($_SESSION['errors_signup'] as $error) { ?>
                <div  class="alert alert-danger" role="alert">
                    <p style="font-size: 15px;" class="text-center"> <?php echo $error ; ?> 
                </div>  
            <?php }  }
                unset($_SESSION['errors_signup']) ?> </p>  
            <div class="form-group">
                <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name"><br><br>
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username"><br><br>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address"><br><br>
            </div>
            <div class="form-group">  
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br><br>
            </div>
            <div class="text-center">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
            </div>  
            </form>    
        </section>
    </main>
</body>
</html>
