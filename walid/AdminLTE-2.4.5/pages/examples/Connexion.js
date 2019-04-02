
function test(){
var mail = f.mail.value;
var pwd = f.pwd.value;
var a = "@";
var pt = ".";
if( mail.length== 0 || pwd.length== 0)
{
alert("Vérifier votre login et votre de mot de passe");
}
else{
alert('Bienvenue ' ) ;
window.location="index.html";}
}