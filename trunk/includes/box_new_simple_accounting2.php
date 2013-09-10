<?php include('config.php');
$dentist_id=$_SESSION['id'];
//$var_x="<div style='float:left;margin-top:20px;width:345px;height:90px;background-color:#d9dfe3; -moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;'><div style='float:left;width:335px;height:80px;background-color:#FFF;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;margin-top:5px;margin-left:5px;'><table cellpadding='0' cellspacing='0' border='0' style='padding-top:10px;padding-left:10px;'><tr><td width='90' style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;'>Time:</td><td style='padding-left:8px;'><select name='from[]' style='width:70px;'><option value='0'>-time-</option><option value='1'>01:00</option><option value='2'>02:00</option><option value='3'>03:00</option><option value='4'>04:00</option><option value='5'>05:00</option><option value='6'>06:00</option><option value='7'>07:00</option><option value='8'>08:00</option><option value='9'>09:00</option><option value='10'>10:00</option><option value='11'>11:00</option><option value='12'>12:00</option></select></td><td style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;'>to &nbsp;<select name='to[]' style='width:70px;'><option value='0'>-time-</option><option value='1'>01:00</option><option value='2'>02:00</option><option value='3'>03:00</option><option value='4'>04:00</option><option value='5'>05:00</option><option value='6'>06:00</option><option value='7'>07:00</option><option value='8'>08:00</option><option value='9'>09:00</option><option value='10'>10:00</option><option value='11'>11:00</option><option value='12'>12:00</option></select></td></tr><tr><td height='8'><div style='clear:both;'></</td></tr><tr><td width='90' style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;'>Appointment:</td><td style='padding-left:8px;' colspan='2'><input type='text' name='appointment[]' style='width:170px;' value=''/><input type='hidden' name='id' value='0'></td><td style='padding-left:4px;'><img src='img/icon_address_delete.png' /></td></tr></table></div></div>";

//$var_y="<div style='float:left;margin-top:20px;width:500px;height:60px;background-color:#d9dfe3; -moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;'><div style='float:left;width:490px;height:50px;background-color:#FFF;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius: 5px;margin-top:5px;margin-left:5px;'><table cellpadding=0' cellspacing='0' border='0' style='padding-top:10px;'><tr><td width='50' style='font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;'>Qty:</td><td style='padding-left:8px;'><input type='text' name='qty[]' style='width:20px;'/></td><td width='90' style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;'>Description:</td><td style='padding-left:8px;' colspan='2'><input type='text' name='desc[]' style='width:170px;' value=''/></td><td style='padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;'>Price:</td><td style='padding-left:8px;'><input type='text' name='price[]' style='width:40px;'/></td><input type='hidden' name='id[]' value='' /><input type='hidden' name='delete[]' value='n' id='del'/>";

//$var_xy="";

$xy=0;

		 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
  

<style type="text/css">
a.nav {
text-decoration:none;
color:#333;
}

a.nav:hover {
text-decoration:underline;	
color:#333;
}
</style>
        <script language="JavaScript"> 
function ClickCheckAll(vol)  
{  
  
var i=1;  
for(i=1;i<=document.frmMain.hdnCount.value;i++)  
{  
if(vol.checked == true)  
{  
eval("document.frmMain.check"+i+".checked=true");  
}  
else  
{  
eval("document.frmMain.check"+i+".checked=false");  
}  
}  
}  

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

function onSelect()  
{  
var x=document.getElementById('pt_select').value;
if(x=='none') {
alert('Choose a patient in this transaction.');	
return false;
}
}


function Receive()  
{  
alert('Transaction is closed or payment is full.');
}

function ChangeSelect(y) 
{
document.getElementsByName('y').value;	


if(y=='other') {
//alert(y);		
document.getElementById('selectme').style.display='block';
               }
else {
document.getElementById('selectme').style.display='none';	
}

}


function RemoveThis()
{


var a=0;
var b=0;
var c=0;
var aaa=0;
var bbb=0;
var ccc=0;
a = document.getElementById('tot0').value;
b = document.getElementById('subtotal').value;
c = document.getElementById('totaldue').value;


a.charAt(0)=='P';
a=a.substr(1);

var sa = a;
 var na = sa.indexOf('.');
  sa = sa.substring(0, na != -1 ? na : sa.length);
  
  
var burrow = 0;
var epi = 0;
var kill = 0;
var strikes = 0;
var sand = 0;
if(document.getElementById('tax0').value=='yes') {
strikes = sa * 0.12;

epi = document.getElementById('taxnow').value;
 epi.charAt(0)=='P';
epi=epi.substr(1);

var burrow = epi;
 var burrow = epi.indexOf('.');
  epi = epi.substring(0, burrow != -1 ? burrow : epi.length);

kill = parseInt(epi) - parseInt(strikes); 


document.getElementById('taxnow').value="P"+kill+".00";

/*sand = document.getElementById('totaldue').value;
 sand.charAt(0)=='P';
sand=sand.substr(1);

var burrow = sand;
 var burrow = sand.indexOf('.');
  sand = sand.substring(0, burrow != -1 ? burrow : sand.length);

//alert(strikes);

 kill = parseInt(sand) - parseInt(strikes); 
 alert(kill);

document.getElementById('totaldue').value="P"+kill+".00";*/
}
else 
{
strikes = 0;	
}

  
  
  b.charAt(0)=='P';
b=b.substr(1);

var sb = b;
 var nb = sb.indexOf('.');
  sb = sb.substring(0, nb != -1 ? nb : sb.length);
  
  c.charAt(0)=='P';
c=c.substr(1);

var sc = c;
 var nc = sc.indexOf('.');
  sc = sc.substring(0, nc != -1 ? nc : sc.length);
  
  var one = 0;
  var two = 0;
  one = sb - sa; 
  two = sc - sa;
  two = two - strikes;
  document.getElementById('subtotal').value="P"+one+".00";
  document.getElementById('totaldue').value="P"+two+".00";
  
  document.getElementById('0').style.display='none';
  
}

