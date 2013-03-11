$(function(){
	$('#darband').hover(function(){
		res=$(this).val();
		if(res==''){
			$('#posit').empty();
		}
		//alert(res);
	},function(){
		res=$(this).val();
		if(res!=''){
			valueposition=$('#posit').html();
			if(valueposition==''){
				number=$(this).val();
			for(var i=0; i<number ; i++){
				document.getElementById('posit').innerHTML +="<input type='text' name='addjob' class='addinput'/></br>";
			}
			}else if(valueposition!=''){
					
				//alert('number=>'+number);
				//alert('res=>'+res);
				if(res>=number){
					$('#posit').empty();
					for(var i=0; i<res ; i++){
						document.getElementById('posit').innerHTML +="<input type='text' name='addjob' class='addinput'/></br>";
					}
				}else if(res<number){
					$('#posit').empty();
					for(var i=0; i<res ; i++){
						document.getElementById('posit').innerHTML +="<input type='text' name='addjob' class='addinput'/></br>";
					}
				}
			}
		}else if(res==''){
			//alert('t');
			//$('#posit').empty();
		}
	});

});