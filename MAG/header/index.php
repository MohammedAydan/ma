<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<style>
<?php include "h.css"; ?>
</style>
<center>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="header2">
  <div class="container-fluid">
    <a class="navbar-brand" href="../account/"><img src="../img/<?php echo $_SESSION['img'];?>" id="img_users" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="btn btn-outline-primary" id="ht" aria-current="page" href="../home/">Home</a>
        <!-- <button type="button" class="btn btn-success position-relative" id="ht"> -->
        <a class="btn btn-outline-success position-relative" id="ht" aria-current="page" href="../msg/">
        Message
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">New alerts</span>
  </span>
  </a>
        <!-- <a class="nav-link" href="#">Pricing</a> -->
      </div>
    </div>
  </div>
</nav>
</center>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
