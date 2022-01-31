
function validate(){
	return true;
}

$(document).ready(()=>{
	
	$("#buttonSort").click(()=>{

		if(!validate()){  return; }

		let dataToSubmit = {
			playerOneNumbers: [5, 22, 35, 38, 40, 60],
			playerTwoNumbers: [1, 29, 35, 38, 39, 51],
			playerThreeNumbers: [1, 29, 35, 38, 39, 51],
			giveawayName: $("#giveawayName").val(),
			giveawayDate: $("#giveawayDate").val(),
			initialValue: $("#initialValue").val(),
			finalValue: $("#finalValue").val()
		}

		$.ajax({
			url:'giveaway.php',
			type:'post',
			data: dataToSubmit,
			success: function(response){
				console.log(response)

				response = JSON.parse(response);

				$("#giveawayNumbers").text(" Números sorteados:("+response.originalGiveawayResult.join(" - ")+"), Em ordem: ("+response.giveawayNumbersResult.join(" - ")+")");


				if(response.resultPlayerOne.length > 0){
					$("#playerOneResult").text("Números acertados: "+response.resultPlayerOne.join(" - "));
				}else{
					$("#playerOneResult").text("Nenhum acerto.");
				}

				
				if(response.resultPlayerTwo.length > 0){
					$("#playerTwoResult").text("Números acertados: "+response.resultPlayerTwo.join(" - "));
				}else{
					$("#playerTwoResult").text("Nenhum acerto.");
				}

				if(response.resultPlayerThree.length > 0){
					$("#playerThreeResult").text("Números acertados: "+response.resultPlayerThree.join(" - "));
				}else{
					$("#playerThreeResult").text("Nenhum acerto.");
				}
			}
		})


	});

})