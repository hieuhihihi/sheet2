<form method="POST">
<input type="text" id="fname" name="fname"><br>
</form>
<?php
$danhsach = array("Nam","Cuong","hoa","phuong");
$key = $_POST['fname'];
    if(in_array($key,$danhsach))
    {
        echo "tim thay";
    }
    else {
        echo "ko tim thay";
    }
?>
