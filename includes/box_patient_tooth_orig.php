<?php

$dentist_id=$_SESSION['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#blanket {
background-color:#111;
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
width:300px;
height:250px;


z-index: 9002;

 border-style: solid;
 border-width: 2px;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;

}

#popUpDiv1 {
position:fixed;
background-color:#FFF;
width:300px;
height:250px;


z-index: 9002;

 border-style: solid;
 border-width: 2px;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 5px;

}


.toothtable img {
			cursor:pointer;
	}
.toothtable {
color:#999;	
}
	
</style>
<script src="img/first_tooth.js"></script>
<script src="img/popup.js"></script>
<script src="img/child_tooth.js"></script>
<!--<script src="img/popup_child.js"></script>
-->

</head>

<body>

<map name="Map" id="Map">
  <!--<area shape="rect" coords="8,1,131,42" href="messaging.php" />
  <area shape="rect" coords="138,2,263,41" href="received_message.php" />-->
  <area shape="rect" coords="638,2,689,33" href="patient_dental_edit.php" />
</map>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
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
                <td width="661" align="center" style="background: url(img/t3.jpg);"><a href="add_patient.php"><img src="img/t_add.png" width="82" height="18" alt="" /></a></td>
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
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;"><!--Joselito Galvez-->
                <?php
				
				$length=14;
$name1=$name;
//$name=strlen($name);
//echo $name;
$display = substr($name1, 0, $length) ;
echo "<span style=\"margin-left:4px;color:#333;font-family:Arial, Helvetica, sans-serif;font-size:13px;\">$display</span>";
echo "..." ;
				
				//echo $name;?>
                </td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><img src="img/1.jpg" width="739" height="12" alt="" /></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
        <table width="100%"><tr><td>
        <img src="img/bar_patient.png" height="20" width="114" style="margin-top:-8px;margin-left:23px;"/></td>
        <td align="right"><!--<input type="submit" name="update" value="UPDATE" class="submit" style="margin-right:10px;margin-top:6px;"/>
     <input type="submit" name="cancel" value="CANCEL" class="submit" style="margin-right:17px;margin-top:6px;" />
     <input type="submit" name="print" value="PRINT" class="submit" style="margin-right:17px;margin-top:-4px;" />--></td></tr></table>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>-->
                 <!--<img src="img/menu_tooth.png" width="691" height="35" border="0" usemap="#Map2" />
                <map name="Map2" id="Map2">
                 <area shape="rect" coords="3,3,97,33" href="#" />
                  <area shape="rect" coords="103,3,217,32" href="patient_medical_edit.php" />
                  <area shape="rect" coords="222,3,331,32" href="patient_dental_edit.php" />
                  <area shape="rect" coords="640,2,689,31" href="#" />
  <area shape="rect" coords="2,2,97,33" href="patient_info.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="106,2,217,32" href="patient_medical.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="223,2,329,32" href="patient_dental.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="337,2,427,31" href="#" />
  <area shape="rect" coords="434,3,504,31" href="patient_visit_log.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="511,3,572,31" href="patient_others.php?id=<?php //echo $id;?>" />
  <area shape="rect" coords="578,4,632,32" href="patient_notes.php?id=<?php //echo $id;?>" />
                </map>-->
                
                
                   <!--locations-->
                <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                
                <td style="background-image:url(img/option_center_check.png);width:110px;height:36px;padding-left:15px;"> 
                <a href="patient_info.php?id=<?php echo $id;?>" class="link_map">
                Patient Info
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
              
               
                <td style="background-image:url(img/option_center_check.png);width:140px;height:36px;padding-left:15px;"> 
                 <a href="#" class="link_map">
                Medical History
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                 <td style="background-image:url(img/option_center_check.png);width:130px;height:36px;padding-left:15px;"> 
                <a href="patient_dental.php?id=<?php echo $id;?>" class="link_map">
                Dental History
                 </a>
                </td>
               
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-color:#FFF;width:115px;height:36px;padding-left:10px;"> 
                 <a href="#" class="link_map">
                Tooth Chart
                </a>
                </td>
                
             
              
                <td style="background-image:url(img/option_center_check.png);width:80px;height:36px;padding-left:10px;"> 
                <a href="patient_visit_log.php?id=<?php echo $id;?>" class="link_map">
                Visit Log
                </a>
                </td>
                
                <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:50px;height:36px;padding-left:10px;"> 
                 <a href="patient_others.php?id=<?php echo $id;?>" class="link_map">
                Others
                </a>
                </td>
                
                 <td style="background-image:url(img/option_right_check.png);width:5px;height:36px;">&nbsp;</td>
               
                <td style="background-image:url(img/option_center_check.png);width:100px;height:36px;padding-left:15px;"> 
               <a href="patient_notes.php?id=<?php echo $id;?>" class="link_map">
               Notes
              </a>
                </td>
              
             
                <!--<td style="background-color:#F00;width:50px;height:36px;padding-left:15px;"> 
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
           <?php 
		   $sql="SELECT * FROM patient_list WHERE id=".$id." AND dentist_id='".$dentist_id."'";
		   $res=mysql_query($sql);
		   while($row=mysql_fetch_array($res))
		   {
			$val=$row["what_chart"]; 
			
		   }
		
		     //var_dump($val);die();
		 
		if($val==1) { 
		 $sql="SELECT * FROM patient_adult_tooth WHERE patient_id='".$id."' AND dentist_id='".$dentist_id."'";
		 $res=mysql_query($sql);
		 while($row=mysql_fetch_array($res))
		 {
			$chart_name=$row['tooth_chart_name']; 
		 }
		}
		else if($val==2) { 
		 $sql="SELECT * FROM patient_child_tooth WHERE patient_id='".$id."' AND dentist_id='".$dentist_id."'";
		 $res=mysql_query($sql);
		 while($row=mysql_fetch_array($res))
		 {
			$chart_name=$row['tooth_chart_name']; 
		 }
		}
		 
		    //var_dump($id);die();
		   ?>
           <table id="table1" cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
