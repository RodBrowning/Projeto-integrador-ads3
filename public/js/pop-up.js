function showPopUp(tipo_operacao){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');

	popUpsDivBox.innerHTML = `	
								<div class="black_background" onclick="closePopUp()">
								</div>
								
								<div id="pop-up-box" class="pop-up-box">

								</div>
							`;

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = ()=>
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					var result = document.getElementById("pop-up-box");
					result.innerHTML = xmlhttp.responseText;
				}
		}
	xmlhttp.open('get', `./PhpRedirectCode/RedirectToPopUps.php?operacao=${tipo_operacao}`,true);
	xmlhttp.send();
}

function closePopUp(){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');

	popUpsDivBox.innerHTML = ``;	
}