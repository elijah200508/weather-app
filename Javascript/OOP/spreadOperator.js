//spread operator = alloes iterator such as an array or string to be expanded into separate elements

let numbers = [2,3,4,5,6,7,8];
let max = Math.max(...numbers);
let min = Math.min(...numbers);

console.log(max);
console.log(min);

let letters = "SPREAD OPERATOR";

console.log(...letters);