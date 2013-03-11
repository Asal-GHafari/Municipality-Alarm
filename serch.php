<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript"  src="js/jquery.js" ></script>
<script type="text/javascript"  src="js/script.js"></script>
<link type="text/css" rel="stylesheet" href="css1/style.css" />

<?php include("php/sql.php");

	//print_r($array_name_table);
	//print_r($array_records);
	
	

?>
</head>

<body>
	<div class="container">
    	<div class="header"></div>
        <div class="content">
        <div class="content-rigth">
        	<?php include("php/menu.php"); ?>
        </div>
        	<div class="content-center">

	<table border="2" align="right" dir="rtl" class="serch-tbl" cellspacing="2px" hspace="8px" >
    	 <tr>
            <td>نوع اخطار</td>
            <td><?php echo $array_name_table[0] ?></td>
            <td><?php echo $array_name_table[1] ?></td>
            <td><?php echo $array_name_table[2] ?></td>
            <td><?php echo $array_name_table[3] ?></td>
            <td><?php echo $array_name_table[4] ?></td>
        </tr>
    	<tr>
        	<td><label>نام</label></td>
            <td><?php echo $array_records[0][0]; ?></td>
            <td><?php echo $array_records[1][0]; ?></td>
            <td><?php echo $array_records[2][0]; ?></td>
            <td><?php echo $array_records[3][0]; ?></td>
            <td><?php echo $array_records[4][0]; ?></td>
        </tr>
        <tr>
            <td><label>فامیل</label></td>
            <td><?php echo $array_records[0][1]; ?></td>
            <td><?php echo $array_records[1][1]; ?></td>
            <td><?php echo $array_records[2][1]; ?></td>
            <td><?php echo $array_records[3][1]; ?></td>
            <td><?php echo $array_records[4][1]; ?></td>
        </tr>
        <tr>
            <td>شماره دبیر خانه</td>
           <td><?php echo $array_records[0][2]; ?></td>
           <td><?php echo $array_records[1][2]; ?></td>
           <td><?php echo $array_records[2][2]; ?></td>
           <td><?php echo $array_records[3][2]; ?></td>
           <td><?php echo $array_records[4][2]; ?></td>
        </tr>
         <tr>
            <td>مامور ابلاغ</td>
            <td><?php echo $array_records[0][3]; ?></td>
            <td><?php echo $array_records[1][3]; ?></td>
            <td><?php echo $array_records[2][3]; ?></td>
            <td><?php echo $array_records[3][3]; ?></td>
            <td><?php echo $array_records[4][3]; ?></td>
        </tr>
         <tr>
		    <td>کلاسه نوسازی</td>
            <td><?php echo $array_records[0][4]; ?></td>
            <td><?php echo $array_records[1][4]; ?></td>
            <td><?php echo $array_records[2][4]; ?></td>
            <td><?php echo $array_records[3][4]; ?></td>
            <td><?php echo $array_records[4][4]; ?></td>
		</tr>
        <tr>
            <td>نام شغل </td>
            <td><?php echo$array_records[0][5];?></td>
            <td><?php echo$array_records[1][5];?></td>
            <td><?php echo$array_records[2][5];?></td>
            <td><?php echo$array_records[3][5];?></td>
            <td><?php echo$array_records[4][5];?></td>
        </tr>
        <tr>
        	<td>شماره درخواست</td>
            <td><?php echo $array_records[0][6]; ?></td>
            <td><?php echo $array_records[1][6]; ?></td>
            <td><?php echo $array_records[2][6]; ?></td>
            <td><?php echo $array_records[3][6]; ?></td>
            <td><?php echo $array_records[4][6]; ?></td>
        </tr>
        <tr>
            <td>توضیحات</td>
            <td><?php echo $array_records[0][7];?></td>
            <td><?php echo $array_records[1][7];?></td>
            <td><?php echo $array_records[2][7];?></td>
            <td><?php echo $array_records[3][7];?></td>
            <td><?php echo $array_records[4][7];?></td>
        </tr>
        <tr>
            <td>تاریخ دبیر خانه</td>
        </tr>
        <tr>
            <td>تاریخ ابلاغ</td>
		</tr>
    </table>
     </div>
            <div class="clear"></div>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>