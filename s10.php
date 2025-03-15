<?php
/*
Regular expression use a set of patterns match by preg_match pre-define function 
*/
// sea a simple patterns use (i) = case_sensitive detector
$pattern = "/code/i";

if (preg_match($pattern,$text)){
    echo "<script></script>";
}
?>