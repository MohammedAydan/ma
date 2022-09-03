
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MA Sign Up</title>
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
            /* margin-bottom: 10px; */
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
    <?php if($_GET['erroremail']){?>
    <div class="form-control" id="all">
        <?php echo $_GET['erroremail']; ?>
    </div>
    <?php } ?>
    <form action="./up.php" method="post" enctype="multipart/form-data">
        <div class="form-control" id="all">
            <div class="mb-3">
                <label for="formFileSm" class="form-label">select image</label>
                <input class="form-control form-control-lg" name="img" id="in1" id="formFileLg" type="file" required>
            </div>
            <button type="submit" class="btn btn-primary">upluod</button>
        </div>
    </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>