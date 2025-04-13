<!-- Created By CampCodes -->
<?php
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "nchatbot") or die("Database Error");

$text=$_POST['text'];
$sort=preg_replace(array("/\bif\b/", "/\bwhat\b/","/\bof\b/","/\bname\b/","/\bwho\b/","/\bwhich\b/","/\bthe\b/","/b\and\b/","/\bmany\b/","/\bhow\b/","/\bhave\b/","/\bby\b/","/\bis\b/","/\bdoes\b/"), "", $text); 
$sort=trim($sort);
$sort= preg_replace('/\s+/', ' ',$sort);
$answer="bbk";

$words = explode(" ", $sort);
sort($words);
$sort = implode(" ", $words);


if($sort =="newarts principle" || $sort =="principle"||$sort =="principle newarts college"){
    $answer="principle";
}
elseif($sort=="hi"||$sort=="hi") {
$answer= "xyz";
}
elseif($sort =="about college" || $sort =="about college information"||$sort=="college information" ){
    $answer="about college";
}
elseif($sort == "courses"|| $sort =="courses college provides" || $sort =="college course"){
    $answer="courses";
}
elseif($sort == "college fields" || $sort =="fields"|| $sort == "college feilds provided"){
    $answer="college fields";
}
elseif($sort =="campus location" ||$sort =="college location" || $sort =="college location"){
    $answer="campus location";
}
elseif($sort=="college seats provided"||$sort=="college seats"){
    $answer="collage seats";
}
elseif($sort=="college establishment year"||$sort=="establishment"||$sort=="establishment year") {
$answer="college year establishment";
}
elseif($sort=="college grade"||$sort=="garde naac") {
$answer= "NAAC grade";
}
elseif($sort=="about bcs department"||$sort=="bcs department"||$sort=="bsc computer science" ||$sort=="bcs"||$sort=="bcs fees") {
$answer="bsc computer sci" ;
}
elseif($sort=="college facilities provided "||$sort=="college facilities") {
$answer="Facilities" ;
}
elseif($sort=="pricipale vice"||$sort=="college principle vice") {
$answer="vice principle" ;
}
elseif($sort=="bcs hod"||$sort=="bcs department hod") {
$answer="hod bcs";
}#20
elseif($sort=="college hostel"||$sort=="hostel") {
$answer= "college hostel";
}#21
elseif($sort=="boys hostel"||$sort=="boys college hostel") {
$answer="boys hostel" ;
}#22
elseif($sort=="girls hostel"|| $sort=="college girls hostel") {
$answer="girls hostel" ;
}#23
elseif($sort=="college library"||$sort=="about college library") {
$answer="college library" ;
}#24
elseif($sort=="college infrastructure"||$sort=="IT infrastructure") {
$answer="I.T Infrastructure" ;
}
elseif($sort=="collage laboratories"||$sort=="about laboratories") {
$answer= "Laboratories";
}#26
elseif($sort=="auditorium"||$sort=="auditorium college") {
$answer="Auditorium" ;
}#27
elseif($sort=="ba english"||$sort=="ba english fees"||$sort=="about ba english") {
$answer="BA ENGLISH" ;
}
elseif($sort=="bsc chemistry"||$sort=="bsc chemistry fees") {
$answer="B.SC Chemistry";
}#29
elseif($sort=="ba political sci"||$sort=="about ba political sci") {
$answer="BA Political sci";
}#30
elseif($sort=="botany bsc"||$sort=="about botany bsc") {
$answer="B.Sc Botany" ;
}#31
elseif($sort=="bsc technology wine"||$sort=="about bsc technology wine") {
$answer="bsc wine technology" ;
}
elseif($sort=="biotechnology bsc"||$sort=="about boitechnology bsc") {
$answer="bsc biotechnology" ;
}
elseif($sort=="bsc microbiology"||$sort=="about bsc microbiology") {
$answer="bsc microbiology" ;
}
elseif($sort=="animation bsc"||$sort=="animation bsc fees"||$sort=="animation bsc course duration") {
$answer="bsc animation" ;
}
elseif($sort=="bsc statistics"||$sort=="bsc fees statistics"||$sort=="bsc duration statistics") {
$answer= "bsc statistics";
}
elseif($sort=="bsc mathematics"||$sort=="bsc fees mathematics"||$sort=="bsc duration mathematics") {
$answer="bsc electronic";
}#37
elseif($sort=="bsc zoology"||$sort=="bsc fees zoology"||$sort=="bsc duration zoology") {
$answer= "bsc zoology";
}#38
elseif($sort=="bsc physics"||$sort=="bsc fees physics"||$sort=="bsc duration physics") {
$answer= "bsc physics";
}#39
elseif($sort=="msc statistics"||$sort=="fees msc statistics") {
$answer="msc staistics";
}#40
elseif($sort=="computer msc science"||$sort=="mcs"||$sort=="computer fees msc science") {
$answer="msc computer science" ;
}#41
elseif($sort=="microbiology msc"||$sort=="fees microbiology msc") {
$answer="msc microbiology";
}#42
elseif($sort=="botany msc"||$sort=="botany fees msc") {
$answer="msc botany";
}
elseif($sort=="mathematics msc"||$sort=="fees mathematics msc") {
$answer= "msc mathematics";
}
elseif($sort=="chemistry msc organic"||$sort=="chemistry fees msc organic") {
$answer="msc organic chemistry";
}
elseif($sort=="analytical chemistry msc"||$sort=="analytical chemistry fees msc") {
$answer="msc analytical chemistry";
}#46
elseif($sort=="environmental msc sci"||$sort=="environmental fees msc sci") {
$answer="msc environmental sci";
}
elseif($sort=="msc physics"||$sort=="duration msc physics") {
$answer= "msc physics";
}#48
elseif($sort=="chemistry inorganic msc"||$sort=="chemistry fees inorganic msc") {
$answer="msc inorganic chemistry";
}#49
elseif($sort=="biotechnology msc"||$sort=="biotechnology fees msc") {
$answer="msc biotechnology";
}#50
elseif($sort=="courses popular"||$sort=="best courses") {
$answer="bsc computer sci" ;
}
elseif($sort=="geography msc"||$sort=="fees geography msc") {
$answer="msc geography" ;
}#51
elseif($sort=="chemistry drug msc"||$sort=="chemistry drug fees msc") {
$answer= "msc drug chemistry";
}
elseif($sort=="electronic msc"||$sort=="electronic fees msc") {
$answer="msc electronic" ;
}
elseif($sort=="biochemistry msc"||$sort=="biochemistry fees msc") {
$answer="msc biochemistry" ;
}
elseif($sort=="msc zoology"||$sort=="fees msc zoology") {
$answer= "msc zoology";
}#55

    


















// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $answer);

//checking user query to database query
$check_data = "SELECT answer FROM question WHERE question LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    //fetching replay from the database according to the user query
    $fetch_data = mysqli_fetch_assoc($run_query);
    //storing replay to a varible which we'll send to ajax
    $replay = $fetch_data['answer'];
    echo nl2br($replay);
}else{
    echo "Sorry can't be able to understand you!";
}



?>