<title>MANOCAMERA</title>
<?php include '../lockpage.php'; ?>
<div id="wrapper">
    <?php include('../menu.php'); ?>
    <div class="container-fluid" >
        <h3 align="left"> รายการเช่าที่ผ่านการตรวจสอบ</h3>
        <a class="btn btn-info " href="showrent.php" role="button">รายการรอการตรวจสอบ</a>
        <a class="btn btn-info " href="showrent2.php" role="button">รายการผ่านการตรวจสอบ</a>
        <a class="btn btn-info " href="showrent5.php" role="button">รายการที่รับเครื่องแล้ว</a>
        <a class="btn btn-info " href="showrent3.php" role="button">รายการเช่าสำเร็จ</a>
        <a class="btn btn-info " href="showrent4.php" role="button">ยกเลิกรายการเช่า</a>

        <?php include('rent2.php'); ?>

    </div>
</div>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

