<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
$sum = 0;
foreach ($arr as $value) {
	$sum+= $value;
}
return $sum;
}
// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that adds all numbers. Should return 10.\n";
if (addUpNumbers(array(1, 2, 3, 4)) == 10) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that adds large numbers. Should return 1200.\n";
if (addupNumbers(array(100, 200, 900)) == 1200) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
