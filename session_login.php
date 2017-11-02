
<?php

session_start();

function createAdminWindow() {
     
}

function showLoginWindow($status) 
{
             //Login-fenster:
      if($status == 1) {
        echo "Benutzername/Passwort falsch.";
        } 
      $Vdata = file_get_contents("login.html");  
      echo $Vdata;
      

}

//>>>>
if(!isset($_SESSION['username']) && empty($_POST))
{
  showLoginWindow(0);      
}

if(!isset($_SESSION['username']) && !empty($_POST)) 
{
$name = $_POST['name'];
$pwd = $_POST['pwd'];
  //bekomme POST von HTML Login fenster
  $table = "t_user";
  $verbindung = mysqli_connect("localhost", "root", "", "adWords");

  //suche benutzer und passendes passwort
  $sql = "SELECT pwd FROM $table WHERE user='$name'";
  $rows = mysqli_query($verbindung, $sql);


if($rows > 0) 
{
  //benutzer gefunden
  $db_pwd = mysql_fetch_assoc($rows);
  
  /*
  $verschluesselung = hash('sha256', $pwd);
  */
  
  // geheim: addb0f5e7826c857d7376d1bd9bc33c0c544790a2eac96144a8af22b1298c940

  //passwort verschluesseln und mit passwort in db vergleichen
  if(hash('sha256', $pwd) == $db_pwd['pwd']) {
        //anmeldung erfolgreich
        $_SESSION['username'] = $name;
        echo "Hallo $name";
//        createAdminWindow();
  }
  else
  {
      showLoginWindow(1);

  }
  
  if(isset($_SESSION['username'])) {
 //       createAdminWindow();
      $name = $_SESSION['username'];
       echo "Willkommen zur&uuml;ck $name";
  }
}
else
{
     showLoginWindow(1);
}
}
?>
