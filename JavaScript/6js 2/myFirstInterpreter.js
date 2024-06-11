/*
|--------------------------------------------------------------------------
| Esolang Interpreters #1 - Introduction to Esolangs and My First Interpreter (MiniStringFuck)
|--------------------------------------------------------------------------
|
*/

function myFirstInterpreter(code) {
   let res = "";
   let x = 0;
   for (let i = 0; i < code.length; i++) {
      if (code[i] === "+") {
         x = (x + 1) % 256;
      } else if (code[i] === ".") {
         res += String.fromCharCode(x);
      }
   }
   return res;
}


function myFirstInterpreter(code) {
   let r = "";
   let cell = 0;
   for (let c of code)
      if (c == "+") cell = (cell + 1) & 255;
      else if (c == ".") r += String.fromCharCode(cell);
   return r;
}


function myFirstInterpreter(code) {
   let out = "";
   let byte = 0;
   [...code].forEach((cmd) => {
      switch (cmd) {
         case "+":
            byte = (byte + 1) % 256;
            break;
         case ".":
            out += String.fromCharCode(byte);
            break;
      }
   });
   return out;
}


console.log(myFirstInterpreter('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.+.'), 'ABCDEFGHIJKLMNOPQRSTUVWXYZ')