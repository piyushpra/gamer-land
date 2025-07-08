
<?php
if (isset($_FILES["profile"])) {
    print_r($_FILES);
} else {
    echo "not able to upload";
}
?>