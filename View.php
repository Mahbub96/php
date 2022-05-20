<?php include("header.php"); ?>


<?php
$file = fopen("csv/students.csv","r");

// fatch data from csv 
while(!feof($file))
  {
    $data[] = fgetcsv($file);
  }
fclose($file);


for ($i=0; $i < count($data); $i++) {

    
    if($i==0){
        echo "<table class='table table-hover'>";
        echo "<thead> <tr>";
        
        for ($j=0; $j < count($data[0]); $j++) { 

            echo "<th scope='col'>".$data[$i][$j]."</th>";
        }   

        echo "<tr></thead><tbody>";     
    }

    else{
        echo "<tr>";
        for ($j=0; $j < count($data[$i]); $j++) { 
           
            echo "<td>".$data[$i][$j]."</td>";
        } 
        echo "</tr>";

    }
  }
  echo "</tbody></table>"
?>


<?php include("footer.php"); ?>