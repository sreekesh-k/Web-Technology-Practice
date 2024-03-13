function countVowels(str) {
    var count = 0;
    var vowels = "aeiouAEIOU";
    for (var i = 0; i < str.length; i++) {
        if (vowels.indexOf(str[i]) !== -1) {
            count++;
        }
    }
    return count;
}

console.log(countVowels("Hello World"));