function RemoveNow(x)
{
//alert(x);
document.getElementById(x).style.display='none';
var a=0;
var b=0;
var c=0;
var aaa=0;
var bbb=0;
var ccc=0;
var d = "tot"+x;
a = document.getElementById(d).value;
b = document.getElementById('subtotal').value;
c = document.getElementById('totaldue').value;

a.charAt(0)=='P';
a=a.substr(1);

var sa = a;
 var na = sa.indexOf('.');
  sa = sa.substring(0, na != -1 ? na : sa.length);
  
  
  var burrow = 0;
var epi = 0;
var kill = 0;
var strikes = 0;
var sand = 0;
var empt = "check"+x;
if(document.getElementById(empt).value=='yes') {
strikes = sa * 0.12;

epi = document.getElementById('taxnow').value;
 epi.charAt(0)=='P';
epi=epi.substr(1);

var burrow = epi;
 var burrow = epi.indexOf('.');
  epi = epi.substring(0, burrow != -1 ? burrow : epi.length);

kill = parseInt(epi) - parseInt(strikes); 


document.getElementById('taxnow').value="P"+kill+".00";
  }
else 
{
strikes = 0;	
}

  
  b.charAt(0)=='P';
b=b.substr(1);

var sb = b;
 var nb = sb.indexOf('.');
  sb = sb.substring(0, nb != -1 ? nb : sb.length);
  
  c.charAt(0)=='P';
c=c.substr(1);

var sc = c;
 var nc = sc.indexOf('.');
  sc = sc.substring(0, nc != -1 ? nc : sc.length);
  
  var one = 0;
  var two = 0;
  one = sb - sa; 
  two = sc - sa;
  two = two - strikes;
  document.getElementById('subtotal').value="P"+one+".00";
  document.getElementById('totaldue').value="P"+two+".00";
}

function ChangeQty(m){
	
var qty=document.getElementById('qty0').value;
var price=document.getElementById('price0').value;
//alert(price);
var total=0;
var g=0;
total = qty * price;
var raw = total;
/*if(document.getElementById('tax0').value=='yes') {	
var xy=0.12;
var totals = total;

totals = totals * xy;
//alert(totals);
total = parseInt(total) + parseInt(totals);

var p = document.getElementById('taxnow').value;
//alert(p);

p.charAt(0)=='P';
p=p.substr(1);

var s = p;
 var n = s.indexOf('.');
  s = s.substring(0, n != -1 ? n : s.length);
 document.getElementById('taxnow').value="P"+totals+".00";
//var taxnow = parseInt(totals) - parseInt(s); 
}*/


var f =document.getElementById('tot0').value;
f.charAt(0)=='P';
f=f.substr(1);

var sf = f;
 var nf = sf.indexOf('.');
  sf = sf.substring(0, nf != -1 ? nf : sf.length);

f = sf;

var got = 0;

//got = parseInt(xx) + parseInt(s);
//alert(got);

got = document.getElementById('totaldue').value;
//alert(got);
got.charAt(0)=='P';
got=got.substr(1);

var sgot = got;
 var ngot = sgot.indexOf('.');
  sgot = sgot.substring(0, ngot != -1 ? ngot : sgot.length);
  
got = parseInt(total) + parseInt(sgot);
if(got > f) {
got = parseInt(got) - parseInt(f);
}
else {
got = parseInt(f) - parseInt(got); }



document.getElementById('totaldue').value="P"+got+".00";



//var maintotal = total 


document.getElementById('tot0').value="P"+raw+".00";
document.getElementById('subtotal').value="P"+got+".00";

}

/*function checknumber() {
var x=document.getElementById('price0').value;
var anum=/(^\d+$)|(^\d+\.\d+$)/;
if (anum.test(x))
testresult=true;
else{
alert("Please input a valid number!");
testresult=false;
}
return (testresult);	
}
*/
function ChangePrice(m){
//document.getElementById('tax0').style.display='block';


/*if (document.layers||document.all||document.getElementById)
return checknumber()
else
return true
*/
var myli = document.getElementById('price0').value;
if(isNaN(myli)) {
alert('Please enter a valid number.');	
}
else {


var qty=document.getElementById('qty0').value;
var price=document.getElementById('price0').value;
//alert(price);
var total=0;
total = qty * price;

var raw = total;
/*if(document.getElementById('tax0').value=='yes') {	
var xy=0.12;
var totals = total;

totals = totals * xy;
//alert(total);
total = parseInt(total) + parseInt(totals);

var p = document.getElementById('taxnow').value;
//alert(p);

p.charAt(0)=='P';
p=p.substr(1);

var s = p;
 var n = s.indexOf('.');
  s = s.substring(0, n != -1 ? n : s.length);
 //document.getElementById('taxnow').value="P"+totals+".00";
//var taxnow = parseInt(totals) - parseInt(s); 
}*/

var f =document.getElementById('tot0').value;
f.charAt(0)=='P';
f=f.substr(1);

var sf = f;
 var nf = sf.indexOf('.');
  sf = sf.substring(0, nf != -1 ? nf : sf.length);

f = sf;

var got = 0;

//got = parseInt(xx) + parseInt(s);
//alert(got);

got = document.getElementById('totaldue').value;
//alert(got);
got.charAt(0)=='P';
got=got.substr(1);

var sgot = got;
 var ngot = sgot.indexOf('.');
  sgot = sgot.substring(0, ngot != -1 ? ngot : sgot.length);
  
got = parseInt(total) + parseInt(sgot);
if(got > f) {
got = parseInt(got) - parseInt(f);
}
else {
got = parseInt(f) - parseInt(got); }

//alert(f);
//alert(total);
document.getElementById('tot0').value="P"+raw+".00";
document.getElementById('subtotal').value="P"+got+".00";
document.getElementById('totaldue').value="P"+got+".00";

//
}



function Multiply(m) {
	
if(document.getElementById('tax0').value=='yes') {	
document.getElementById('tax0').value='no';	
//document.maveform.price0.disabled=false;
//document.maveform.qty0.disabled=false;
}
else {
document.getElementById('tax0').value='yes';
//document.maveform.price0.disabled=true;
//document.maveform.qty0.disabled=true;
}
var tot = document.getElementById('tot0').value;
//alert(tot);
tot.charAt(0)=='P';
tot=tot.substr(1);
//alert(tot);
var x = 0;




//document.getElementById('sub').style.display='block';




var f = document.getElementById('totaldue').value;

f.charAt(0)=='P';
to=f.substr(1);

var s = to;
 var n = s.indexOf('.');
  s = s.substring(0, n != -1 ? n : s.length);



var g= 0;
g = document.getElementById('taxnow').value;
//alert(g);
g.charAt(0)=='P';
tog=g.substr(1);

var sg = tog;
 var ng = sg.indexOf('.');
  sg = sg.substring(0, ng != -1 ? ng : sg.length);
  
//alert(sg);

if(document.getElementById('tax0').value=='yes') {
x = 0.12;
d = tot * x;
d = parseInt(sg) + parseInt(d);	

}
else {
x = 0.12;	
d = tot * x;

if(sg > d) {
d = parseInt(sg) - parseInt(d);	
}
else {
d = parseInt(d) - parseInt(sg);
}

}
newtot = d;


var o = 0;
x = 0.12;
o = tot * x;

//alert(newtot);



document.getElementById('taxnow').value="P"+newtot+".00";


var out = 0;
if(document.getElementById('tax0').value=='yes') {
out = parseInt(s) + parseInt(o); }

else {
//alert(n);	
out = parseInt(s) - parseInt(o);
//alert(o);
}

document.getElementById('totaldue').value="P"+out+".00";


}
<!--end if for checking if its a number or not-->
}





