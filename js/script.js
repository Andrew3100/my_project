

function alert_message(text) {
    let variable = 'text'
    let variable2 = 'text'
}

function get_element(id) {
    document.getElementById(id).value;
}

function get_summ() {
    let first = document.getElementById('first').value
    let second = document.getElementById('second').value
    let sum = parseInt(first) + parseInt(second);
    document.getElementById('result').innerHTML = "Сумма чисел равна: " + sum;
}