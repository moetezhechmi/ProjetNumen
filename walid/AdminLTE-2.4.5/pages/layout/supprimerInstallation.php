<?PHP
include "installationC.php";
$installationC=new InstallationC();
if (isset($_POST["numero_inst"])){
	$installationC->supprimerInstallation($_POST["numero_inst"]);
	header('Location: inst4.php');
}

?>