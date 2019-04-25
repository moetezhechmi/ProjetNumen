<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
$employe=new Employe(75757575,'BEN Ahmed','Salah',50,20);
$employerC=new EmployeC();
$employerC->afficherEmploye($employe);
echo "****************";
echo "<br>";
echo "cin:".$employe->getCin();
echo "<br>";
echo "nom:".$employe->getNom();
echo "<br>";
echo "prenom:".$employe->getPrenom();
echo "<br>";
echo "nbH:".$employe->getNbHeures();
echo "<br>";
echo "tarif:".$employe->getTarifHoraire();
echo "<br>";
echo "le salaire est : ";
$employerC->calculerSalaire($employe); 
echo "<br>";


?>