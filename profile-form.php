<?php
	
	// When the submit button is clicked
	if (isset($_POST['submit'])) {
	
		// Creating variables and
		// storing values in it
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];

		echo "<h1><i> Good Morning, $f_name $l_name </i></h1>";
	}
?>

<h1>Enter Data</h1>
<form method="POST" action="profile.php">
Name: <input type="text" name="complete_name" /><br />
Birthdate: <input type="date" name="birthdate" /><br />
Email Address: <input type="email" name="email" /><br />
Program:
<select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select>
<br />
Favorite Color: <input type="color" name="favorite_color" /><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br />
<button>Submit</button>
</form>

<?php
endif;
?>

