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
    if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
    };
    if(!mysqli_set_charset($verbindung, "utf8"))
    {
      echo "Zeichensatzfehler";
      exit;
    }
    $sql = "DELETE FROM $table WHERE id = $id_arg";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    
    return $rows;
  }
  
  /* Erstellen von Kunden
   * $name = Firmenname;
   * $text = Beschreibung;
   * $pic_Link = Firmenlogo Link
   * $e-Mail = E-Mail Adresse
   *
   * Return INT  
  */
  function create_customer($name, $text, $pic_Link, $e_Mail){
    $table = "t_customer";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
    };
    if(!mysqli_set_charset($verbindung, "utf8"))
    {
      echo "Zeichensatzfehler";
      exit;
    }
    $sql = "INSERT INTO $table (name, text, pic_Link, e_Mail) VALUES ('$name', '$text', '$pic_Link', '$e_Mail')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    
    return $rows;
  }
  
  /* Erstellen von Sozial
   * $name = Firmenname;
   * $preLink = Link;
   *
   * Return INT  
  */
  function create_social($name, $preLink){
    $table = "t_social";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
    };
    if(!mysqli_set_charset($verbindung, "utf8"))
    {
      echo "Zeichensatzfehler";
      exit;
    }
    
    $sql = "INSERT INTO $table (name, preLink) VALUES ('$name', '$preLink')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    return $rows;
  }
  
  /* Erstellen von User
   *
   * $name = Firmenname;
   * $preLink = Link;
   * $pwd = passwordhash
   * $permission = Rechte
   * $id_customer = Kunden ID   
   *
   * Return INT  
  */
  function create_user($name, $pwd, $permission, $id_customer){
    $table = "t_user";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
    };
    if(!mysqli_set_charset($verbindung, "utf8"))
    {
      echo "Zeichensatzfehler";
      exit;
    }
    
    $sql = "INSERT INTO $table (name, pwd, permission, id_customer) VALUES ('$name', '$pwd', '$permission', '$id_customer')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    return $rows;
  }  
  
  /* Kunden mit Adwords verbinden
   * $id_customer = Kunden ID
   * $adword = Wort
   * $price = Preis f&uuml;r das Wort
   * $click_count = Z&auml;hler f&uuml;r Klicks
   *
   * Return INT  
  */
  function combine_customer_adwords($id_customer, $adWord, $price, $click_count){
    
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
    };
    if(!mysqli_set_charset($verbindung, "utf8"))
    {
      echo "Zeichensatzfehler";
      exit;
    }
      
    /* Erstellen von AdWords (Unique)
     *
     * $adword = Wort  
     *
     * Return String  
    */
    function create_adword($adWord){
      $t_adword = "t_adword";
      $sql = "INSERT INTO $t_adword (adWord) VALUES ('$adWord')";
      $error = mysqli_error($verbindung);
      
      if(mysqli_query($verbindung, $sql)){
        return true;
      }else{        
        return false;
      }    
    }//END create_adword()
    $isCreated = create_adword($adWord);
    
    $table = "t_customer_adwords";
    
    $sql = "INSERT INTO $table (id_customer, adWord, price, click_count) VALUES ('$id_customer', '$adWord', '$price', '$click_count')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    
    if($rows)
    {
      return true;
    }else
    {
      return false;
    }
  }
  
  /* Kunden mit Sozials verbinden
   * $id_customer = Kunden ID
   * $id_social = Sozial ID
   *
   * Return INT  
  */
  function combine_customer_social($id_customer, $id_social){
    $table = "t_customer_social";
    $verbindung = mysqli_connect("localhost", "root", "", "adWords");
    if(mysqli_connect_errno()){ 
    echo "Fehler beim verbindungsaufbau: ".mysqli_connect_errno(); 
    exit; 
    };
    if(!mysqli_set_charset($verbindung, "utf8"))
    {
      echo "Zeichensatzfehler";
      exit;
    }
  
    $sql = "INSERT INTO $table (id_customer, id_social) VALUES ('$id_customer', '$id_social')";
    $rows = mysqli_query($verbindung, $sql);
    
    mysqli_close($verbindung);
    return $rows;
  }
  
  create_adword("Baum");
?>
