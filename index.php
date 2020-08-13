
<?php

include_once 'header.php';

?>


<style type="text/css">
::-webkit-input-placeholder { /* Edge */
  color: red;
}

:-ms-input-placeholder { /* Internet Explorer */
  color: red;
}

::placeholder {
  color: red;
}
</style>



<div class="container">


<div class="row">

   <div class="col col-sm-6">
    <center>
      <img src="images/analisa.svg" width="300" height="300" class="img">
    </center>
  </div>
  <div class="col col-sm-6" style="padding-left: 7%;padding-right: 7%">
    <form method="POST">
       <input class="form-control" type="text" autocomplete="off" required="required" autofocus="autofocus" name="username" placeholder="Masukan Username Anda" style="width: 100%;margin-bottom: 20px;margin-top: 25%;background-color: #eeeeee">

        <input class="form-control" type="password" name="password" required="required" placeholder="Masukan Password Anda" style="width: 100%;margin-bottom: 20px;background-color: #eeeeee">
      <button class="btn" style="background-color: #00BFA6;color: #FFF;float: right;width: 50%">LOGIN</button>
    </form>
  </div>
 
  
</div>

  <center>
  <blockquote class="blockquote text-center" style="margin-top: 5%">
  <p class="mb-0">Analisa Penjulan Online</p>
  <footer class="blockquote-footer">Setiabudhi Supermarket &copy  <cite title="Source Title">2020</cite></footer>
</blockquote>
  </center>

  
</div>


<?php

if(!empty($_POST['username'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password=='setiabudhi'){
      echo header('location:home.php');
    }else{
      ?>
        <script>
          alert('username atau password Anda salah !
          ')
        </script>

      <?php
    }
}



include_once 'footer.php';

?>