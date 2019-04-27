function verif()
{
		var login=document.getElementById("Login").value;

	var pass=document.getElementById("pass").value;

	var prenom=login.substring(0, login.indexOf("."));
	var nom=login.substring(login.indexOf(".")+1,login.indexOf("@"));

	if (login=="" || pass=="")
	{
		alert("erreur");
	}
	else
	{

	alert("Bienvenue " + prenom + " " + nom);
window.open("sondage.html");
	}


}
verif();