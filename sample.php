

<?php
$getmsg = "what is principle name of newart";
$op = str_replace(array("if","is", "what","of","name"), "", $getmsg); 
 $cd=trim($op);
$cd= preg_replace('/\s+/', ' ',$cd);

$var ="principle newart";

if ($cd == "principle newart") {
    $answer = "big";
} else {
    $answer = $cd;
}

echo $answer;
?>

