<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome To Radio Leacock! -- Comment</title>
<link href="../style.css" type="text/css" rel="stylesheet">
<link href="../slider.css" type="text/css" rel="stylesheet">
<link href="../hover.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="../jquery.flexslider.js"></script>
    <script type="text/javascript" src="../jquery.flexslider-min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				effect: 'slide'
			});
		})
	</script>
	<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
    animationLoop: true,
    itemWidth: 210,
    itemMargin: 5,
    minItems: 1,
    maxItems: 1
  });
});
</script>
<style type="text/css">

#apDiv8 {
	position:absolute;
	left:145px;

}


</style>
</head>

<body>
<div class="Core">
<div class="Core">
<div class="Navigation"><img src="../Images/Navigation.png" border="0" usemap="#Map"/>
<div id="apDiv1"><a href="index.html" class="bubble-bottom ">HOME</a></div>
<div id="apDiv2"><a href="about.html" class="bubble-bottom ">ABOUT</a></div>
<div id="apDiv3"><a href="shows.html" class="bubble-bottom ">SHOWS</a></div>
<div id="apDiv4"><a href="crew.html" class="bubble-bottom ">THE CREW</a></div>
<div id="apDiv5"><a href="cc.html" class="bubble-bottom ">COMMENT+CONTACT</a></div>

</div>

<div class="Banner">
<img src="../Images/Banner.png" border="0" usemap="#Map"/>
</div>
<div class="Gradient">
<img src="../Images/Gradient.png" border="0" usemap="#Map"/></div>
</div>
<div class="OnAir">
<img src="../Images/OnAir.png" border="0" usemap="#Map"/></div>

<div class="contacthold">
<div id="apDiv6"><h3><font color="#FFFFFF"style="font-size:36px">Comments Sector</font></h3></div>
<div id="apDiv7">
  <p><font color="#FFFFFF"style="font-size:20px"> If you have any suggestions or comments then please leave a comment and we'll get back to you within 24 hours</font>
 </p>
</div>
<div id="apDiv8">
<form id="form1" method="post" action="comments.php"> 
  <table width="415" border="0">
 
  <tr>
    <td width="90"><div align="center">
    <font color="#FFFFFF"style="font-size:20px">
    Name:</font></div></td>
    <td width="318"><input name="name" type="text" id="name" value="" size="53" maxlength="100" /></td>
  </tr>
  
  <tr>
    <td><div align="center">
    <font color="#FFFFFF"style="font-size:20px">
    Email:</font></div></td>
    <td><input name="email" type="text" id="email" value="" size="53" maxlength="60" /></td>
  </tr>
 
  <tr>
    <td><div align="left">
    <font color="#FFFFFF"style="font-size:20px">
    Subject:</font></div></td>
    <td><input name="subject" type="text" id="subject" value="" size="53" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td><div align="center">
    <font color="#FFFFFF"style="font-size:20px">
    Comment:</font></div></td>
    <td><textarea name="comment" cols="50" rows="10" id="comment"></textarea></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><div align="center">
      <input type="submit" name="submit" id="submit" value="Submit" />
    </div></td>
  </tr>
  </table>
</form>
</div>
</div>
</div>


</div>

</div>
</div>
</body>
</html>
