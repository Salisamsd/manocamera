<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      <div class="w3-container">
 <div class="w3-content" style="max-width:1200px">
  <img class="mySlides" src="../itempic/<?php echo  $rowitem['img1']; ?>" style="width:70%; height: 50%; display:none">
  <img class="mySlides" src="../itempic/<?php echo  $rowitem['img2']; ?>" style="width:70%;  height: 50%;" >
  

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../itempic/<?php echo  $rowitem['img1']; ?>" style="width:70%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../itempic/<?php echo  $rowitem['img2']; ?>" style="width:70%;cursor:pointer" onclick="currentDiv(2)">
    </div>
 
  </div>
</div>
</div>


      <!--<p><img src="../upload/<?php echo  $rowitem['img1']; ?>" width="80%"</p>-->
  </div>
  <div class="w3-col s6">
    <b><p>MODEL : <?php echo  $rowitem['item_model']; ?></p>
    <span>DESCRIPTION : <?php echo nl2br($rowitem['item_description'])?></span>
    <p>ราคาเครื่อง :<?php echo number_format($rowitem['item_price']) ;?> บาท</p>
     <p>ราคาเช่าต่อวัน :<?php echo number_format($rowitem['item_priceperday']) ;?> บาท</p>
    
    <p>วงเงินประกัน</p>
    <p>เงินประกันแบบที่1 : <?php echo number_format($rowitem['deposit_1']) ;?> บาท</p>
    <p>เงินประกันแบบที่2 : <?php echo number_format($rowitem['deposit_2']) ;?> บาท</p>
    
  </div>
</div>
           
    </div>
    </div>
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>