function ChangeID(id) {
//alert(id);
document.getElementById('pt_id').value=id;
}




function Changetotalnow(z) {

var wew = "price"+z;	
var ewe = "qty"+z;
var eee = "check"+z;
var eve = "tot"+z;

//document.getElementById(eee).style.display='block';

var g = document.getElementById(wew).value;
//alert(g);
var q = document.getElementById(ewe).value;
var xx = g * q;


var raw = xx;
if(document.getElementById(eee).value=='yes') {	
var xy=0.12;
var totals = xx;

totals = totals * xy;
//alert(total);
xx = parseInt(xx) + parseInt(totals);

var p = document.getElementById('taxnow').value;
//alert(p);

p.charAt(0)=='P';
p=p.substr(1);

var s = p;
 var n = s.indexOf('.');
  s = s.substring(0, n != -1 ? n : s.length);
  
  if(totals > s) {
  totals = parseInt(totals) - parseInt(s);
  }
  else {
totals = parseInt(s) - parseInt(totals);  
  }
  //alert(totals);
 document.getElementById('taxnow').value="P"+totals+".00";
//var taxnow = parseInt(totals) - parseInt(s); 
}

//alert(xx);
var too = "tot"+z;
//alert(xx);
var f =document.getElementById(too).value;
f.charAt(0)=='P';
f=f.substr(1);

var sf = f;
 var nf = sf.indexOf('.');
  sf = sf.substring(0, nf != -1 ? nf : sf.length);

f = sf;

document.getElementById(too).value="P"+xx+".00";

var to = document.getElementById(eve).value;
//alert(to);
to.charAt(0)=='P';
to=to.substr(1);

var s = to;
 var n = s.indexOf('.');
  s = s.substring(0, n != -1 ? n : s.length);

var got = 0;

//got = parseInt(xx) + parseInt(s);
//alert(got);

got = document.getElementById('totaldue').value;
//alert(got);
got.charAt(0)=='P';
got=got.substr(1);

var sgot = got;
 var ngot = sgot.indexOf('.');
  sgot = sgot.substring(0, ngot != -1 ? ngot : sgot.length);
  
    var mave = 0;
  if(parseInt(sgot) > parseInt(xx)) {
	mave = parseInt(sgot) - parseInt(xx);  
  }
  else {
	mave = parseInt(xx) - parseInt(sgot);  
  }
  //alert(xx);

  //sgot = parseInt(sgot) - parseInt(mave);
  
  //alert(sgot);

got = parseInt(xx) + parseInt(sgot);
if(got > f) {
got = parseInt(got) - parseInt(f);
}
else {
got = parseInt(f) - parseInt(got); }
document.getElementById('subtotal').value="P"+got+".00";
document.getElementById('totaldue').value="P"+got+".00";
}


function changeqtynow(z) {
var wew = "price"+z;	
var ewe = "qty"+z;
var g = document.getElementById(wew).value;
//alert(g);
var q = document.getElementById(ewe).value;
var xx = g * q;



var too = "tot"+z;

var f =document.getElementById(too).value;
f.charAt(0)=='P';
f=f.substr(1);

var sf = f;
 var nf = sf.indexOf('.');
  sf = sf.substring(0, nf != -1 ? nf : sf.length);

f = sf;

document.getElementById(too).value="P"+xx+".00";

//alert(xx);
var to = document.getElementById('tot0').value;

to.charAt(0)=='P';
to=to.substr(1);

var s = to;
 var n = s.indexOf('.');
  s = s.substring(0, n != -1 ? n : s.length);



var got = 0;

//got = parseInt(xx) + parseInt(s);

//alert(got);

got = document.getElementById('totaldue').value;
//alert(got);
got.charAt(0)=='P';
got=got.substr(1);

var sgot = got;
 var ngot = sgot.indexOf('.');
  sgot = sgot.substring(0, ngot != -1 ? ngot : sgot.length);
  
  //alert(sgot);
got = parseInt(xx) + parseInt(sgot);
if(got > f) {
got = parseInt(got) - parseInt(f);
}
else {
got = parseInt(f) - parseInt(got); }
//got = parseInt(xx) + parseInt(sgot);

document.getElementById('subtotal').value="P"+got+".00";
document.getElementById('totaldue').value="P"+got+".00";
}


