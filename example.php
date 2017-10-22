<?
include "uCal.class.php";
$d = new uCal;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uCal &quot;Umm al-Qura&quot; Hijri Calendar</title>
<style type="text/css">
<!--
body {
	background-color: #EBE9ED;
}
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.div {
	background-color: #FFFFFF;
	border: 1px solid #3366FF;
	padding: 5px;
	margin: 10px;
	overflow: auto;
}
.title {
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: -10px;
	margin-left: 10px;
	background-color: #3366FF;
	font-weight: bold;
	color: #FFFFFF;
	padding: 3px;
	width: 200px;
}
a {
	position: absolute;
	z-index: 111;
	width: 200px;
	right: 0px;
	top: 0px;
	text-align: center;
	font-weight: bold;
	color: #FFFFFF;
	background-color: #3366FF;
	text-decoration: none;
	vertical-align: middle;
}
.outputs {
	font-weight: bold;
	color: #FFFFFF;
	background-color: #999999;
	text-align: center;
	width: 20%;
	margin: -10px 40%;
}
-->
</style>
</head>

<body>
<h1 align="center">uCal &quot;Umm al-Qura&quot; Hijri Calendar </h1>
<form id="form1" name="form1" method="post" action="">
  <div class="title">Example 1:</div>
  <div class="div">
    <table width="100%" border="0" cellspacing="0">
    <tr>
      <td colspan="2"><strong>Choose a Day :  </strong></td>
      <td width="230">&nbsp;</td>
      <td width="5">&nbsp;</td>
      <td width="2" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="5">&nbsp;</td>
      <td><span class="style1">Results:</span></td>
    </tr>
    <tr>
      <td width="100" nowrap="nowrap"><strong>
        <label for="textfield">Day:</label>
        <input name="hd" type="text" id="textfield" value="20" size="2" maxlength="2" />
        <br />
      </strong></td>
      <td width="170" nowrap="nowrap"><strong>
        <label for="select">Month:</label>
        <select name="hm" id="select">
          <option value="1">Muharram</option>
          <option value="2" selected="selected">Safar</option>
          <option value="3">Rabi' I</option>
          <option value="4">Rabi' II</option>
          <option value="5">Jumada I</option>
          <option value="6">Jumada II</option>
          <option value="7">Rajab</option>
          <option value="8">Sha'aban</option>
          <option value="9">Ramadan</option>
          <option value="10">Shawwal</option>
          <option value="11">Dhu al-Qi'dah</option>
          <option value="12">Dhu al-Hijjah</option>
        </select> 
      </strong> &nbsp;</td>
      <td width="230" nowrap="nowrap"><strong>
         <label for="label"> Year:</label>
        <input name="hy" type="text" id="label" value="1396" size="4" maxlength="4" />
        <label for="Submit"></label>
        <input type="submit" name="h" value="Get Gregorian" id="h" />
      </strong></td>
      <td>&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
      <td nowrap="nowrap"><span class="style1">
        <?
	  if($_POST[h]){
		  $date = $d->u2g($_POST[hd],$_POST[hm],$_POST[hy]);
		  echo " ==> $date[day] / $date[month] / $date[year] <i>using \$uCal->u2g( $_POST[hd],$_POST[hm],$_POST[hy] );</i>";
	  }
	  ?>
      </span></td>
    </tr>
    <tr>
      <td width="100" nowrap="nowrap"><strong>
      <label for="label2">Day:</label>
      <input name="gd" type="text" id="label2" value="14" size="2" maxlength="2" />
      </strong></td>
      <td nowrap="nowrap"><strong>
        <label for="label3">Month:</label>
        <select name="gm" id="label3">
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4" selected="selected">Apr</option>
          <option value="5">May</option>
          <option value="6">Jun</option>
          <option value="7">Jul</option>
          <option value="8">Aug</option>
          <option value="9">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
      </strong></td>
      <td width="230" nowrap="nowrap"><strong>
         <label for="label4"> Year:</label>
        <input name="gy" type="text" id="label4" value="2007" size="4" maxlength="4" />
        <label for="Submit"></label>
        <input type="submit" name="g" value="Get Hijri" id="g" />
      </strong></td>
      <td>&nbsp;</td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
      <td nowrap="nowrap"><span class="style1">
        <?
	  if($_POST[g]){
		  $date = $d->g2u($_POST[gd],$_POST[gm],$_POST[gy]);
		  echo " ==> $date[day] / $date[month] / $date[year]  <i>using \$uCal->g2u( $_POST[gd],$_POST[gm],$_POST[gy] );</i>";
	  }
	  ?>
      </span></td>
    </tr>
  </table>
  </div>
  
