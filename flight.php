<?php$connect=mysql_connect('localhost', 'Ahmed', '1234');

mysql_select_db("test");
//here u select the data you want to retrieve from the db$query="select * from tablename";

$result= mysql_query($query);

//here you check to see if any data has been found and you define the width of the tableIf($result){

echo "<table width ='340' align='left'>
      <tr color ='#5D9951>";
$i=0;

    If(mysql_num_rows($result)>0)
    {
         //here you fetch the data from the database and print it in the respective columns   while($i<mysql_num_fields($result))
        {    
             echo "<th>".mysql_field_name($result, $i)."</th>";
             $i++;
        }
        echo "</tr>";

        $color=1;

        while($rows=mysql_fetch_array($result, MYSQL_ASSOC))
        {    
            If ($color==1){
                echo "<tr color='#'#cccccc'>";

                foreach ($rows as $data){
                    echo "<td align='center'>".$data. "</td>";
                }

                $color=2;
            }
            $color=1;
        }
     } else {
        echo"no results found";
        echo "</table>";
    } else {
        echo "error running query:".MYSQL_error();
}
?>