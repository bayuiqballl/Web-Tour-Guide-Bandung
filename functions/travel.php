<?php
require_once "db.php";

function query($query)
{
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row  = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
