<?php
    foreach(scandir(".") as $i) {
        echo "<a href='$i'>$i</a><br>";
    }
?>