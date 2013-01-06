<?php 
function db_err(){
	$err_no = mysql_errno();
	$err_msg = mysql_error();
	die('Could not connect: ' . $err_no.$err_msg );
}
$DB_SERVER='localhost';
$DB_USER='root';
$DB_PASS='';
$DB_NAME='ekhtar';
$db_con=@mysql_connect($DB_SERVER,$DB_USER,$DB_PASS) or db_err();
mysql_select_db($DB_NAME,$db_con);

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$nameekhtar=$_POST['nameekhtar'];
	$family=$_POST['family'];
	$payankarmaskoni=$_POST['payankarmaskoni'];
	$iddabirkhane=$_POST['id-dabirkhane'];
	$tejaridaem=$_POST['tejaridaem'];
	$mamoor=$_POST['mamoor'];
	$nemberdarband=$_POST['nember-darband'];
	$jubname=$_POST['jub-name'];
	$iddarkhast=$_POST['id-darkhast'];
	$daypolomp=$_POST['daypolomp'];
	$monthpolomp=$_POST['monthpolomp'];
	$yearplomp=$_POST['yearplomp'];
	$idfish=$_POST['id-fish'];
	$mablaghfish=$_POST['mablagh-fish'];	
	$tozihat=$_POST['tozihat'];
	$daydabirkhane=$_POST['daydabirkhane'];
	$monthdabirkhane=$_POST['monthdabirkhane'];
	$yeardabirkhane=$_POST['yeardabirkhane'];
	$dayeblagh=$_POST['dayeblagh'];
	$montheblagh=$_POST['montheblagh'];
	$yeareblagh=$_POST['yeareblagh'];
	$dayendmojavez=$_POST['dayendmojavez'];
	$monthendmojavez=$_POST['monthendmojavez'];
	$yearendmojavez=$_POST['yearendmojavez'];
}

function select($iddabirkhane,$nametable)
{	
	$res=mysql_query("SELECT * FROM $nametable WHERE invite_id_dabirkhane=$iddabirkhane");
	if(!mysql_num_rows($res)){	
		$get_iddabirkhane=0;
	}else{ 
		while($row = mysql_fetch_array($res,MYSQL_ASSOC)){	
			$get_iddabirkhane=$row['invite_id_dabirkhane'];
		}
	}
		return($get_iddabirkhane);
}
function insert($nametable,$name,$family,$iddabirkhane,$mamoor,$daydabirkhane,$monthdabirkhane,$yeardabirkhane,$dayeblagh,$montheblagh,$yeareblagh)
{
	mysql_query("INSERT INTO $nametable VALUES 		('$name','$family','$iddabirkhane','$mamoor','$daydabirkhane','$monthdabirkhane','$yeardabirkhane','$dayeblagh','$montheblagh','$yeareblagh')");	
}
switch($nameekhtar){
	case "دعوتنامه":
				 $get=select($iddabirkhane,invite);
				 if($get==0){
					insert(invite,$name,$family,$iddabirkhane,$mamoor,$daydabirkhane,$monthdabirkhane,$yeardabirkhane,$dayeblagh,$montheblagh,$yeareblagh);

				}
				
				 
//insert(invite,$name,$family,$iddabirkhane,$mamoor,$daydabirkhane,$monthdabirkhane,$yeardabirkhane,$dayeblagh,$montheblagh,$yeareblagh);
			//$get=select($iddabirkhane,invite);
			//echo $get;
			//insert($get,invite);
	break;
	case "5روزه":echo $nameekhtar; 
	break;
	case "10 روزه": echo $nameekhtar;
	break;
	case "ابلاغ رای ":echo $nameekhtar; 
	break;
	case "48 روزه":echo $nameekhtar; 
	break;
	case "پلمپ":echo $nameekhtar; 
	break;
	
}
/*mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)");
*/


mysql_close($db_con);
?>