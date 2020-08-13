
<?php

include_once 'header.php';

?>
<style>

.box {
  transition: width 2s;
  overflow: hidden;
}

.box img {
    transition-property: transform;
    transition-duration: 1s;
}


.box .title {
    transition-property: transform,background-color;
    transition-duration: 1s;
}


.box:hover{
    background-color: #f8f4f4;
}

.box:hover{
    cursor: pointer;
    background-color: #f8f4f4;
}

.box:hover img{
    transform : scale(2,2);
}

.box:hover .title{
    transform: translate(50%);
    background-color:#2C3E50;
    color: #FFF;

}

.title{
    font-size: medium;
    padding: 2%;
    text-align: left;
    font-weight: bold;
    font-family: fantasy;
    position: relative;
}

</style>
</style>

<div class="container-fluid" style="padding: 2%;">
    <div class="row" style="margin-top: 2%;">
        <div class="col col-sm-12">
         <center>
            <img src="images/analisa.svg" width="300" />
         </center>
        </div>
        <div class="col-sm-3 box" style="height:180px;border-radius: 10px;border: 1px solid #f8f4f4;box-shadow: 0px 0px 1px 1px #cccccc;padding-top: 2%;margin-left: 5%;">
           <center>
            <img src="images/product.svg" width="150" />
           </center>
           <p class="title">Analisa per product</p>
        </div>  

        <div class="col-sm-3 box" style="height:180px;border-radius: 10px;border: 1px solid #f8f4f4;box-shadow: 0px 0px 1px 1px #cccccc;padding-top: 2%;margin-left: 5%;">
            <center>
             <img src="images/bulan.svg" width="150" />
             <p class="title">Analisa per Transaksi</p>

            </center>
         </div>  

         <div class="col-sm-3 box" style="height:180px;border-radius: 10px;border: 1px solid #f8f4f4;box-shadow: 0px 0px 1px 1px #cccccc;padding-top: 2%;margin-left: 5%;">
            <center>
             <img src="images/user.svg" width="150" />
             <p class="title">Analisa per user</p>

            </center>
         </div>  

        <div class="col col-sm-12">
            <center>
                <blockquote class="blockquote text-center" style="margin-top: 5%">
                    <p class="mb-0">Analisa Penjulan Online</p>
                    <footer class="blockquote-footer">Setiabudhi Supermarket &copy  <cite title="Source Title">2020</cite></footer>
                  </blockquote>
            </center> 
        </div>

         
    </div>
</div>

<?php

include_once 'footer.php';

?>