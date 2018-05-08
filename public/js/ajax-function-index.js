
function ajaxRequestIndex(Page){
	let page = Page;
	var xmlHttp = new XMLHttpRequest();

	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			let main = document.getElementById('main');
			console.log(main.innerHtml)
			main.innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open('get',`PhpRedirectCode/RedirectToPage.php?page=${page}`,true);
	xmlHttp.send();
}