function Changetaxnow(p) {
//alert(p);
/*var wew = "price"+p;	
var ewe = "qty"+p;
var g = document.getElementById(wew).value;
//alert(g);
var q = document.getElementById(ewe).value;
var xx = g * q;
*/
//alert(xx);
var dayako="price"+p;
var dayame="qty"+p;
//alert(dayame);
var one="check"+p;
var two="tot"+p;
//alert(daya1);
if(document.getElementById(one).value=='yes') {	
document.getElementById(one).value='no';
//document.maveform.dayako.disabled=false;
//document.maveform.dayame.disabled=false;
}
else {
document.getElementById(one).value='yes';	
//document.maveform.dayako.disabled=true;
//document.maveform.dayame.disabled=true;
}
var tot = document.getElementById(two).value;
//alert(tot);
tot.charAt(0)=='P';
tot=tot.substr(1);
//alert(tot);
var x = 0;
/*document.getElementById('sub').style.display='block';*/

var f = document.getElementById('totaldue').value;

f.charAt(0)=='P';
to=f.substr(1);

var s = to;
 var n = s.indexOf('.');
  s = s.substring(0, n != -1 ? n : s.length);


if(document.getElementById(one).value=='yes') {
x = 0.12;
d = tot * x;
}
else {
x = 0;	
d = tot * x;
}
newtot = d;


var o = 0;
x = 0.12;
o = tot * x;

//alert(tot);
var la = document.getElementById('taxnow').value;
//alert(la);

la.charAt(0)=='P';
tog=la.substr(1);

var ss = tog;
 var nn = ss.indexOf('.');
  ss = ss.substring(0, nn != -1 ? nn : ss.length);

//alert(ss);
newtot = parseInt(newtot) + parseInt(ss);

var f =document.getElementById('taxnow').value;
//var h = f;

f.charAt(0)=='P';
togs=f.substr(1);

var sss = togs;
 var nnn = sss.indexOf('.');
  sss = sss.substring(0, nnn != -1 ? nnn : sss.length);

//alert(o);
if(document.getElementById(one).value=='yes') {

h = parseInt(o) + parseInt(sss); 

}
else {
if(o > sss)	{
h = parseInt(o) - parseInt(sss); }
else {
h = parseInt(sss) - parseInt(o);	
}
}
//alert(h);
document.getElementById('taxnow').value="P"+h+".00";
//

//alert(newtot);
var out = 0;
if(document.getElementById(one).value=='yes') {
out = parseInt(s) + parseInt(o); }

else {
//alert(n);	
out = parseInt(s) - parseInt(o);
//alert(o);
}

document.getElementById('totaldue').value="P"+out+".00";


}


function Mavedaya(m) {
var g= "check"+m;
alert(g);	
}


function Showtax() {
if(document.getElementById('sub').value=='yes'){	
document.getElementById('sub').style.display='none'; 
document.getElementById('sub').value='no';

var get = document.getElementById('subtotal').value;

get.charAt(0)=='P';
get=get.substr(1);

var got = get;

 var yap = got.indexOf('.');
  got = got.substring(0, yap != -1 ? yap : got.length);
//alert(got);
//alert();

got = parseInt(got) * 0.12;



var mave = got;

document.getElementById('taxnow').value="P"+got+".00";


var get = document.getElementById('totaldue').value;
get.charAt(0)=='P';
get=get.substr(1);

var got = get;
 var yap = got.indexOf('.');
  got = got.substring(0, yap != -1 ? yap : got.length);

var d =0;

var d = parseInt(got) - parseInt(mave);

document.getElementById('totaldue').value="P"+d+".00";

}
else {
document.getElementById('sub').style.display='block';	
document.getElementById('sub').value='yes';

var get = document.getElementById('totaldue').value;

get.charAt(0)=='P';
get=get.substr(1);

var got = get;
 var yap = got.indexOf('.');
  got = got.substring(0, yap != -1 ? yap : got.length);

//alert();

got = parseInt(got) * 0.12;
var mave = got;
document.getElementById('taxnow').value="P"+got+".00";


var get = document.getElementById('totaldue').value;
get.charAt(0)=='P';
get=get.substr(1);

var got = get;
 var yap = got.indexOf('.');
  got = got.substring(0, yap != -1 ? yap : got.length);

var d =0;

var d = parseInt(got) + parseInt(mave);

document.getElementById('totaldue').value="P"+d+".00";


}
}

</script>

</head>

