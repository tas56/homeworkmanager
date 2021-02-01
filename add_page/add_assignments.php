<?php
$title = "My Homework Manager";
$button_action = 'action="../models/logout.php"';
$header_button = 'Log out';
$b="..\\";
include('../views/header.php');


$m = filter_input(INPUT_GET, 'm');
$d = filter_input(INPUT_GET, 'd');
$y = filter_input(INPUT_GET, 'y');
$h = filter_input(INPUT_GET, 'h');
$mins = filter_input(INPUT_GET, 'min');
$ampm = filter_input(INPUT_GET, 'ampm');
$edit = filter_input(INPUT_GET, 'edit');

?>

<div class="formcontainer">

  <div class="form_header">
      <h1 id="formheader">NEW ASSIGNMENT</h1>
    </div>
  <form class="input_container" action="index.php" method="POST" onsubmit="validate_add();">    
    
    <label for="title">Title</label>
      <input type="textbox" id="title" value="<?php echo filter_input(INPUT_GET, 'title');?>" name="assign" class="input" placeholder="Enter title.."><br />

    <label for="description">Description</label><br />
      <textarea name="description" onkeyup="desc(this);" id="description" rows="3" placeholder="Enter description (max 144 characters).."><?php echo filter_input(INPUT_GET, 'message'); ?></textarea><br />    
     <!-- START DUE DATE SELECTION -->
    <label for="date">Due Date</label>
      <select name="month" id="month">
        <!-- MONTH SELECTION -->
        <option value="<?php echo $m; ?>"><?php if($m!=NULL) echo date('F',strtotime("$y-$m-$d")); else echo'--Month--';?></option>
      		<?php
      		$months = array(1=>'January','February','March','April','May','June','July','August','September','October','November','December');
      		foreach ($months as $key => $month) {
      		echo "<option value=\"$key\">$month</option>";
      		}
      		?>
      	</select>
        <!-- DAY SELECTION -->
      	<select name="day" id="day">
      		<option value="<?php echo $d; ?>"><?php if($d!=NULL) echo $d; else echo'--Day--';?></option>
      			<?php
      			for($d=1; $d<=31;$d++)
      			echo "<option value=\"$d\">$d</option>";
      			?>
      	</select>
        <!-- YEAR SELECTION -->
      	<select name="year" id="year">
          <option value="<?php if($y!=NULL) echo $y; else echo 2020; ?>"><?php if($y!=NULL) echo $y; else echo'2020';?></option>
      			<?php
      			for($y=2020; $y<=2025;$y++)
      			echo "<option value=\"$y\">$y</option>";
      			?>
      	</select> <br />
        <!-- START TIME SELECTION -->
      	<label for="time">Time</label>
        <!-- HOURS -->
      	<select name="hours" id="hours">
      	<option value="<?php echo $h; ?>"><?php if($h!=NULL) echo $h; else echo'--Hours--';?></option>
      			<?php
      			for($h=1;$h<=12;$h++){
              if(strlen($h)==1){
                echo "<option value=\"0$h\">0$h</option>";
                } else	echo "<option value=\"$h\">$h</option>";
            }
      			?>
      	</select>
        <!-- MINUTES -->
      	<select name="mins" id="mins">
      		<option value="<?php echo $mins; ?>"><?php if($mins!=NULL) echo $mins; else echo'--Mins--';?></option>
      		<?php
      		for($m=0;$m<60;$m+=5) {
        		if(strlen($m)==1){
        		echo "<option value=\"0$m\">0$m</option>";
        		}	else echo "<option value=\"$m\">$m</option>";
      		}
      		?>
      	</select>
        <!-- AM OR PM  -->
      	<select name="ampm">
          <option value="<?php if($ampm!=NULL) echo $ampm; else echo 'am'; ?>"><?php if($ampm!=NULL) echo $ampm; else echo'am';?></option>
          <option value="am">am</option>
      		<option value="pm">pm</option>
      	</select>
      
      <div class="row">
      <input class="submit" type="submit" name="<?php if($edit!=NULL) echo $edit; else echo 'add-submit'; ?>" value="Add" />
      </div>

      <!-- HIDDEN INPUTS -->
      <input type="hidden" value="<?php echo filter_input(INPUT_GET, 'hwid');?>" name="hwid">
    	<input type="hidden" value="<?php echo $ownerid; ?>" name="ownid">
  </form>
</div>

  <p class="centered">Don't need to add an assignment? <a class="links" href="../home_page/home.php">Click here to go to the homepage</a></p>


</div>
</body>
</html>