</form>
<div align="left" class="title">Example 2:</div>
<div class="div">
  <?php
$closer = "?>";
$code = <<<END
<?php
include('uCal.class.php');
\$d = new uCal;

echo "Today is: <b>" . \$d->date("d/m/y -  l, F jS h:i A")."</b><br>\\n This month length is: <b>".\$d->date("t")\n. "</b>days, and Islamic lunation number is: <b>" .\$d->date("L - g a - r")."</b><hr>\\n";

\$d->setLang("ar");

echo "<div dir=\"rtl\">تاريخ اليوم: <b>" . \$d->date("d/m/y -  l, F jS h:i A")."</b><br>\\n طول هذا الشهر: <b>".\$d->date("t"). "</b> يوم وعدد دورات القمر حول الأرض حتى اليوم: <b>" .\$d->date("L - g a - r")."</b></div>\\n";
$closer


END;
highlight_string($code);
?>
</div> 
<div align="center" class="outputs">Outputs:</div><div class="div">
  <?php
echo "Today is: <b>" . $d->date("d/m/y -  l, F jS h:i A")."</b><br>\n This month length is: <b>".$d->date("t"). "</b>days, and Islamic lunation number is: <b>" .$d->date("L - g a - r")."</b><hr>\n";
$d->setLang("ar");
echo "<div dir=\"rtl\">تاريخ اليوم: <b>" . $d->date("d/m/y -  l, F jS h:i A")."</b><br>\n طول هذا الشهر: <b>".$d->date("t"). "</b> يوم وعدد دورات القمر حول الأرض حتى اليوم: <b>" .$d->date("L - g a - r")."</b></div>\n";
?>
</div>
<div align="left" class="title">Example 3:</div>
<div class="div">
<?
$code = <<<END
<?php
include('uCal.class.php');
\$d = new uCal;

\$d->setLang("en");
echo "Given date: <b>" . \$d->date("d/m/y -  l, F jS h:i A",\$d->mktime(22,10,30,2,3,1428), 0)\n."</b><br>\\n This month length is: <b>".\$d->date("t",\$d->mktime(22,10,30,2,3,1428), 0)\n. "</b> is this a leap year? <b>" .\$d->date("L - g a - r",\$d->mktime(22,10,30,2,3,1428), 0)."</b><hr>\\n";

\$d->setLang("ar");

echo "<div dir=\"rtl\">تاريخ اليوم: <b>" . \$d->date("d/m/y -  l, F jS h:i A",0,0)."</b><br>\\n طول هذا الشهر:<b>"\n.\$d->date("t",0,0)\n. "</b> السنة كبيسة؟  " .\$d->date("L - g a - r",0,0)."</b></div>\\n";
$closer


END;
highlight_string($code);
?>
</div>
<div align="center" class="outputs">Outputs:</div>
<div class="div">
  <?
$d->setLang("en");
echo "Given date is: <b>" . $d->date("d/m/y -  l, F jS h:i A",$d->mktime(22,10,30,2,3,1428), 0)."</b><br>\n This month length is: <b>".$d->date("t",$d->mktime(22,10,30,2,3,1428), 0). "</b> is this a leap year?  <b>" .$d->date("L - g a - r",$d->mktime(22,10,30,2,3,1428), 0)."</b><hr>\n";
$d->setLang("ar");
echo "<div dir=\"rtl\">تاريخ اليوم: <b>" . $d->date("d/m/y -  l, F jS h:i A",0,0)."</b><br>\n  طول هذا الشهر:<b>".$d->date("t",0,0). "</b> السنة كبيسة؟  <b>" .$d->date("L - g a - r",0,0)."</b></div>\n";

?>
</div>
<a href="http://aziz.oraij.com/">Aziz.Oraij.com</a>
</body>
</html>
