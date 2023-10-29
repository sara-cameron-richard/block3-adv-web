<style>
    .odd {
        background-color: #0000ff;
        color: aliceblue;
    }

    .even {
        background-color: #00ff00;
    }

    p {
        text-align: center;
    }
</style>
<?php

$sampleArray = array(1, 2, 3, 4, 5, 6, 7);

for ($i = 0; $i < count($sampleArray); $i++) {
    $class = ($i + 1) % 2 ? "odd" : "even";
    echo "<p class='$class'>$sampleArray[$i]</p>";
}

$sampleArray = array(1, 2, 3, 4, 5, 6);

for ($i = 0; $i < count($sampleArray); $i++) {
    $class = ($i + 1) % 2 ? "odd" : "even";
    echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";
}
?>

<?php

function isPalin($word) // create a function called isPalin with the variable $word
{
    $length = strlen($word); // get the length of the string using strlen (string length) function 
    for ($i = 0; $i < $length / 2; $i++) { // loop through the string using a for loop, starting at 0 and ending at the length of the string divided by 2, in increments of 1.
        if ($word[$i] !== $word[$length - $i - 1]) { // compare the character at index $i with the character at index $length - $i - 1, where $i is the current index and $length - $i - 1 is the index of the last character in the string. The important thing here is that we are talking about the [index] not the number of letters in the word. 
            return false;
        }
    }
    return true; // 
}

//test function 
if (isPalin("hello")) {
    echo "This word is a palindrome.";
} else {
    echo "This word is not a palindrome.";
}
?>



<?php
