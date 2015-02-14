<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>Search Results</title>
   <style type = "text/css">
         body  { font-family: sans-serif;} 
         table { background-color: lightblue; 
                 border-collapse: collapse; 
                 border: 1px solid gray; }
         td    { padding: 5px; 
                border: 1px solid gray}
         tr:nth-child(odd) {
                 background-color: white; }
      </style>
   </head>
    <body>
    <?php
        $user="audiblep_admin";
        $host="localhost";
        $password="Triple7842";
        $database="audiblep_urls";
        $table="urls";
        $url = $_POST["url"];
        
        $description = $_POST["description"];
        $update = $_POST["update"];
        $search = $_POST["search"];
        $query = "INSERT INTO urls VALUES ( '$url', '$description' );";
        $query2 = "SELECT * FROM urls";        

        //Connect to MySQL
        mysql_connect("$host", "$user", "$password") or die(mysql_error());

        // open urls database
        mysql_select_db($database) or die(mysql_error());

        // insert into 
        if ( !( $result = mysql_query( $query ) ) ) 
        {
            print( "<p>Could not execute query!</p>" );
            die( mysql_error() . "</body></html>" );
        } // end if
        else
            print("<center>Insert successful!</center>");
        

    mysql_close( $database );
    ?><!-- end PHP script --> 
    <div><center><a href="../mysqlDatabase.html"><button>Back</button></a></center>
   </div>
</body>
</html>