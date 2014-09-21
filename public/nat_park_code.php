<?php

class parkDataStore {
    public $filename;

    // function __construct($filename = 'data/address.csv'){
    //      $this->filename = $filename;
    //  }

     // function read_address_book(){
     //    $national_parks = [];
     //    $handle = fopen($this->filename, 'r');
     //    while (!feof($handle)){
     //        $row = fgetcsv($handle);
     //        if (!empty($row)){
     //            $people[]= $row;
     //        }
     //    }
     //    fclose($handle);
     //    return $people;
     // }
     function write_park_directory($national_parks){
        $handle = fopen($this->filename, 'w');
        foreach ($national_parks as $national_park) {
           fputcsv($handle, $national_park);
        }
        fclose($handle);
    }
}

$new_book = new parkDataStore();

$national_parks = $new_book->read_directory();

if(!empty($_POST)){
    $newDirectory = [
        $_POST['name'],
        $_POST['location'],
        $_POST['date_established'],
        $_POST['area_in_acres'],
        $_POST['description']
    ];
$national_parks[] = $newDirectory;
$new_book->write_park_directory($national_parks);
}

if(isset($_GET['remove'])){
    $keyToRemove=$_GET['remove'];
    unset($people[$keyToRemove]);
    $national_parks = array_values($national_parks);
    $new_book->write_address_book($national_parks);
}
// Verify there were uploaded files and no errors
if (count($_FILES) > 0 && $_FILES['file1']['error'] === UPLOAD_ERR_OK){
    
    $upload = $_FILES['file1'];

    //directing where php will save uploaded file
    $uploadPath = '/vagrant/sites/planner.dev/public/data/address.csv';

    //this ensures that you are only identifying the new file by the name not including the path
    $uploadBasename = basename($_FILES['file1']['name']);

    //names the new file, which was determined by the concatination of the uploaded file and path
    $newFile = $uploadPath . $uploadBasename;

    // //This moves the file to the temp folder
    // move_uploaded_file($_FILES['file1']['tmp_name'], $newFile);
    // $newFile = new AddressDataStore($newFile);
    // $upload_items= $newFile->read_address_book();
    // $people = array_merge($people, $upload_items);
    // $newFile ->write_address_book($people);
}

// // Check if we saved a file
// if (isset($saved_filename)) {
//     // If we did, show a link to the uploaded file
//     echo "<p>You can download your file <a href='/uploads/{$filename}'>here</a>.</p>";
// }

?>