<body>
 <form method="post" action="" enctype="multipart/form-data" onsubmit="return onSelect();" name="maveform">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;
    <!--<table cellpadding="0" cellspacing="0" border="0" style="font-family:Arial, Helvetica, sans-serif;">
              <tr><td style="font-weight:bold;background-image:url(img/option_center_check.png);width:160px;font-size:14px;padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;">
              <a href="simple_accounting_list.php" style="color:#333;text-decoration:none;">List of Transactions
              </td>
              <td style="padding-top:10px;padding-bottom:10px;text-align:center;border-right:1px solid #cdcbd4;font-weight:bold;background-color:#FFF;font-size:14px;width:160px;">
             <a href="dentist_simple_accounting.php" style="color:#333;text-decoration:none;"> Add Transactions
              </td>
             <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-image:url(img/option_center_check.png);font-weight:bold;width:150px;font-size:14px;">
              <a href="transaction.php?id=close" style="color:#333;text-decoration:none;">Closed transaction</a>
              </td>
                <td style="text-align:center;padding-top:8px;padding-bottom:8px;border-right:1px solid #cdcbd4;background-image:url(img/option_center_check.png);font-weight:bold;width:150px;font-size:14px;">
               <a href="transaction.php?id=open" style="color:#333;text-decoration:none;">Open transaction</a>
              </td>
              <td style="text-align:center;padding-top:8px;padding-bottom:8px;background-image:url(img/option_center_check.png);font-weight:bold;width:66px;">&nbsp;
           
              </td>
              </tr>
           
              </table>-->
    
    </td>
  </tr>
  <tr>
    <td><table width="739" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
        <td height="39" valign="top"> <div>
          <div style="width:140px; margin-left:20px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg);"><!--<img src="img/t_patient_list.png" alt="" />-->
               
                    <a href="dentist_simple_accounting.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Add Transactions</a>
                </td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:140px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_add.png"  alt="" />-->
                
             <a href="simple_accounting_list.php" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">List of Transactions</a>
                
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
          <div style="width:140px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_patient_list.png" alt="" />-->
                <a href="transaction.php?id=close" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Closed Transactions</a>
                </td>
                <td width="6"><img src="img/t2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>
           <div style="width:140px; margin-left:10px; margin-bottom:-2px; float:left;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/t1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/t3.jpg);"><!--<img src="img/t_patient_list.png" alt="" />-->
                <a href="transaction.php?id=open" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;text-decoration:none;">Open Transactions</a>
                </td>
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
          <!--<div style="width:130px; margin-left:10px; margin-bottom:-2px; float:left; z-index:999999999">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6"><img src="img/u1.jpg" width="6" height="41" alt="" /></td>
                <td width="661" align="center" style="background: url(img/u3.jpg); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#3e4447;">Joselito Galvez</td>
                <td width="6"><img src="img/u2.jpg" width="6" height="41" alt="" /></td>
              </tr>
            </table>
          </div>-->
        </div></td>
      </tr>
      <tr>
        <td><div style=" z-index:1;"><img src="img/1.jpg" width="739" height="12" alt="" /></div></td>
      </tr>
      <tr>
        <td height="47" style="background:url(img/2.jpg);">
      <img src="img/add_transac.png" height="20" width="158" style="margin-top:-8px;margin-left:19px;">
	  </td>
      </tr>
     
      <tr>
        <td valign="top" style="background:url(img/3.jpg); padding-bottom:10px;"><div style="margin-top:-8px; position: relative;">
          <table width="690" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFF" style="border-left:1px solid #a0a8ac; border-bottom:1px solid #a0a8ac; border-right:1px solid #a0a8ac;"><!--<p>&nbsp;</p>
