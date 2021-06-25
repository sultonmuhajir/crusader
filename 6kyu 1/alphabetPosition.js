function alphabetPosition(text) {
   let res = [];
   const teks = text.toLowerCase().split("")
   const alp = "abcdefghijklmnopqrstuvwxyz".split("");
   for (let i = 0; i < teks.length; i++) {
      for (let j = 0; j < alp.length; j++) {
         if (teks[i] == alp[j]) {
            res.push(j + 1);
         }
      }
   }
   return res.join(" ");
}


function alphabetPosition(text) {
   return text
      .toUpperCase()
      .match(/[a-z]/gi)
      .map((c) => c.charCodeAt() - 64)
      .join(' ');
}


function alphabetPosition(text) {
   const letters = 'abcdefghijklmnopqrstuvwxyz';
   return text.toLowerCase()
      .split('')
      .filter(t => letters.indexOf(t) > -1)
      .map(t => letters.indexOf(t) + 1 || '')
      .join(' ');
}


console.log(alphabetPosition("The sunset sets at twelve o' clock."));
console.log(alphabetPosition("The narwhal bacons at midnight."));