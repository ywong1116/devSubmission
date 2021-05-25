<?php

// instantiating empty arrays for 2 teams
$team1 = [];
$team2 = [];
$temp = [];

//sorting skill levels
$skill = [8,5,6,9,3,8,2,4,6,10,8,5,6,1,7,10,5,3,7,6];
sort($skill);
//print_r($skill); [1,2,3,3,4,5,5,5,6,6,6,6,7,7,8,8,8,9,10,10]

// total number of players
$numOfPlayers = count($skill);

//total skill level among all players
$totalSkill = array_sum($skill);

// desired skill level after split
$skillDividedCeil = ceil($totalSkill/2);
$skillDividedFloor = floor($totalSkill/2);

//splitting the teams into 2 based on sorted skill levels
for ($i = 0; $i < count($skill); $i++) {
    if ($i % 2 == 0) {
        array_push($team1, $skill[$i]);
    } 
    else {
        array_push($team2, $skill[$i]);
    }
}

$skill1 = array_sum($team1); //[1, 3, 4, 5, 6, 6, 7, 8, 8, 10] 58
$skill2 = array_sum($team2); //[2, 3, 5, 5, 6, 6, 7, 8, 9, 10] 61

//difference in skill level between the 2 teams

do {
    for ($i = 0; $i < count($team1); $i++) {
    //condition to swap if the difference between players are higher than the required amount of the swap
    if ((floor(abs($skill1 - $skill2)/2)) >= (abs($team1[$i] - $team2[$i]))) {
        $temp = $team2[$i];
        $team2[$i] = $team1[$i];
        $team1[$i] = $temp;
        }
    //updating array_sum after swapping
    $skill1 = array_sum($team1);
    $skill2 = array_sum($team2);
    }
    // condition to check if skill levels between the 2 teams are equal or within 1 point difference  
} while (abs($skill1 - $skill2) > 1);


?>