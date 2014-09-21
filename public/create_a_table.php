<?php

require 'dbconnection.php';

// query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(240) NOT NULL,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
)';

Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

Create INSERT query
$query = "INSERT INTO users (email, name) VALUES ('Isela@email.com', 'Isela Spina')";

// Execute Query
$numRows = $dbc->exec($query);
echo "Inserted $numRows row." . PHP_EOL;

$users = [
    ['email' => 'jason@codeup.com',   'name' => 'Jason Straughan'],
    ['email' => 'chris@codeup.com',   'name' => 'Chris Turner'],
    ['email' => 'michael@codeup.com', 'name' => 'Michael Girdley']
];

foreach ($users as $user) {
    $query = "INSERT INTO users (email, name) VALUES ('{$user['email']}', '{$user['name']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . "<br>";
}
