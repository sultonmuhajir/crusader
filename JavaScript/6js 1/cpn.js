/*
|--------------------------------------------------------------------------
| Create Phone Number
|--------------------------------------------------------------------------
|
*/

function createPhoneNumber(numbers) {
   let x = numbers.splice(0, 3).join('')
   let y = numbers.splice(0, 3).join('')
   let z = numbers.splice(0, 4).join('')
   return `(${x}) ${y}-${z}`
}


const createPhoneNumber = n => '(###) ###-####'.replace(/#/g, () => n.shift())


function createPhoneNumber(numbers) {
   let format = "(xxx) xxx-xxxx";
   for (var i = 0; i < numbers.length; i++) {
      format = format.replace('x', numbers[i]);
   }
   return format;
}


function createPhoneNumber(numbers) {
   return numbers.join('').replace(/(...)(...)(.*)/, '($1) $2-$3');
}


function createPhoneNumber(numbers) {
   return numbers.reduce((p, c) => p.replace('x', c), "(xxx) xxx-xxxx");
}


function createPhoneNumber(numbers) {
   let n = numbers;
   return '(' + n[0] + n[1] + n[2] + ') ' + n[3] + n[4] + n[5] + '-' + n[6] + n[7] + n[8] + n[9];
}


console.log(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]), "(123) 456-7890");
console.log(createPhoneNumber([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]), "(111) 111-1111");