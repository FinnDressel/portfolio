<?php
$Mail = $_POST["Naam"];
$messagefromform = "Line 1\r\nLine 2\r\nLine 3";

mail('finn.dressel@gmail.com', $messagefromform, $messagefromform);

echo $Mail;
