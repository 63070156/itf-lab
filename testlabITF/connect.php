<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'wannasa.mysql.database.azure.com', 'wannasa@wannasa', 'Fah12345', 'datainsert', 3306);
    if(mysqli_connect_errno($conn)){
        echo "connect fail".mysqli_connect_error();
    }

?>
