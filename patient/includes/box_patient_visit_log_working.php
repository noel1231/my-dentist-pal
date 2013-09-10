<?php 




$id = $_SESSION["patient_id"];




$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$name=$row["patient_name"];	
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#blanket {
background-color:#FFF;
opacity: 0.9;
filter:alpha(opacity=90);
position:fixed;
z-index: 9001;
top:0px;
left:0px;
width:100%;
}

#popUpDiv {
position:fixed;
background-color:#FFF;
width:650px;
height:350px;
margin-top:-250px;
margin-left:-150px;
z-index: 9002;

 border-style: solid;
 border-width: 2px;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;

}
/*date*/


</style>

</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>

  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
     <?php /* <tr>
        <td height="39" colspan="2" valign="top"><div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="patient_list.php"><img src="img/t_patient_list.png"  width="98" height="18" alt="" /></a></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:120px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t_add.png" width="82" height="18" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <!--<div style="width:110px; margin-left:10px; margin-bottom:-2px; float:left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><img src="img/t-sent.png" width="72" height="17" alt="" /></td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>

              </tr>
            </table>
          </div>-->
          <div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez--><?php
				
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;?></td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>*/?>
      <tr>
        <td colspan="2"><img src="../img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(../img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="../img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>
     <input type="submit" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:6px;" />-->
     <input type="button" onclick="divPrint();" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" /></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(../img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                <!--<img src="img/menu_visit.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                  <!--<area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical_edit.php" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental_edit.php" />
                  <area shape="rect" coords="640,2,689,31" href="patient_visit_log_edit.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="223,2,329,32" href="patient_dental.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="337,2,427,31" href="patient_tooth_chart.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="434,3,504,31" href="# />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="579,3,633,31" href="patient_notes.php?id=<?php //echo $id;?>" />
                </map>-->
                
                
                 <div id="blanket" style="display:none;"></div>
            <!--popupdiv-->
           
            <div id="popUpDiv" style="display:none;">
            <form method="post" action="" enctype="multipart/form-data">
            <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;" width="100%">
            <tr><td height="45" width="100%" style="background-color:#0281aa;">
            <span style="margin-left:20px;color:#FFF;font-size:20px;font-weight:bold;">Record Log</span>
            </td></tr>
            <tr><td>
            <div style="margin:0 auto;width:600px;">
            <table cellpadding="0" cellspacing="0" border="0">
            <tr><td colspan="2"><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Tooth Number:
            </td>
            <td style="padding-left:28px;"><input type="text" name="tooth_num" style="width:70px;"/></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Surface:
            </td>
            <td style="padding-left:26px;">
            <table cellpadding="0" cellspacing="0" border="0">
             <tr><td style="width:90px;">
            <input type="radio" name="surface" value="facial"/>Facial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="mesial"/>Mesial 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="ligual"/>Ligual 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="occlusal"/>Occlusal 
             </td><td style="width:90px;">
            <input type="radio" name="surface" value="distal"/>Distal 
             </td></tr>
            </table>
            </td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Treatment notes:
            </td>
            <td style="padding-left:28px;color:#333;font-size:12px;"><textarea name="treatment_notes" cols="45" rows="3" style="font-family:Arial, Helvetica, sans-serif;"/></textarea></td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Initial:
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;;">P&nbsp;<input type="text" name="initial" style="width:100px;"/>&nbsp;.00</td>
            </tr>
            <tr><td><div style="clear:both;height:15px;"></div></td></tr>
            <tr><td style="width:160px;text-align:right;color:#333;font-size:16px;font-weight:bold;">
            Fee:
            </td>
            <td style="padding-left:20px;color:#333;font-size:12px;;">P&nbsp;<input type="text" name="fee" style="width:100px;"/>&nbsp;.00</td>
            </tr>
            
            <tr><td colspan="2">
            <div style="margin-left:120px;margin-top:20px;">
            <input type="submit" name="save_logs" class="submit2" />&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="button" name="cancel" class="submit2" value="Cancel" onclick="popup('popUpDiv')"/>
            </div>
            </td></tr>
            <input type="hidden" name="patient_id" value="<?php echo $id;?>" />
            </table> 
            </form>
            </div> 
            </td></tr>
            
         
            </table>             
            
            </div>
            
             <!--popupdiv-->
                
                
                
                  <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(../img/option_center_check.png);width:145px;height:36px;text-align:center;"> 
                <a href="patient_info.php" class="link_map">
                Patient Info
                </a>
                </td>
                
                
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(../img/option_center_check.png);width:175px;height:36px;text-align:center;"> 
                 <a href="patient_medical.php" class="link_map">
                Medical History
                </a>
                </td>
                
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(../img/option_center_check.png);width:165px;height:36px;text-align:center;"> 
                <a href="patient_dental.php" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(../img/option_center_check.png);width:140px;height:36px;text-align:center;"> 
                 <a href="patient_tooth_chart.php" class="link_map">
                Tooth Chart
                </a>
                </td>
                
                 <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
                <td style="background-color:#FFF;width:100px;height:36px;text-align:center;"> 
                <a href="#" class="link_map">
                Visit Log
                </a>
                </td>
                
                
               
                <!--<td style="background-image:url(../img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php" class="link_map">
                Others
                </a>
                </td>
                
                 <td style="background-image:url(../img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>-->
               
                <td style="background-image:url(../img/option_center_check.png);width:75px;height:36px;text-align:center;"> 
               <a href="patient_notes.php" class="link_map">
               Notes
              </a>
                </td>
              
             
               <!-- <td style="background-color:#F00;width:50px;height:36px;padding-left:15px;"> 
              <a href="#" style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:13px;text-decoration:none;">
               Edit
                </a>
                </td>-->
                
                </tr>
                </table>
                <!--locations-->
                
                
                </td>
            </tr>
           
           <!--content-->
            <tr><td style="background-color:#FFF;">
         <table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
