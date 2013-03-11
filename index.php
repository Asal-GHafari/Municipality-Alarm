<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript"  src="js/jquery.js" ></script>
<script type="text/javascript"  src="js/script.js"></script>
<link type="text/css" rel="stylesheet" href="css1/style.css" />

<?php include("php/sql.php");
	//echo"kkk";
	// echo $getchap['invite-name'];
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
            	<form action="serch.php" method="post" class="frm">
            	<table border="0"  align="right" cellspacing="2px" hspace="8px" dir="rtl" cellpadding="">
                    <tr>
                        <td colspan=""><input type="text" placeholder="نام" /></td>
                        <td rowspan="3" colspan="2">&nbsp;</td>
                        <td rowspan="3" colspan="2"  ><fieldset><legend>تاریخ دبیر خانه</legend>
                        	<select name="year_dabirkhane">
                            	<option>سال</option>
                                <option>1391</option>
                                <option>1392</option>
                            </select>
                            <select name="month_dabirkhane">
                            	<option>ماه</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="day_dabirkhane">
                            	<option>روز</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </select>
                        </fieldset> 
                       </td>
                    </tr>
                    <tr>
                       <td><input type="text" name="family" placeholder="فامیل" /></td>
                    </tr>
                    <tr>
                       <td colspan=""><input type="text" name="id-dabirkhane" placeholder="شماره دبیرخانه"/><td>
                    </tr>
                    <tr>
                       <td colspan=""><input type="text"   name="mamoor" placeholder="مامور ابلاغ"/></td>
                       <td rowspan="" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td  colspan="">
                        	<select name="nameekhtar">
                            	<option><نوع اخطار></option>
                            	<option>دعوتنامه</option>
                                <option>ابلاغیه 5 روزه</option>
                                <option>ابلاغیه 10 روزه</option>
                                <option>ابلاغ رای</option>
                                <option>48 ساعته</option>
                                <option>پلمپ</option>
                                <option></option>
                                <option></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                       <td colspan=""><input type="text"  id="darband" name="nember-kelase"placeholder="کلاسه نوسازی"/>
                       </td>
                       <td rowspan="3" colspan="2"></td>
                       <td rowspan="3"  colspan="2">
                        	<fieldset><legend>تاریخ ابلاغ</legend>
                        		<select name="year_eblagh">
                            		<option>سال</option>
                                	<option>1391</option>
                                	<option>1392</option>
                            	</select>
                            	<select name="month_eblagh">
                            		<option>ماه</option>
                                	<option>1</option>
                                	<option>2</option>
                                	<option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
	                            </select>
    	                        <select name="day_eblagh">
                                    <option>روز</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
	                            </select>
                        </fieldset> 
                        </td>		
                    </tr>
                    <tr>
                        <td colspan=""><input type="text" name="jub-name" placeholder="نام شغل"/></td>
                    </tr>
                    <tr>
                        <td colspan=""><input type="text" name="id-darkhast" placeholder="شماره درخواست"/> 
                       </td>
                    </tr>
                    <tr>
                        <td colspan="">
                        	<textarea rows="10" cols="22"   name="tozihat">
                               توضیحات
                         	</textarea>
                        </td>
                        <td rowspan="3" colspan="2">&nbsp;</td>
                        <td align="center">
                        		<input type="submit" value="ثبت" name="submit" /></a>
                                </br></br>
                                <input type="reset"  value="پاک"/>
                                </br></br>
                                <input type="submit" name="submit_serch"  value="جستجو"/>
                        </td>
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