<?php
  $rentalid = $_GET['rid'];
  include("weeklibrary/login.php");
  login();
  $queryt = "SELECT * FROM summerrentals WHERE id = $rentalid";
  $resultt = mysql_query($queryt) or die(mysql_error());
  $rowt = mysql_fetch_array($resultt);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Weekapaug RI rental, Weekapaug summer rental, Weekapaug vacation rental">
<meta name="description" content="Weekapaug Rental - Great Summer Rental in the Weekapaug RI area - <?php echo $rowt['strnumber']; ?> <?php echo $rowt['street']; ?>">
<title>Weekapaug RI Rental | <?php echo $rowt['strnumber']; ?> <?php echo $rowt['street']; ?> | Weekapaug Life</title>
<link href="wl.css" rel="stylesheet" type="text/css" media="projection,screen" />
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body onload="MM_preloadImages('showimage.php?id=<?php echo $rentalid; ?>&amp;photoid=1','showimage.php?id=<?php echo $rentalid; ?>&amp;photoid=2','showimage.php?id=<?php echo $rentalid; ?>&amp;photoid=3','showimage.php?id=<?php echo $rentalid; ?>&amp;photoid=4','showimage.php?id=<?php echo $rentalid; ?>&amp;photoid=5','showimage.php?id=<?php echo $rentalid; ?>&amp;photoid=6')">
<div id="container">
<div id="header">
    <img src="images/weekapauglife.jpg" alt="Weekapaug Rhode Island Real Estate and Summer Rentals" title="Weekapaug Rhode Island Real Estate and Summer Rentals" />
</div>
<div id="rental">
<?php
     $query = "SELECT * FROM summerrentals WHERE id = $rentalid";
     $result = mysql_query($query) or die(mysql_error());
     $row = mysql_fetch_array($result);
?>
   <div id="title"><h1>Weekapaug RI Summer Rental</h1></div>
   <div id="menu">
     <ul>
      <li><a href="index.php"><img src="images/crab.gif" width="120" height="57" border="0" title="Weekapaug Life Home Page" /><br />
        Home</a></li>
      <li><a href="rentals.php"><img src="images/weekapaugmapsm.jpg" width="120" height="57" border="0" title="Weekapaug Rental Map" /><br />Rental Map</a></li>
      <li><a href="rentallist.php"><img src="images/lists.jpg" width="120" height="57" border="0" title="Weekapaug Rental List" /><br />Rental List</a></li>
      <li><a href="contact.php?rentals=y&rentaddr=<?php echo $row['strnumber']; ?> <?php echo $row['street']; ?>"><img src="images/moreinfo.jpg" width="120" height="57" border="0" title="Get More Info from Robin and DeeDee"  /><br />More Info</a></li>
      <li><a href="rentalprint.php?rid=<?php echo $rentalid; ?>" target="_blank"><img src="images/printer.jpg" width="120" height="57" border="0" title="Weekapaug Rental Information" /><br />Print</a></li>
     </ul> 
   </div>
   
   <div id="mainpic"><img src="showimage.php?id=<?php echo $rentalid; ?>&photoid=1" name="mainphoto" id="mainphoto" /></div>
   <div id="text">
       <div align="center"><?php echo $row['strnumber']; ?> <?php echo $row['street']; ?>, <?php echo $row['town']; ?></div><br />
<?php  if ($row['info'] != "") { ?>
          <div align="justify"><?php echo $row['info']; ?></div><br />
<?php  } ?>
       <div align="center"><?php echo $row['amenities']; ?></div><br />
<?php  if ($row['rooms'] != "") { ?>
       <div align="justify"><?php echo $row['rooms']; ?></div><br />
<?php  } 
       if ($row['summer'] != "") {
?>
       <div align="center">2014 Availability: <?php echo $row['summer']; ?></div>
<?php  }
       else {
?>
       <div align="center">2014 Availability: RENTED</div>
<?php  }  ?>   
   
