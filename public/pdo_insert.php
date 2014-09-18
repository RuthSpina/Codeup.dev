<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'rspina', 'Patton_1');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT NOT NULL,
    PRIMARY KEY (id)
)';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

//execute this and create the table
$dbc->exec($query);

$national_parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_established' => '19190226', 'area_in_acres' => 47389 ],
    ['name' => 'American Samoa',   'location' => 'American Samoa', 'date_established' => '19881031', 'area_in_acres' => 9000 ],
    ['name' => 'Arches',   'location' => 'Utah', 'date_established' => '19711112', 'area_in_acres' => 76518 ],
    ['name' => 'Badlands',   'location' => 'S Dakota', 'date_established' => '19781110', 'area_in_acres' => 242755],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '19440612', 'area_in_acres' => 801163],
    ['name' => 'Biscayne',   'location' => 'Florida', 'date_established' => '19800628', 'area_in_acres' => 172924],
    ['name' => 'Black Canyon of the Gunnison',   'location' => 'Colorado', 'date_established' => '19991021', 'area_in_acres' => 32950 ],
    ['name' => 'Bryce Canyon',   'location' => 'Utah', 'date_established' => '19280225', 'area_in_acres' => 35835 ],
    ['name' => 'Canyonlands',   'location' => 'Utah', 'date_established' => '19640912', 'area_in_acres' => 337597 ],
    ['name' => 'Capitol Reef',   'location' => 'Utah', 'date_established' => '19711218', 'area_in_acres' => 241904 ],
];

foreach ($national_parks as $national_park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$national_park['name']}', '{$national_park['location']}', '{$national_park['date_established']}', '{$national_park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . "<br>";
}