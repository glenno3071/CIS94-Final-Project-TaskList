<?php
// Please note that the index file is the project at the moment.  Everythiing else is a work in progress

$task=$date=$desc=$datec=" ";

//if(isset($_POST['ADD'])){
//echo "add another task";
//}   this code is not needed as add is the default 

if(isset($_POST['LIST'])){
echo "View the list of tasks, press browser back key to exit";
$row = 1;
$header = ["Task","Created","Description","Completed"];
echo "<table>";
  
/*  still working on changing the output to a column table format
echo '<table class="table">';  
echo '    <thead>';
echo '      <tr>';
echo '        <th>Task</th>';
echo '        <th>Date</th>';
echo '        <th>Description</th>';
echo '        <th><th><th>Date Completed</th>';
echo '      </tr>';
echo '    </thead>';
*/

   
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

// deletes the csv file
if(isset($_POST['DELETE'])){
unlink("tasklist.csv");
echo "Deleted the csv file";
}

if(isset($_POST['submit'])){

    //collect form data
    $task = $_POST['task'];
    $date = $_POST['date'];
    $desc = $_POST['desc'];
    $datec = $_POST['datec'];

    //check if task and date is set is set
    if($task ==''){
        $error[] = 'task is required';
    }
    if($date ==''){
        $error[] = 'date is required';
    }
  
// if there are no errors
 if(!isset($error)){
     
// Creates a new csv file     
$filename=fopen("tasklist.csv","a");
fwrite($filename,"$task,$date,$desc,$datec\n");
print "task added";
fclose($filename);

 }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
 }

?> 

<h2>ADD Task Form</h2>
<form action='' method='post'>
<!--<input type="submit" name="ADD" value="ADD Task">&nbsp;&nbsp -->
&nbsp;&nbsp<input type="submit" name="LIST" value="Show List">&nbsp;&nbsp
<input type="submit" name="DELETE" value="Delete List"><br><br>
Task Name :&nbsp;&nbsp&nbsp;&nbsp<input type="text" name="task" value=''>
<br><br>
Date Created :&nbsp <input type="date" name="date" value=''>
<br><br>
Description :&nbsp;&nbsp;&nbsp <textarea name="desc" valve='' rows="5" cols="40"></textarea>
  <br><br>
<!--Description :<input type="text" name="desc" value=''>
<br><br> -->
Completed :&nbsp;&nbsp;&nbsp;&nbsp <input type="date" name="datec" value=''>
<br><br>
<p><input type='submit' name='submit' value='Submit'></p> 
</form>

<!-- orginal index page not yet incorporated
include 'Page.php';
$page = new Page();
$page->title = 'Index';
include 'header.php';
include 'footer.php';

I wanted to get something in, Its late and I appreciate any consideration, This is something I'll be working for a few more weeks.
  what is here works
-->

