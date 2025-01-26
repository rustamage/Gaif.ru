function calculateColor(num1, num2, operation, r, color_r){
    
    let c1=+document.getElementById(num1).value;
    let c2=+document.getElementById(num2).value;

    let op=document.getElementById(operation).value;
    let res=document.getElementById(r);

    let result;

    switch(op){
        case '+':
            result=c1+c2;
            break;
        case '-':
            result=c-c2;
            break;
        case '*':
            result=c1*c2;
            break;
        case '/':
            result=c/c2;
            break;
        default:
            document.getElementById(r).innerHTML="Ошибка: неизвестная операция";
            return false;
    }
    document.getElementById(r).innerHTML=result;
    let colorString ='#' + result.toString(16).padStart(6, '0');
    document.getElementById(color_r).style.backgroundColor=colorString

    return false;


}

function convertToColor(num, color_num){
    let c1=document.getElementById(num).value;
    let colorString ='#' + c1.toString(16).padStart(6, '0');
    document.getElementById(color_num).style.backgroundColor=colorString;
    return true;
}


function fillRandomNumbers() {
    // Генерация случайных чисел от 1 до 999
    let randomNum1 = Math.floor(Math.random() * 1000 + 1);
    let randomNum2 = Math.floor(Math.random() * 1000 + 1);

    let operations = ['+', '-', '*', '/'];
    let randomOperation = operations[Math.floor(Math.random() * operations.length)];
    
    // Заполнение полей формы случайными числами
    document.getElementById('n1').value = randomNum1;
    document.getElementById('n2').value = randomNum2;
    document.getElementById('op').value = randomOperation;

    // Вызываем функции для обновления цвета полей
    convertToColor('n1', 'color_n1');
    convertToColor('n2', 'color_n2');
}