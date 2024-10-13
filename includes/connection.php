<?php
 $db = mysqli_connect('localhost', 'root', '020804apip') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'scms' ) or die(mysqli_error($db));
        
?>
