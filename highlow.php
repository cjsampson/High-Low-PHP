<?php

// fwrite(STDOUT, "Guess of what number I am thinking from 1-100 \n");

// if($randomNum != $userGuess) {
// 	fwrite(STDOUT, ("Your guess was {$randomNum}\n"));
// 	fwrite(STDOUT, ($randomNum > $userGuess) ? "My number is HIGHER than yours\n" : "My number is LOWER than what your picked\n");
// }

$randomNum = mt_rand(1, 100);
$userGuess = null;
fwrite(STDOUT, ("Guess a number from 1-100? \n"));

while($randomNum != $userGuess) {
	$userGuess = fgets(STDIN);
	if($randomNum == $userGuess) {
		fwrite(STDOUT, "Great guess, {$userGuess}!\n");
	} elseif ($randomNum > $userGuess) {
		if($randomNum > ($userGuess + 50)) {
			fwrite(STDOUT, "TOO LOW! Try again: \n");
		} elseif( $randomNum > ($userGuess + 25)) {
			fwrite(STDOUT, "You're too low. Try again: \n");
		} elseif( $randomNum > ($userGuess + 10)) {
			fwrite(STDOUT, "Close! Try again: \n");
		} elseif( $randomNum > ($userGuess + 5)) {
			fwrite(STDOUT, "Very close! Try again: \n");
		} elseif( $randomNum > ($userGuess + 2)) {
			fwrite(STDOUT, "SUPER CLOSE! Try again: \n");
		} else {
			fwrite(STDOUT, "Can't get any closer! Try again: \n");
		}
	} elseif( $randomNum < $userGuess) {	
		if ($randomNum < ($userGuess - 50)) {
			fwrite(STDOUT, "TOO HIGH! Try again: \n ");
		} elseif ($randomNum < ($userGuess - 25)) {
			fwrite(STDOUT, "You're guess is high. Try again: \n");
		} elseif ($randomNum < ($userGuess - 10)) {
			fwrite(STDOUT, "Closer! Try again: \n");
		} elseif ($randomNum < ($userGuess - 5)) {
			fwrite(STDOUT, "Very close! Try again: \n");
		} elseif( $randomNum > ($userGuess - 2)) {
			fwrite(STDOUT, "Almost! Try again: \n");
		} else {
			fwrite(STDOUT, "Can't get any closer! Try again: \n");
		}
	}
}


