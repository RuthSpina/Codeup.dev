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
        <input id="username" name="username" type="text" placeholder="enter username here">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
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
 		<label><input type="radio" name="name" value="Ruth">Ruth</lable><br>	
    	<label><input type="radio" name="name" value="Sarah">Sarah</lable><br>	
    	<label><input type="radio" name="name" value="Anna">Anna</lable><br>	

    	<h3>Where are you from?</h3>
 		<label><input type="radio" name="location" value="San Antonio, Tx">San Antonio, Tx</lable><br>	
    	<label><input type="radio" name="location" value="Phoenix, Az">Phoenix, Az</lable><br>	
    	<label><input type="radio" name="location" value="New York, New York">New York, New York</lable><br>	


    	<h3>What are your favorite colors? (check all that apply)</h3>
 		<label><input type="checkbox" name="color[]" value="red">Red</lable><br>	
    	<label><input type="checkbox" name="color[]" value="blue">Blue</lable><br>	
    	<label><input type="checkbox" name="color[]" value="green">Green</lable><br>
    	<label><input type="checkbox" name="color[]" value="orange">Orange</lable><br>	

    	<input type="submit">
    </p>

</form>

</html>	