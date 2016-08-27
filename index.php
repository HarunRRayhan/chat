<?php

require 'includes/core.inc.php';

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <!-- Page Title -->
    <title>PHP Chat</title>
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="public/css/main.css" />
</head>
<body>
    <div id="input">
        <div id="feebback"></div>
        <form action="#" method="post" id="form_input">
            <label>Enter Name: <input type="text" name="sender" id="sender"/></label>
            <label>Enter Message: <input type="text" name="message" id="message"/></label><br />
            <input type="submit" name="send" value="Send Message" id="send" />
        </form>
    </div>
    
    <div id="messages">
      
    </div> <!-- #Messages -->
    
    <!-- Javascripts -->
    <script type="text/javascript" src="scripts/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="scripts/js/auto_chat.js"></script>
    <script type="text/javascript" src="scripts/js/send.js"></script>
</body>
</html>

