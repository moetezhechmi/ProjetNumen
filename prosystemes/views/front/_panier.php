<?php
class panier{
	private $c;
	public function __construct($c){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();      
		}
		$this->c=$c;
	}
	public function add($codeProd){
		if(isset($_SESSION['panier'][$codeProd])){
			$_SESSION['panier'][$codeProd]++;
		}else
		$_SESSION['panier'][$codeProd]=1;
	}
	public function count(){
		return array_sum($_SESSION['panier']);
	}
	public function del($codeProd){
		unset($_SESSION['panier'][$codeProd]);
	}
	public function delAll(){
		unset($_SESSION['panier']);
	}
	public function total(){
		$total=0;
		$codesP=array_keys($_SESSION['panier']);
$products=$this->c->query('select codeProd , prixF from produit where produit.codeProd in ('.implode(',', $codesP).')');
		foreach($products as $p ){
			$total+=$p->prixF * $_SESSION['panier'][$p->codeProd];
		}
		return $total;
	}
}
?>