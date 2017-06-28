<?php

include 'Page.php';
$page = new Page();
$page->title = 'Delete';
include 'header.php';

<input type="submit" name="delete", value="confirm delete csv file 'tasklist'"><br>,br>;
if(isset($_POST['delete']){
  unlink('tasklist.csv');
  echo "Deleted the csv file tasklist';
  }
include 'footer.php';
