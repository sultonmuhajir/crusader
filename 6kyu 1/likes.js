// Who likes it?


function likes(names) {
   if (names.length == 0) {
      return 'no one likes this';
   } else if (names.length == 1) {
      return `${names} likes this`;
   } else if (names.length == 2) {
      return `${names[0]} and ${names[1]} like this`;
   } else if (names.length == 3) {
      return `${names[0]}, ${names[1]} and ${names[2]} like this`;
   } else {
      return `${names[0]}, ${names[1]} and ${names.length - 2} others like this`
   }
}


function likes(names) {
   switch (names.length) {
      case 0:
         return `no one likes this`;
      case 1:
         return `${names[0]} likes this`;
      case 2:
         return `${names[0]} and ${names[1]} like this`;
      case 3:
         return `${names[0]}, ${names[1]} and ${names[2]} like this`;
      default:
         return `${names[0]}, ${names[1]} and ${names.length - 2} others like this`;
   }
}


function likes(names) {
   var result = {
      0: ["no one likes this"],
      1: [names[0], " likes this"],
      2: [names[0], " and ", names[1], " like this"],
      3: [names[0], ", ", names[1], " and ", names[2], " like this"],
      4: [names[0], ", ", names[1], " and ", (names.length - 2), " others like this"]
   }
   return names.length < 4 ? result[names.length].join("") : result[4].join("");
}


console.log(likes(["Rika", "Lily", "Feby", "Rindi", "Dena", "Novan", "Iqbal"]));
console.log(likes([]), 'no one likes this');
console.log(likes(['Peter']), 'Peter likes this');
console.log(likes(['Jacob', 'Alex']), 'Jacob and Alex like this');
console.log(likes(['Max', 'John', 'Mark']), 'Max, John and Mark like this');
console.log(likes(['Alex', 'Jacob', 'Mark', 'Max']), 'Alex, Jacob and 2 others like this');