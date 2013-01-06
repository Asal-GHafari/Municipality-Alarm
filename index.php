<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript"  src="js/jquery.js" ></script>
<script type="text/javascript"  src="js/script.js"></script>
<link type="text/css" rel="stylesheet" href="css1/style.css" />

<?php include("php/sql.php");
	 echo $get
?>
</head>

<body>
	<div class="container">
    	<div class="header">
        	<div><a href="index.php"><img src="pic-ekhtar/6_13.gif" /></a></div>
            <div><a href="index.php"><img src="pic-ekhtar/6_03.gif" /></a></div>
            <div><a href="index.php"><img src="pic-ekhtar/6_05.gif" /></a></div>
            <div><a href="index.php"><img src="pic-ekhtar/6_15.jpg" /></a></div>
            <div><a href="index.php"><img src="pic-ekhtar/6_07.gif" /></a></div>
            <div><a href="index.php"><img src="pic-ekhtar/6_12.gif" /></a></div>
        </div>
        <div class="content">
        <div class="content-rigth">
        	<?php include("php/menu.php"); ?>
        </div>
        	<div class="content-center">
            	<form action="" method="post" class="frm">
            	<table border="4"  align="right" cellspacing="4px" >
                    <tr>
                        <td colspan=""><input type="text" placeholder="نام" name="name" /></td>
                        <td rowspan="11" id="posit"></td>
                    </tr>
                     <tr>
                        <td colspan=""><input type="text" placeholder="فامیل"  name="family" /></td>
                    </tr>
                    <tr>
                        <td colspan=""><input type="text" placeholder="شماره دبیرخانه"name="id-dabirkhane" /></td>
                    </tr>
                    <tr>
                     	<td colspan=""><input type="text" placeholder="مامور ابلاغ" name="mamoor"/></td>
                    </tr>
                    <tr>
                    	<td colspan=""><input type="text" placeholder="تعداد دربند" id="darband" name="nember-darband" onmouseout="add-input" /></td>                 </tr>
                    <tr>
                        <td colspan=""><input type="text" placeholder="نام شغل" name="jub-name" /></td>
                    </tr>
                    <tr>
                        <td  colspan=""><input type="text" placeholder="شماره درخواست" name="id-darkhast" /></td>
                    </tr>
                    <tr>
                        <td  colspan=""><input type="text" placeholder="شماره فیش" name="id-fish" /></td>
                    </tr>                     
                    <tr>
                        <td  colspan=""><input type="text" placeholder="مبلغ فیش" name="mablagh-fish" /></td>
                    </tr>
                    <tr>
                        <td  colspan=""><textarea rows="10" cols="20" placeholder="توضیحات" name="tozihat"></textarea></td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>  
                    <tr>
                        <td  align="left"><input type="submit" value="ثبت" name="submit"/></td>
                        <td  align="right"><input type="reset" value="پاک" /></td>
                    </tr>
                </table>
            </form>
            </div>
            <div class="clear">hhhugtukkuk</div>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>