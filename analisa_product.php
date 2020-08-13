
<?php

include_once 'header.php';

?>


<div class="container-fluid">
<form method="GET" id="dataFrom" name="dataFrom">
<div id="pencarian">
	<table class="table">
	<tr>
		<td width="60%"><strong>Sales Analisys</strong></td>

		<td><strong>From</strong></td>

		<td><input type="text" name="awal" class="form-control tgl" value="<?php echo !empty($_GET['awal'])?$_GET['awal']:date('Y-m-d') ?>">
		</td>
		<td><strong>To</strong></td>
		<td>

			<input type="text" name="akhir" class="form-control tgl" value="<?php echo !empty($_GET['akhir'])?$_GET['akhir']:date('Y-m-d') ?>">
		</td>
		<td>
			<button class="btn btn-primary" type="SUBMIT" name="cari" value="cari">PROCCESS</button>
		</td>
	</tr>
</table>
</div>
</form>
<div style="background-color: #FFF;padding:1%;font-size: small">

	<table id="example" style="width:100%" class="stripe row-border order-column">
        <thead>
            <tr>
                <th>invoice</th>
                <th>tanggal</th>
                <th>bisnis_unit</th>
                <th>customer</th>
                <th>sku</th>
                <th>nama</th>
                <th>UOM</th>
                <th>komisi</th>
                <th>supid</th>
                <th>nama_supplier</th>
                <th>qty</th>
                <th>Harga</th>
                <th>QtyKaliHarga</th>
                <th>Discount</th>
                <th>Total</th>
                <th>PPN</th>
                <th>Netto</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
              for ($i=1; $i <= 20 ; $i++) { 
                # code...

                ?>

               <tr>
                <td>INV-202015-<?php echo $i ?></td>
                <td>tanggal</td>
                <td><?php echo $i ?>bisnis_unit</td>
                <td><?php echo $i ?>customer</td>
                <td><?php echo $i ?>sku</td>
                <td><?php echo $i ?>nama asdas asd as asdas dasd as d</td>
                <td><?php echo $i ?>UOM</td>
                <td><?php echo $i ?>komisi</td>
                <td><?php echo $i ?>supid</td>
                <td><?php echo $i ?>nama_supplier</td>
                <td><?php echo $i ?>qty</td>
                <td><?php echo $i ?>Harga</td>
                <td><?php echo $i ?>QtyKaliHarga</td>
                <td><?php echo $i ?>Discount</td>
                <td><?php echo $i ?>Total</td>
                <td><?php echo $i ?>PPN</td>
                <td><?php echo $i ?>Netto</td>
            </tr>

            <?php  }

            ?>

        
           </tbody>
</table>
</div>

<?php

include_once 'footer.php';

?>