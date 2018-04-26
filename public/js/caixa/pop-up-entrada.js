function showPopUp(tipo_operacao){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');

	popUpsDivBox.innerHTML = `	
								<div class="black_background" onclick="closePopUp()">
								</div>
								
								<div class="pop-up-box">

								</div>
							`;

}

function closePopUp(){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');

	popUpsDivBox.innerHTML = ``;	
}