<tr><td style="padding-top:20px;padding-left:20px;padding-bottom:20px;">
<div>
<div style="float:left;">
<form method="post" action="" enctype="multipart/form-data" />
<input type="submit" name="save" value="Save" class="submit2">&nbsp;
<input type="button" name="cancel" value="Cancel" class="submit2" onclick="window.location='patient_tooth_chart.php?id=<?php echo $id;?>'"></div>
<div style="clear:both;height:20px;"></div>
<div style="float:left;font-weight:bold;color:#373838;font-size:12px;">Chart Name &nbsp;&nbsp;&nbsp;<input type="text" name="chart_name"  value="<?php echo $chart_name;?>"/></div>
<div style="clear:both;height:20px;"></div>
<div style="float:left;width:650px;">
<!--<div style="float:left;">
<input type="submit" name="adult" value="Adult" class="submit2">&nbsp;
<input type="submit" name="child" value="Child" class="submit2"></div>-->
<div style="float:right;font-weight:bold;color:#373838;font-size:12px;">
<?php echo date('d/m/Y');?>
</div>
</div>
</div>
</td>
<!--<td valign="top">
<img src="img/pic.png" height="120" width="122"/>
</td>-->

</tr>

<tr><td style="padding-left:27px;">
<!--<img src="img/map_teeth.png" />
<div style="clear:both;height:20px;"></div>-->
<div style="margin:0 auto;width:70px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;">ORIGINAL</div>
<div style="border:1px solid #999;width:635px;height:238px;">
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
<div style="clear:both;height:10px;"></div>
<?php if($val==1) { ?>
<div style="margin:0 auto;width:520px;">
<?php include('tooth_chart_patient.php');?>
</div>
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
</div>

<div style="margin:0 auto;width:50px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;">EDIT</div>
<div style="border:1px solid #999;width:635px;height:238px;">

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
<div style="clear:both;height:10px;"></div>
<div style="margin:0 auto;width:520px;">
<?php include('test_tooth_chart.php');?>
</div>
<?php } else { ?>
<div style="margin:0 auto;width:340px;">
<?php include('tooth_chart_child_view.php');?>
</div>
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
</div>

<div style="margin:0 auto;width:50px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;">EDIT</div>
<div style="border:1px solid #999;width:635px;height:238px;">

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
<div style="clear:both;height:10px;"></div>
<div style="margin:0 auto;width:340px;">
<?php include('tooth_chart_child.php');?>
</div>
<?php /*
<div style="margin:0 auto;width:340px;">
<?php include('tooth_chart_child_view.php');?>
</div>
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
</div>

<div style="margin:0 auto;width:50px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;margin-top:20px;font-weight:bold;">EDIT</div>
<div style="border:1px solid #999;width:340px;height:210px;">

<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
<div style="clear:both;height:10px;"></div>
<div style="margin:0 auto;width:340px;">
<?php include('tooth_chart_child.php');?>
</div>*/?><?php } ?>
<div style="margin:0 auto;width:55px;font-family:Arial, Helvetica, sans-serif;color:#999;font-size:14px;margin-top:5px;">FACIAL</div>
</div>
</td></tr>


