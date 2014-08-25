<?php

	var_dump($_POST);
	var_dump($_GET);
?>
<html>
<head>
		<title>My First Form</title>
</head>
<body>
<h1>Login</h1>
<form method ="POST">
		

<form method="POST" action="my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="enter username here"><br>
    
        <label for="password">Password</label>
        <input id="password" name="password" type="password"><br>
   
        <input type="submit">
    </p>




 <h1>Compose an Email</h1>
 <form method ="POST">
 <form method="POST" action="my_first_form.php">


    <p>
        <label for="to">To:</label>
        <input id="to" name="to" type="email"><br>
    
        <label for="from">From:</label>
        <input id="from" name="from" type="email"><br>
    
        <label for="Subject">Subject:</label>
        <input id="subject" name="subject" type="text"><br>
    
      	<textarea id="email_body" name="email_body" rows="5" cols="40"></textarea><br>

      	<label><input type="checkbox" name="savecopy" value=""checked>Would you like to save a copy of your email?</lable><br>
   
     	<input type="submit" value="Send">
     	
    </p>

 <h1>Multiple Choice Test</h1>
 <form method ="POST">
 <form method="POST" action="my_first_form.php">

 	<p>
 		<h3>What is your name?</h3>
 		<label for ="name"><input type="radio" name="name" value="Ruth">Ruth</label><br>	
    	<label for ="name"><input type="radio" name="name" value="Sarah">Sarah</label><br>	
    	<label for ="name"><input type="radio" name="name" value="Anna">Anna</label><br>	

    	<h3>Where are you from?</h3>
 		<label for="location"><input type="radio" name="location" value="San Antonio, Tx">San Antonio, Tx</label><br>	
    	<label for="location"><input type="radio" name="location" value="Phoenix, Az">Phoenix, Az</label><br>	
    	<label for="location"><input type="radio" name="location" value="New York, New York">New York, New York</label><br>	


    	<h3>What are your favorite colors? (check all that apply)</h3>
 		<label for="color"><input type="checkbox" name="color[]" value="red">Red</label><br>	
    	<label for="color"><input type="checkbox" name="color[]" value="blue">Blue</label><br>	
    	<label for="color"><input type="checkbox" name="color[]" value="green">Green</label><br>
    	<label for="color"><input type="checkbox" name="color[]" value="orange">Orange</label><br><br>	

    	<label for="dayofweek">What is your favorite day of the week?</label>
		<select id="dayofweek" name="dayofweek">
		<option value="-1">---check one---</option>	
    	<option value="1">Monday</option>
    	<option value="2">Tuesday</option>
    	<option value="3">Wednesday</option>
    	<option value="4">Thursday</option>
    	<option value="5">Friday</option>
    	<option value="6">Saturday</option>
    	<option value="7">Sunday</option>
		</select><br><br>


    	<input type="submit">
    </p>

    <h1>Select Testing</h1>
    <p>
  
    	<label for="day">Is Today Monday?</label>
		<select id="day" name="day">
		<option value="-1">---check one---</option>	
    	<option value="1" selected>Yes</option>
    	<option value="0">No</option>
		</select>

		<input type="submit">

</form>

</html>	