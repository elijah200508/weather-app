//rest parameter = (...rest) allows a function to work with a variable number of arguments by building them into array

const food1 = "rice";
const food2 = "pizza";
const food3 = "hotdog";

function openFridge(...food){
    console.log(...food)
};

openFridge(food1, food2)
openFridge(food1, food2, food3)