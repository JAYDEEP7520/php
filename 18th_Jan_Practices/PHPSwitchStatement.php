<?php
    $boolean = "true";
    switch($boolean) {
      case "true" : echo date("l jS \of F Y h:i:s A"); break;
      case "false" : echo "False"; break;
      default : echo "Not Match";
  }
?>