-->

 
			  
			  <div style="clear:both;height:15px;"></div>
			  <?php 
		 if(isset($_POST['test'])) {


//var_dump($_POST);die();

$month=mysql_real_escape_string($_POST['month']);
	$day=mysql_real_escape_string($_POST['day']);
	$year=mysql_real_escape_string($_POST['year']);
	$date=$month."-".$day."-".$year;
	$date2=$year."-".$month."-".$day;
	$pt_id=mysql_real_escape_string($_POST['pt_name']);
	$other=mysql_real_escape_string($_POST['others']);
	//var_dump($date);die();	
	//$due_month=mysql_real_escape_string($_POST['due_month']);
	//$due_day=mysql_real_escape_string($_POST['due_day']);
	//$due_year=mysql_real_escape_string($_POST['due_year']);
	//$date_due=$due_year."-".$due_month."-".$due_day;
    $due=mysql_real_escape_string($_POST['due']);
	
	
	$tax_mave=mysql_real_escape_string($_POST['taxtotal']);
	
	//var_dump($tax);die();
	
	//$totalduw=mysql_real_escape_string($_POST['totaldue']);
	
	//var_dump($due);die();
	
	if($due=="now") { 
	$due_now=date('Y-m-d');
	}
	else if($due=="other") {
	$due_now=date('Y-m-d',strtotime("+$other days"));	
	}
	else if($due=="15") {
	$due_now=date('Y-m-d',strtotime("+15 days"));	
	}
	else if($due=="30") {
	$due_now=date('Y-m-d',strtotime("+30 days"));	
	}
	else if($due=="45") {
	$due_now=date('Y-m-d',strtotime("+45 days"));	
	}
	else if($due=="60") {
	$due_now=date('Y-m-d',strtotime("+60 days"));	
	}
	
	//var_dump($due_now);die();
	
	?>
    
    <div style="margin-left:10px;margin-top:10px;">
    <input type="button" name="print" value="PRINT" onclick="divPrint();" class="submit2"/>
    </div>
    
    <div style="clear:both;height:10px;"></div>
    
     <table style="font-family: Arial, Helvetica, sans-serif;color:#333;" cellpadding="0" cellspacing="0" border="0" id="print_this">
     
  


     
<tr style="font-size:13px;font-weight:bold;">
<!--<td width="200" style="border-right:1px solid #cdcbd4;padding-left:20px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">
Item Number
</td>-->
<td width="186" style="border-right:1px solid #cdcbd4;padding-left:20px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">Description</td>
<td width="154" style="border-right:1px solid #cdcbd4;padding-left:15px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">Date of transaction</td>
<td width="154" style="border-right:1px solid #cdcbd4;padding-left:15px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">Payment Due Date</td>
<td width="121" style="border-right:1px solid #cdcbd4;padding-left:20px;padding-top:10px;padding-bottom:10px;background-image:url(img/option_center_check.png);">Price</td>
</tr>

<?php
	
	$sql=mysql_query("SELECT * FROM patient_list WHERE id='".$pt_id."'");
	while($row=mysql_fetch_array($sql))
	{
	$pt_name=$row['patient_name'];	
	}


$qty=$_POST['qty'];
$price=$_POST['price'];
$desc=$_POST['desc'];

//var_dump($_POST);die();
$ctr=count($desc);
//var_dump($ctr);die();

$sqls="SELECT MAX(draft_id) AS largest FROM accounting_summary";
	$sql2=mysql_query($sqls);
	//$query=mysql_fetch_assoc($sql);
	$query=mysql_fetch_array($sql2);
	$draft_id=$query['largest'];
	
	
	if(empty($draft_id))
{ $idd="1"; }
else
{ 

$idd=$draft_id+1;} 

for($i=0;$i<=$ctr;$i++) {
$qty1=mysql_real_escape_string($qty[$i]);
$price1=mysql_real_escape_string($price[$i]);
$desc1=mysql_real_escape_string($desc[$i]);

$new=$qty1*$price1;
$prices=$prices+$new;


//$ctr=$qty1;

if($qty1!="") {
$sqle="INSERT INTO simple_accounting_scrath (dentist_id,date_draft,quantity,description,price,draft_id,date_due,patient_id,patient_name) VALUES('$dentist_id','$date2','$qty1','$desc1','$price1','$idd','$due_now','$pt_id','$pt_name')";
$rese=mysql_query($sqle);
$xy++;

	$i=$r;
			$r++;
			$f=$r%2;
	if($f==0)
	{ $back="#FFF";} 
	else
	{ $back="#e0eefa";}

?>

<!--start of content table-->

<tr style="font-size:13px;font-weight:bold;background-color:<?php echo $back;?>;">
<td style="text-align:left;padding-left:10px;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $desc1;?>
</td>
<td style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php echo $date2;?>
</td>
<td style="text-align:center;border:1px solid #CCC;padding-top:10px;padding-bottom:10px;">
<?php
//var_dump($date);die();
echo $due_now;?>
</td>
<td style="text-align:right;border:1px solid #CCC;padding-right:10px;padding-top:10px;padding-bottom:10px;">
P&nbsp;<?php $tot=$price1 * $qty1; echo number_format($tot);?>&nbsp;.00
</td></tr>

<!--end of content table-->

<?php

}
//var_dump($xy);



//var_dump($res);die();
}
//var_dump($prices);



	$sql="INSERT INTO accounting_summary (draft_id,dentist_id,draft_date,date_due,total,patient_id,patient_name) VALUES('$idd','$dentist_id','$date2','$due_now','$prices','$pt_id','$pt_name')";
$res=mysql_query($sql);

$new_id=mysql_insert_id();
	//echo $price; 
	
	$group="draft_id ".$idd;
	
$sqlw="INSERT INTO patient_credits (dentist_id,patient_id,notes_date_due,notes_description,notes_ammount,notes_date_noted) VALUES('$dentist_id','$pt_id','$due_now','$group','$prices','$date2')";
	$resw=mysql_query($sqlw);	



if($tax_mave=="no") {
$mave_price=$prices;	
$mave=$prices * 0.12;	
$prices=$prices + $mave;
}

?>


<tr style="font-size:13px;font-weight:bold;">
<td align="right" style="padding-right:10px;padding-top:10px;" colspan="4">
<table cellpadding="0" cellspacing="0" border="0">
<?php if($mave_price) { ?>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="width:100px;text-align:right;">Sub Total</td><td style="padding-left:5px;text-align:right;width:100px;">P &nbsp;<?php echo number_format($mave_price);?>&nbsp;.00</td></tr></table>
</td></tr>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="width:100px;text-align:right;">Tax</td><td style="padding-left:5px;text-align:right;width:100px;">P &nbsp;<?php echo number_format($mave);?>&nbsp;.00</td></tr></table>
</td></tr>
<?php } ?>
<tr><td>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="width:100px;text-align:right;">
Total</td><td style="padding-left:5px;text-align:right;width:100px;">P&nbsp;<?php echo number_format($prices);?>&nbsp;.00</td></tr></table>
</td></tr>
</table>
</td>
</tr>

<tr><td style="padding-left:15px;"> <a class="nav" href="pay.php?pay=<?php echo $new_id;?>&amp;pt=<?php echo $pt_id;?>&amp;key=<?php echo $idd;?>" onclick="popup1(this.href,'name','400','200','no'); return false">Receive Payment</a></td></tr>
<tr><td><div style="clear:both;height:20px;"></div></td></tr>

<tr><td style="padding-top:15px;padding-left:15px;padding-bottom:15px;">
<!--<a href="dentist_simple_accounting.php" style="font-family:Arial, Helvetica, sans-serif;font-size:13px;">Back</a>-->
<input type="submit" name="back" value="Back" class="submit2" onclick="window.location='dentist_simple_accounting.php'"></td></tr>



</table>

                </td>
            </tr> </table>
			
 
			  
<?php  } else {
			  $date=date('Y-m-d');

$date=explode("-",$date);
$y=$date[0];
$m=$date[1];
$d=$date[2];
			  ?>
			  

<!--<div style="float:right;margin-right:15px;">
<input type="button" name="print" value="PRINT" onclick="divPrint();" class="submit2"/>
</div>-->

<div style="clear:both;height:5px;"></div>

<div style="margin-left:30px;">
<table cellpadding="0" cellspacing="0" border="0" style="color:#333;font-weight:bold;;font-size:13px;font-family:Arial, Helvetica, sans-serif;">
<tr><td style="width:200px;text-align:right;">
Patient Name:
</td>
<td style="padding-left:10px;">
<select name="pt_name" id="pt_select" onchange="ChangeID(this.value)" tabindex="1">
<option value="none">-- Select Patient --</option>
<?php 
$sql="SELECT * FROM patient_list WHERE dentist_id='".$dentist_id."'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res)) {
$pt_name=$row['patient_name'];	
$pt_id=$row['id'];
echo "<option value=\"$pt_id\">$pt_name</option>";
}
?>
</select>
</td></tr></table>
</div>
<div style="clear:both;height:10px;"></div>
<table cellpadding="0" cellspacing="0" border="0" style="color:#333;font-weight:bold;;font-size:13px;font-family:Arial, Helvetica, sans-serif;padding-left:30px;">
<tr><td style="width:200px;text-align:right;">Date of transaction:</td>
<td style="padding-left:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
<select name="month">
<option value="01" <?php echo (($m==1)?"selected":"")?>>January</option>
<option value="02" <?php echo (($m==2)?"selected":"")?>>February</option>
<option value="03" <?php echo (($m==3)?"selected":"")?>>March</option>
<option value="04" <?php echo (($m==4)?"selected":"")?>>April</option>
<option value="05" <?php echo (($m==5)?"selected":"")?>>May</option>
<option value="06" <?php echo (($m==6)?"selected":"")?>>June</option>
<option value="07" <?php echo (($m==7)?"selected":"")?>>July</option>
<option value="08" <?php echo (($m==8)?"selected":"")?>>August</option>
<option value="09" <?php echo (($m==9)?"selected":"")?>>September</option>
<option value="10" <?php echo (($m==10)?"selected":"")?>>October</option>
<option value="11" <?php echo (($m==11)?"selected":"")?>>November</option>
<option value="12" <?php echo (($m==12)?"selected":"")?>>December</option>
</select> 
</td><td style="padding-left:10px;">
<select name="day">
<?php 
for($i=1;$i<=31;$i++) {
if($i==$d) {
$t="selected";
}
else {
$t="";
}

echo "<option value=\"$i\" $t>$i</option>";	
}
?>
</select>
</td><td style="padding-left:10px;">
<input type="text" name="year" style="width:45px;" value="<?php echo $y;?>"/>
</td></tr></table>
</td></tr>

