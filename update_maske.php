

<body>           
<form method="POST" action="addAdword.php" >
                      
<?php
session_start();
$table = "t_customer";
$verbindung = mysqli_connect("localhost", "root", "", "adWords");

    //sql-Abfrage,Verbindung zur Datenbank aufbauen

$sql_name = "SELECT name, text,e_Mail,pic_link FROM $table WHERE id = 1";//   {$_SESSION['id_customer']}";
$result = mysqli_query($verbindung,$sql_name);
if($result != "") 
{   //Wenn der Eintrag in der Datenbank gefunden wird
    $row = mysqli_fetch_assoc($result);?>
    
        Firma :<input type="text" name='updateName' value="<?php echo $row['name'] ?>">
                   <input type="image" style="width :10%;float:right; "  name="logo" src="<?php echo $row['pic_link'] ?>" /><br />
                  <textarea rows="4" cols="50"><?php echo $row['text'] ?></textarea><br />
                  <input type='mail' name='updateEmail' value='<?php echo $row['e_Mail'] ?>' ><br />
                  <input type='text' name='updatePic_link' value='<?php echo $row['pic_link'] ?>' ><br /><br /><br />
                  
                
    
<?php }
else{ ?>
    <input type='text' name='updateName'><br />
    <textarea></textarea><br />";
    <input type='mail' name='updateEmail'><br />
    <input type='text' name='updatePic_link'><br />
 
<?php 
}
$table = "t_customer_adwords";
$sql="SELECT adWord,price FROM $table where id_customer = 1";
$result = mysqli_query($verbindung,$sql);
if($result != "" ){?>
   <table border="1">
    <th>Adwords: </th>
   <?php $i=0;
         while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                echo "<tr><td>".$i."</td><td>".$row['adWord']."</td><td><input type='text' name='preis_".$row['adWord']."' value='".$row['price']."' ></td><td><input type='submit' name='adworduse' value='speichern' /> </td></tr>";
          }      
}
echo "<input type='submit' name='adWordAnlegen' value='neues Adwort anlegen' />";
?> 

</ table><br />
</form>
</body>  