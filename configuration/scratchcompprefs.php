<?php

function getTeam($password) {
	$map = array(
			'1234' => '1',
			'redalarm94' => 'Max and Trebeck, Laconia',
			'zanycorn79' => 'Cody and Logan, Laconia',
			'goldllama32' => 'Cole, Alex and Chloe, Laconia',
			'lushjump28' => 'Snowdens Little Helpers, New Berlin Eisenhower',
			'coldsilk72' => 'I Cast Fireball!, Baraboo',
			'nicehippo56' => 'Caffeinated-Sloths, Baraboo',
			'lightwave63' => 'AffinityCoding, Baraboo',
			'richnewt58' => 'Back Scratchers, Baraboo',
			'oldrice47' => 'SPARKLES, North Division',
			'freshchess58' => 'The Skeptics, North Division',
			'richnoise53' => 'Dominators, North Division',
			'mushysheep20' => 'Randomizing Creatios, North Division',
			'sillyberry12' => 'North Division Big Boys, North Division',
			'slimyfly80' => 'Star, North Division',
			'fuzzyegg58' => 'IT TECHS, North Division',
			'sadmustang93' => 'North Division Dolls, North Division',
			'damplight36' => 'H2O, North Division',
			'murkygoat67' => 'Yahooligans, North Division',
			'shinyamber38' => 'The Blue Devils, North Division',
			'blueindigo46' => 'KMS Coders, Kewaskum',
			'windyweasel23' => 'Baraboo Scratchers, Baraboo',
			'happypeach31' => 'Digital Divas, Whitewater',
			'slimyboot84' => 'Let It Code, Menomonee Falls',
			'palecake43' => 'Threat Level Midnight, Menomonee Falls',
			'blackwheel50' => 'Benevolent Cucumber Path, Menomonee Falls',
			'uglycat13' => 'Hackstreet Boys, Menomonee Falls',
			'heavylizard77' => 'Quiche Crusaders, Menomonee Falls',
			'itchyboat26' => 'HHS Scratch1, Homestead'
			'lumpypaste60' => 'HHS Scratch2, Homestead',
			'bravebrain71' = > 'Codets, New London',
			'limecoral28' => 'Late Scratchers, Baraboo',
			'sadcopper99' => 'Garritys Gang, Wauwatosa East',
			'roundbeam66' => 'Hackletes, Wauwatosa East',
			'pinkzebra55' => 'The Decoders, Wauwatosa East',
			'lightcave77' => 'The Brogrammers, Wauwatosa East',
			'fuzzyfox96' => 'Whitnall 1',
			'redcoral43' => 'Whitnall 2',
			'blackcougar97' => 'Whitefish Bay',
			'foundflag11' => 'Team1',
			'heavyclass73' => 'Team2'

		);

	return $map[$password];
}

function checkJudgingPassword($password) {
	return $password == "muscratchiscool";
}

?>
