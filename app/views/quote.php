<?php


$listItems = '';
foreach($sellers as $seller) {
    $listItems .= "<li>$seller->name | Email: $seller->email</li>";
}

$content =  "<ul>$listItems</ul>";


include_once 'partials/layout.php';
?>
