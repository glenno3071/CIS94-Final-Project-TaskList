<form class="form-horizontal">
<fieldset>

<!-- Form Name 
<legend><?php echo $page->legend; ?></legend> -->

<!-- Text input   I changed some field names and added a field for date, as in date task entered-->
  
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Task</label>  
  <div class="col-md-4">
  <input id="task" name="task" type="text" placeholder="Enter Task" class="form-control input-md">
  <span class="help-block">Enter the task in the box above.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date</label>
  <div class="col-md-4">                     
    <input type="date" class="form-control" id="date" name="date">
  </div>
</div>  
  
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Desc</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Desc" name="Desc"></textarea>
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="datec">Date Completed</label>
  <div class="col-md-4">                     
    <input type="date" class="form-control" id="datec" name="datecompleted">
  </div>
</div>


<div class="form-group">
  <div class="col-md-8">
    <button id="submittask" name="submittask" class="btn btn-success">Add</button>
  </div>
</div>

</fieldset>
</form>
