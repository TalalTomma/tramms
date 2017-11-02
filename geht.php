<?php
  session_start();
  
  if(isset($_SESSION['username']))
  {
  
    $name = $_SESSION['username'];
    $permission = $_SESSION['permission'];
    
    if($permission == "admin")
    {
      echo "Willkommen ADMIN {$_SESSION['username']}<br >";
    }else if($permission == "editor")
    {
      echo "Willkommen EDITOR {$_SESSION['username']}<br >";
    }
  }
?>