<tr><td style="padding-top:20px;padding-left:20px;padding-bottom:20px;">
<div>
  <!--<input type="button" name="add_new" value="Add New" class="submit2" onclick="popup('popUpDiv')">-->
</div>
</td>
<!--<td valign="top">
<img src="img/pic.png" height="120" width="122"/>
</td>-->

</tr>

</table>
     </td>
</tr>

<tr><td style="background-color:#FFF;padding-left:15px;">
<table cellpadding="0" cellspacing="0" border="0" id="print_this"><tr><td>
 <!--date holder-->
              <div style="float:left;margin-left:20px;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:54px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:31px;"><a href="patient_visit_log.php?id=<?php echo $id;?>&amp;arr=log_date" style="text-decoration:underline;color:#333;" title="Sort by Date">Date</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--date holder-->
              
              <!--tooth holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:69px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:15px;"><a href="patient_visit_log.php?id=<?php echo $id;?>&amp;arr=tooth_num" style="text-decoration:underline;color:#333;" title="Sort by Tooth no">Tooth no.</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--tooth holder-->
              
              <!--surf holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:57px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:30px;"><a href="patient_visit_log.php?id=<?php echo $id;?>&amp;arr=surface" style="text-decoration:underline;color:#333;" title="Sort by Surface">Surf.</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--surf holder-->
              
              <!--notes holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:143px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:40px;"><a href="patient_visit_log.php?id=<?php echo $id;?>&amp;arr=treatment_notes" style="text-decoration:underline;color:#333;" title="Sort by Treatment_notes">Treatment Notes</a></div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--notes holder-->
              
              <!--Init holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:50px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:30px;">Init.</div>
              <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--Init holder-->
              
              <!--fee holder-->
              <div style="float:left;">
              <div style="float:left;background-image:url(../img/option_name_repeat.png);width:50px;height:26px;font-family:Arial, Helvetica, sans-serif;font-size:13px;font-weight:bold;color:#373838;padding-top:10px;padding-left:20px;">Fee</div>
               <div style="float:left;background-image:url(../img/option_right_check.png);width:5px;height:36px;"></div>
              </div>
              <!--fee holder-->
              
                    <!--fee holder-->
              
              <!--fee holder-->
            
