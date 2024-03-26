/*
|--------------------------------------------------------------------------
| Decode the Morse code
|--------------------------------------------------------------------------
|
*/

function decodeMorse(morseCode) {
   return morseCode
      .trim()
      .split("   ")
      .map((word) =>
         word
            .split(" ")
            .map((code) => MORSE_CODE[code])
            .join("")
      )
      .join(" ");
}


const decodeMorse = (morseCode) =>
   morseCode.trim().replace(/(\S+)(\s{1,2}|$)/g, (_, $1) => MORSE_CODE[$1]);


const decodeMorse = (morseCode) =>
   morseCode
      .trim()
      .split(/  | /)
      .map((code) => MORSE_CODE[code] || " ")
      .join("");


console.log(decodeMorse(".... . -.--   .--- ..- -.. ."), "HEY JUDE");
console.log(decodeMorse("   .... . -.--   "), "HEY");