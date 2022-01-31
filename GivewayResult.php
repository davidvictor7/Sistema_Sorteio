<?php

class GiveawayResult{

	$initialValue;
	$finalValue;
	$giveawayName;
	$giveawayDate;
	$playerOneNumbers;
	$playerTwoNumbers;
	$playerThreeNumbers;
	$giveawayResultSorted;
	$giveawayResult;
	$resultPlayerOne;
	$resultPlayerTwo;
	$resultPlayerThree;

	public __construct($initialValue, $finalValue, $giveawayName, $giveawayDate, $playerOneNumbers, $playerTwoNumbers, $playerThreeNumbers){
		$this->initialValue = $initialValue;
		$this->finalValue = $finalValue;
		$this->giveawayName = $giveawayName;
		$this->giveawayDate = $giveawayDate;
		$this->playerOneNumbers = $playerOneNumbers;
		$this->playerTwoNumbers = $playerTwoNumbers;
		$this->playerThreeNumbers = $playerThreeNumbers;
	}

	public function sequenceGenerate(){
		$this->giveawayResult = [
			rand($this->initialValue,$this->finalValue),
			rand($this->initialValue,$this->finalValue),
			rand($this->initialValue,$this->finalValue),
			rand($this->initialValue,$this->finalValue),
			rand($this->initialValue,$this->finalValue),
			rand($this->initialValue,this->$finalValue)
		];

		$this->giveawayResultSorted = $this->giveawayResult;

		sort($this->giveawayResultSorted);

	}

	public function exec(){
		try{
			foreach ($this->giveawayResultSorted as $i) {
				foreach($this->playerOneNumbers as $e){
					if((int)$i === (int)$e){ array_push($this->resultPlayerOne, $e); }
				}
				foreach($this->playerTwoNumbers as $e2){
					if((int)$i === (int)$e2){ array_push($this->resultPlayerTwo, $e2); }
				}
				foreach($this->playerThreeNumbers as $e3){
					if((int)$i === (int)$e3){ array_push($this->resultPlayerThree, $e3); }
				}
			}

		}catch(Exception $e){
			return $e;
		}
	}

	function result(){

		$result = [
			"giveawayName"=>$this->giveawayName,
			"giveawayDate"=>$this->giveawayDate,
			"originalGiveawayResult"=>$this->originalGiveawayResult,
			"giveawayNumbersResult"=>$this->giveawayResult,
			"resultPlayerOne"=>$this->resultPlayerOne,
			"resultPlayerTwo"=>$this->resultPlayerTwo,
			"resultPlayerThree"=>$this->resultPlayerThree
		];


		echo json_encode($result);
		exit;
	}

}