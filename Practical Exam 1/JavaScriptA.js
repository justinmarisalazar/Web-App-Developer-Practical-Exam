// Fix the sentence. (Capitalize the first word only and add spaces per word)

let sentence = "TheQuickBrownFoxJumpsOverTheLazyDog"; // Declaration of the string

// For loop for adding space between words
for(let i = 0; i < sentence.length; i++)
{
    if(sentence.charAt(i) == sentence.charAt(i).toUpperCase()) // Checks if the character is an uppercase letter
    {
        if(i != 0) // Checks if the position of the character is not at the beginning
        {
            sentence = sentence.substring(0, i) + ' ' + sentence.substring(i); // Adds space before the next word
            i++; // Increments the counter
        }
    }
}

console.log(sentence); // Prints the result