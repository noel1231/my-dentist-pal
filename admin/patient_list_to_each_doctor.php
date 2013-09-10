<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function pagination($query, $per_page = 10,$page = 1, $url = ''){        
    	$query = "SELECT COUNT(*) as `num` FROM {$query}";
    	$row = mysql_fetch_array(mysql_query($query));
    	$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination'>";
                    $pagination .= "<li class='details'>Page $page of $lastpage</li>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li><a class='current'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>...</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}page=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2'>2</a></li>";
    				$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}page=$next'>Next</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage'>Last</a></li>";
    		}else{
    			$pagination.= "<li><a class='current'>Next</a></li>";
                $pagination.= "<li><a class='current'>Last</a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    }

session_start();
if(!$_SESSION["admin_username"])
{
    //Do not show protected data, redirect to login...
    header('Location: admin_login.php');
}

include('config.php');

$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
$limit = 20;
$startpoint = ($page * $limit) - $limit;

if(isset($_GET['arr']))
{
    $sort_by=$_GET["arr"];
    
    if($sort_by == "sur_name")
    {
        $url = "?arr=sur_name&";
        
        $query_dentist= "SELECT d.id,
                            d.first_name,
                            d.middle_name,
                            d.sur_name,
                            d.email,
                            d.tel_number,
                            d.cel_number,
                            (SELECT COUNT( 1 ) FROM patient_list p WHERE p.dentist_id = d.id) as a
                            FROM dentist_list d order by d.sur_name ASC LIMIT {$startpoint}, {$limit}";
                            
        $res_dentist=mysql_query($query_dentist);

        $table_html = "";

        $i=0;

        if($res_dentist)
        {
            while($row_dentist=mysql_fetch_array($res_dentist))
            {
                $i++;

                $f=$i%2;

                if($f==0)
                {
                    $back="#FFF";
                    $table_html .= "<tr class='white'>";
                } 
                else
                {
                    $back="#e0eefa";
                    $table_html .= "<tr class='colored'>";
                }

                $fname = $row_dentist['first_name'];
                $mname = $row_dentist['middle_name'];
                $lname = $row_dentist['sur_name'];
                $name = $lname . ", " . $fname . " " . $mname;
                $email = $row_dentist['email'];
                $cel_number = $row_dentist['cel_number'];
                $tel_number = $row_dentist['tel_number'];
                $name = $lname . ", " . $fname . " " . $mname;

                $table_html .=
                        "<td style='width:80px'>" . $row_dentist['id'] . "</td>
                         <td style='width:150px'>" . $name . "</td>
                         <td style='width:80px'>" . $email . "</td>
                         <td style='width:100px'>" . $cel_number . "</td>
                         <td style='width:100px'>" . $tel_number . "</td>
                         <td style='width:80px'>" . $row_dentist['a'] . "</td>";
               $table_html .= "</tr>";
            }
            
            $statement = "dentist_list WHERE allow_dentist='yes'";
        }
    }
    elseif($sort_by == "patient_list")
    {
        $url = "?arr=patient_list&";
        $query_dentist= "SELECT d.id,
                            d.first_name,
                            d.middle_name,
                            d.sur_name,
                            d.email,
                            d.tel_number,
                            d.cel_number,
                            (SELECT COUNT( 1 ) FROM patient_list p WHERE p.dentist_id = d.id) as a
                            FROM dentist_list d order by a DESC LIMIT {$startpoint}, {$limit}";
        
        $res_dentist=mysql_query($query_dentist);

        $table_html = "";

        $i=0;

        if($res_dentist)
        {
            while($row_dentist=mysql_fetch_array($res_dentist))
            {
                $i++;

                $f=$i%2;

                if($f==0)
                {
                    $back="#FFF";
                    $table_html .= "<tr class='white'>";
                } 
                else
                {
                    $back="#e0eefa";
                    $table_html .= "<tr class='colored'>";
                }

                $fname = $row_dentist['first_name'];
                $mname = $row_dentist['middle_name'];
                $lname = $row_dentist['sur_name'];
                $name = $lname . ", " . $fname . " " . $mname;
                $email = $row_dentist['email'];
                $cel_number = $row_dentist['cel_number'];
                $tel_number = $row_dentist['tel_number'];
                $name = $lname . ", " . $fname . " " . $mname;

                $table_html .=
                        "<td style='width:80px'>" . $row_dentist['id'] . "</td>
                         <td style='width:150px'>" . $name . "</td>
                         <td style='width:80px'>" . $email . "</td>
                         <td style='width:100px'>" . $cel_number . "</td>
                         <td style='width:100px'>" . $tel_number . "</td>
                         <td style='width:80px'>" . $row_dentist['a'] . "</td>";
               $table_html .= "</tr>";
            }
            $statement = "dentist_list WHERE allow_dentist='yes'";
        }
    }
}

else if(isset($_POST['submit']))
{
    if(preg_match("/^[  a-zA-Z]+/", $_POST['sur_name']))
    {
        $name=$_POST['sur_name'];
    }
    
    $query_dentist= "SELECT d.id,
                            d.first_name,
                            d.middle_name,
                            d.sur_name,
                            d.email,
                            d.tel_number,
                            d.cel_number,
                            (SELECT COUNT( 1 ) FROM patient_list p WHERE p.dentist_id = d.id) as a
                            FROM dentist_list d WHERE d.sur_name LIKE '%". $name ."%'";
                            
    $res_dentist=mysql_query($query_dentist);
    
    $table_html = "";

    $i=0;

    if($res_dentist)
    {
        while($row_dentist=mysql_fetch_array($res_dentist))
        {
            $i++;

            $f=$i%2;

            if($f==0)
            {
                $back="#FFF";
                $table_html .= "<tr class='white'>";
            } 
            else
            {
                $back="#e0eefa";
                $table_html .= "<tr class='colored'>";
            }

            $fname = $row_dentist['first_name'];
            $mname = $row_dentist['middle_name'];
            $lname = $row_dentist['sur_name'];
            $name = $lname . ", " . $fname . " " . $mname;
            $email = $row_dentist['email'];
            $cel_number = $row_dentist['cel_number'];
            $tel_number = $row_dentist['tel_number'];
            $name = $lname . ", " . $fname . " " . $mname;

            $table_html .=
                     "<td style='width:80px'>" . $row_dentist['id'] . "</td>
                      <td style='width:150px'>" . $name . "</td>
                      <td style='width:80px'>" . $email . "</td>
                      <td style='width:100px'>" . $cel_number . "</td>
                      <td style='width:100px'>" . $tel_number . "</td>
                      <td style='width:80px'>" . $row_dentist['a'] . "</td>";
            $table_html .= "</tr>";
        }
        
        $statement = "dentist_list WHERE sur_name LIKE '%".$name."%'";
    } 
    
}

else
{
    $url = "?";
    $query_dentist= "SELECT d.id,
                            d.first_name,
                            d.middle_name,
                            d.sur_name,
                            d.email,
                            d.tel_number,
                            d.cel_number,
                            (SELECT COUNT( 1 ) FROM patient_list p WHERE p.dentist_id = d.id) as a
                            FROM dentist_list d order by d.id ASC LIMIT {$startpoint}, {$limit}";
    
    $res_dentist=mysql_query($query_dentist);

    $table_html = "";

    $i=0;

    if($res_dentist)
    {
        while($row_dentist=mysql_fetch_array($res_dentist))
        {
            $i++;

            $f=$i%2;

            if($f==0)
            {
                $back="#FFF";
                $table_html .= "<tr class='white'>";
            } 
            else
            {
                $back="#e0eefa";
                $table_html .= "<tr class='colored'>";
            }

            $fname = $row_dentist['first_name'];
            $mname = $row_dentist['middle_name'];
            $lname = $row_dentist['sur_name'];
            $email = $row_dentist['email'];
            $cel_number = $row_dentist['cel_number'];
            $tel_number = $row_dentist['tel_number'];
            $name = $lname . ", " . $fname . " " . $mname;

            $table_html .=
                     "<td style='width:80px'>" . $row_dentist['id'] . "</td>
                      <td style='width:150px'>" . $name . "</td>
                      <td style='width:80px'>" . $email . "</td>
                      <td style='width:100px'>" . $cel_number . "</td>
                      <td style='width:100px'>" . $tel_number . "</td>
                      <td style='width:80px'>" . $row_dentist['a'] . "</td>";
            $table_html .= "</tr>";
        }
        $statement = "dentist_list WHERE allow_dentist='yes'";
    }
}

// counter
$pages = pagination($statement,$limit,$page,$url);

$patient_zero = 0;
$patient_1 = 0;
$query_dentist = "SELECT * FROM dentist_list ORDER BY ID ASC";
$res_dentist   = mysql_query($query_dentist);

if ($res_dentist)
{
    while ($row_dentist = mysql_fetch_array($res_dentist))
    {
        $dentist_id = $row_dentist['id'];
        $query_patient= "SELECT COUNT(*) as patient_num FROM patient_list
                                         WHERE dentist_id ='$dentist_id'";

        $res_patient=mysql_query($query_patient);
        if($res_patient)
        {
             while($row_patient=mysql_fetch_array($res_patient))
             {
                 if($row_patient['patient_num'] >= 1)
                 {
                     $patient_1++;
                 }
                 elseif($row_patient['patient_num'] < 1)
                 {
                     $patient_zero++;
                 }
             }
         }
    }
}
$patient_count = "";

$date_today = date("Y-m-d") . " " . date('G:i:s');
$date_less_than = date("Y-m-d",strtotime($date_today. '-7 days')) . " " . date('G:i:s');
//var_dump($date_today. "       " .$date_less_than); exit;
$query_patient = "SELECT COUNT(*) as patient_count FROM patient_list WHERE date_of_entry >= '$date_less_than' and date_of_entry <= '$date_today'";
$res_patient   = mysql_query($query_patient);
if ($res_patient)
{
    while ($row_patient = mysql_fetch_array($res_patient))
    {
        $patient_count = $row_patient['patient_count'];
    }
    
}

$patient_num = "";

$query_patient_num = "SELECT COUNT(*) AS count FROM  patient_list WHERE 1";
$res_patient_num   = mysql_query($query_patient_num);

if ($res_patient_num)
{
    while ($row_patient_num = mysql_fetch_array($res_patient_num))
    {
        $patient_num = $row_patient_num['count'];
    }
}

if($patient_count == 0)
{
    $patient_count = "none";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dentist Informations</title>
        <link rel="stylesheet" type="text/css" media="screen" href="../style/style.css" />
        <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
        <link href="pagination/css/B_blue.css" rel="stylesheet" type="text/css" />
        
        <style>
            body
            {
                color:#333;
                font-family:Arial, Helvetica, sans-serif;
                margin:0;
                padding:0;
                background-color:#f6f5f5;
            }
            .container
            {
                margin: 0;
                padding: 0;
                width: 800px;
            }
            
            .container .head2
            {
                padding: 5px;
                margin: 5px;
                font-size: 28px;
                width: 100%;
            }
            
            .container .table_dentist
            {
                width: 100%;
                font-size: 14px;
            }
            
            .container .table_dentist th
            {
                padding: 10px;
            }
            
            .header_container
            {
                width: 800px;
                margin: 0;
                padding: 0;
            }
            
            .white
            {
                background-color: #fff;
            }
            
            .colored
            {
                background-color: #e0eefa;
            }
            
            .white td
            {
                background-color: #fff;
                padding: 10px;
            }
            
            .colored td
            {
                background-color: #e0eefa;
                padding: 10px;
            }
            
            .patient_info span p
            {
                text-align: left !important;
                width: 50%;
                color: #333;
            }
            
            .patient_info span a
            {
                text-decoration: underline;
                color: #333;
            }
            
            .patient_info span p em
            {
                text-align: left !important;
                font-style: normal;
            }
        </style>
    </head>
    <body>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="text-align:center;">
            <!--top-->
            <tr>
                <td>
                    <?php include('../includes/admin_top.php');?>
                    <!--top-->
                </td>
            </tr>
            <!--tooth-->
            <tr>
                <td>
                    <?php include('includes/admin_top.php');?>
                    <!--dentisit dashboard-->
                </td>
            </tr>
            <tr>
                <td width="100%" height="54" style="background-image:url('../images/menubar.png');"></td>    
            </tr>
            <tr>
                <td>
                    <div style="margin:0 auto;width:960px;">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td valign="top">
                                    <div style="margin-top:-38px;">
                                        <?php include('../includes/sidebar_admin.php');?>
                                    </div>
                                </td>
                                <td valign="top" style="padding-top:26px;">
                                    <div class="container">
                                        <div class="patient_info">
                                            <span><p><a href="">Number of dentist with 0 patient:</a> <em id="zero_patient"><?php echo $patient_zero; ?></em></p></span>
                                            <span><p><a href="">Number of dentist with 1 or more patients:</a> <em id="more_than_one"><?php echo $patient_1; ?></em></p></span>
                                            <span><p><a href="">Number of Patients added for past 7 days:</a> <em id="more_than_one"><?php echo $patient_count; ?></em></p></span>
                                            <span><p><a href="">Number of Patients:</a> <em id="more_than_one"><?php echo $patient_num; ?></em></p></span>
                                            <span>
                                                <form name="frmMain" action="patient_list_to_each_doctor.php" method="post" style="text-align: right;">
                                                    <label>Search for Last Name</label>
                                                    <input type="text" name="sur_name" id="sur_name"/>
                                                    <input type="submit" value="search" id="submit" name="submit" />
                                                </form>
                                            </span>
                                        </div>
                                        <h2 class="head2">List</h2>
                                        <table border="1" cellpadding="0" cellspacing="0" class="table_dentist">
                                            <tr>
                                                <th width="80px"><a href="patient_list_to_each_doctor.php?page=1" style="color: #333;">ID</a></th>
                                                <th width="250px"><a href="patient_list_to_each_doctor.php?arr=sur_name&page=1" style="color: #333;">Name</a></th>
                                                <th>Email</th>
                                                <th>Cell Number</th>
                                                <th>Tel Number</th>
                                                <th> <a href="patient_list_to_each_doctor.php?arr=patient_list&page=1" style="color: #333;">Number of Patient</a></th>
                                            </tr>
                                            <?php echo $table_html;?>
                                            <tr>
                                                <td colspan="6">
                                                    <?php echo $pages;?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
        <div style="clear:both;height:20px;"></div>
        <?php include('includes/footer.php');?>
    </body>
</html>