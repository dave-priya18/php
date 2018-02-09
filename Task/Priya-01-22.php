 <?php include('include/header.php'); ?>

 <div id="content">
  <div id="content-wrapper">
   <?php include('include/sidebar.php');  ?>
   <!-- Main content area -->
   <main class="container-fluid">
    <div class="row">
     <!-- Main content -->
     <div class="col-md-8">

      <form method="get">

       <div style="text-align:left">
        <a href="index.php" > Home </a>
       </div>
       <div style="text-align:right">
        <a href="Priya-01-24.php"> Next </a>
       </div>
      </form>

      <?php


 /* 1. Write a PHP script to : -
 a) transform a string all uppercase letters.
 b) transform a string all lowercase letters.
 c) make a string's first character uppercase.
 d) make a string's first character of all the words uppercase. */
 echo "Question:1";
 $str = "Take a sMall iDea and Make it biG";
 # Question: 1.a
 echo "a) transform a string all uppercase letters. <br>";
 echo "Ans: ".$strUpper = strtoupper($str)."<br> <br><br>";


 # Question: 1.b
 echo "b) transform a string all lowercase letters. <br>";
 echo "Ans: ".$strLower = strtolower($str)."<br><br><br>";

 # Question: 1.c
 echo "c) make a string's first character uppercase. <br>";
 echo "Ans: ".$strUCfirst = ucfirst($str)."<br><br><br>";

 # Question: 1.d
 echo "d) make a string's first character of all the words uppercase. <br>";
 echo "Ans: ".$strUCWord = ucWords($str)."<br><br><br>";


 /* 2. Write a PHP script to split the following string.
 Sample string : '092407'
 Expected Output : 09:24:07 */

 echo "Question:2 (with chunk_split()) <br>";
 $str1 = "092407";
 echo "Ans: ".$strSplit = chunk_split($str1, 2, ':')."<br> <br> <br>";

 echo "Question:2 (With Split & Implode)<br>";
 $str1 = "092407";
 $strSplit = str_split($str1,2);
 $strImplode = implode(":",$strSplit);
 echo "Ans: ".$strImplode."<br> <br> <br>";



 /* 3. Write a PHP script to check if a string contains a specific string?
 Sample string : 'The quick brown fox jumps over the lazy animal.'
 Check whether the said string contains the string 'jumps'. */

 echo "Question:3 <br>";
 $str2="The quick brown fox jumps over the lazy animal. <br>";
 $strFind = "jumps";
 $strSubString = strpos($str2, $strFind);
 if($strSubString !== false)
  echo "Ans: True. <br> <br> <br>";



 /*
 4. Write a PHP script to extract the user name from the following email ID.
 Sample String : 'abcd@example.com'
 Expected Output : 'abcd' */

 echo "Question:4 <br>";
 $str3 = "abcd@gmail.com";
 $strStr = strstr($str3,"@",true);
 echo "Ans: ".$strStr."<br> <br> <br>";
 // $strExplode = explode('@',$str3);
 // foreach($strExplode as $inputString){
 //   if($inputString == "abcd")
 //     echo "Ans: ".$inputString."<br> <br> <br>";
 //}

 /*
 5. Write a PHP script to get the last three characters of a string.
 Sample String : 'abcd@example.com'
 Expected Output : 'com' */


 echo "Question: 5 <br>";
 $str4 = "abcd@gmail.com";
 $strSubString = substr($str4, -3);
 echo "Ans: ".$strSubString."<br> <br> <br>";


 /*
 6. Write a PHP script to format values in currency style.
 Sample values : value1 = 65.45, value2 = 104.35
 Expected Result : 169.80 */

 echo "Question: 6 <br>";
 $str5 = "65.45";
 $str6 = "104.35";
 $strCurrencyAddition = $str5 + $str6;
 $strCurrencyAddition = number_format($strCurrencyAddition,2,".","");
 echo "$strCurrencyAddition"."<br> <br> <br>";



 /*
 7. Write a PHP script to generate simple random password [do not use rand() function] from a given string.
 Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
 Note : Password length may be 6, 7, 8 etc. */

 echo "Question: 7 <br>";
 $str7 = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
 $strShuffle = str_shuffle($str7);
 $pickFrom = "678";
 $intShufle = str_shuffle($pickFrom);
 $strPassword = substr($strShuffle,0,$intShufle[0]);
 echo "Ans: ".$strPassword."<br> <br> <br>";

 /*
 8. Write a PHP script to put a string in an array.
 Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
 Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26)
 "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." } */

 echo "Question: 8 <br>";
 $str8 = 'Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.';
 $strExplode = explode('\n',$str8);
 var_dump($strExplode);
 echo "<br> <br> <br>";

 /*
 9. Write a PHP script to get the filename component of the following path.
 Sample path : "https://www.w3resource.com/index.php"
 Expected Output : 'index'*/

 echo "Question: 9 <br>";
 $str9 = "https://www.w3resource.com/index.php";
 $strFileName = basename($str9,".php");
 echo "Ans: ".$strFileName."<br> <br> <br>";

 /* 10. Write a PHP script to remove a part of a string from the beginning.
 Sample string : 'rayy@example.com'
 Expected Output : 'example.com' */

 echo "Question: 10  <br>";
 $str10= "rayy@example.com";
 // $strStr = strstr($str10,"@");
 // echo "Ans: ".$strStr."<br> <br> <br>";
 $strTrim = ltrim($str10,"rayy@");
 echo "Ans: ".$strTrim."<br> <br> <br>";

 /* 11. Write a PHP script to remove all leading zeroes from a string.
 Original String : '000547023.24'
 Expected Output : '547023.24'
 Note: with and without using php function */

 echo "Question: 11  (With PHP Function)<br>";
 $str11= "000547023.24";
 $strTrim = ltrim($str11,"0");
 echo "Ans: ".$strTrim."<br> <br> <br>";

 echo "Question: 11 (Without PHP Function - Typecast) <br>";
 echo "Ans: ";
 $strNumber =  (float)$str11;
 echo $strNumber."<br> <br> <br>";

 /*
 12. Write a PHP script to remove trailing slash from a string.
 Original String : 'The quick brown fox jumps over the lazy animal///'
 Expected Output : 'The quick brown fox jumps over the lazy animal' */
 echo "Question: 12  <br>";
 $str12= "The quick brown fox jumps over the lazy animal///";
 $strTrim = rtrim($str12,"/");
 echo "Ans: ".$strTrim."<br> <br> <br>";


 /*
 13. Write a PHP script to replace multiple characters from the following string.
 Sample String : '1+2/3*2:2-3/4*3'
 Expected Output : '1 2 3 2 2 3 4 3' */

 echo "Question: 13  <br>";
 $str13= "1+2/3*2:2-3/4*3";
 $toreplace = array ("+" , "/" , "*", ":" ,"-" ,);
 $strReplace = str_replace($toreplace, " ", $str13);
 echo "Ans: ".$strReplace."<br> <br> <br>";


 /*
 14. Write a PHP script to remove comma(s) from the following numeric string.
 Sample String : '2,543.12'
 Expected Output : 2543.12 */

 echo "Question: 14  <br>";
 $str14= "2,543.12";
 $toreplace = ",";
 $strReplace = str_replace($toreplace,"", $str14);
 echo "Ans: ".$strReplace."<br> <br> <br>";

 ?>

</form>


<?php include('include/rightSidebar.php'); ?>

<?php include('include/footer.php'); ?>
