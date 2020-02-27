<?php

function getTeam($password) {
        $map = array(
                        'dustylard38' => '1',
                        'redclock94' => '2',
                        'carrot79' => '3',
                        'golddog32' => '4',
                        'lushrun28' => '5',
                        'coldwoll72' => '6',
                        'niceseal56' => '7',
                        'lightsand63' => '8',
                        'richbug58' => '9',
                        'oldquinoa47' => '10',
                        'freshcheckers58' => '11',
                        'richsound53' => '12',
                        'mushygoat20' => '13',
                        'sillyveggie12' => '14',
                        'slimybee80' => '15',
                        'fuzzyavocado58' => '16',
                        'sadpinto93' => '17',
                        'dampdark36' => '18',
                        'murkysheep67' => '19',
                        'shinyruby38' => '20',
                        'bluered46' => '21',
                        'windypig23' => '22',
                        'happyapple31' => '23',
                        'slimyheel84' => '24',
                        'paledessert43' => '25',
                        'blackcar50' => '26',
                        'uglyman13' => '27',
                        'heavysnake77' => '28',
                        'itchyplane26' => '29',
                        'lumpyliquid60' => '30',
                        'bravekidney71' => '31',
                        'limeblue28' => '32',
                        'sadsilver99' => '33',
                        'roundrobbin66' => '34',
                        'pinkhorse5' => '35',
                        'lightpool77' => '36',
                        'fuzzyrabbit96' => '37',
                        'redred43' => '38',
                        'blacklepard97' => '39',
                        'scratchcat310' => '40',
                        'heavyheart73' => '41'
                );

        return $map[$password];
}

function getTeamName($number) {
        $map = array(
                        '1' => 'Homestead 4, Homestead High School',
                        '2' => 'Craig Prince 1, Craig High School',
                        '3' => 'Craig Prince 2, Craig High School',
                        '4' => 'Sub Atomic Whales, New London High School',
                        '5' => 'Whovians, New London High School',
                        '6' => 'crtl Intelligence, Baraboo',
                        '7' => 'Just a bit off, Baraboo',
                        '8' => '4e 61 6d 65, Baraboo',
                        '9' => 'Excuse my Scratch, Baraboo',
                        '10' => 'cyberchasers, Laconia High School',
                        '11' => 'Stuxnet, Laconia High School',
                        '12' => 'NEM, Whitewater High School',
                        '13' => 'CHS Team CJN, Cedarburg High School',
                        '14' => 'CHS Team MN, Cedarburg High School',
                        '15' => 'CHS Team MZJ, Cedarburg High School',
                        '16' => 'CHS Team CG, Cedarburg High School',
                        '17' => 'CHS Team RJD, Cedarburg High School',
                        '18' => 'CHS Team RJT, Cedarburg High School',
                        '19' => 'Garrity Gang 2, Tosa East',
                        '20' => 'Code Sorcerers, Tosa East',
                        '21' => 'Snowdens Little Helpers, New Berlin Eisenhower',
                        '22' => 'Lower Your Tuition Costs, New Berlin Eisenhower',
                        '23' => 'Suite Life of Zack and Coding, Menomonee Falls High School',
                        '24' => 'Me dot Close, Menomonee Falls High School',
                        '25' => 'MFHS Varsity Coders, Menomonee Falls High School',
                        '26' => 'Purple Dolphins, Menomonee Falls High School',
                        '27' => 'Wasted Potential, Whitnall High School',
                        '28' => 'Team A, Whitnall High School',
                        '29' => 'Team B, Whitnall High School',
                        '30' => 'VAHS Scratch 1, Verona Area High School',
                        '31' => 'VAHS Scratch 2, Verona Area High School',
                        '32' => 'BlueJay Coders, Johnson Creek High School',
                        '33' => 'extra1',
                        '34' => 'extra2',
                        '35' => 'extra3',
                        '36' => 'extra4',
                        '37' => 'extra5',
                        '38' => 'extra6',
                        '39' => 'extra7',
			'40' => 'test team'
                );

        return $map[$number];
}

function checkJudgingPassword($password) {
        return $password == "scratchcat310";
}

?>
