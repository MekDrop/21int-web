<html>
<head>
<title>21 Int</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1257">
<meta http-equiv="Page-Enter" CONTENT="RevealTrans(Duration=1,Transition=16)">
<script language="JavaScript">

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_changeProp(objName,x,theProp,theValue) { //v3.0
  var obj = MM_findObj(objName);
  if (obj && (theProp.indexOf("style.")==-1 || obj.style)) eval("obj."+theProp+"='"+theValue+"'");
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function GoTo(URL){
	location.href=URL;
}

</script>
<style type="text/css">
<!--
.2D {border: 1px #0058FF solid; background-color: #FFFFFF; font-family: "Times New Roman", Times, serif; font-size: 14px; font-style: normal; line-height: normal; font-weight: normal; font-variant: normal; text-transform: none; color: #000000; text-decoration: none}

.2D-Big {border: 1px #0058FF solid; background-color: #66CCFF; font-family: Geneva, Arial, Helvetica, san-serif; font-size: 10px; font-style: normal; line-height: normal; font-weight: bolder; font-variant: normal; text-transform: none; color: #000000; text-decoration: none}

Body {font-size:16px;font-name:times new roman;scrollbar-face-color: #006799;     scrollbar-shadow-color:white;        scrollbar-highlight-color:#006799;       scrollbar-3dlight-color:white        scrollbar-darkshadow-color: #006799;      scrollbar-track-color:#006799;    scrollbar-arrow-color: white;     }

.menudescriptionfont {font-family: "Courier New", Courier, mono; font-size: 12px; font-style: normal; line-height: normal; font-weight: bold; font-variant: normal; text-transform: none; color: #CC3333; text-decoration: none;width:134px}

.melynanuorodabepakeitimu {color: #6633FF; text-decoration: none; cursor: hand}

Div {font-size:16px;font-name:times new roman}

Li{font-size:16px;font-name:times new roman}

A{font-size:16px;font-name:times new roman;text-decoration: none; color: #000000}

.menulinks {color: #CCFF33; text-decoration: none; font-family: "Times New Roman", Times, serif; font-size: 14px; font-style: normal; line-height: normal; font-weight: normal; font-variant: normal; text-transform: none}

a:active {text-decoration: blink; color: #000000}

a:hover {text-decoration: underline; color: #000000}

/* End of style section. Generated by AceHTML at 2000.10.17 19:00:02 */
-->
</style>
</head>

<body bgcolor="#006799" text="#000000">
<table border="0" cellspacing="0" cellpadding="0" width="740" align="center">
  <tr>
    <td height="84" colspan="2" align="center" valign="bottom" nowrap> 
	 <table border=0  cellspacing="0" cellpadding="0" width="100%" height="100%"><tr><td>
      <embed src="Flash/Logo.swf" width="100%" height="100%" autostart="true" align="bottom" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" scale="exactfit" swliveconnect="true" menu="false"></embed> 
	  </td>
	  </tr>
	  </table>
    </td>
</tr><tr> 
<td width="134" align="left" valign="top" bgcolor="#0099FF">
<table width="134" border="0" cellspacing="0" cellpadding="0" bgcolor="#0099FF">
<tr>
<td bgcolor="#b0c4de" width="125">
<div align="center" class="menudescriptionfont">Meniu</div>
</td>
</tr>
<tr> 
<td width="125" style="width:134px">
<?PHP

 $MenuItems[0]="Naujienos";
 $MenuLinks[0]="index.php?site=news&action=display";
 $MenuIcons[0]="Images/MenuIcons/9574.PNG";
 
 $MenuItems[1]="Atsisiuntimai";
 $MenuLinks[1]="index.php?site=downloads&action=display";
 $MenuIcons[1]="Images/MenuIcons/9874.PNG";
 
 $MenuItems[2]="Id�jos";
 $MenuLinks[2]="index.php?site=ideas&action=display";
 $MenuIcons[2]="Images/MenuIcons/9986.PNG";

 $MenuItems[3]="Paslaugos";
 $MenuLinks[3]="index.php?site=services";
 $MenuIcons[3]="Images/MenuIcons/9586.PNG";

 $MenuItems[4]="Informacija";
 $MenuLinks[4]="index.php?site=info";
 $MenuIcons[4]="Images/MenuIcons/9786.PNG";

for ($i=0;$i<5;++$i){
 print("<div id=\"MenuItem$i\" style=\"color: yellow;width: 134px; cursor: pointer;font-size:16px;font-name:times new roman\"");
 print(" onMouseOver=\"MM_changeProp('MenuItem$i','','style.backgroundColor','#00BFFF','DIV')\" onMouseOut=\"MM_changeProp('MenuItem$i','','style.backgroundColor','#0099FF','DIV')\"");
 print(" OnClick=\"GoTo('$MenuLinks[$i]')\">\n");
 print("&nbsp;<img src=\"$MenuIcons[$i]\" width=\"16\" height=\"16\" align=\"absmiddle\">\n");
 print("$MenuItems[$i]\n</div>");
}
?>
</td>
</tr>
<tr> 
<td bgcolor="#b0c4de" width="125"> 
<div align="center" class="menudescriptionfont">Paie�ka</div>
</td>
</tr>
<tr> 
<td width="125" align="center" valign="top"> 
<form action="index.php" method="get" name="search">
<table border="0" cellspacing="0" cellpadding="2" align="center" width="100%">
<tr> 
<td style="color: yellow; font-size: 14px; font: sans-serif" nowrap>�veskite ie�kom� fraz�:</td>
</tr>
<tr valign="middle" align="center"> 
<td> 
<div align="center">
<input name="site" type="hidden" value="search">
<input type="text" name="action" size="16" tabindex="0" class="2D" style="width: 100%;border: 1px #0058FF solid; background-color: #FFFFFF; font-family: 'Times New Roman', Times, serif; font-size: 14px; font-style: normal; line-height: normal; font-weight: normal; font-variant: normal; text-transform: none; color: #000000; text-decoration: none">
</div>
</td>
</tr>
<tr> 
<td align="right" valign="middle">
<input type="submit" value="Ie�koti" tabindex="1" border="0" style="border: 1px #0058FF solid; background-color: #66CCFF; font-family: Geneva, Arial, Helvetica, san-serif; font-size: 10px; font-style: normal; line-height: normal; font-weight: bolder; font-variant: normal; text-transform: none; color: #000000; text-decoration: none" name="submit"></td>
                </tr>
              </table>
            </form>
          </td>
        </tr>
<?php
/*        <tr> 
          <td bgcolor="#b0c4de" width="125"> 
            <div align="center" class="menudescriptionfont">Balsavimas</div>
          </td>
        </tr>
        <tr> 
          <td width="125">
 <iframe noresize allowtransparency="true" border="0" scrolling="no" name="voting" frameborder="0" src="PHP/voting.php" style="width: 134px; background: #0099FF" marginheight="0" marginwidth="0"></iframe>
</td>
        </tr>
*/
?>
        <tr> 
          <td bgcolor="#b0c4de" width="125"> 
            <div align="center" class="menudescriptionfont">Nuorodos</div>
          </td>
        </tr>
        <tr> 
          <td width="125">
<?PHP
		$file="Data/CoolLinks.lst";
		$data=file($file);
		$dli = "Images/MenuIcons/9686.PNG";
		$nrgen=0;

Do {
  $rnd = rand(0,count($data)/2);
  $rnd=$rnd*2;
    if ($data[$rnd] != "")  
      {
	  $kintamasisA=trim($data[$rnd+1]);
  	  $kintamasisB=trim($data[$rnd]);
      print("<div id=\"LinkItem$rnd\" \nstyle=\"color:yellow;width: 134px; cursor: pointer;font-size:16px;font-name:times new roman\" \nonMouseOver=\"MM_changeProp('LinkItem$rnd','','style.backgroundColor','#00BFFF','DIV')\" \nonMouseOut=\"MM_changeProp('LinkItem$rnd','','style.backgroundColor','#0099FF','DIV')\" \n OnClick=\"GoTo('$kintamasisA')\"> \n\n");
      print("&nbsp;<img src=\"$dli\" width=\"16\" height=\"16\" align=\"absmiddle\">\n$kintamasisB\n</div>\n\n");
	  $data[$rnd]="";
      ++$nrgen;
      }	  
}	  
While ($nrgen<2);
?>		  
  <!--          <script language="JavaScript" src="javascripts/coollinks.js"></script>-->
          </td>
        </tr>
        <tr> 
          <td bgcolor="#b0c4de" width="125"> 
            <div align="center" class="menudescriptionfont">Skaitliukai</div>
          </td>
        </tr>
        <tr> 
          <td height="17" width="125">
<?PHP
	$file="Data/counter.lst";
	readfile($file);
?>
            </td>
        </tr>
      </table>
      </td>
    <td align="left" valign="top" width="610" bgcolor="#FFFFFF"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="4" width="620" style="width:610px">
        <tr> 
          <td style="font-size:16px;font-name:times new roman"> 
<?PHP
 $item=getenv("QUERY_STRING");
 if ($item!=""){
	 $duom=explode("+", $item);
	 $item=join(" ", $duom);
	 $item=rawurldecode($item);
	 $items=explode("&",$item);
	 for ($i=0;$i<count($items);++$i){
	   $udm[$i]=explode("=",$items[$i]);
	   if ($udm[$i][0]=="action") $komanda=$udm[$i][1];
	   if ($udm[$i][0]=="site") $sritis=$udm[$i][1];
	   if ($udm[$i][0]=="item") $vnt=$udm[$i][1];
	 } 
	 if (file_exists("./PHP/$site.php")){
		 include("./PHP/$site.php");
		 }
	 else {
	  	 print('<div align="left" style="text-decoration: none; text-shadow: navy 1em 1em; font: normal normal Times New Roman; font-family: Times New Roman; font-size: 24px; font-style: normal; font-variant: normal; color: #0000CC">');
 	     print("N�ra tokios srities");
		 print("</div><p align=\"left\">Deja, �iuo metu �ioje svetain�j�je n�ra srities \"$site\". Pabandykite u�eiti v�liau. :)</p>");
	 }
 }
 else print('<Script Language="JavaScript">location.href="index.php?site=news&action=display";</script>');
?>	
             </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>