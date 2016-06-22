<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
	return array_filter($arr,"overTen");
}
function overTen($num){
	return($num <10);
}
// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that filters above 10. Should return (1, 2, 3).\n";
if (filterNumbers(array(1, 2, 3, 11)) == array(1, 2, 3)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that filters none. Should return (3, 2, 1).\n";
if (filterNumbers(array(3, 2, 1)) == array(3, 2, 1)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>