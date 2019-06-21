<?php

function search_database($searchterm){
	$results =[];
	$pdo = dbConnect();

	$sql = 'SELECT * FROM `images` WHERE `titel` LIKE :search_term';
	$statement = $pdo->prepare($sql);
	$params = [
		'search_term' => '%' . $searchterm . '%'
	];
	$statement->execute($params);
	foreach($statement as $nieuws){
		$rij = [];
		$rij['titel'] = $nieuws['titel'];
		$rij['image'] = $nieuws['image'];
		$rij['text'] = $nieuws['text'];
		$results[] = $rij;
	}
	return $results;
}
?>