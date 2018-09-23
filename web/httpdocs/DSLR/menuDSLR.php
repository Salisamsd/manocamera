
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<script type="text/javascript" src="css/jquery-3.3.1.min.js"></script>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    label{
                display: block;
            }
            
   body{
    background:#f9f9f9;
    
}
#wrapper{
    padding:40px 15px;
    
}
.navbar-expand-lg .navbar-nav.side-nav{
    flex-direction: column;
    
}
.card{
    margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); 
    
}
.header-top{
    box-shadow: 0 3px 5px rgba(0,0,0,.1);
    background:#FF6600;
    
}
@media(min-width:992px) {
#wrapper{
    margin-left: 200px;padding: 90px 15px 15px;}
.navbar-nav.side-nav{
    background: #585f66;
    box-shadow: 2px 1px 2px rgba(0,0,0,.1);
    position:fixed;top:56px;
    flex-direction: column!important;
    left:0;width:200px;
    overflow-y:auto;
    bottom:0;
    overflow-x:hidden;
    padding-bottom:40px}

}

 .icon {
width:25px;
height:30px;
 }
 
 .icon1 {
width:20px;
height:20px;
 }
</style>
<nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark ">
      <a class="navbar-brand" href="#">MANOCAMERA.com</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav">
          <li class="nav-item">
            <a class="nav-link" href="/main.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
       
          <!--<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">DSLR</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
        <a class="dropdown-item" href="listDSLR_Body.php">Body</a>
        <a class="dropdown-item" href="listDSLR_BL.php">Body+Lense</a>
        <a class="dropdown-item" href="listDSLR_L.php">Lense</a>
      <a class="dropdown-item" href="listDSLR_A.php">Accessory</a>
    </div>
  </li>-->
          <li class="nav-item">
              <a class="nav-link" href="listDSLR_Body.php">DSLR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/listMirrorless.php">MirrorLess</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/listDSLR.php">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/listAction.php">Action</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/listDSLR.php">All Accessory</a>
          </li>
          
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          
          <li class="nav-item">
              <a class="nav-link"  href="/index.html" ><img class="icon1" src="../img/IKONS/PNG/32/logout.png">LOG OUT</a>
          </li>
        </ul>
      </div>
    </nav>