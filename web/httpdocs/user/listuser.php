<title>MANOCAMERA</title>
<?php include '../lockpage.php'; ?>
<div id="wrapper">
    <?php include('../menu.php'); ?>
    <div class="container-fluid" >

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="showrent.php">ข้อมูลลูกค้า</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
<!--                    <li class="nav-item active">
                        <a class="nava-link" href="showrent2.php">รายการผ่านการตรวจสอบ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showrent5.php">รายการที่รับเครื่องแล้ว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showrent3.php">รายการเช่าสำเร็จ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showrent4.php">ยกเลิกรายการเช่า</a>
                    </li>-->
                </ul>
            </div>
        </nav>
        <?php 
    require '../index.php';
    $q = 'select * from users ';
    $result = mysqli_query($con,$q);
    mysqli_set_charset($con, "utf8");
    ?>
<table border="1" class="table table-striped table-bordered table-hover" >
            <tr>
                
                <th>ลำดับที่</th>
                <th>Username</th>
                <th style="width: 90px">รายละเอียด</th>
                
                
                
            </tr>
            <?php 
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
                
            <tr>
                
                <td><?php echo ($row['Id']) ;?></td>
                <td ><?php echo $row['username'] ;?></td>
                
                <td style="width: 50px"><center><a class="btn btn-secondary " href="showDetail.php?Id=<?php echo ($row['Id']) ;?>" role="button">รายละเอียด</a></center></td>
                
                
                
            </tr>
            <?php
                }
                    mysqli_free_result($result);
                    musqli_close($con)
            ?>
        </table>

    </div>
</div>
</body>
</html>