<tr><td style="width:200px;text-align:right;padding-top:10px;">Patient ID No:</td>
<td style="padding-left:10px;padding-top:10px;">

<input type="text" name="pt_id" id="pt_id" disabled="disabled"/>

</td></tr>
<?php
$querty="SELECT MAX(draft_id) AS largest FROM accounting_summary";
$querties=mysql_query($querty);
	//$query=mysql_fetch_assoc($sql);
	$queries=mysql_fetch_array($querties);
	$draft_ids=$queries['largest'];
	$draft_ids=$draft_ids + 1;
?>
<tr><td style="width:200px;text-align:right;padding-top:10px;">Transaction ID No:</td>
<td style="padding-left:10px;padding-top:10px;">

<input type="text" name="transaction_id" id="transaction_id" disabled="disabled" value="<?php echo $draft_ids;?>"/>

</td></tr>

<tr><td style="width:200px;text-align:right;padding-top:10px;">Payment Due:</td>
<td style="padding-left:10px;padding-top:10px;">
<table cellpadding="0" cellspacing="0" border="0">
<!--<tr><td style="padding-left:10px;">
<select name="due_month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select> 
</td><td style="padding-left:10px;">
<select name="due_day">
<?php 
/*for($i=1;$i<=31;$i++) {
echo "<option value=\"$i\">$i</option>";	
}*/
?>
</select>
</td><td style="padding-left:10px;">
<input type="text" name="due_year" style="width:45px;" value="2012"/>
</td></tr>-->

<tr><td>

<select name="due" onchange="ChangeSelect(this.value);">
<option value="now">Immediately</option>
<option value="15" selected>15 days</option>
<option value="30">30 days</option>
<option value="45">45 days</option>
<option value="60">60 days</option>
<option value="other">Other<option>
</select>

</td></tr>

<tr id="selectme" style="display:none;">
<td style="padding-top:5px;">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td style="padding-left:12px;">
<input type="text" name="others" style="width:60px;" value="61"/>
</td>
<td style="padding-left:3px;">How many days?</td>
</tr>
</table>
</td></tr>


</table>
</td></tr>

</table>

  <div style="clear:both;height:10px;"></div>
 
  
  

<table cellpadding="0" cellspacing="0" border="0" style="padding-bottom:20px;padding-left:30px;">


<tr>

<td valign="top" style="width:620px;background-color:#f5f5f5;height:40px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;">

<table cellpadding="0" cellspacing="0" border="0" style="padding-top:10px;">
<tr><td width="60" style="text-align:center;padding-left:10px;">
Unit
</td>
<td width="60" style="text-align:center;padding-left:10px;">
Qty
</td>
<td width="255" style="text-align:left;padding-left:15px;">
Description
</td>
<td width="50" style="text-align:left;">

<table cellspacing="0" cellpadding="0" border="0">
<tr><td>
<input type="checkbox" name="taxtotal" id="taxtotal" onclick="Showtax()" value="no"/></td>
<td style="padding-left:3px;">
VAT(12%)
</td></tr></table>
</td>
<td width="90" style="text-align:right;">
Unit Price
</td>
<td width="85" style="text-align:center;">
Total
</td>
</tr>
</table>

  </td></tr>
  
  <tr>


<td valign="top">
<div id="dynamicInput" style="margin-top:5px;display:block;"><!--talbe-->

