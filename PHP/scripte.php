<?php
  //$verbindung = mysqli_connect("localhost", "root", "", "cbm") || die("Fehler beim Verbindungsaufbau");
  /*$verbindung = mysqli_connect("localhost", "root", "", "adWords");
  if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
  };
  if(!mysqli_set_charset($verbindung, "utf8"))
  {
    echo "Zeichensatzfehler";
    exit;
  }  
  $keyword = "bing";
  //Abfrage Sozials;
  $sql1 = 'SELECT name FROM t_kunden WHERE name = "bing"';
  $sozialabfrage = 'SELECT t_kunden.name as "Kunden Name", 
                           t_sozial.name AS "Sozial Name" 
                    FROM t_kunden, t_sozial, t_kunden_sozial_detail 
                    WHERE t_kunden.name = "Twitter Inc." AND 
                          t_kunden_sozial_detail.id_kunden = t_kunden.id AND 
                          t_kunden_sozial_detail.id_sozial = t_sozial.id';
  echo "<table>";
  $sql = "SELECT name, text FROM t_kunden";
  $rueckgabe = mysqli_query($verbindung, $sozialabfrage);
  $name = mysqli_query($verbindung, $sql1);
  echo "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
  while($datensatz = mysqli_fetch_assoc($name)){
    echo $datensatz['PETER'];
    echo " ";
    //echo $datensatz['vorname'];
    echo "<br />";
  }
  echo "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
  foreach($rueckgabe as $wert){
    echo "<tr>";
    foreach($wert as $data){
      echo "<td>$data</td>";
      
    }
    
    echo "</tr><br />";
  }
  
  close($verbindung);*/
  
  function delete_entries($id_arg, $table){
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    
    $sql = "DELETE FROM $table WHERE id = $id_arg";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    
    return $rows;
  }
  
  function create_customer($name, $text, $pic_Link, $e_Mail){
    $table = "t_customer";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    
    $sql = "INSERT INTO $table (name, text, pic_Link, e_Mail) VALUES ('$name', '$text', '$pic_Link', '$e_Mail')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    
    return $rows;
  }
  
  function create_social($name, $preLink){
    $table = "t_social";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    
    $sql = "INSERT INTO $table (name, preLink) VALUES ('$name', '$preLink')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    return $rows;
  }
  
  function create_user($name, $pwd, $permission, $id_customer){
    $table = "t_user";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    
    $sql = "INSERT INTO $table (name, pwd, permission, id_customer) VALUES ('$name', '$pwd', '$permission', '$id_customer')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    return $rows;
  }
  
  function create_adWords($id_customer, $adWord, $price, $click_count){
    $table = "t_adwords";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    
    $sql = "INSERT INTO $table (id_customer, adWord, price, click_count) VALUES ('$id_customer', '$adWord', '$price', '$click_count')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    return $rows;
  }
  
  
  
?>