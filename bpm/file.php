<?php

    $file = $_FILES['file1']['name'];
    define('UPLOAD_PATH','/html/uploads/');
    $target = UPLOAD_PATH.$file;
?>
    <img src=<?php echo $_FILES['file1']['tmp_name'] ?> alt=''>
<?php
    
?>