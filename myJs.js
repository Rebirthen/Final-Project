
function _submitButton(){
	var text = document.getElementById('sampleText').value;
	var tmp;
	
	document.getElementById('textBlock1').innerHTML = tmp;
}
$(document).ready(function(){
	$('#sampleText').keyup(function(){
		var txt = $(this).val();
		if(txt != ''){
			//$('#textBlockAjax').html(txt);
			$.ajax({
				url:"fetch.php",
				method:"post",
				data:{sampleText:txt},
				dataType:"text",
				success:function(data){
					$('#textBlockAjax').html(data);
				}

			});
		}
	});
});