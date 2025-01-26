//1
/*
let num1 = 3;
let num2 = 24.698;
let sum = num1+num2;
console.log("sum="+sum)*/

//2
/*
window.onload=function(){
    
    let num1 = Math.floor(Math.random()*(100-1))+1;
    let num2 = Math.floor(Math.random()*(100-1))+1;
    console.log(num1,num2)
    document.getElementById("num1").innerHTML=num1;
    document.getElementById("num2").innerHTML=num2;
    
    let sum = num1+num2;
    document.getElementById("sum_result").innerHTML=sum;
    //span=document.getElementById("sum_result");
    //txt=document.createTextNode(sum);
    //span.appendChild(txt);

};*/

/*
//3

function generateNumber(max_num, min_num){    
    return Math.floor(Math.random()*(max_num-min_num))+1;    
}

function sumTwoNumbers(n1, n2){
    return n1+n2;
}

function printResult(){
let num1=generateNumber(1000,1);
    let num2=generateNumber(1000,1);
    let sum=sumTwoNumbers(num1,num2);
    document.getElementById("num1").innerHTML=num1;
    document.getElementById("num2").innerHTML=num2;
    document.getElementById("sum_result").innerHTML=sum;
    //document.getElementById("sum_result").innerHTML=sumTwoNumbers(generateNumber(),generateNumber());
}

window.onload=printResult;
*/

// 4
let generateNumber = (max, min) => Math.floor(Math.random()*(max-min))+1;
let sumTwoNumbers = (n1, n2) => n1+n2;
let setElement = (id, val)=> document.getElementById(id).innerHTML=val;

let isPrime=(num)=>{    
    let flag = true;
    console.log(num)
    for(let i=2; i<num;i++){
        if(num%i == 0){
            flag=false;
            break;
        }
    }
    return flag;
}


window.onload=()=>{
    // найти сумму двух чисел
    let n1 = setElement("num1", generateNumber(1000,1)) 
    let n2 = setElement("num2", generateNumber(1000,1)) 
    setElement("sum_result", sumTwoNumbers (n1, n2))
    
    // проверка число простое или нет
    let num = setElement("num", generateNumber(1000,1))   
    if(isPrime(num)){
        setElement("prime_result", "простое")
    }else{
        setElement("prime_result", "имеет делители")
    }
    //Число и делители
    let ber22 = generateNumber(10000, 1);
    document.getElementById("ber22").innerHTML=ber22;
    let massnum = [];

    let all=(ber22)=>{
        for (let i = 1; i < ber22; i++){
            if (ber22 % i == 0) {
                massnum.push(i);
            }
        }
    }
    all(ber22);
    document.getElementById("res_numbers").innerHTML= massnum;

    
}