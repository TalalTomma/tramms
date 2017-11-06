<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body >
<?php session_start();?>
<form method="POST" action="./PHP/login.php">
  <?php if(!isset($_SESSION['username'])){ ?><input type="submit" value="login" class="waves-effect waves-light btn light-blue lighten-1" name="login" style="float:right;margin-right:20px;border-radius:25px;"></a><?php }?>
</form>
<form method="POST" action="./PHP/logout.php">
  <?php if(isset($_SESSION['username'])){ ?><input type="submit" value="logout" class="waves-effect waves-light btn red lighten-1" name="logout" style="float:right;margin-right:20px;border-radius:25px;"></a><?php }?>
</form>
<div style="width:50%;margin:auto;margin-top:50px;">

    <div class="row">
        <center><div style=" margin: 50px; ">
            <img src="./src/logo1.png" style="width:40%"/>
        </div></center>
    </div>
    <div class="row">
        <form method="post" action="./PHP/gesucht.php" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input  type="text" name="searchtext" class="validate" style="font-size: 28px;">
                    <label  >suchen</label>
                </div>
            </div>
            <center><input type="submit" name="search" value="suchen" class="waves-effect waves-light btn light-blue lighten-2"
                           style="margin:auto;border-radius:30px;width:250px;margin: 10px;margin-left:45px;"></center>
        </form>
    </div>


</div>

<script>


</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
