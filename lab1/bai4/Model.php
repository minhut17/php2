<?php

function get_tasks(){
    include 'config.php';
    $sql = "SELECT * FROM tasks ";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $row = $result->fetch_all(MYSQLI_ASSOC);
        $connection->close();
        return $row;
    }
    $connection->close();
}
?>