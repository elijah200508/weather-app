const temp = document.getElementById("temp");
const toFahrenheit = document.getElementById("toFahrenheit");
const toCelsius = document.getElementById("toCelsius");
const result = document.getElementById("result");
const submit = document.getElementById("submit")


submit.onclick = function convert(event){
    event.preventDefault();
    let number = parseInt(temp.value);
    if(toFahrenheit.checked){

        number = number * 9 / 5 + 32;
        result.value = number;

    }else if(toCelsius.checked){

        number = (number - 32) * (5/9);
        result.value = number;

    }else{
        result.value = "Select Option";
    }
}
