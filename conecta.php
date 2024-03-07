<?php
    $conn = mysqli_connect("sql.freedb.tech", "freedb_Pong_2024", "%xQykHQ2Y!2Nty7", "freedb_senai_2024");
    mysqli_set_charset($conn, "utf8");
    if (!$conn) {
        echo "Erro: ".mysqli_connect_error().PHP_EOL;
    }
?>