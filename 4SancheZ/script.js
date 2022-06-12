const tit = document.querySelector('.modal-title');
const cont = document.querySelector('.modal-body');
const email = document.getElementById("email");
const name = document.getElementById("name");
const comment = document.getElementById("comment");
const prop = document.getElementById('btn');

document.querySelector('form').onsubmit = block;

function block() {
   if((email.value == '')&&(name.value == '')||(email.value == '')||(name.value == '')){
      tit.innerHTML = "Не все поля заполнены";
      cont.innerHTML = "Пожалуйста, заполните обязательные поля"; 
   }
   else {
      tit.innerHTML = "Спасибо за ваш отзыв!";
      cont.innerHTML = "Ваши данные успешно отправлены.";
   }
   console.log(email.value);
   console.log(name.value);
   console.log(comment.value);

	$.ajax({
		url: 'ajax.php',
		type: 'POST',
		cache: false,
		data: {'email': email.value, 'name': name.value, 'comment': comment.value},
		dataType: 'html',
		beforeSend: function(){
		$("#btn").prop("disabled", true);
		},
		success: function(){
		tit.innerHTML = "Спасибо за ваш отзыв!";
      		cont.innerHTML = "Ваши данные успешно отправлены.";
		email.value = '';
		name.value = '';
		comment.value = '';
		$("#btn").prop("disabled", false);

		}
		});

   return false;

 }





