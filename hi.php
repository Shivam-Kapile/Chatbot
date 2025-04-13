<?php

/* $in = "this is a test";
$words = explode(" ", $in);
sort($words);
$out = implode(" ", $words);
echo $out;
$banned = array(' a ', ' an ', ' the ','is'); //add more words as you want. KEEP THE SPACE around the word
$article = 'The cup is on the table establishment';
$clear   = str_ireplace($banned, ' ', $article);
echo $clear;*/

/*$string = "establishment is the";
$string = preg_replace('/\bis\b/', '', $string);
echo $string*/


// Connect to MySQL
$mysqli = new mysqli("localhost", "root", "", "nchatbot");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Query the database
$result = $mysqli->query("SELECT * FROM question WHERE id = 17");

// Fetch the data
$row = $result->fetch_assoc();

// Output the paragraph with line breaks converted to <br> tags
echo nl2br($row['answer']);

// Close connection
$mysqli->close();


?>