</div>
<?php
   $query1 = "SELECT OCTET_LENGTH(picture) from rental_photos WHERE rentalid = $rentalid and photoid = 1";
   $result1 = mysql_query($query1) or die(mysql_error());
   $row1 = mysql_fetch_array($result1);
   if ($row1[0] > 0)
      {
?>
      <div id="pic1" onmouseover="MM_swapImage('mainphoto','','showimage.php?id=<?php echo $rentalid; ?>&photoid=1',1)">
      <img src="showimage.php?id=<?php echo $rentalid; ?>&photoid=1&type=thumb" name="thumb1" id="thumb1" />
      </div>
<?php }
   $query2 = "SELECT OCTET_LENGTH(picture) from rental_photos WHERE rentalid = $rentalid and photoid = 2";
   $result2 = mysql_query($query2) or die(mysql_error());
   $row2 = mysql_fetch_array($result2);
   if ($row2[0] > 0)
      {
?>
       <div id="pic2" onmouseover="MM_swapImage('mainphoto','','showimage.php?id=<?php echo $rentalid; ?>&photoid=2',1)">
      <img src="showimage.php?id=<?php echo $rentalid; ?>&photoid=2&type=thumb" name="thumb2" id="thumb2"/>
      </div>
<?php }
   $query3 = "SELECT OCTET_LENGTH(picture) from rental_photos WHERE rentalid = $rentalid and photoid = 3";
   $result3 = mysql_query($query3) or die(mysql_error());
   $row3 = mysql_fetch_array($result3);
   if ($row3[0] > 0)
      {
?>      
      <div id="pic3" onmouseover="MM_swapImage('mainphoto','','showimage.php?id=<?php echo $rentalid; ?>&photoid=3',1)">
      <img src="showimage.php?id=<?php echo $rentalid; ?>&photoid=3&type=thumb" name="thumb3" id="thumb3"/>
      </div>
<?php }
   $query4 = "SELECT OCTET_LENGTH(picture) from rental_photos WHERE rentalid = $rentalid and photoid = 4";
   $result4 = mysql_query($query4) or die(mysql_error());
   $row4 = mysql_fetch_array($result4);
   if ($row4[0] > 0)
      {
?>      
      <div id="pic4" onmouseover="MM_swapImage('mainphoto','','showimage.php?id=<?php echo $rentalid; ?>&photoid=4',1)">
      <img src="showimage.php?id=<?php echo $rentalid; ?>&photoid=4&type=thumb" name="thumb4" id="thumb4"/>
      </div>
<?php }
   $query5 = "SELECT OCTET_LENGTH(picture) from rental_photos WHERE rentalid = $rentalid and photoid = 5";
   $result5 = mysql_query($query5) or die(mysql_error());
   $row5 = mysql_fetch_array($result5);
   if ($row5[0] > 0)
      {
?>      
      <div id="pic5" onmouseover="MM_swapImage('mainphoto','','showimage.php?id=<?php echo $rentalid; ?>&photoid=5',1)">
      <img src="showimage.php?id=<?php echo $rentalid; ?>&photoid=5&type=thumb" name="thumb5" id="thumb5"/>
      </div>
<?php }
   $query6 = "SELECT OCTET_LENGTH(picture) from rental_photos WHERE rentalid = $rentalid and photoid = 6";
   $result6 = mysql_query($query6) or die(mysql_error());
   $row6 = mysql_fetch_array($result6);
   if ($row6[0] > 0)
      {
?>      
      <div id="pic6" onmouseover="MM_swapImage('mainphoto','','showimage.php?id=<?php echo $rentalid; ?>&photoid=6',1)">
      <img src="showimage.php?id=<?php echo $rentalid; ?>&photoid=6&type=thumb" name="thumb6" id="thumb6"/>
      </div>
<?php } ?>      
</div>
<div id="footer">
   <?php include('footer.php'); ?>
</div>
</div>
</body>
</html>
