<?php

for($i = 1; $i <= 100; $i++) {

	if ($i%15 === 0) {
		echo "FizzBuzz\n";
		continue;
	}

	if ($i%3 === 0) {
		echo "Fizz\n";
		continue;
	}

	if ($i%5 === 0) {
		echo "Buzz\n";
		continue;
	}

	echo "$i\n";

}