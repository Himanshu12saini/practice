<?php
$bday = new DateTime('11.4.1987'); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
printf("\n");

?>

<br>

<?php 
// PHP program to calculate age in years
// Define the date of birth
$dateOfBirth = '07-11-2001';
 
// Create a datetime object using date of birth
$dob = new DateTime($dateOfBirth);
 
// Get current date
$now = new DateTime();
 
// Calculate the time difference between the two dates
$diff = $now->diff($dob);
 
// Get the age in years, months and days
echo "Your current age is ".$diff->y." years.
 ";
 
// Get the age in years, months and days
echo "Your current age is ".$diff->y." years ".$diff->m." months ".$diff->d." days.";
?>
