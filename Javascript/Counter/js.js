const increase = document.getElementById("increase");
const decrease = document.getElementById("decrease");
const reset = document.getElementById("reset");
const counterLabel = document.getElementById("counter");

var counter = 0;

increase.onclick = function(){
    counter++;
    counterLabel.textContent = counter;
}

decrease.onclick = function(){
    counter--;
    counterLabel.textContent = counter;
}

reset.onclick = function(){
    counter = 0;
    counterLabel.textContent = counter;
}