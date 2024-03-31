/*
|--------------------------------------------------------------------------
| Simple Encryption #1 - Alternating Split
|--------------------------------------------------------------------------
|
*/

function encrypt(text, n) {
   if (!text || n <= 0) return text;
   let enc = text;
   for (let i = 0; i < n; i++) {
      let odd = "";
      let even = "";
      for (let j = 0; j < enc.length; j++) {
         if (j % 2 === 0) even += enc[j];
         else odd += enc[j];
      }
      enc = odd + even;
   }
   return enc;
}
function decrypt(encryptedText, n) {
   if (!encryptedText || n <= 0) return encryptedText;
   let dec = encryptedText;
   for (let i = 0; i < n; i++) {
      const half = Math.floor(dec.length / 2);
      let odd = dec.slice(0, half);
      let even = dec.slice(half);
      let ori = "";
      for (let j = 0; j < half; j++) ori += even[j] + odd[j];
      if (dec.length % 2 !== 0) ori += even[half];
      dec = ori;
   }
   return dec;
}


function encrypt(text, n) {
   for (let i = 0; i < n; i++) {
      text = text && text.replace(/.(.|$)/g, "$1") + text.replace(/(.)./g, "$1");
   }
   return text;
}
function decrypt(text, n) {
   let l = text && (text.length / 2) | 0;
   for (let i = 0; i < n; i++) {
      text = text.slice(l).replace(/./g, (_, i) => _ + (i < l ? text[i] : ""));
   }
   return text;
}


function encrypt(text, n) {
   if (!text || n <= 0) return text;
   while (n--) {
      let ans = "";
      for (let i = 1; i < text.length; i += 2) ans += text[i];
      for (let i = 0; i < text.length; i += 2) ans += text[i];
      text = ans;
   }
   return text;
}
function decrypt(encryptedText, n) {
   if (!encryptedText || n <= 0) return encryptedText;
   const ans = new Array(encryptedText.length);
   while (n--) {
      let j = 0;
      for (let i = 1; i < ans.length; i += 2) ans[i] = encryptedText[j++];
      for (let i = 0; i < ans.length; i += 2) ans[i] = encryptedText[j++];
      encryptedText = ans.join("");
   }
   return encryptedText;
}


console.log(encrypt("This is a test!", 1), "hsi  etTi sats!");
console.log(encrypt("This is a test!", 2), "s eT ashi tist!");
console.log(encrypt("This is a test!", 3), " Tah itse sits!");
console.log(encrypt("This is a test!", 4), "This is a test!");
console.log(encrypt("This is a test!", -1), "This is a test!");
console.log(encrypt("This kata is very interesting!", 1), "hskt svr neetn!Ti aai eyitrsig");
console.log(decrypt("This is a test!", 0), "This is a test!");
console.log(decrypt("hsi  etTi sats!", 1), "This is a test!");
console.log(decrypt("s eT ashi tist!", 2), "This is a test!");
console.log(decrypt(" Tah itse sits!", 3), "This is a test!");
console.log(decrypt("This is a test!", 4), "This is a test!");
console.log(decrypt("This is a test!", -1), "This is a test!");
console.log(decrypt("hskt svr neetn!Ti aai eyitrsig", 1), "This kata is very interesting!");