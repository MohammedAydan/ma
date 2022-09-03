<?php
  session_start();
  include_once "../back-end/connect.php";
  if(!isset($_SESSION['email'])){
    header("location: ../sign in/");
  }else{
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



        header{
            width: 100%;
            height: 80px;
            background-color: #fff;
            box-shadow: 0px 0px 2px 3px rgba(0.1, 0.1, 0.1, 0.1);
        }

        #all{
            max-width: 400px; 
            min-width: 300px; 
            margin-top: 30px;
            box-shadow: 0px 1px 2px 3px rgba(0.1, 0.1, 0.1, 0.1);
            /* margin-left:50px;
            margin-right:50px; */
            border-radius: 15px;
            /* height: 300px; */

        }


        #img_icon{
            width:220px;
            margin-top:10px;
        }

        #d1{
            max-width: 600px;
            min-width: 300px;
            padding: 10px;
            /* margin: 10px; */
            margin-top: 20px;
        }
        #img_user{
            width: 150px;
        }
        h5{
            text-align: left;
            margin: 10px;
        }
        #contr{
            width: 330px;
            padding: 5px;
            margin: 10px;
        }
        #bf{
            margin-top: 9px;
        }
        #btn{
            border-radius: 7px;
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
    <center>
        <!-- <h1>M-A Group</h1> -->
        <img src="../img/lmag.png" id="img_icon" alt="">
    </center>
    </header>
    <?php include "../header/index.php" ?>
    <center>
        <div class="form-control" id="all">
        <img src="../img/<?php echo $_SESSION['img'] ?>" id="img_user" alt="">
        <h5>id :   <?php echo $_SESSION['id']; ?></h5>
        <h5>ID USER :   <?php echo $_SESSION['id_user']; ?></h5>
        <h5>Name : <?php echo $_SESSION['email']; ?></h5>
        <h5>date : <?php echo $_SESSION['date']; ?></h5>

        <!-- <div class="form-control" id="contr">
        <form action="../back-end/lc.php" method="post">
    <select onchange="co();" name="op" id="color" class="form-select m-2" aria-label="Default select example" style="width: 90px; height: 40px; float: left;">
        <option value="white">white</option>
        <option value="black">black</option>
    </select>
    <select onchange="co2();" name="op2" id="la" class="form-select m-2" aria-label="Default select example" style="width: 90px; height: 40px; float: left;">
        <option value="Englsh">Englsh</option>
        <option value="ar">العربية</option>
    </select>
    <button type="submit" class="btn btn-light" id="bf" name="send">change</button>
    </form>
        </div> -->

        <a href="../back-end/logout.php" class="btn btn-danger" id="btn">LOGOUT</a>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
  }
  ?>