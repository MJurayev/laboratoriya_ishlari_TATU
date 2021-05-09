function fact(x){
    console.log(x)
    if(x<0) return NaN
    if(x==0) return 1
    return x*fact(x-1)
}
var input = $('#input')
var result =$('#result')

function errorFunc(error){
    alert(error)
}
function jsCalc(){ 
    try {
        const answer = fact(parseInt(input.val()))
        if( answer ==Infinity)throw new Error('Qiymat juda katta')
        
        input.val(answer)
    } catch (error) {
        result.val(NaN)
        errorFunc(error)
    }
}
function handleEqual(){
    result.val(input.val())
}
function clearInput(){
    input.val(0)
    result.val(null)
}

function typeFunc(x){
    input.val(input.val()*10 + x)
}
