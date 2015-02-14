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
        tr:nth-child(odd) {background-color: white; }
      </style>
   </head>
    <body>
    <?php
        $user="audiblep_admin";
        $host="localhost";
        $password="Triple7842";
        $database="audiblep_urls";
        $table="urls";
        $search = $_POST["search"];
        
        if ($search == "*")
            $query = "SELECT * FROM urls";
        else
            $query = "SELECT * FROM urls WHERE url LIKE '%$search%' OR description LIKE '%$search%' ORDER BY url ASC";
        
        //Connect to MySQL
        mysql_connect("$host", "$user", "$password") or die(mysql_error());

        // open urls database
        mysql_select_db($database) or die(mysql_error());

        // select query
        if ( !( $result = mysql_query( $query ) ) ) 
        {
            print( "<p>Could not execute query!</p>" );
            die( mysql_error() . "</body></html>" );
        } // end if

    mysql_close( $database );
    ?><!-- end PHP script -->
    <div id="table">
    <table>
        <?php
            // fetch each record in result set
            while ( $row = mysql_fetch_row( $result ) )
            {
                // build table to display results
                print( "<tr>" );
        
                foreach ( $row as $value ) 
                print( "<td>$value</td>" );
        
                print( "</tr>" );
            } // end while
        ?><!-- end PHP script -->
    </table>
    </div>
    <div><a href="../mysqlDatabase.html"><button>Back</button></a>
    </div>
   </body>
</html>