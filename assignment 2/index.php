<?php
  $browser = $HTTP_USER_AGENT;
  $ip = $REMOTE_ADDR;
  $db = mysql_connect("webstat", "webstat1");
  mysql_select_db("webstat", $db);
  $sql = "INSERT INTO stats(ip,browser,ondate)
      VALUES('$ip', '$browser', now())";
  $results = mysql_query($sql);
?>
<html>
  <head>
    <title>Hello World!</title>
  </head>
  <body>
    <h1>Hello World!</h1>
    <p>This is the home page of the "Hello World!" website.</p>
  </body>
</html>