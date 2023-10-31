<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP String Functions by Pan</title>
	<style>

	.heading{
		position: relative;
		font-family: monospace;
		text-align: center;
		margin: 30px;
		margin-top: 30px;
		margin-bottom: 30px;
		margin-left: 380px;
		padding-top: 10px;
		font-size: 35px;
		color: #FF44CD;
		border-radius: 15px;
		width: 1000px;
		height: 60px; 
    }

	.heading:hover{
		color: red;
		box-shadow: 5px 5px 20px #F7BEFF;
		text-shadow: 1px 1px 2px white, 0 0 2px white, 0 0 2px white;
		font-family: "Comic Sans MS";
		background-color: blueviolet;
	}

    body{
        background-color: #001071;
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 700px;
        color: #D3FCFF;
		padding-inline-start: 22px;
    }

	h2{
		color: #FFDC00;
		font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
		font-size: 25px;
	}

	h2:hover {
    color: #FF44CD; 
	text-shadow: 1px 1px 2px yellow, 0 0 1px white, 0 0 1px aquamarine;
	text-align: justify;
	}

	h2:hover + h3{
		color: yellowgreen;
	}
	
	h3{
		color: #D3FCFF;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 18px;
	}

	</style>
</head>

<body>
<h1 class = "heading"><b>PHP String Functions by Pan<b><br/><br/></h1>

<?php

$fname = "Thanasoonton Chewakietyingyong";												
$words = "Return the number of words in a given string.";
$fname2 = "THANASOONTON CHEWAKIETYINGYONG";						
$fname3 = "thanasoonton chewakietyingyong";						


// 1. Get The Length of a String
echo "<h2><u>1. Returns the length of a string</u></h2>";
$str = strlen($fname);
echo "<h3>";
	echo "My fullname, $fname has $str characters.<br/>";
echo "</h3><br/>";

// 2. Count The Number of Words in a String
echo "<h2><u>2. Returns the number of words of a string</u></h2>";
echo "<h3>";
	echo "The string is: $words<br/>";
	echo "The string has ". str_word_count($words). " words.<br/>";
echo "</h3><br/>";

// 3. Reverse a string
echo "<h2><u>3. Display the reverse of a string</u></h2>";

echo "<h3>";
	echo "The reverse of my name $fname is " .strrev($fname). "<br/>";
echo "</h3><br/>";

// 4. Replace Text Within a String
echo "<h2><u>4. Replace Text Within a String</u></h2>";
$strrep = "Replace a text within a string.";
echo "<h3>";
	echo "Original string: $strrep<br/>";
	echo "New string: ". str_replace("string","text",$strrep) . "<br/>";
echo "</h3><br/>";


// 5. Converts a string to lower case
echo "<h2><u>5. Converts a string to lower case</u></h2>";
echo "<h3>";
	echo "Original string: $fname2<br/>";
	echo "Converted string: ". strtolower($fname2). "<br/>";
echo "</h3><br/>";

// 6. Converts a string to upper case
echo "<h2><u>6. Converts a string to upper case</u></h2>";
echo "<h3>";
	echo "Original string: $fname3<br/>";
	echo "Converted string: ". strtoupper($fname3). "<br/>";
echo "</h3><br/>";

// 7. Converts the first character of a string to lower case
echo "<h2><u>7. Converts the first character of a string to lower case</u></h2>";
echo "<h3>";
	$str = "TODAY IS MONDAY.";
	echo lcfirst($str);
echo "</h3><br/>";

// 8. Converts the first character of a string to upper case
echo "<h2><u>8. Converts the first character of a string to upper case</u></h2>";
echo "<h3>";
	$str2 = "today is Monday.";
	echo ucfirst($str2);
echo "</h3><br/>";

// 9. Converts the first character of each word in a string to upper case
echo "<h2><u>9. Converts the first character of each word in a string to upper case</u></h2>";
echo "<h3>";
	$str3 = "today is ordinary day.";
	echo ucwords($str3);	// Title case (capital letter of each word)
echo "</h3><br/>";

// 10. Extract a substring from a string
echo "<h2><u>10. Extract a substring from a string</u></h2>";
	$text = "Welcome to EPKKW! "; 	// The spacing between words also count as a character
	echo "Text is: ". $text. "<br/><br/>";

	// Output EPKKW by extracting the substring
	echo "<span style = 'color: #EB7AFF; font family: tahoma; font-size: 30px'>". substr($text, 11). "</span>";

?>

</body>
</html>