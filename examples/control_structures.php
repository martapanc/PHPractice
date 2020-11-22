<?php

$today = date("d");
$dayOfWeek = date('l');

echo "Today's date is an ";
if ($today % 2 == 0) {
    echo "even";
} else {
    echo "odd";
}
echo " number";

echo "<br/>$dayOfWeek: ";
switch ($dayOfWeek) {
    case "Sunday":
        echo "pray for us sinners.";
        break;
    case "Wednesday":
        echo "ladies night, take her out for dinner";
        break;
    case "Saturday":
        echo "take care as you go out tonight.";
        break;
    default:
        echo "have a nice day at work";
        break;
}