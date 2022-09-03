<?php
session_start();
if(isset($_SESSION['email'])){
  header("location: ../home/");
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="../img/ma.png">
    <style>
        body{
            background-color:#f0f2f5;
        }
        input{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        h1{
            font-weight: bold;
            text-align: center;
            line-height: 60px;
            color: royalblue;
            /* float: left;
            margin-right: 20px; */
            font-family:;
        }
        h2{
            font-weight: bold;
            text-align: center;
            line-height: 60px;
            color: royalblue;
            /* margin-right: 60px; */
            /* text-align: center; */
        }
        header{
            width: 100%;
            height: 80px;
            background-color: #fff;
            box-shadow: 0px 0px 2px 3px rgba(0.1, 0.1, 0.1, 0.1);
        }
        .sp{
            width: 100%;
            height: 2px;
            background-color: royalblue;
        }
        #dn{
            margin-top:10px;
        }
        #all{
            max-width: 400px; 
            min-width: 300px; 
            margin-top: 30px;
            box-shadow: 0px 1px 2px 3px rgba(0.1, 0.1, 0.1, 0.1);
            /* margin-left:50px;
            margin-right:50px; */
            border-radius: 15px;

        }
        .btn{
            width: 100%;
            padding:10px;
            border-radius: 7px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight: 700;
        }
        #in1{
            width: 100%;
            padding:10px;
            border-radius: 7px;
        }
        img{
            width:220px;
            margin-top:10px;
        }
        #fp{
            text-align:left;
             float: left;
            
        }
    </style>
</head>
<body>
    <header>
    <center>
        <!-- <h1>M-A Group</h1> -->
        <img src="../img/lmag.png" alt="">
    </center>
    </header>
    <!-- <div class="sp"></div> -->
    <center>
    <?php if($_GET['error']){?>
    <div class="form-control" id="all">
        <?php echo $_GET['error']; ?>
    </div>
    <?php } ?>
    <form action="../back-end/login-back-end.php" method="post">
        <div class="form-control" id="all">
        <h2>Sign In</h2>
            <input type="text" id="in1" class="form-control" name="email" placeholder="email">
            <input type="text" id="in1" class="form-control" name="password" placeholder="password">
            <!-- <a href="#" class="text-decoration-none" id="fp">Forgotten password?</a> -->
            <button type="submit" class="btn btn-primary">sign in</button>
            <a href="../sign up/" class="text-decoration-none">Sign Up</a>
        </div>
    </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>