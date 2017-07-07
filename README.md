Word Frequency Specs

	•	The program should allow the user to enter a single-word base input and a second single-word input, compare if they match, and return that either one match was found or no matches were found.
	⁃	Input: ‘cd’ (base input); ‘cd’ (second input) — testing for successful multi-character match
	⁃	Output: 1
	•	The program should allow the user to enter a single-word base input and a string of at least two words for second input, compare the base input to the entire string, and return the number of matches found.
	⁃	Input: ‘be’ (base input); ‘bee is be’ (second input) — testing that the program can compare a single-word base input string to a multi-word second input string and find the exact word match
	⁃	Output: 1
	•	The program should allow the user to enter a single-word base input with upper or lowercase letters, and a multi-word string second input with upper or lowercase letters, convert all inputs to lowercase, compare the converted base input to the converted entire second input, and return the number of matches found.
	⁃	Input: ‘Bird’ (base input); ‘birD is the word’ (second input) — testing for successful conversion of inputs to lowercase letters for proper comparison
	⁃	Output: 1
	<!-- •	The program should allow the user to enter a single-word base input and a string of at least two matching words for second input, compare the base input to the entire string, and return the number of matches found.
	⁃	Input: ‘tree’ (base input); ’Tree is trees is tree’ (second input) — testing for successful match of both matching words from the string
	⁃	Output: 2 -->
	•	The program should produce an error message if more than one word is entered for the base input.
	⁃	Input: ‘tree trees’ (base input); ’Tree is trees is tree’ (second input) — testing that the program notices a space in the base input.
	⁃	Output: "base input must be one word only"
