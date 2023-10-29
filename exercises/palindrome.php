<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playing with Palindromes</title>
</head>

<body>

    <h3>Removing spaces from a sentence and storing new sentence in $sentence[$i] (local):</h3>

    <?php
    //Find a palindrome: Stella won no wallets

    //Create a variable called $sentence

    $sentence = "Stella won no wallets";

    //remove the spaces from the sentence

    for ($i = 0; $i < strlen($sentence); $i++) {  //setting up the for loop with the counter variable $i: INITIALIZAION is index 0 (start at first letter), CONDITION is the length of the string (run through the entire string), INCREMENT is 1 (run loop each elelment in the length of the string).
        if ($sentence[$i] === " ") { //  if the element of the string is a space...
            //continue; //continue to the next iteration (skip it)
        }
        echo $sentence[$i]; //then echo out the string without the spaces
    }

    ?>

    <h3>Creating a new variable ($mod_sentence) to store the modified sentence globally instead of storing it in $sentence[$i] locally:</h3>

    <?php

    //Create a new variable called $mod_sentence so this variable can be used globally instead of $sentence[$i] which is a local variable inside the for loop

    $sentence = "Stella won no wallets";
    $modSentence = ""; //a new variable that is EMPTY, defined outside of the for loop function

    //remove the spaces from the sentence

    for ($i = 0; $i < strlen($sentence); $i++) {  //setting up the for loop with the counter variable $i: INITIALIZAION is index 0 (start at first letter), CONDITION is the length of the string (run through the entire string), INCREMENT is 1 (run loop each elelment in the length of the string).
        if ($sentence[$i] === " ") { //  if the element of the string is a space...
            //continue; //continue to the next iteration of the loop(i.e., skip the space)
        }
        $modSentence .= $sentence[$i]; //assign the string (character by character, without spaces) to the new variable, $mod_sentence, which is accessible outside of the for loop. "$mod_sentence .= $sentence[$i];" concatenates/combines the characters from the original $sentence, one by one, into a new sentence without spaces, but here it is assigning it to $mod_sentence (accessible outside the function)instead of $sentence (like the first block of code above)
    }
    echo $modSentence;
    ?>

    <h3>Removing the spaces from the sentence, comparing letters from left-to-right with letters right-to-left and echoing if it is/is not a palindrome:</h3>

    <?php //**COMPLETE ANSWER**//

    //start by removing spaces from the sentence and ensuring that the space-less sentence is stored in a global variable:
    $sentence = "stella won no wallets";
    $modSentence = "";

    for ($i = 0; $i < strlen($sentence); $i++) {
        if ($sentence[$i] ===  ' ') {
            continue;
        }
        $modSentence .= $sentence[$i];
    }
    //echo $modSentence;

    //now I need to create a FOR loop to compare the characters from left to right with the characters from right to left 
    //to do this i need to find a way to get the loop to compare the first letter with the last, the second letters with the second-to-last, etc...
    //first i need the length of the string (without spaces, $modSentence) so I can create a loop that compares letters from the front of the string to those at the end of the string
    //essentially, I need to identify index 0 and compare it with index 17, then index 1 and compare with index 16, etc
    //to do this I need to identify $modSentence[0] and compare it with $modSentence[17], which is equal to $modSentence[$strLength - $1 -1] (i.e., 18 - 0 - 1 = 17).

    $strLength = strlen($modSentence); //get the length of the string, here 18
    $isPalin = true; //set the variable to default of true

    for ($i = 0; $i < $strLength / 2; $i++) {
        if ($modSentence[$i] !== $modSentence[$strLength - $i - 1]) {
            $isPalin = false;
            break;
        }
    }

    //IF/ELSE loop to echo out if it is or is not a palindrome
    //the variable $isPalin to be set to true 

    if ($isPalin) {
        echo "The sentence '$sentence' is a palindrome.";
    } else {
        echo "The sentence '$sentence' is not a palindrome.";
    }

    ?>

    <h3>Same thing but with a capital "s" in Stella:</h3>

    <?php //**COMPLETE CODE WITH CAPITAL LETTERS!**//

    //start by removing spaces from the sentence and ensuring that the space-less sentence is stored in a global variable:
    $sentence = "Stella won no wallets";
    $modSentence = "";

    for ($i = 0; $i < strlen($sentence); $i++) {
        if ($sentence[$i] ===  ' ') {
            continue;
        }
    }

    if ($sentence[$i] >= 'A' && $sentence[$i] <= 'Z') { // convert uppercase letter to lowercase using ASCII values where uppercase letter values are 32 lower than lowercase letters. "S" is 83and "s" is 115 in ASCII, so we add 32 to the ASCII value of "S" to convert it to lowercase
        $modSentence .= chr(ord($sentence[$i]) + 32); //chr = character, ord = ordinal, and is standard code to convert uppercase letters to lowercase letters. here we go through the characters one by one and those that are uppercase will be changed to lowercase.
    } else {
        $modSentence .= $sentence[$i]; //leave lowercase letters as they are
    }
    //echo $modSentence;

    //now I need to create a FOR loop to compare the characters from left to right with the characters from right to left 
    //to do this i need to find a way to get the loop to compare the first letter with the last, the second letters with the second-to-last, etc...
    //first i need the length of the string (without spaces, $modSentence) so I can create a loop that compares letters from the front of the string to those at the end of the string
    //essentially, I need to identify index 0 and compare it with index 17, then index 1 and compare with index 16, etc
    //to do this I need to identify $modSentence[0] and compare it with $modSentence[17], which is equal to $modSentence[$strLength - $1 -1] (i.e., 18 - 0 - 1 = 17).

    $strLength = strlen($modSentence); //get the length of the string, here 18
    $isPalin = true; //set the variable to default of true

    for ($i = 0; $i < $strLength / 2; $i++) {
        if ($modSentence[$i] !== $modSentence[$strLength - $i - 1]) {
            $isPalin = false;
            break;
        }
    }

    //IF/ELSE loop to echo out if it is or is not a palindrome
    //the variable $isPalin to be set to true 

    if ($isPalin) {
        echo "The sentence '$sentence' is a palindrome.";
    } else {
        echo "The sentence '$sentence' is not a palindrome.";
    }

    ?>

</body>

</html>