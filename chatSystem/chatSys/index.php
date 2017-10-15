<?php
  session_start();
  if((!isset($_SESSION[ "username" ]) || $_SESSION[ "username" ] == "")||(!isset($_SESSION[ "colour" ]) || $_SESSION[ "colour" ] == "") || $_SESSION["password"] == "" || $_SESSION["password"] == "") {
      header("../../worker/login.php");
  }else{  ?>
<html>
  <head>
    <title>Chat Room Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     
    <script src="../worker/main.js"></script>
    <link rel="stylesheet" href="../css/main.css" />
  </head>
  <body>
    <div id="view_ajax"></div>
    <div id="ajaxForm">
      <input type="text" id="chatInput" /><input type="button" value="Send" id="btnSend" />
    </div>
  </body>
</html>
<?php }?>