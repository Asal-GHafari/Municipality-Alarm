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
			for(var i=1; i<=number ; i++){
				document.getElementById('posit').innerHTML +="دربند "+i+": <input type='text' name='addjob' class='addinput'/>&nbsp;"+"متراژ: <input type='text' name='addjob' class='addinput'/></br>";
			}
			}else if(valueposition!=''){
					
				//alert('number=>'+number);
				//alert('res=>'+res);
				if(res>=number){
					$('#posit').empty();
					for(var i=1; i<=res ; i++){
						document.getElementById('posit').innerHTML +="دربند "+i+": <input type='text' name='addjob' class='addinput'/>&nbsp;"+"متراژ: <input type='text' name='addjob' class='addinput'/></br>";
					}
				}else if(res<number){
					$('#posit').empty();
					for(var i=1; i<=res ; i++){
						document.getElementById('posit').innerHTML +="دربند "+i+": <input type='text' name='addjob' class='addinput'/>&nbsp;"+"متراژ: <input type='text' name='addjob' class='addinput'/></br>";
					}
				}
			}
		}else if(res==''){
			//alert('t');
			//$('#posit').empty();
		}
	});

});