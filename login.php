<html>
<head>
	<title>Feedback Form</title>
  <style type="text/css">

select{width: 15.5em}
</style>
  <?php 
    require_once "process.php";
    $sql="select Name from users";
    
    $stmt = mysqli_query($link, "select Name from users;");
    $users=array();

    while($row=$stmt->fetch_assoc())
    {
      array_push($users, $row["Name"]);
    }
  ?>
</head>
<body>
<div id="frm">
	<table>
<form action="process.php" method="POST">
<p>
	<tr><td>
<label>Name:</label></td>

<td>
   <?php 
   echo "<select>";
   foreach ($users as $value) {
    echo "<option value='$value'>$value</option>";
   }

   echo "</select>";
    ?>
 </td>
</p>
</tr>
<tr>
<p><td>
<label>Date:</label></td><td>
<input type="Date" id="date" name="Date"/></t></p>
</tr
<tr>
<p><td>
<label>Message:</label></td>
<td>
<textarea name="Message" rows="5" cols="40" id="message"></textarea></td>
</p><tr>
<td>
<p>
	<input type="submit" id="btn" value="Submit"/></td>
	<td><input type="reset" id="btn" value="Reset"/></td>
</p></tr>
</tr>
</form></table></div></body></html>