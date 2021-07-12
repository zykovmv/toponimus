
//Функция отправки введенных данных на сервер
 //document.addEventListener('DOMContentLoaded', function() {
 //var message = document.getElementById('test_form');
 //message.addEventListener('submit', function(e) {
//Данные о пользователе

function sendData(){
        var user_1 = document.getElementById("user_1").value;
        var user_2 = document.getElementById("user_2").value;
        var user_age = document.getElementById("user_age").value;
        var user_education = document.getElementById("user_education").value;

 //Вопрос №1. Получение значений объекта вопроса и вводимых данных
        var q_1_1 = document.getElementById("q_1_1");
        var q11 = q_1_1.textContent;
        var a_1_1 = document.getElementById("answer1-1").value;
        
        var q_1_2 = document.getElementById("q_1_2");
        var q12 = q_1_2.textContent;
        var a_1_2 = document.getElementById("answer1-2").value;
        
        var q_1_3 = document.getElementById("q_1_3");
        var q13 = q_1_3.textContent;
        var a_1_3 = document.getElementById("answer1-3").value;
        
        var q_1_4 = document.getElementById("q_1_4");
        var q14 = q_1_4.textContent;
        var a_1_4 = document.getElementById("answer1-4").value;
        
        var q_1_5 = document.getElementById("q_1_5");
        var q15 = q_1_5.textContent;
        var a_1_5 = document.getElementById("answer1-5").value;
        
        var q_1_6 = document.getElementById("q_1_6");
        var q16 = q_1_6.textContent;
        var a_1_6 = document.getElementById("answer1-6").value;
        
        var q_1_7 = document.getElementById("q_1_7");
        var q17 = q_1_7.textContent;
        var a_1_7 = document.getElementById("answer1-7").value;
        
        var q_1_8 = document.getElementById("q_1_8");
        var q18 = q_1_8.textContent;
        var a_1_8 = document.getElementById("answer1-8").value;
        
        var q_1_9 = document.getElementById("q_1_9");
        var q19 = q_1_9.textContent;
        var a_1_9 = document.getElementById("answer1-9").value;
        
        var q_1_10 = document.getElementById("q_1_10");
        var q110 = q_1_10.textContent;
        var a_1_10 = document.getElementById("answer1-10").value;
        
        var q_1_11 = document.getElementById("q_1_11");
        var q111 = q_1_11.textContent;
        var a_1_11 = document.getElementById("answer1-11").value;
        
        var q_1_12 = document.getElementById("q_1_12");
        var q112 = q_1_12.textContent;
        var a_1_12 = document.getElementById("answer1-12").value;
        
        var q_1_13 = document.getElementById("q_1_13");
        var q113 = q_1_13.textContent;
        var a_1_13 = document.getElementById("answer1-13").value;

//Вопрос №2. Получение значений объекта вопроса и вводимых данных
        var q_2_1 = document.getElementById("q_2_1");
        var q21 = q_2_1.textContent;
        var a_2_1 = document.getElementById("answer2-1").value;
        
        var q_2_2 = document.getElementById("q_2_2");
        var q22 = q_2_2.textContent;
        var a_2_2 = document.getElementById("answer2-2").value;
        
        var q_2_3 = document.getElementById("q_2_3");
        var q23 = q_2_3.textContent;
        var a_2_3 = document.getElementById("answer2-3").value;
        
        var q_2_4 = document.getElementById("q_2_4");
        var q24 = q_2_4.textContent;
        var a_2_4 = document.getElementById("answer2-4").value;
        
        var q_2_5 = document.getElementById("q_2_5");
        var q25 = q_2_5.textContent;
        var a_2_5 = document.getElementById("answer2-5").value;
        
        var q_2_6 = document.getElementById("q_2_6");
        var q26 = q_2_6.textContent;
        var a_2_6 = document.getElementById("answer2-6").value;
        
        var q_2_7 = document.getElementById("q_2_7");
        var q27 = q_2_7.textContent;
        var a_2_7 = document.getElementById("answer2-7").value;
        
        var q_2_8 = document.getElementById("q_2_8");
        var q28 = q_2_8.textContent;
        var a_2_8 = document.getElementById("answer2-8").value;
        
        var q_2_9 = document.getElementById("q_2_9");
        var q29 = q_2_9.textContent;
        var a_2_9 = document.getElementById("answer2-9").value;
        
        var q_2_10 = document.getElementById("q_2_10");
        var q210 = q_2_10.textContent;
        var a_2_10 = document.getElementById("answer2-10").value;
        
        var q_2_11 = document.getElementById("q_2_11");
        var q211 = q_2_11.textContent;
        var a_2_11 = document.getElementById("answer2-11").value;
        
        var q_2_12 = document.getElementById("q_2_12");
        var q212 = q_2_12.textContent;
        var a_2_12 = document.getElementById("answer2-12").value;
        
        var q_2_13 = document.getElementById("q_2_13");
        var q213 = q_2_13.textContent;
        var a_2_13 = document.getElementById("answer2-13").value;



 $.ajax({
     type: "POST",
     url: 'recieveData.php',
     async: true,
     data: {'user_1':user_1,
     'user_2':user_2,
     'user_age':user_age,
     'user_edu':user_education,
     'q11':q11, 
     'a11':a_1_1,
     'q12':q12,
     'a12':a_1_2,
     'q13':q13,
     'a13':a_1_3,
     'q14':q14,
     'a14':a_1_4,
     'q15':q15,
     'a15':a_1_5,
     'q16':q16,
     'a16':a_1_6,
     'q17':q17,
     'a17':a_1_7,
     'q18':q18,
     'a18':a_1_8,
     'q19':q19,
     'a19':a_1_9,
     'q110':q110,
     'a110':a_1_10,
     'q111':q111,
     'a111':a_1_11,
     'q112':q112,
     'a112':a_1_12,
     'q113':q113,
     'a113':a_1_13,
     'q21':q21,
     'a21':a_2_1,
     'q22':q22,
     'a22':a_2_2,
     'q23':q23,
     'a23':a_2_3,
     'q24':q24,
     'a24':a_2_4,
     'q25':q25,
     'a25':a_2_5,
     'q26':q26,
     'a26':a_2_6,
     'q27':q27,
     'a27':a_2_7,
     'q28':q28,
     'a28':a_2_8,
     'q29':q29,
     'a29':a_2_9,
     'q210':q210,
     'a210':a_2_10,
     'q211':q211,
     'a211':a_2_11,
     'q212':q212,
     'a212':a_2_12,
     'q213':q213,
     'a213':a_2_13,
    },
     success: function(){
         var elements = $('.modal-overlay, .modal');
        elements.addClass('active');
        $('.close-modal').click(function(){
        elements.removeClass('active');
        });
    }
 });
//});
}
 
