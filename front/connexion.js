function test(){
var nom = f.Nom.value;
var prenom = f.Prenom.value;
var cite = f.citee.value;
var quartier = f.quartier.value;

var exp = new RegExp("^[a-zA-Z]*$","g");
 var data = document.getElementById("idnom").value;
 alert(exp.test(data));
var exp1 = new RegExp("^[a-zA-Z]*$","g");
 var data1 = document.getElementById("idprenom").value;
 alert(exp1.test(data1));
 var exp2 = new RegExp("^[a-zA-Z]*$","g");
 var data2 = document.getElementById("idcite").value;
 alert(exp2.test(data2));
 var exp3 = new RegExp("^[a-zA-Z]*$","g");
 var data3 = document.getElementById("idquartier").value;
 alert(exp3.test(data3));
 window.location="index.html";


}