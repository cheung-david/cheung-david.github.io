<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#form1 table tr td h3 {
	font-family: Arial, Helvetica, sans-serif;
}
#form1 table tr td {
	font-family: Arial, Helvetica, sans-serif;
}
#apDiv1 {
	position:absolute;
	left:349px;
	top:140px;
	width:306px;
	height:19px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:302px;
	top:82px;
	width:686px;
	height:28px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:469px;
	top:26px;
	width:314px;
	height:87px;
	z-index:3;
}
-->
</style>
</head>
<body>

<div id="apDiv2">
  <p> If you have any suggestions or comments then please leave a comment and we'll get back to you within 24 hours</p>
</div>
<div id="apDiv3"><h1>Comments Sector</h1></div>

<div id="apDiv1">
<form id="form1" method="post" action="comments.php">
  <table width="415" border="0">
 
  <tr>
    <td width="90"><div align="left">Name:</div></td>
    <td width="318"><input name="name" type="text" id="name" value="" size="53" maxlength="100" /></td>
  </tr>
  
  <tr>
    <td><div align="left">Email:</div></td>
    <td><input name="email" type="text" id="email" value="" size="53" maxlength="60" /></td>
  </tr>
 
  <tr>
    <td><div align="left">Subject:</div></td>
    <td><input name="subject" type="text" id="subject" value="" size="53" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td><div align="left">Comment:</div></td>
    <td><textarea name="comment" cols="50" rows="10" id="comment"></textarea></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td><div align="center"></div></td>
    <td>
      <input type="submit" name="submit" id="submit" value="Submit" />
      </td>
  </tr>
</table>
</form>
</div>

</body>
</html>