<?php
// types of variables(local = static | dynamic = Global)
// initialize a global variable
$Global_var = "I am a global variable";
// function create
function call(){
// Initialize a local variable
$local = "I am a local variable"; 
// Access Global variable pre-define function use
global $Global_var;
echo $local . "<br>"; 
echo $Global_var . "<br>"; 
}
call();
// echo $local error through
echo $Global_var;
?>