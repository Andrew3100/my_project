

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


function fon() {
    $.ajax({
        url: 'back.php',
        method: 'post',
        dataType: 'json',
        data: {
            first: document.getElementById('one').value,
            second: document.getElementById('two').value
        },
        success: function(json){
            document.getElementById('result').innerHTML =
                'Сумма чисел равна: ' + json['response']
        }
    });
}


function search() {
    $.ajax({
        url: 'back.php',
        method: 'post',
        dataType: 'json',
        data: {
            word: document.getElementById('search').value
        },
        success: function(json){
            $('#data').html(json['text'])
        }
    });
}