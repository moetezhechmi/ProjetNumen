function test(){
var date_debut = document.getElementById('dd').value;
var date_fin = document.getElementById('df').value;

 var data = date_debut.split('/').reverse().join('');
 var data1 = date_fin.split('/').reverse().join('');
 if(data1 < data) {
        alert ('Verifier les dates saisies');
        return false;
}
return true;
}