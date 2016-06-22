<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
 $str = strtoupper($str);
 return $str;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that capitalizes all lowercase. Should return ROOSTER.\n";
if (uppercasesAllLetters("rooster") == "ROOSTER") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that capitalizes some lowercase. Should return DOG.\n";
if (uppercasesAllLetters("DoG") == "DOG") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
