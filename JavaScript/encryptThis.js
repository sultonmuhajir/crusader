/*
|--------------------------------------------------------------------------
| Encrypt this!
|--------------------------------------------------------------------------
|
*/

function encryptThis(text) {
   let t = text.split(' ');
   let res = []
   t.forEach(i => {
      let str = ''
      if (i.length == 1) {
         str += i[0].charCodeAt(0);
      } else if (i.length > 2) {
         str += i[0].charCodeAt(0);
         str += i.substr(-1);
         str += i.slice(2, -1);
         str += i[1];
      } else {
         str += i[0].charCodeAt(0);
         str += i[1];
      }
      res.push(str)
   });
   return res.join(' ');
}


const encryptThis = text =>
   text.replace(/\b\w(\w?)(\w*?)(\w?)\b/g, (word, second, middle, last) => word.charCodeAt(0) + last + middle + second);


const encryptThis = text =>
   text.split(' ')
   .map(w => (w.length > 2) ? `${w[0]}${w[w.length - 1]}${w.slice(2, w.length - 1)}${w[1]}` : w)
   .map(w => w.length ? w.replace(/^./, $1 => $1.charCodeAt(0)) : w)
   .join(' ')


const encryptThis = s => s
   .split ` `
   .map(e => e
      .replace(/(^\w)(\w)(\w*)(\w$)/, `$1$4$3$2`)
      .replace(/^\w/, e.charCodeAt()))
   .join ` `;


console.log(encryptThis("A"), "65");
console.log(encryptThis("A wise old owl lived in an oak"), "65 119esi 111dl 111lw 108dvei 105n 97n 111ka");
console.log(encryptThis("The more he saw the less he spoke"), "84eh 109ero 104e 115wa 116eh 108sse 104e 115eokp");
console.log(encryptThis("The less he spoke the more he heard"), "84eh 108sse 104e 115eokp 116eh 109ero 104e 104dare");
console.log(encryptThis("Why can we not all be like that wise old bird"), "87yh 99na 119e 110to 97ll 98e 108eki 116tah 119esi 111dl 98dri");
console.log(encryptThis("Thank you Piotr for all your help"), "84kanh 121uo 80roti 102ro 97ll 121ruo 104ple");