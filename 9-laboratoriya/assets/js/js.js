var input = document.getElementById('input')
var result = document.getElementById('result')

function errorFunc(error){
    alert(error)
}
function jsCalc(){ 
    input.value = `${input.value}!`
}
function clearInput(){
    input.value=0
    result.value=null
}

function typeFunc(x){
    input.value = input.value*10 + x
}