<tr><td>
<div style="float:left;margin-top:20px;margin-left:20px;padding-bottom:20px;">
<input type="submit" name="save" value="Save" class="submit2">&nbsp;
<input type="button" name="cancel" value="Cancel" class="submit2" onclick="window.location='patient_tooth_chart.php?id=<?php echo $id;?>'">
<input type="hidden" value="<?php echo $id;?>" name="pt_id" />
</form>
</div>
</td></tr>

</table>

     </td>
</tr>


     
           
           
          </table>
        <!--</div>--></td>
    
     
        
      </tr>
      <!--<input type="hidden" id="childs1" value="none" name="childvalue" />
<input type="hidden" id="childa2" value="none" name="childvalue1" />
<input type="hidden" id="childs3" value="none" name="childvalue2" />
<input type="hidden" id="childs4" value="none" name="childvalue3" />
<input type="hidden" id="childs5" value="none" name="childvalue4" />

<input type="hidden" id="childs9" value="none" name="childvalue8" />
<input type="hidden" id="childs10" value="none" name="childvalue9" />
<input type="hidden" id="childs11" value="none" name="childvalue10" />
<input type="hidden" id="childs12" value="none" name="childvalue11" />
<input type="hidden" id="childs13" value="none" name="childvalue12" />


<input type="hidden" id="childs17" value="none" name="childvalue16" />
<input type="hidden" id="childs18" value="none" name="childvalue17" />
<input type="hidden" id="childs19" value="none" name="childvalue18" />
<input type="hidden" id="childs20" value="none" name="childvalue19" />
<input type="hidden" id="childs21" value="none" name="childvalue20" />


<input type="hidden" id="childs25" value="none" name="childvalue24" />
<input type="hidden" id="childs26" value="none" name="childvalue25" />
<input type="hidden" id="childs27" value="none" name="childvalue26" />
<input type="hidden" id="childs28" value="none" name="childvalue27" />
<input type="hidden" id="childs29" value="none" name="childvalue28" />

<input type="hidden" id="pic1" value="none" name="newvalue" />
<input type="hidden" id="pic2" value="none" name="newvalue1" />
<input type="hidden" id="pic3" value="none" name="newvalue2" />
<input type="hidden" id="pic4" value="none" name="newvalue3" />
<input type="hidden" id="pic5" value="none" name="newvalue4" />
<input type="hidden" id="pic6" value="none" name="newvalue5" />
<input type="hidden" id="pic7" value="none" name="newvalue6" />
<input type="hidden" id="pic8" value="none" name="newvalue7" />

<input type="hidden" id="pic9" value="none" name="newvalue8" />
<input type="hidden" id="pic10" value="none" name="newvalue9" />
<input type="hidden" id="pic11" value="none" name="newvalue10" />
<input type="hidden" id="pic12" value="none" name="newvalue11" />
<input type="hidden" id="pic13" value="none" name="newvalue12" />
<input type="hidden" id="pic14" value="none" name="newvalue13" />
<input type="hidden" id="pic15" value="none" name="newvalue14" />                    
<input type="hidden" id="pic16" value="none" name="newvalue15" />

<input type="hidden" id="pic17" value="none" name="newvalue16" />
<input type="hidden" id="pic18" value="none" name="newvalue17" />
<input type="hidden" id="pic19" value="none" name="newvalue18" />
<input type="hidden" id="pic20" value="none" name="newvalue19" />
<input type="hidden" id="pic21" value="none" name="newvalue20" />
<input type="hidden" id="pic22" value="none" name="newvalue21" />
<input type="hidden" id="pic23" value="none" name="newvalue22" />
<input type="hidden" id="pic24" value="none" name="newvalue23" />

<input type="hidden" id="pic25" value="none" name="newvalue24" />
<input type="hidden" id="pic26" value="none" name="newvalue25" />
<input type="hidden" id="pic27" value="none" name="newvalue26" />
<input type="hidden" id="pic28" value="none" name="newvalue27" />
<input type="hidden" id="pic29" value="none" name="newvalue28" />
<input type="hidden" id="pic30" value="none" name="newvalue29" />
<input type="hidden" id="pic31" value="none" name="newvalue30" />
<input type="hidden" id="pic32" value="none" name="newvalue31" />-->

      <tr>
        <td colspan="2"><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>