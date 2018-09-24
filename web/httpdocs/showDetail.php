<?php
    require 'index.php';
    $item_id = $_GET['item_id'];
    $qq ="select * from items where item_id='$item_id'";
    $resitem= mysqli_query($con, $qq);
    $rowitem = mysqli_fetch_array($resitem,MYSQLI_ASSOC);
?>
<?php include 'lockpage.php';?>

<style>
    .block-1 {
	width: 100px;
	height: 40px;
	margin: 20px;
	
	float: left;
}
.block-2 {
	
	margin: 20px;
	float: left;
}

</style>

<div id="wrapper">
    <?php include('menu.php');?>
     
       <div class="container-fluid" >
         <input type="button" class="block-1 btn btn-info" onClick="history.back()" value="<< BACK" /> 
     <h2 class="block-2" ><?php echo  $rowitem['item_name']; ?></h2> 

<div class="w3-row">
  <div class="w3-col s6  w3-center">
      <p><img src="../upload/<?php echo  $rowitem['image']; ?>" width="80%"</p>
  </div>
  <div class="w3-col s6">
    <b><p>MODEL : <?php echo  $rowitem['item_model']; ?></p>
    <span>DESCRIPTION : <?php echo nl2br($rowitem['item_description'])?></span>
    <p>ราคาเครื่อง :<?php echo number_format($rowitem['item_price']) ;?> บาท</p>
    <p>ราคาเช่าต่อวัน : <?php echo number_format($row['item_priceperday']) ;?> บาท</p>
    <p>วงเงินประกัน</p>
    <p>เงินประกันแบบที่1 : <?php echo number_format($rowitem['deposit_1']) ;?> บาท</p>
    <p>เงินประกันแบบที่2 : <?php echo number_format($rowitem['deposit_2']) ;?> บาท</p>
    
  </div>
</div>
           
    </div>
    </div>
