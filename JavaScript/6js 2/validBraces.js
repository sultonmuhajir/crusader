/*
|--------------------------------------------------------------------------
| Valid Braces
|--------------------------------------------------------------------------
|
*/

function validBraces(braces) {
   const res = [];
   const pairs = {
      "(": ")",
      "[": "]",
      "{": "}",
   };
   for (let i = 0; i < braces.length; i++) {
      if (braces[i] === "(" || braces[i] === "[" || braces[i] === "{") {
         res.push(braces[i]);
      } else {
         if (pairs[res.pop()] !== braces[i]) return false;
      }
   }
   return res.length === 0;
}


function validBraces(braces) {
   while (/\(\)|\[\]|\{\}/g.test(braces)) {
      braces = braces.replace(/\(\)|\[\]|\{\}/g, "");
   }
   return !braces.length;
}


function validBraces(braces) {
   for (var i = 0, depth = []; i < braces.length; i++) {
      switch (braces[i]) {
         case "(":
         case "[":
         case "{":
            depth.push(braces[i]);
            break;
         case ")":
            if (depth.pop() != "(") return false;
            break;
         case "]":
            if (depth.pop() != "[") return false;
            break;
         case "}":
            if (depth.pop() != "{") return false;
            break;
      }
   }
   return depth.length == 0;
}


console.log(validBraces("(){}[]"), true);
console.log(validBraces("([{}])"), true);
console.log(validBraces("(}"), false);
console.log(validBraces("[(])"), false);
console.log(validBraces("[({})](]"), false);