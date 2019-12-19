<?php
	
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=parrainage', 'root', '');
	}catch(Exception $e){
		echo die(' Erreur '.$e->getMessage());
	}


	$reqSelect = $bdd->query('SELECT COUNT(*) from parrainage_liste') or die(print_r($bdd->errorInfo()));
	$r = $reqSelect->fetch();
	$reqSelect->closeCursor();
	if($r[0] == 0){
		$reqSelect1 = $bdd->query('SELECT COUNT(*) from L2_3_TDSI') or die(print_r($bdd->errorInfo()));
		$reqSelect2 = $bdd->query('SELECT COUNT(*) from L1_TDSI') or die(print_r($bdd->errorInfo()));
		$nbrl23 = $reqSelect1->fetch();
		$nbrL1 = $reqSelect2->fetch();
		$reqSelect1->closeCursor();
		$reqSelect2->closeCursor();

		if($nbrL1 <= $nbrl23){
			$reqSelect1 = $bdd->query('SELECT nom, prenom, mail, tel from L1_TDSI') or die(print_r($bdd->errorInfo()));
			$reqSelect2 = $bdd->query('SELECT nom, prenom, mail, tel from L2_3_TDSI') or die(print_r($bdd->errorInfo()));
			while($l23 = $reqSelect2->fetch()){
				if($l1 = $reqSelect1->fetch()){
					$nom1 = $l1['prenom']." ".$l1['nom'];
					$ctct1 = $l1['mail']."<br>".$l1['tel'];
					$nom2 = $l23['prenom']." ".$l23['nom'];
					$ctct2 = $l23['mail']."<br>".$l23['tel'];
					$reqInsert = $bdd->prepare('INSERT INTO parrainage_liste(L1_name, L1_contacts, L2_3_name,L2_3_contacts) values(:l1name, :l1contacts, :l23name, :l23contacts)') or die(print_r($bdd->errorInfo()));
					$reqInsert->execute(array(
						'l1name' => $nom1,
						'l1contacts' => $ctct1,
						'l23name' => $nom2,
						'l23contacts' => $ctct2
					));
					$reqInsert->closeCursor();
				}else{
					echo "not okey";
					$reqSelect1->closeCursor();
					$reqSelect2->closeCursor();
					break;
				}
			}
		}else{
			echo "sup";
		}
	}
	header('Location: index.php');
?>