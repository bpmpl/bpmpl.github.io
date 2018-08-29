<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
// Check if a file has been uploaded
if(isset($_FILES['upload-file'])) {
    // Make sure the file was sent without errors
    if($_FILES['upload-file']['error'] == 0) {
        // Connect to the database
        $dbLink = new mysqli('127.0.0.1', 'root', 'raghib@1998', 'bpm');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['upload-file']['tmp_name']));
        $size = intval($_FILES['upload-file']['size']);
 
        // Create the SQL query
        $query = "
            INSERT INTO `wearehiring` (
                `sno`,`fullname`, `email`, `phone`, `message`, `upload-file`
            )
            VALUES (
                '{$fullname}', '{$email}', {$phone}, '{$subject}', '{$message}' '{$data}'
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
        echo $dbLink->error();
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['upload-file']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
echo '<p>Click <a href="index.html">here</a> to go back</p>';
?>
 