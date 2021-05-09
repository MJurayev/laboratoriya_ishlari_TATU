function fact(x){
    console.log(x)
    if(x<0) return NaN
    if(x==0) return 1
    return x*fact(x-1)
}
var input = document.getElementById('input')
var result = document.getElementById('result')

function errorFunc(error){
    alert(error)
}
function jsCalc(){ 
    try {
        const answer = fact(parseInt(input.value))
        if( answer ==Infinity)throw new Error('Qiymat juda katta')
        
        input.value =answer
        console.log(input.value)
    } catch (error) {
        result.value = NaN
        errorFunc(error)
    }
}
function handleEqual(){
    result.value = input.value
}
function clearInput(){
    input.value=0
    result.value=null
}

function typeFunc(x){
    input.value = input.value*10 + x
}
