<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>Search Results</title>
   <style type = "text/css">
        body  { font-family: sans-serif;} 
        table { margin-left:auto;
                margin-right:auto;
                width:600px;
                background-color: lightblue; 
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
        $query = "SELECT * FROM urls";       

        //Connect to MySQL
        mysql_connect("$host", "$user", "$password") or die(mysql_error());

        // open urls database
        mysql_select_db($database) or die(mysql_error());
        
        // select all from database
        if ( !( $showResult = mysql_query( $query ) ) ) 
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
            while ( $row = mysql_fetch_row( $showResult ) )
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
    <div><center>
        <a href="../mysqlDatabase.html"><button>Back</button></a></center>
    </div>
   </body>
</html>