<?php
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "nchatbot") or die("Database Error");
$text="year of establisment";
// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $text);
$sort=preg_replace(array("/\bif\b/","/\bis\b/","/\bof\b/","/\bname\b/","/\babout\b/","/\bwho\b/","/\bwhich\b/","/\bthe\b/","/\bfor\b/"), "", $text); 
$sort=trim($sort);
$sort= preg_replace('/\s+/', ' ',$sort);

$words = explode(" ", $sort);
sort($words);
$sort = implode(" ", $words);
echo $sort;

$answer="bbk";
if($sort =="about collage" || $sort =="information collage" || $sort =="collage information" ){
    $answer="about collage";
}

//checking user query to database query
$check_data = "SELECT answer FROM question WHERE question LIKE '%$answer%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['answer'];
    echo $replay;
}else{
    echo "Sorry can't be able to understand you!";
}



?>


