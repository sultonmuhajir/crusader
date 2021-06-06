function spinWords(str) {
   const arr = str.split(" ");
   let result = [];
   for (let i in arr) {
      if (arr[i].length >= 5) {
         arr[i] = arr[i].split("").reverse().join("");
         result.push(arr[i]);
      } else {
         result.push(arr[i]);
      }
   }
   return result.join(" ");
}


function spinWords(words) {
   return words.split(' ').map(function (word) {
      return (word.length > 4) ? word.split('').reverse().join('') : word;
   }).join(' ');
}


function spinWords(str) {
   return str.split(' ').map(w => w.length < 5 ? w : w.split('').reverse().join('')).join(' ');
}


function spinWords(string) {
   return string.replace(/\w{5,}/g, function (w) {
      return w.split('').reverse().join('')
   })
}


console.log(spinWords("Welcome"), "emocleW");
console.log(spinWords("Hey fellow warriors"), "Hey wollef sroirraw");
console.log(spinWords("This is a test"), "This is a test");
console.log(spinWords("This is another test"), "This is rehtona test");
console.log(spinWords("You are almost to the last test"), "You are tsomla to the last test");
console.log(spinWords("Just kidding there is still one more"), "Just gniddik ereht is llits one more");
console.log(spinWords("Seriously this is the last one"), "ylsuoireS this is the last one");