<div id="0" style="float:left;">
<div style="float:left;width:490px;height:50px;"><!--ttable1-->
<!--<table cellpadding="0" cellspacing="0" border="0" style="padding-top:10px;">
<tr><td width="50" style="font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;">
Qty:
</td>
<td style="padding-left:8px;">
<input type="text" name="qty[]" style="width:20px;"/>
</td>
<td width="90" style="padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;text-align:right;">
Description:
</td>
<td style="padding-left:8px;" colspan="2">
<input type="text" name="desc[]" style="width:170px;" value=""/>
<input type="hidden" name="id[]" value="" /> 
<input type="hidden" name="delete[]" value="n" id="del"/>
</td>
<td style="padding-left:8px;font-family:Arial, Helvetica, sans-serif;color:#333;font-size:14px;font-weight:bold;">
Price:
</td>
<td style="padding-left:8px;">
<input type="text" name="price[]" style="width:40px;"/>
</td>
<td style="padding-left:4px;"><img src="img/icon_address_delete.png" onclick="RemoveThis();"/>
</td>
</tr>
</table>-->
<table cellspacing='0' cellpadding='0' border='0' width='620'><tr><td style="width:16px;"><img src='img/icon_address_delete.png' onclick='RemoveThis();'/></td><td style='padding-left:5px;width:60px;'><input type='text' name='unit[]' style="width:60px;"></td><td style='padding-left:10px;width:20px;'><input type='text' name='qty[]' style='width:20px;'  value='1' onchange="ChangeQty(0)" id='qty0'/></td><td style='padding-left:10px;width:250px;'>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td><div style="clear:both;height:18px;"></div></td></tr>
<tr><td> 
<textarea name='desc[]' style="width:250px;height:35px;"></textarea>
</td></tr></table>
</td><td style='padding-left:10px;width:20px;'><input type='checkbox' name='tax0' id='tax0' value="no" onchange="Multiply(0)" style="display:none;"/></td><td style='padding-left:10px;width:90px;'><input type='text' name='price[]' style='width:90px;text-align:right;' value='0.00' id='price0' onchange="ChangePrice(0)" ></td><td style='padding-left:10px;width:60px;'><input type='text' style='border:none;width:60px;background-color:#FFF;text-align:right;' id='tot0' name='total[]' value='P0.00' disabled="disabled"/></td></tr></table>
</div>
</div><!--end of table1-->
<div style="clear:both;"></div>
</div><!--talbe-->

<div style="clear:both;height:25px;"></div>


<table cellpadding="0" width="620" cellspacing="0" border="0" style="font-weight:bold;font-size:15px;font-family:Arial, Helvetica, sans-serif;">
<tr><td style="width:620px;" align="right">

<table cellpadding="0" cellspacing="0" border="0" style="padding-right:8px;">
<tr><td>
Subtotal
</td>
<td>
<input type="text" name="subtotal" id="subtotal" value="P0.00" style="border:none;width:60px;background-color:#FFF;text-align:right;" disabled="disabled" />
</td>
</tr>
</table>

</td></tr>

<tr id="sub" style="display:none;"><td style="width:620px;" align="right">
<table cellpadding="0" cellspacing="0" border="0" style="padding-right:8px;">
<tr><td>
Sales Tax
</td>
<td>
<input type="text" name="taxnow" id="taxnow" value="P0.00" style="border:none;width:60px;background-color:#FFF;text-align:right;" disabled="disabled" />
</td>
</tr>
</table>
</td></tr>

<tr><td style="width:620px;" align="right">
<table cellpadding="0" cellspacing="0" border="0" style="padding-right:8px;">
<tr><td>
Total Due
</td>
<td>
<input type="text" name="totaldue" id="totaldue" value="P0.00" style="border:none;width:60px;background-color:#FFF;text-align:right;" disabled="disabled" />
</td>
</tr>
</table>

</td></tr>


</table>


<div style="clear:both;height:15px;"></div>
<div>
<input type="button" name="add" value="Add New Transaction" class="submit2" onClick="addInput('dynamicInput');"/>
<input type="hidden" name="where_table" value="" />
</div>
<div style="clear:both;height:15px;"></div>

<table cellpadding="0" cellspacing="0" border="0">
<tr><td> 
<input type="submit" class="submit2" name="test" value="Save" />
</td>
<td style="padding-left:10px;">
<input type="button" name="cancel" class="submit2" value="Cancel" onclick="javascript:history.go(-1)"/>
</td>
</tr>
</table>

</td>





</tr>


</table>               
           
         <?php } ?>     
               </td>
            </tr>
          </table>
        </div></td>
      </tr>
      <tr>
        <td><img src="img/4.jpg" width="739" height="6" alt="" /></td>
      </tr>
    </table></td>
   
  </tr>
</table>

  </form> 

</body>
</html>

<script type="text/javascript">
var counter = 1;
var limit = 20;
function addInput(divName){
     if (counter==limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
		  
          var newdiv = document.createElement('div');
		  newdiv.id = counter;
          newdiv.innerHTML = "<table cellspacing='0' cellpadding='0' border='0' width='620'><tr><td style='width:16px;'><img src='img/icon_address_delete.png' onclick='RemoveNow("+counter+")'/></td><td style='padding-left:5px;width:60px;'><input type='text' name='unit[]' style='width:60px;'></td><td style='padding-left:10px;width:20px;'><input type='text' name='qty[]' onchange='changeqtynow("+counter+")' style='width:20px;' value='1' id='qty"+counter+"'/></td><td style='padding-left:10px;width:250px;'><table cellpadding='0' cellspacing='0' border='0'><tr><td><div style='clear:both;height:18px;'></div></td></tr><tr><td><textarea name='desc[]' style='width:250px;height:35px;'></textarea></td></tr></table></td><td style='padding-left:10px;width:20px;'><input type='checkbox' name='tax[]' id='check"+counter+"' onclick='Changetaxnow("+counter+")' style='display:none;'/></td><td style='padding-left:10px;width:90px;'><input type='text' name='price[]' style='width:90px;text-align:right;' value='0.00' id='price"+counter+"' onchange='Changetotalnow("+counter+")'></td><td style='padding-left:10px;width:60px;'><input type='text' style='border:none;width:60px;background-color:#FFF;text-align:right;' id='tot"+counter+"' name='total[]' value='P0.00' disabled='disabled'/></td></tr></table>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
</script>


<script>
function change_color(e,f) {

document.getElementById(e).style.backgroundColor='#999';
document.getElementById(f).value='y';
/*alert(document.getElementById(f).value);*/
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

<script language="javascript" type="text/javascript">
function divPrint()
{

var display_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=750, height=600, left=100, top=25";

var content_innerhtml = document.getElementById("print_this").innerHTML;
var document_print=window.open("","",display_setting);
document_print.document.open();
document_print.document.write('<html><head><title>Print Patient Transaction </title></head>');
document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');
document_print.document.write(content_innerhtml);
document_print.document.write('</body></html>');
document_print.print();
document_print.document.close();
return false;
}

</script>  
