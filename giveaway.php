<?php 

$initialValue =  $_POST['initialValue'];
$finalValue = $_POST['finalValue'];
$giveawayName = $_POST['giveawayName'];
$giveawayDate = $_POST['giveawayDate'];
$playerOneNumbers = $_POST['playerOneNumbers'];
$playerTwoNumbers = $_POST['playerTwoNumbers'];
$playerThreeNumbers = $_POST['playerThreeNumbers'];

$giveawayResult = new GiveawayResult($initialValue, $finalValue, $finalValue, $giveawayName, $giveawayDate, $playerOneNumbers, $playerTwoNumbers, $playerThreeNumbers);


$giveawayResult->sequenceGenerate();
$giveawayResult->exec();
$giveawayResult->result();




