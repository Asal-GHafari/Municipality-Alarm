<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript"  src="js/jquery.js" ></script>
<script type="text/javascript"  src="js/script.js"></script>
<link type="text/css" rel="stylesheet" href="css1/style.css" />

<?php
	 include("php/sql.php");
	 include("php/sql_taeen_khalaf.php");
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
            	<form action="mojaz.php" method="post" class="frm">
            	<table border="0"  align="right" cellspacing="2px" hspace="8px" dir="rtl" cellpadding="">
                    <tr>
                    	<td><input type="text"  placeholder="مساحت" name=""/></td>
                        <td><input type="text" value="تراکم" /></td>	
                    </tr>
                    <tr>
                    	<td><input type="text" value="منطقه شهری" /></td>
                        <td><input type="text" value="مقدار در مسیر" /></td>
                    </tr>
                    <tr>
                    	<td><input type="text" value="عرض معبر اصلی" /></td>
                    	<td><input type="text" value="عرض معبر فرعی" /></td>	
                    </tr>
                    <tr>
                    	<td><input type="text" value="عرض ملک" /></td>
                    	<td><input type="text" value="طول ملک" /></td>	
                    </tr>
                      <tr>
                        <td>
                        <select>
                        <option>جرم گیری</option>
                        <option>شمال</option>
                        <option>شرق</option>
                        </select>
                        </td>
                        <td>
                        <select>
                        <option>طرح خازنی</option>
                        <option>طرح طاش</option>
                        </select>
                        </td>
                    </tr>
                     <tr>
                        <td>
                        <select>
                        <option>گواهی</option>
                        <option>پایانکار</option>
                        <option>عدم خلاف</option>
                        <option>پروانه</option>
                        <option>ندارد</option>
                        </select>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                    	<td><input type="reset" value="پاک" /></td>
                        <td><input type="submit" value="بعدی"  name="sub_khalaf"/></td>
                    </tr>   
                </table>
            </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>