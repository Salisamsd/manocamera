<title>MANOCAMERA</title>
<?php include '../lockpage.php'; ?>
<div id="wrapper">
    <?php include('../menu.php'); ?>
    <div class="container-fluid" >

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="showrent.php">รายการรอการตรวจสอบ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="showrent2.php">รายการผ่านการตรวจสอบ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showrent5.php">รายการที่รับเครื่องแล้ว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showrent3.php">รายการเช่าสำเร็จ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showrent4.php">ยกเลิกรายการเช่า</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--        <h3 align="left"> รายการเช่าที่รอการตรวจสอบ</h3>
                <a class="btn btn-info " href="showrent.php" role="button">รายการรอการตรวจสอบ</a>
                <a class="btn btn-info " href="showrent2.php" role="button">รายการผ่านการตรวจสอบ</a>
                <a class="btn btn-info " href="showrent5.php" role="button">รายการที่รับเครื่องแล้ว</a>
                <a class="btn btn-info " href="showrent3.php" role="button">รายการเช่าสำเร็จ</a>
                <a class="btn btn-info " href="showrent4.php" role="button">ยกเลิกรายการเช่า</a>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" >
                    <button class="btn btn-secondary my-2 my-sm-0" role="input" type="submit">Search</button>
                </form>
        
        
        -->
        <?php include('rent1.php'); ?>
    </div>
</div>
</body>
</html>
