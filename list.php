<?php

include 'Page.php';
$page = new Page();
$page->title = 'List';
include 'header.php';

// Add code here that will load the CSV file with the tasks in it
// and will print the tasks in a table
// The following is an example of how the table will be printed 
// between the header and the footer

/*still working on the output
echo '<table class="table">';  // this is styled as a bootstrap table
echo '    <thead>';
echo '      <tr>';
echo '        <th>Task</th>';
echo '        <th>Description</th>';
echo '        <th>Completed(Y/N)</th>';
echo '        <th>Date Completed</th>';
echo '      </tr>';
echo '    </thead>';
echo '    <tbody>';
echo '      <tr>';
echo '        <td>The Task</td>';
echo '        <td>The Task Description</td>';
echo '        <td>Y</td>';
echo '        <td>6/1/2018</td>';
echo '      </tr>';
echo '    </tbody>';
echo '</table>';
*/
if(isset($_POST['LIST'])){
echo "View the list of tasks, press browser back key to exit";
$row = 1;
$header = ["Task","Created","Description","Completed"];
echo "<table>";
   
if (($handle = fopen("tasklist.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
       echo "<br/><tr>";
        for ($c=0; $c < $num; $c++) {
 echo "<td><td>".$header[$c]."<td><td>: ".$data[$c] . "</td>";
     }
  }
    fclose($handle);
 echo "</tr></table>";
}
// this is because Im unable to clear the screen so I moved it down out of the way
for($x=0;$x<50;$x++){
    echo "<br/>";
}
}

include 'footer.php';

