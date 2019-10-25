ymaps.ready(init);
err = 0;
function init(){
	        var suggestView_1 = new ymaps.SuggestView('user_1');
		var suggestView_2 = new ymaps.SuggestView('user_2');
		}
				
	user_1.onblur = function (e) {
	geocode(user_1,'1');
	};
	user_2.onblur = function (e) {
	geocode(user_2,'2');
	};

function geocode(x,y) {
        
// Забираем запрос из поля ввода.
        var request = $(x).val();
// Геокодируем введённые данные.
	ymaps.geocode(request).then(function (res) {
	var obj = res.geoObjects.get(0),
	error, hint;
                if (obj) {
		// Об оценке точности ответа геокодера можно прочитать тут: https://tech.yandex.ru/maps/doc/geocoder/desc/reference/precision-docpage/
		switch (obj.properties.get('metaDataProperty.GeocoderMetaData.precision')) {
		case 'exact':
		break;
		}
		} else {
		error = 'Извините, такого города не существует...';
		}
                // Если геокодер возвращает пустой массив или неточный результат, то показываем ошибку.
		if (error) {
                /* err++;
                if (err>0) err = 1;
                console.log(err); */
		showError(error, y);
		} else {
                /* err--;
                if (err<=0) err = 0;
                console.log(err); */
		showResult(obj, y);
		}
		}, function (e) {
		console.log(e)
		})

        }
		function showResult(obj, y) {
			// Удаляем сообщение об ошибке, если найденный адрес совпадает с поисковым запросом.
			$('#user_'+ y).removeClass('input_error');
                        $('#notice_' + y).css('display', 'none');
                        if((!$('#user_1').hasClass('input_error') && (!$('#user_2').hasClass('input_error')))){
                                err = 0 ;
                        }
                        else err = 1;
                        console.log(err);
                }

		function showError(message, y) {
			$('#notice_' + y).text(message);
			$('#user_' + y).addClass('input_error');
                        $('#notice_' + y).css('display', 'block');
                        if(($('#user_1').hasClass('input_error') || ($('#user_2').hasClass('input_error')))){
                                err = 1 ;
                        }
                        else err = 0;
                        console.log(err);
                }
 
 

//Функция отправки введенных данных на сервер
 //document.addEventListener('DOMContentLoaded', function() {
 function fun(){
 /* var message = document.getElementById('button');
 message.addEventListener('click', function(e) { */
//Данные о пользователе
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

//Вопрос №2. Получение значений объекта вопроса и вводимых данных
        var q_2_1 = document.getElementById("q_2_1");
        var q21 = q_2_1.textContent;
        var a_2_1 = document.getElementById("answer2-1").value;
        
        var q_2_2 = document.getElementById("q_2_2");
        var q22 = q_2_2.textContent;
        var a_2_2 = document.getElementById("answer2-2").value;

//Вопрос №3. Получение значений объекта вопроса и вводимых данных
        var q_3_1 = document.getElementById("q_3_1");
        var q31 = q_3_1.textContent;
        var a_3_1 = document.getElementById("answer3-1").value;
        
        var q_3_2 = document.getElementById("q_3_2");
        var q32 = q_3_2.textContent;
        var a_3_2 = document.getElementById("answer3-2").value;

//Вопрос №4. Получение значений объекта вопроса и вводимых данных
        var q_4_1 = document.getElementById("q_4_1");
        var q41 = q_4_1.textContent;
        var a_4_1 = document.getElementById("answer4-1").value;
                
        var q_4_2 = document.getElementById("q_4_2");
        var q42 = q_4_2.textContent;
        var a_4_2 = document.getElementById("answer4-2").value;
        
//Вопрос №5. Получение значений объекта вопроса и вводимых данных
        var q_5_1 = document.getElementById("q_5_1");
        var q51 = q_5_1.textContent;
        var a_5_1 = document.getElementById("answer5-1").value;
        
        var q_5_2 = document.getElementById("q_5_2");
        var q52 = q_5_2.textContent;
        var a_5_2 = document.getElementById("answer5-2").value;

//Вопрос №6. Получение значений объекта вопроса и вводимых данных
        var q_6_1 = document.getElementById("q_6_1");
        var q61 = q_6_1.textContent;
        var a_6_1 = document.getElementById("answer6-1").value;
        
        var q_6_2 = document.getElementById("q_6_2");
        var q62 = q_6_2.textContent;
        var a_6_2 = document.getElementById("answer6-2").value;

 if ((user_1 && user_2 && user_age && user_education) && (err===0)){
 $.ajax({
     type: "POST",
     url: 'recieveData.php',
     async: true,
     data: {'user_1':user_1,
     'user_2':user_2,
     'user_age':user_age,
     'user_edu':user_education,
     'q11':q11,
     'q12':q12,
     'a11':a_1_1,
     'a12':a_1_2,
     'q21':q21,
     'q22':q22,
     'a21':a_2_1,
     'a22':a_2_2,
     'q31':q31,
     'q32':q32,
     'a31':a_3_1,
     'a32':a_3_2,
     'q41':q41,
     'q42':q42,
     'a41':a_4_1,
     'a42':a_4_2,
     'q51':q51,
     'q52':q52,
     'a51':a_5_1,
     'a52':a_5_2,
     'q61':q61,
     'q62':q62,
     'a61':a_6_1,
     'a62':a_6_2},
     success: function(){
        var thumbs = $('.fa, .fa-4x');
        thumbs.removeClass('fa-frown-o');
        thumbs.addClass('fa-thumbs-o-up')
        document.getElementById('h1_modal').innerHTML = "Опрос пройден! <br>Спасибо за уделенное время!";
        var elements = $('.modal-overlay, .modal');
        elements.addClass('active');
        $('.close-modal').click(function(){
        elements.removeClass('active');
        window.location.href = 'https://toponimus.ru/map.php';
        });
       }
 });
}
else {
        var thumbs = $('.fa, .fa-4x');
        thumbs.removeClass('fa-thumbs-o-up');
        thumbs.addClass('fa-frown-o')
        document.getElementById('h1_modal').innerHTML = "Данные не отправлены...<br>Проверьте, пожалуйста, правильность заполнения данных о себе.";
        var elements = $('.modal-overlay, .modal');
        elements.addClass('active');
        $('.close-modal').click(function(){
        elements.removeClass('active');
        }); 
};
        
};
