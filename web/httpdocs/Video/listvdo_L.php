<?php include '../lockpage.php';?>
<div id="wrapper">
    <?php include('../menu.php');?>
    <div class="container-fluid" >
        <h3 align="left">  Lense Video</h3>
            <a class="btn btn-info " href="listvdo_B.php" role="button">Body</a>
            <a class="btn btn-info " href="listvdo_BL.php" role="button">Body+Lense</a>
            <a class="btn btn-info " href="listvdo_L.php" role="button">Lense</a>
            <a class="btn btn-info " href="listvdo_A.php" role="button">Accessory</a>
            <a class="btn btn-danger " style='float:right;' href="insertvdo_L.php" role="button" >เพิ่ม </a>
        
        <?php include('vdo_L.php');?>
        
    </div>
    </div>
</body>
</html>
