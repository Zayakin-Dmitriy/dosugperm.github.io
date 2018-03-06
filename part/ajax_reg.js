    $(document).ready (function (){
      $("#give").click (function (){
        $('#messageShow').hide ()
        var login = $("#logina").val ();
        var email = $("#mail").val ();
        var password = $("#password").val ();
        var password2 = $("#password2").val ();
        var fail = "";
        if (login.length < 3) {fail = '<b style="color: red;" class="button_form2">Имя не меньше 3 символов</b>'}
        else if (login == "Логин") {fail = '<b style="color: red;" class="button_form2">Введите Логин</b>'}
       else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
      {fail = '<b style="color: red;" class="button_form2">Вы ввели некорректный адрес эл. почты</b>'}
        if (fail != "") {
            $('#messageShow').html (fail + "<br>");
            $('#messageShow').show ();
            return false
        }
       
      }) 
    });
	\
	
	
	
	
	
	
	 $.ajax ({
            url: 'register_post.php',
            type: 'POST',
            cache: false,
            data: {"login": login,"email": email,"password": password, "password2": password2},
            dataType: 'html',
            beforeSend: function () {
        $('#messageShow').html ('<b style="color: green;" class="button_form2">Ожидание запроса...<b/>');
        $('#messageShow').show ();
        },
            success: function(data) {
                    $('#messageShow').html (data + "<br>");
                    $('#messageShow').show ();
                
            
            }
        });