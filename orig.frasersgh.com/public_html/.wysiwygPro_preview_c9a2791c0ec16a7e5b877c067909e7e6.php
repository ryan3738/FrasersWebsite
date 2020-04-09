<?php
if ($_GET['randomId'] != "xZZYBIyubiTwyT0U5SH5jHGxHv0k1hRktvnNRJ5eSvmaOEqKBvWNmLil4BWIwfnA") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
