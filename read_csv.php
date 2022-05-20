<?php include("header.php"); ?>


<?php
$file = fopen("csv/students.csv","r");

// fatch data from csv 
while(! feof($file))
  {
    $data[] = fgetcsv($file);
  }
fclose($file);



for ($i=0; $i < count($data); $i++) {

    echo "<table class='table table-hover'>";
    
    if($i==0){
        echo "<thead> <tr>";
        
        for ($j=0; $j < count($data[0]); $j++) { 

            echo "<th scope='col'>".$data[$i][$j]."</th>";
        }   

        echo "<tr></thead><tbody>";     
    }

    else{
        for ($j=0; $j < 5; $j++) { 
           
            echo "<td>".$data[$i][$j]."</td>";
        } 
    }
  }
  echo "</tbody></table>"
?>


<?php include("footer.php"); ?>