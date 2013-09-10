<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(!$_SESSION["admin_username"])
{
    //Do not show protected data, redirect to login...
    header('Location: admin_login.php');
}
function pagination($query, $per_page = 10,$page = 1, $url = '?')
{        
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
    
include('config.php');

$limit = 20;
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
$startpoint = ($page * $limit) - $limit;

if(isset($_GET['arr']))
{
    $sort_by=$_GET["arr"];
    if($sort_by == "sur_name")
    {
        $query_dentist= "SELECT d.id, d.first_name, d.middle_name, d.sur_name, (SELECT COUNT( 1 ) FROM patient_list p WHERE p.dentist_id = d.id) as a FROM dentist_list d order by d.sur_name ASC LIMIT {$startpoint}, {$limit}";
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

                $table_html .= "<td>" . $row_dentist['id'] . "</td>
                          <td>" . $name . "</td>";
                $table_html .= "<td>" . $row_dentist['a'] . "</td>";
                $table_html .= "</tr>";
            }
            $statement = "dentist_list WHERE allow_dentist='yes'";
        }
    }
    elseif($sort_by == "patient_list")
    {
        $query_dentist= "SELECT d.id, d.first_name, d.middle_name, d.sur_name, (SELECT COUNT( 1 ) FROM patient_list p WHERE p.dentist_id = d.id) as a FROM dentist_list d order by a DESC LIMIT {$startpoint}, {$limit}";
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

                $table_html .= "<td>" . $row_dentist['id'] . "</td>
                          <td>" . $name . "</td>";
                $table_html .= "<td>" . $row_dentist['a'] . "</td>";
                $table_html .= "</tr>";
            }
            $statement = "dentist_list WHERE allow_dentist='yes'";
        }
    }
}
else
{
    $query_dentist= "SELECT d.id, d.first_name, d.middle_name, d.sur_name, (SELECT COUNT( 1 ) FROM patient_list p WHERE p.dentist_id = d.id) as a FROM dentist_list d order by ID ASC LIMIT {$startpoint}, {$limit}";
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

            $table_html .= "<td>" . $row_dentist['id'] . "</td>
                      <td>" . $name . "</td>";
            $table_html .= "<td>" . $row_dentist['a'] . "</td>";
            $table_html .= "</tr>";
        }
        $statement = "dentist_list WHERE allow_dentist='yes'";
    }   
}

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

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
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
                                            <span><p>Number of dentist with 0 patient: <em id="zero_patient"><?php echo $patient_zero; ?></em></p></span>
                                            <span><p>Number of dentist with 1 or more patients: <em id="more_than_one"><?php echo $patient_1; ?></em></p></span>
                                        </div>
                                        <h2 class="head2">List</h2>
                                        <table border="1" cellpadding="0" cellspacing="0" class="table_dentist">
                                            <tr>
                                                <th width="150px"><a href="patient_list_to_each_doctor.php" style="color: #333;">ID</a></th>
                                                <th width="350px"><a href="patient_list_to_each_doctor.php?arr=sur_name" style="color: #333;">Name</a></th>
                                                <th> <a href="patient_list_to_each_doctor.php?arr=patient_list" style="color: #333;">Number of Patient</a></th>
                                            </tr>
                                            <?php echo $table_html;?>
                                            
                                            <tr>
                                            <?php 
                                                if($i==$limit)
                                                { ?>
                                                <td colspan="3" style="padding-top:10px;padding-bottom:10px;">
                                                 <?php } else { ?>
                                                 <td colspan="3"><?php } ?>
                                                       <?php
                                                        //
                                      echo pagination($statement,$limit,$page);
                                      //var_dump($statement);die();
                                        ?>
                                                 </td></tr>
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