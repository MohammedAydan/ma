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
            height: 300px;

        }
        #msg{
            max-width: 400px; 
            min-width: 300px; 
            margin-top: 30px;
            box-shadow: 0px 1px 2px 3px rgba(0.1, 0.1, 0.1, 0.1);
            /* margin-left:50px;
            margin-right:50px; */
            border-radius: 15px;
    

        }


        #img{
            width:220px;
            margin-top:10px;
        }
        h3{
            font-weight: 900;
            color:royalblue;
            margin-top:120px;
        }
        input{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        #btn{
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
        #h2{
            font-weight: bold;
            text-align: center;
            line-height: 60px;
            color: royalblue;
            /* margin-right: 60px; */
            /* text-align: center; */
        }
        #msg_text{
            margin-top: 10px;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <header id="header">
    <center>
        <!-- <h1>M-A Group</h1> -->
        <img src="../img/lmag.png" id="img" alt="">
    </center>
    </header>
    <?php include "../header/index.php" ?>
    <center>
         

        <?php
        $au = $_SESSION['au'];
        if($au==="admin"){
            ?>
                <form action="../back-end/msg-back-end.php" method="post">
                    <div class="form-control" id="msg">
                    <h2 id="h2">Msg User</h2>
                        <select class="form-select" aria-label="Default select example" name="email">
                        <option selected>-- Select User --</option>
                        <?php
                                $get_news_sql = "SELECT * FROM `apps` ORDER BY name";
                                $get_news_sql = mysqli_query($conn, $get_news_sql);
                                while ($row = mysqli_fetch_array($get_news_sql)) {
                                    $email_users = $row['email'];
                                    ?>
                                        <option value="<?php echo $email_users ?>"><?php echo $email_users ?></option>
                                    <?php
                                    }
                                    ?>
                        </select>
                        <div class="form-floating" id="msg_text">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="msg"></textarea>
                            <label for="floatingTextarea">Msg</label>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btn">Send Msg</button>
                    </div>
                </form>
            <?php
        }
        ?>
        <div class="form-control" id="all">
            <h3>WELCOME TO HOME PAGE</h3>

        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
  }
  ?>
  
