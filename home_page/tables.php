<?php

	$query = "SELECT * FROM todos WHERE ownerid='$id' AND isdone='$isdone' ORDER BY duedate ASC";
 	$result = mysqli_query($dbc, $query);
 	if($result){
 		if(mysqli_num_rows($result)==0){
 			echo $no_assignment;
 			if($add_button != NULL)
 			echo $add_button;
 		} else {
 			echo '<table>
 			<thead>
 			<tr><th colspan="7" class="table-name">'.$table_name.'</th></tr>
 			<tr>
 			<tr>
 				<th>Created Date</th>
 				<th>Due Date</th>
 				<th>Title</th>
 				<th>Details</th>
 				<th></th>
 				<th></th>
 				<th></th>
 			</tr>
 			</thead>
 			<tbody>
 			';
 			//Fetch and print all records
 			while($row = mysqli_fetch_assoc($result)){
 				$duedate = strtotime( $row['duedate'] );
 				$date = date('m/d/Y, g:ia', $duedate);
 				$createdate = strtotime( $row['createddate'] );
 				$cdate = date('m/d/Y, g:ia', $createdate);
 				echo "<tr>
 				<td>".$cdate."</td>
 				<td>".$date."</td>
 				<td>".$row['title']."</td>
 				<td>".$row['message']."</td>
 				";

 				// creates HTML form with hidden inputs to recieve values
 				echo '
 				<form action="index.php" method="POST">
 				<input type="hidden" value="'.$row['id'].'" name="id">
 				<input type="hidden" value="'.$row['ownerid'].'" name="ownerid">
 				<input type="hidden" value="'.$row['isdone'].'" name="isdone">
 				<input type="hidden" value="'.$row['createddate'].'" name="createddate">
 				<input type="hidden" value="'.$row['duedate'].'" name="duedate">
 				<input type="hidden" value="'.$row['message'].'" name="message">
 				<input type="hidden" value="'.$row['title'].'" name="title">
 				';
 				// buttons
 				echo'<td class="b_row">
 				<input type="submit" value="edit" name="submit-edit">
 				</td>
 				<td class="b_row">
 				<input type="submit" value="delete" onclick="delete_assignment();" name="submit_delete">
 				</td>
 				<td class="b_row">
 				<input type="submit" value="'.$complete.'" name="'.$submit_complete.'">
 				</form></td>
 				</tr>'; // end form and table
 			 				
 			}//end while 		
 			// add assignment button
 			if($add_button_2 != NULL)
 			echo $add_button_2;
 			echo "</tbody></table>";
 		} // end else 
 	} //end result check
 	else echo '<p class="error">The user\'s homework could not be retrieved. We appologize for any inconvenience.</p>';

?>
 	