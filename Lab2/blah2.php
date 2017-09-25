<!DOCTYPE html>
<html>
<head>
    <title>Part C</title>
</head>
<body>
<div>
    <?php

    $fName = $_GET['FirstName'];
    $lName = $_GET['LastName'];
    $month = $_GET['Month'];
    $day = $_GET['Day'];

   if($month == 'January'){
       if($age >= 20){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Capricorn" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Aquarius" . '</h1>';
       }
   }

   elseif($month == 'February'){
       if($age >= 19){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Aquarius" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is Pisces: " . '</h1>';
       }

   }

   elseif($month == 'March'){
       if($age >= 20){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Pisces" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Aries" . '</h1>';
       }
   }

   elseif($month == 'April'){
       if($age >= 20){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Aries" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Taurus" . '</h1>';
       }
   }

   elseif($month == 'May'){
       if($age >= 21){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Taurus" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Gemini" . '</h1>';
       }
   }

   elseif($month == 'June'){
       if($age >= 21){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Gemini" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Cancer" . '</h1>';
       }
   }

   elseif($month == 'July'){
       if($age >= 22){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Cancer" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Leo" . '</h1>';
       }
   }

   elseif($month == 'August'){
       if($age >= 23){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Leo" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Virgo" . '</h1>';
       }
   }

   elseif($month == 'September'){
       if($age >= 23){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Virgo" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Libra" . '</h1>';
       }
   }

   elseif($month == 'October'){
       if($age >= 23){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Libra" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Scorpio" . '</h1>';
       }
   }

   elseif($month == 'November'){
       if($age >= 22){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Scorpio" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Sagittarius" . '</h1>';
       }
   }

   elseif($month == 'December'){
       if($age >= 21){
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Sagittarius" . '</h1>';
       }

       else {
           echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
           echo '<h1>' . "Your Zodiac Sign Is: Capricorn" . '</h1>';
       }
   }

   else {
       echo '<h1>' . "Hello " . $fName . ' ' . $lName . '!' . '</h1>';
       echo '<h1>' . "Invalid Date Enterd" . '</h1>';
   }


   ?>

<div>
    <form action="Lab2PartAPostStep4.php" method="post">
        <p><input type="submit" name="Submit" value="Send Form" /></p>
    </form>

</div>
</body>
</html>