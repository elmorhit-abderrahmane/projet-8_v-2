<html>
   <head>
      <title>Selecting MySQL Database</title>
   </head>
   
   <body>
      <?php
         $dbhost = 'localhost:8888';
         $dbuser = 'guest';
         $dbpass = 'guest123';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_select_db( 'TUTORIALS' );
         
         mysql_close($conn);
      ?>
   </body>
</html>