</td></tr></table></td></tr>
           <!--content-->
           
           <tr><td style="background-color:#FFF;table-layout:fixed;">
           <div style="margin:0 auto;width:620px;">
           <table cellpadding="0" cellspacing="0" border="0" style="table-layout:fixed;border:1px solid #e5e3e3;">
           <?php 
		
		   $i=0;
		   $f=0;
		   
		   if(isset($_GET['arr']))
               { 
			   
			   $sort_by=$_GET["arr"];
			  
			   if($sort_by=="log_date")
			   { $sort="log_date"; 
			   $arrange="DESC";
			   }
			   else if($sort_by=="tooth_num")
			   { $sort="tooth_num";
			   $arrange="ASC";
			   }
			    else if($sort_by=="surface")
			   { $sort="surface";
			   $arrange="ASC";
			   }
			    else if($sort_by=="treatment_notes")
			   { $sort="treatment_notes";
			   $arrange="ASC";
			   }
			   else
			   { $sort="";} 
			     $sql="SELECT * FROM patient_logs WHERE patient_id='".$id."' ORDER BY $sort $arrange";
		   $res=mysql_query($sql);
			   
			   }
		   
		   else { 
		   $sql="SELECT * FROM patient_logs WHERE patient_id='".$id."'";
		   $res=mysql_query($sql); }
		   while($row=mysql_fetch_array($res)){
			   
			   $i++;
			  $f=$i%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}
			   
		   ?>
           <tr style="background-color:<?php echo $back;?>;">
           <td width="90" style="font-family:Arial, Helvetica, sans-serif;color:#7a7d7f;font-size:12px;text-align:center;padding-top:8px;padding-bottom:5px;"> 
           <?php echo $row['log_date'];?>
           </td>
            <td width="88" style="font-family:Arial, Helvetica, sans-serif;color:#7a7d7f;font-size:12px;text-align:center;padding-top:8px;padding-bottom:5px;"> 
          <?php echo $row['tooth_num'];?>
           </td>
            <td width="92" style="font-family:Arial, Helvetica, sans-serif;color:#7a7d7f;font-size:12px;text-align:center;padding-top:8px;padding-bottom:5px;"> 
          <?php echo $row['surface'];?>
           </td>
            <td width="188" style="font-family:Arial, Helvetica, sans-serif;color:#7a7d7f;font-size:12px;text-align:center;padding-top:8px;padding-bottom:5px;"> 
          <?php echo $row['treatment_notes'];?>
           </td>
            <td width="78" style="font-family:Arial, Helvetica, sans-serif;color:#7a7d7f;font-size:12px;text-align:right;padding-right:6px;padding-top:8px;padding-bottom:5px;"> 
           P&nbsp;<?php echo $row['intial'];?>&nbsp;.00
           </td>
           <td width="69" style="font-family:Arial, Helvetica, sans-serif;color:#7a7d7f;font-size:12px;text-align:right;padding-right:6px;padding-top:8px;padding-bottom:5px;"> 
          P&nbsp;<?php echo $row['fee'];?>&nbsp;.00
           </td>
         
           <!--<td width="10"></td>-->
           
           </tr>
		   <!--<tr style="background-color:<?php //echo $back;?>;"><td colspan="6"><hr style="border:1px solid #e5e3e3;" /></td></tr>-->
		   <?php } ?>
           </table>
           <div style="clear:both;height:20px;"></div>
           </div>
           </td></tr>
          </table>
        <!--</div>--></td>
    
     
        
      </tr>
      <tr>
        <td colspan="2"><img src="../img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>


<script type="text/javascript">
function toggle(div_id) {
	var el = document.getElementById(div_id);
	if ( el.style.display == 'none' ) {	el.style.display = 'block';}
	else {el.style.display = 'none';}
}
function blanket_size(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportheight = window.innerHeight;
	} else {
		viewportheight = document.documentElement.clientHeight;
	}
	if ((viewportheight > document.body.parentNode.scrollHeight) && (viewportheight > document.body.parentNode.clientHeight)) {
		blanket_height = viewportheight;
	} else {
		if (document.body.parentNode.clientHeight > document.body.parentNode.scrollHeight) {
			blanket_height = document.body.parentNode.clientHeight;
		} else {
			blanket_height = document.body.parentNode.scrollHeight;
		}
	}
	var blanket = document.getElementById('blanket');
	blanket.style.height = blanket_height + 'px';
	var popUpDiv = document.getElementById(popUpDivVar);
	popUpDiv_height=blanket_height/2-150;//150 is half popup's height
	popUpDiv.style.top = popUpDiv_height + 'px';
}

function window_pos(popUpDivVar) {
	if (typeof window.innerWidth != 'undefined') {
		viewportwidth = window.innerHeight;
	} else {
		viewportwidth = document.documentElement.clientHeight;
	}
	if ((viewportwidth > document.body.parentNode.scrollWidth) && (viewportwidth > document.body.parentNode.clientWidth)) {
		window_width = viewportwidth;
	} else {
		if (document.body.parentNode.clientWidth > document.body.parentNode.scrollWidth) {
			window_width = document.body.parentNode.clientWidth;
		} else {
			window_width = document.body.parentNode.scrollWidth;
		}
	}
	var popUpDiv = document.getElementById(popUpDivVar);
	window_width=window_width/2-150;//150 is half popup's width
	popUpDiv.style.left = window_width + 'px';
}
function popup(windowname,x,y) {
	
	/*document.getElementById('what_picture').value = x;
	document.getElementById('what_number').value = y;*/
	
	blanket_size(windowname);
	window_pos(windowname);
	toggle('blanket');
	toggle(windowname);		
}
</script>

<script type="text/javascript">

function popup1(pUrl, pName, pWidth, pHeight, pScroll)
{
	LeftPosition = (screen.width) ? (screen.width-pWidth)   / 2 : 0;
	TopPosition  = (screen.height)? (screen.height-pHeight) / 2 : 0;
	settings = 'height='+pHeight+', width='+pWidth+', top='+TopPosition+', left='+LeftPosition+', scrollbars='+pScroll+', resizable';
	win = window.open(pUrl, pName, settings)
}
</script>
<script type="text/javascript">
function onDelete()  
{  
if(confirm('Do you want to delete ?')==true)  
{  
return true;  
}  
else  
{  
return false;  
}  
} 
</script>

<script language="javascript" type="text/javascript">
function divPrint()
{

var display_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=750, height=600, left=100, top=25";

var content_innerhtml = document.getElementById("print_this").innerHTML;
var document_print=window.open("","",display_setting);
document_print.document.open();
document_print.document.write('<html><head><title>Print using javascript </title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  
