
                 
<form method="POST" action="add_customer.php" >
                        
<?php
#$_POST['id']
$id=5;

$table = "t_customer";
$verbindung = mysqli_connect("localhost", "root", "", "adWords");

$sql_name="SELECT name, text,e_Mail,pic_link from $table where id=$id";
$result=mysqli_query($verbindung,$sql_name);
if($result !="")
{
    $row = mysqli_fetch_assoc($result);
    
    echo"<input type='text' name='neu_name' value='' ><br />";
    echo"<textarea>".$row['text']."</textarea><br />";
    echo"<input type='mail' name='neu_email' value=".$row['pic_link']." ><br />";
    echo"<input type='text' name='range_pay' value=".$row['e_Mail']." ><br />";
    
    echo"<input type='submit' name='neu_senden' />";
    
    
}

      
    
    
?>
</form>
