$("#sendMail").on("click",function(){


var login = $("#login").val();
var password = $("#password").val();

var el = document.getElementById("login");
var el2 = document.getElementById("errorMess");
var el3= document.getElementById("password");
var el4 = document.getElementById("errorMess2");


$.ajax({
url: 'login.php',
type: 'POST',
cache: false,
data: {'login': login, 'password':password},
dataType: 'html',
beforeSend: function() {
$("#sendMail").prop("disabled", true);
},
success: function(data) {
  if(data=='Пользователь с тагим логином не существует!'){


    el.classList.add("is-invalid");
        $("#errorMess").text(data);
    el2.classList.add("invalid-feedback");


    $("#sendMail").prop("disabled", false);
  }
  else if(data=='Неверно введен пароль!'){
    el.classList.remove("is-invalid");
        $("#errorMess").text("");
    el2.classList.remove("invalid-feedback");


    el3.classList.add("is-invalid");
        $("#errorMess2").text(data);
    el4.classList.add("invalid-feedback");
     $("#sendMail").prop("disabled", false);

  }
  else
     location.reload();
                
 
  
}
});

});

$("#sendReg").on("click",function(){



var email = $("#regEmail").val();
var login = $("#regLogin").val();
var password = $("#regPassword").val();
var secpas = $("#Password2").val();
var el=document.getElementById("regEmail");
var el1=document.getElementById("regLogin");
var el2=document.getElementById("regPassword");
var el3= document.getElementById("Password2");
var el4 = document.getElementById("errorMess3");



$.ajax({
url: 'signup.php',
type: 'POST',
cache: false,
data: {'regEmail' : email,'regLogin': login, 'regPassword':password, 'Password2':secpas},
dataType: 'html',
beforeSend: function() {
$("#sendReg").prop("disabled", true);
},
success: function(data) {
 
  if(data){
    el.classList.add("is-invalid");
    el1.classList.add("is-invalid");
    el2.classList.add("is-invalid");
    el3.classList.add("is-invalid");
    $("#errorMess3").text(data);
    el4.classList.add("invalid-feedback");
    $("#sendReg").prop("disabled", false);
    
}
if(!data){
  
  location.reload();
  alert("Вы успешно зарегистрировались");
}
}
});

});

