<?php
if ($_GET['randomId'] != "9viEafQ6u98Am2qRFDCl6zIIUjTYdYwoWzitgx9TrEDTBeQ68ZdAIOW5rAwnrFGB") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
