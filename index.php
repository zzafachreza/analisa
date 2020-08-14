
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



<body style="background-color: #edf4f2">
  <div class="container">


<div class="row">

   <div class="col col-sm-6">
    <center>
      <img src="images/analisa.svg" width="300" height="300" class="img">
    </center>
  </div>
  <div class="col col-sm-6" style="padding-left: 7%;padding-right: 7%;padding-top: 10%">
    <form id="dataForm" >
     
        

       <div class="" style="margin-bottom: 5%">
         <div style="display: flex;position: relative;">
          <i class="fa fa-user" style="position: absolute;top: 25%;left: 3%;color: grey"></i>
             <input class="form-control" type="text" autocomplete="off" required="required" autofocus="autofocus" name="username" placeholder="Masukan Username Anda" style="width: 100%;background-color: #eeeeee;border-radius: 20px;border-color: #393e46;font-size: small;padding-left: 10%">
         </div>
       </div>

       <div class="" style="margin-bottom: 5%">
         <div style="display: flex;position: relative;">
        <i class="fa fa-key" style="position: absolute;top: 25%;left: 3%;color: grey"></i>
        <input class="form-control" type="password" name="password" required="required" placeholder="Masukan Password Anda" style="width: 100%;background-color: #eeeeee;border-radius: 20px;border-color: #393e46;font-size: small;padding-left: 10%">
        </div>
         
      </div>
   
      <button class="btnLoading btn col-lg-6 col-sm-12" style="background-color: #00BFA6;opacity: 0.8;color: #FFF;float: right;border-radius: 20px">

     <i class="fa fa-sign-in"></i> LOGIN  </button>
     <p class="textError" style="display:none;font-size: x-small;text-align: center;color:#e84a5f;font-weight: bold;font-family:arial">&nbsp;username atau password salah</p>
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
</body>



<?php

include_once 'footer.php';

?>

<script type="text/javascript">
  $("#dataForm").submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
      $.ajax({
        url:'./api/validation.php',
        type:'POST',
        data : data,
        success : function(data){
          if (data==404) {
            setTimeout(function(){
              console.log('salah');
              $(".form-control").css('border-color','#e2979c');
              $(".textError").show();
            },2000)
          }else if(data==200){
            setTimeout(function(){
              location.href='home.php';
            },2000)
          }else{
           setTimeout(function(){
              console.log('error')
            },2000)
          }
        }
      })
  });
</script>
