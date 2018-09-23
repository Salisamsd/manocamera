<?php include '../lockpage.php';?>
<div id="wrapper">
    <?php include('menuDSLR.php');?>
    <div class="container-fluid" >
        <h3 align="left"> DSLR  
            <a class="btn btn-info " href="insertBody.php" role="button">เพิ่ม </a><br>
            <a class="btn btn-info " href="listDSLR_Body.php" role="button">Body</a>
            <a class="btn btn-info " href="listDSLR_BL.php" role="button">Body+Lense</a>
            <a class="btn btn-info " href="listDSLR_L.php" role="button">Lense</a>
            <a class="btn btn-info " href="listDSLR_A.php" role="button">Accessory</a>
        
        </h3>
        
        <?php include('dslr_body.php');?>
        
    </div>
    </div>
</body>
</html>
