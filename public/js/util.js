
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  return documento.value;
  
}


function upperCaseFirst(str) {
   var splitStr = str.toLowerCase().split(' ');
   for (var i = 0; i < splitStr.length; i++) {
       // You do not need to check if i is larger than splitStr length, as your for does that for you
       // Assign it back to the array
       splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
   }
   // Directly return the joined string
   return splitStr.join(' '); 
}


function cpfFormatValidation(input)
{
  
  
      if(input.value.length == 14)
      {
        var re = /\d{3}\.\d{3}\.\d{3}[-]\d{2}/;
        if (!input.value.match(re))
        {
            input.value = "";
            alert("Only number are valid. Type again");
        }else
          {
            alert("Next page.");
          }
      }else if(input.value.length < 14)
        {
          alert("Number of characters invalid. Type again");
          input.value = "";
        }else
          {
            alert("Unknown error. Type again");
            input.value = "";
          }

}