//array = an array holds a variable like structure and can hold more than one value

let fruits = ["apple", "orange", "banana"];

fruits.push("mango");
fruits.push("grapes");
fruits.pop();

fruits.forEach(function(fruits){
    console.log(fruits);
});

console.log(fruits.length);