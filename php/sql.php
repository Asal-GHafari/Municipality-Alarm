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
/*----------------------------------------------------*/
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$family=$_POST['family'];
	$iddabirkhane=$_POST['id-dabirkhane'];
	$mamoor=$_POST['mamoor'];
	$nemberkelase=$_POST['nember-kelase'];
	$jubname=$_POST['jub-name'];
	$iddarkhast=$_POST['id-darkhast'];
	$tozihat=$_POST['tozihat'];
	$nameekhtar=$_POST['nameekhtar'];
	$day_e=$_POST['day_eblagh'];
	$month_e=$_POST['month_eblagh'];
	$year_e=$_POST['year_eblagh'];
	$day_d=$_POST['day_dabirkhane'];
	$month_d=$_POST['month_dabirkhane'];
	$year_d=$_POST['year_dabirkhane'];
}
/*--------------------------fun select--------------------------*/
function select($iddabirkhane,$nametable)
{	
	$res=mysql_query("SELECT * FROM $nametable WHERE id_dabirkhane='$iddabirkhane'");
	$count=mysql_num_rows($res);
	if($count!=0){
		while($row = mysql_fetch_array($res,MYSQL_ASSOC)){	
			return $row;
		}
	}else if($count==0){return $count;} 	
}
/*--------------------fun insert--------------------------------*/
function insert($nametable,$name,$family,$iddabirkhane,$mamoor,$nemberkelase,$jubname,$iddarkhast,$tozihat,$day_e,$month_e,$year_e,$day_d,$month_d,$year_d)
{
	mysql_query("INSERT INTO $nametable VALUES 					   ('$name','$family','$iddabirkhane','$mamoor','$nemberkelase','$jubname','$iddarkhast','$tozihat','$day_e','$month_e','$year_e','$day_d','$month_d','$year_d')");	
}
function get($row){
	$array_row[0]=$row['name'];
	$array_row[1]=$row['family'];
	$array_row[2]=$row['id_dabirkhane'];
	$array_row[3]=$row['name-mamoor'];
	$array_row[4]=$row['number-kelase'];
	$array_row[5]=$row['job-name'];
	$array_row[6]=$row['id-darkhast'];
	$array_row[7]=$row['description'];
	$array_row[8]=$row['day_e'];
	$array_row[9]=$row['month_e'];
	$array_row[10]=$row['year_e'];
	$array_row[11]=$row['day_d'];
	$array_row[12]=$row['month_d'];
	$array_row[13]=$row['year_d'];
	return $array_row;
}
/*----------------------- insert -----------------------------*/
switch($nameekhtar){
	case "دعوتنامه":
					$get_row=select($iddabirkhane,invite);
				 if($get_row==0){
					insert(invite,$name,$family,$iddabirkhane,$mamoor,$nemberkelase,$jubname,$iddarkhast,$tozihat,$day_e,$month_e,$year_e,$day_d,$month_d,$year_d);
				}else{
					//echo "3";
					$g=select_kelase($nemberkelase,invite);
					echo $g;
					//$res_array=get($get_row);
					//echo $res_array[0];				
			 	}
	break;
	case "ابلاغیه 5 روزه":
				$get_row=select($iddabirkhane,day5);
				 if($get_row==0){
					insert(day5,$name,$family,$iddabirkhane,$mamoor,$nemberkelase,$jubname,$iddarkhast,$tozihat,$day_e,$month_e,$year_e,$day_d,$month_d,$year_d);
				}else{
					//$res_array=get($get_row);	
				}
	break;
	case "ابلاغیه 10 روزه":
				$get_row=select($iddabirkhane,day10);
				if($get_row==0){
					insert(day10,$name,$family,$iddabirkhane,$mamoor,$nemberkelase,$jubname,$iddarkhast,$tozihat,$day_e,$month_e,$year_e,$day_d,$month_d,$year_d);
				}else{
					//$res_array=get($get_row);	
				}
	break;
	case "ابلاغ رای":
				$get_row=select($iddabirkhane,ray);
				 if($get_row==0){
					insert(ray,$name,$family,$iddabirkhane,$mamoor,$nemberkelase,$jubname,$iddarkhast,$tozihat,$day_e,$month_e,$year_e,$day_d,$month_d,$year_d);
				}else{
					//$res_array=get($get_row);	
				}
	break;
	case "48 ساعته":
				$get_row=select($iddabirkhane,day48);
				 if($get_row==0){
					insert(day48,$name,$family,$iddabirkhane,$mamoor,$nemberkelase,$jubname,$iddarkhast,$tozihat,$day_e,$month_e,$year_e,$day_d,$month_d,$year_d);
				}else{
					//$res_array=get($get_row);	
				}
	break;
	case "پلمپ":
				$get_row=select($iddabirkhane,polmp);
				 if($get_row==0){
					insert(polmp,$name,$family,$iddabirkhane,$mamoor,$nemberkelase,$jubname,$iddarkhast,$tozihat,$day_e,$month_e,$year_e,$day_d,$month_d,$year_d);
				}else{
					//$res_array=get($get_row);	
				}
	break;
}
/*-------------------------------select print-------------------*/
function select_kelase($nemberkelase,$nametable){
	echo $nemberkelase;
	$resultselect=mysql_query("SELECT * FROM $nametable WHERE numberkelase='$nemberkelase'");
	$hh=mysql_num_rows($resultselect);
	echo $hh;
	return $hh;
}
/*--------------------------- print -------------------------*/

$table=0;
$i2=0;
$array_name_table=array();
$array_records=array();
if(isset($_POST['submit_serch'])){
$result2=select_kelase($nemberkelase,invite);

//$result=select($iddabirkhane,invite);
	echo $result2;
	/*if($result){
		$res_array=get($result);
		$array_name_table[$i2]="invite";
		$array_records[$i2]=$res_array;
		$i2++;
		$table+=1;
	}
	$result2=select($iddabirkhane,day5);
	if($result2){
		$res_array=get($result2);
		$array_name_table[$i2]="day5";
		$array_records[$i2]=$res_array;
		$i2++;
		$table=+1;
	}
	$result3=select($iddabirkhane,day10);
	if($result3){
		$res_array=get($result3);
		$array_name_table[$i2]="day10";
		$array_records[$i2]=$res_array;
		$i2++;
		$table=+1;
	}
	$result4=select($iddabirkhane,ray);
	if($result4){
		$res_array=get($result4);
		$array_name_table[$i2]="ray";
		$array_records[$i2]=$res_array;
		$i2++;
		$table=+1;
	}
	$result5=select($iddabirkhane,day48);
	if($result5){
		$res_array=get($result5);
		$array_name_table[$i2]="day48";
		$array_records[$i2]=$res_array;
		$i2++;
		$table=+1;
	}
	$result6=select($iddabirkhane,polmp);
	if($result6){
		$res_array=get($result6);
		$array_name_table[$i2]="polmp";
		$array_records[$i2]=$res_array;
		$i2++;
		$table=+1;
	}*/
}
/*----------------------------------------------------*/
mysql_close($db_con);
?>