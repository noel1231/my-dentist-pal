<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('email');
		$this->load->library('image_lib');
		$this->load->library('cart');
		$this->load->library('encrypt');
	}
	
	function index()
	{
	
	}

	function patient_tooth_chart() {

		if($id = $this->input->get('id')) {

			if($this->input->post()) {
				print_r($this->input->post('tooth_image'));
			}
				


			$data['patient_id'] = $id;

			$this->db->where('id', $id);
			$sql = $this->db->get('patient_list');
			$row = $sql->row_array();

				$data['name']=$row["patient_name"];
				$data['what_chart']=$row["what_chart"];
				$age=$row['patient_age'];


			// if($data['what_chart']==1) {
				// $this->db->where('patient_id', $id);
				// $sql = $this->db->get('patient_adult_tooth');
				// $row = $sql->row_array();

					// $chart_name=$row["tooth_chart_name"];
					// $chart_date=$row["tooth_chart_date"];
					// $data['chart_remarks']=$row["tooth_remarks"];

			// } else {
				// $this->db->where('patient_id', $id);
				// $sql = $this->db->get('patient_child_tooth');
				// $row = $sql->row_array();

					// $chart_name=$row["tooth_chart_name"];
					// $chart_date=$row["tooth_chart_date"];
					// $chart_remarks=$row["tooth_remarks"];
			// }

			// if(empty($chart_name))
			// { $chart_name="";}
			// if(empty($chart_date))
			// { $chart_date="";}
			// if(empty($chart_remarks))
			// { $chart_remarks="";}

			// if($this->input->post('save_rem'))
			// {
				// $rem=$this->input->post('remarks');
				// $id=$this->input->post('id_for_remarks');
				// $what_chart=$this->input->post('what_chart');

				// if($what_chart==1) {
					// $sql="UPDATE patient_adult_tooth SET tooth_remarks='".$rem."' WHERE patient_id=".$id."";
					// $res=mysql_query($sql);
					// $sql="SELECT * FROM patient_adult_tooth WHERE patient_id=".$id."";
					// $res=mysql_query($sql);
					// while($row=mysql_fetch_array($res))
					// {
						// $chart_name=$row["tooth_chart_name"];
						// $chart_date=$row["tooth_chart_date"];
						// $chart_remarks=$row["tooth_remarks"];
					// }
				// } else {
					// $sql="UPDATE patient_child_tooth SET tooth_remarks='".$rem."' WHERE patient_id=".$id."";
					// $res=mysql_query($sql);
					// $sql="SELECT * FROM patient_child_tooth WHERE patient_id=".$id."";
					// $res=mysql_query($sql);
					// while($row=mysql_fetch_array($res))
					// {
						// $chart_name=$row["tooth_chart_name"];
						// $chart_date=$row["tooth_chart_date"];
						// $chart_remarks=$row["tooth_remarks"];
					// }
				// }

			// }

			$data['body'] = $this->load->view('patient/box_tooth_edit', $data, true);
			$this->load->view('homepage', $data);

		} else {
			$this->index();
		}
	}

	function patient_tooth_add() {
		// $data['dentist_id'] = $this->session->userdata('id');
		// $id = $this->input->post('id');
		// $data['patient_id'] = $id;

		// $this->db->where('id', $id);
		// $sql = $this->db->get('patient_list');
		// $row = $sql->row_array();

		

			// $data['name']=$row["patient_name"];

		// if(isset($_POST['adult']))
		// {
			// $id=mysql_real_escape_string($_POST['pt_id']);
			// $val=1;
			// $sql="UPDATE patient_list SET what_chart='".$val."' WHERE id=".$id."";
			// $res=mysql_query($sql);

			// $sql2="SELECT patient_name FROM patient_list WHERE id=".$id."";
			// $res2=mysql_query($sql2);
			// while($row=mysql_fetch_array($res2))
			// {$name=$row["patient_name"];}
		// }

		// if(isset($_POST['child']))
		// {
			// $id=mysql_real_escape_string($_POST['pt_id']);
			// $val=2;
			// $sql="UPDATE patient_list SET what_chart='".$val."' WHERE id=".$id."";
			// $res=mysql_query($sql);

			// $sql2="SELECT patient_name FROM patient_list WHERE id=".$id."";
			// $res2=mysql_query($sql2);
			// while($row=mysql_fetch_array($res2))
			// {$name=$row["patient_name"];}
		// }
/*
if(isset($_POST['save']))
{
	$id=mysql_real_escape_string($_POST['pt_id']);

	for($adultnum = 1; $adultnum <= 32; $adultnum++)
	{
		${'tooth'.$adultnum} = $this->input->post('newvalue'.$adultnum);
		${'legend'.$adultnum} = $this->input->post('leg_'.$adultnum);
	}

	for($childnum = 1; $childnum <= 20; $childnum++)
	{
		${'child'.$childnum} = $this->input->post('childvalue'.$childnum);
	}

	for($child_leg_num = 1; $child_leg_num <= 20; $child_leg_num++)
	{
		${'child_leg'.$child_leg_num} = $this->input->post('legs_'.($child_leg_num+10));
	}

// $child_leg1=mysql_real_escape_string($_POST['legs_11']);
// $child_leg2=mysql_real_escape_string($_POST['legs_12']);
// $child_leg3=mysql_real_escape_string($_POST['legs_13']);
// $child_leg4=mysql_real_escape_string($_POST['legs_14']);
// $child_leg5=mysql_real_escape_string($_POST['legs_15']);
// $child_leg6=mysql_real_escape_string($_POST['legs_16']);
// $child_leg7=mysql_real_escape_string($_POST['legs_17']);
// $child_leg8=mysql_real_escape_string($_POST['legs_18']);
// $child_leg9=mysql_real_escape_string($_POST['legs_19']);
// $child_leg10=mysql_real_escape_string($_POST['legs_20']);
// $child_leg11=mysql_real_escape_string($_POST['legs_21']);
// $child_leg12=mysql_real_escape_string($_POST['legs_22']);
// $child_leg13=mysql_real_escape_string($_POST['legs_23']);
// $child_leg14=mysql_real_escape_string($_POST['legs_24']);
// $child_leg15=mysql_real_escape_string($_POST['legs_25']);
// $child_leg16=mysql_real_escape_string($_POST['legs_26']);
// $child_leg17=mysql_real_escape_string($_POST['legs_27']);
// $child_leg18=mysql_real_escape_string($_POST['legs_28']);
// $child_leg19=mysql_real_escape_string($_POST['legs_29']);
// $child_leg20=mysql_real_escape_string($_POST['legs_30']);


$remark=mysql_real_escape_string($_POST['remarks']);

$chart_name=mysql_real_escape_string($_POST['chart_name']);
$date=date('d/m/Y');
//var_dump($date);die();
$sql="SELECT * FROM patient_list WHERE id=".$id."";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{$name=$row['patient_name'];
$what_chart=$row['what_chart'];
$tooth_checker=$row['tooth_checker'];
}
if($tooth_checker=="no") {
	if($what_chart==1) {
$sql="INSERT INTO patient_adult_tooth 
(patient_id,
 tooth_18,
tooth_17,
tooth_16,
tooth_15,
tooth_14,
tooth_13,
tooth_12,
tooth_11,
tooth_21,
tooth_22,
tooth_23,
tooth_24,
tooth_25,
tooth_26,
tooth_27,
tooth_28,
tooth_41,
tooth_42,
tooth_43,
tooth_44,
tooth_45,
tooth_46,
tooth_47,
tooth_48,
tooth_31,
tooth_32,
tooth_33,
tooth_34,
tooth_35,
tooth_36,
tooth_37,
tooth_38,
legend_11,
legend_12,
legend_13,
legend_14,
legend_15,
legend_16,
legend_17,
legend_18,
legend_21,
legend_22,
legend_23,
legend_24,
legend_25,
legend_26,
legend_27,
legend_28,
legend_31,
legend_32,
legend_33,
legend_34,
legend_35,
legend_36,
legend_37,
legend_38,
legend_41,
legend_42,
legend_43,
legend_44,
legend_45,
legend_46,
legend_47,
legend_48,
tooth_chart_name,
tooth_chart_date,
tooth_remarks)
VALUES
('$id',
 '$tooth1',
 '$tooth2',
 '$tooth3',
 '$tooth4',
 '$tooth5',
 '$tooth6',
 '$tooth7',
 '$tooth8',
 '$tooth9',
 '$tooth10',
 '$tooth11',
 '$tooth12',
 '$tooth13',
 '$tooth14',
 '$tooth15',
 '$tooth16',
 '$tooth24',
 '$tooth23',
 '$tooth22',
 '$tooth21',
 '$tooth20',
 '$tooth19',
 '$tooth18',
 '$tooth17',
 '$tooth25',
 '$tooth26',
 '$tooth27',
 '$tooth28',
 '$tooth29',
 '$tooth30',
 '$tooth31',
 '$tooth32',
 '$legend1',
 '$legend2',
 '$legend3',
 '$legend4',
 '$legend5',
 '$legend6',
 '$legend7',
 '$legend8',
 '$legend9',
 '$legend10',
 '$legend11',
 '$legend12',
 '$legend13',
 '$legend14',
 '$legend15',
 '$legend16',
 '$legend17',
 '$legend18',
 '$legend19',
 '$legend20',
 '$legend21',
 '$legend22',
 '$legend23',
 '$legend24',
 '$legend25',
 '$legend26',
 '$legend27',
 '$legend28',
 '$legend29',
 '$legend30',
 '$legend31',
 '$legend32',
 '$chart_name',
 '$date',
 '$remark')";
$res=mysql_query($sql); 


$sqls="INSERT INTO patient_tooth_chart_extra_adult 
(patient_id,
 tooth_18,
tooth_17,
tooth_16,
tooth_15,
tooth_14,
tooth_13,
tooth_12,
tooth_11,
tooth_21,
tooth_22,
tooth_23,
tooth_24,
tooth_25,
tooth_26,
tooth_27,
tooth_28,
tooth_41,
tooth_42,
tooth_43,
tooth_44,
tooth_45,
tooth_46,
tooth_47,
tooth_48,
tooth_31,
tooth_32,
tooth_33,
tooth_34,
tooth_35,
tooth_36,
tooth_37,
tooth_38,
legend_11,
legend_12,
legend_13,
legend_14,
legend_15,
legend_16,
legend_17,
legend_18,
legend_21,
legend_22,
legend_23,
legend_24,
legend_25,
legend_26,
legend_27,
legend_28,
legend_31,
legend_32,
legend_33,
legend_34,
legend_35,
legend_36,
legend_37,
legend_38,
legend_41,
legend_42,
legend_43,
legend_44,
legend_45,
legend_46,
legend_47,
legend_48,
chart_name,
date_chart,
chart_remarks)
VALUES
('$id',
 '$tooth1',
 '$tooth2',
 '$tooth3',
 '$tooth4',
 '$tooth5',
 '$tooth6',
 '$tooth7',
 '$tooth8',
 '$tooth9',
 '$tooth10',
 '$tooth11',
 '$tooth12',
 '$tooth13',
 '$tooth14',
 '$tooth15',
 '$tooth16',
 '$tooth24',
 '$tooth23',
 '$tooth22',
 '$tooth21',
 '$tooth20',
 '$tooth19',
 '$tooth18',
 '$tooth17',
 '$tooth25',
 '$tooth26',
 '$tooth27',
 '$tooth28',
 '$tooth29',
 '$tooth30',
 '$tooth31',
 '$tooth32',
 '$legend1',
 '$legend2',
 '$legend3',
 '$legend4',
 '$legend5',
 '$legend6',
 '$legend7',
 '$legend8',
 '$legend9',
 '$legend10',
 '$legend11',
 '$legend12',
 '$legend13',
 '$legend14',
 '$legend15',
 '$legend16',
 '$legend17',
 '$legend18',
 '$legend19',
 '$legend20',
 '$legend21',
 '$legend22',
 '$legend23',
 '$legend24',
 '$legend25',
 '$legend26',
 '$legend27',
 '$legend28',
 '$legend29',
 '$legend30',
 '$legend31',
 '$legend32',
 '$chart_name',
 NOW(),
 '$remark')";
$ress=mysql_query($sqls); 

$var="yes";
$dsql="UPDATE patient_list SET tooth_checker='".$var."' WHERE id='".$id."'";
$res=mysql_query($dsql);
} else if($what_chart==2){
	
	$sql="INSERT INTO patient_child_tooth 
	(patient_id,
	 tooth_55,
	 tooth_54,
	 tooth_53,
	 tooth_52,
	 tooth_51,
	 tooth_61,
	 tooth_62,
	 tooth_63,
	 tooth_64,
	 tooth_65,
	 tooth_85,
	 tooth_84,
	 tooth_83,
	 tooth_82,
	 tooth_81,
	 tooth_71,
	 tooth_72,
	 tooth_73,
	 tooth_74,
	 tooth_75,
	 legend_55,
	 legend_54,
	 legend_53,
	 legend_52,
	 legend_51,
	 legend_61,
	 legend_62,
	 legend_63,
	 legend_64,
	 legend_65,
	 legend_85,
	 legend_84,
	 legend_83,
	 legend_82,
	 legend_81,
	 legend_71,
	 legend_72,
	 legend_73,
	 legend_74,
	 legend_75,
	 tooth_chart_name,
	 tooth_chart_date,
	 tooth_remarks)
	VALUES(
	 '$id',
	 '$child1',
	 '$child2',
	 '$child3',
	 '$child4',
	 '$child5',
	 '$child6',
	 '$child7',
	 '$child8',
	 '$child9',
	 '$child10',
	 '$child11',
	 '$child12',
	 '$child13',
	 '$child14',
	 '$child15',
	 '$child16',
	 '$child17',
	 '$child18',
	 '$child19',
	 '$child20',
	 '$child_leg1',
	 '$child_leg2',
	 '$child_leg3',
	 '$child_leg4',
	 '$child_leg5',
	 '$child_leg6',
	 '$child_leg7',
	 '$child_leg8',
	 '$child_leg9',
	 '$child_leg10',
	 '$child_leg11',
	 '$child_leg12',
	 '$child_leg13',
	 '$child_leg14',
	 '$child_leg15',
	 '$child_leg16',
	 '$child_leg17',
	 '$child_leg18',
	 '$child_leg19',
	 '$child_leg20',
	 '$chart_name',
     '$date',
	 '$remark')
	";
	$res=mysql_query($sql);
	
	$sqls="INSERT INTO patient_tooth_chart_extra_child 
	(patient_id,
	 tooth_55,
	 tooth_54,
	 tooth_53,
	 tooth_52,
	 tooth_51,
	 tooth_61,
	 tooth_62,
	 tooth_63,
	 tooth_64,
	 tooth_65,
	 tooth_85,
	 tooth_84,
	 tooth_83,
	 tooth_82,
	 tooth_81,
	 tooth_71,
	 tooth_72,
	 tooth_73,
	 tooth_74,
	 tooth_75,
	 legend_55,
	 legend_54,
	 legend_53,
	 legend_52,
	 legend_51,
	 legend_61,
	 legend_62,
	 legend_63,
	 legend_64,
	 legend_65,
	 legend_85,
	 legend_84,
	 legend_83,
	 legend_82,
	 legend_81,
	 legend_71,
	 legend_72,
	 legend_73,
	 legend_74,
	 legend_75,
	 chart_name,
	 date_chart,
	 chart_remarks)
	VALUES(
	 '$id',
	 '$child1',
	 '$child2',
	 '$child3',
	 '$child4',
	 '$child5',
	 '$child6',
	 '$child7',
	 '$child8',
	 '$child9',
	 '$child10',
	 '$child11',
	 '$child12',
	 '$child13',
	 '$child14',
	 '$child15',
	 '$child16',
	 '$child17',
	 '$child18',
	 '$child19',
	 '$child20',
	 '$child_leg1',
	 '$child_leg2',
	 '$child_leg3',
	 '$child_leg4',
	 '$child_leg5',
	 '$child_leg6',
	 '$child_leg7',
	 '$child_leg8',
	 '$child_leg9',
	 '$child_leg10',
	 '$child_leg11',
	 '$child_leg12',
	 '$child_leg13',
	 '$child_leg14',
	 '$child_leg15',
	 '$child_leg16',
	 '$child_leg17',
	 '$child_leg18',
	 '$child_leg19',
	 '$child_leg20',
	 '$chart_name',
     NOW(),
	 '$remark')
	";
	$res=mysql_query($sqls);
	
	//var_dump($sql);die();
	$var="yes";
$dsql="UPDATE patient_list SET tooth_checker='".$var."' WHERE id='".$id."'";
$res=mysql_query($dsql);
}

}

else if($tooth_checker=="yes") {
	
	if($what_chart==1) {
	
$sql="UPDATE patient_adult_tooth SET 
tooth_18='".$tooth1."',
tooth_17='".$tooth2."',
tooth_16='".$tooth3."',
tooth_15='".$tooth4."',
tooth_14='".$tooth5."',
tooth_13='".$tooth6."',
tooth_12='".$tooth7."',
tooth_11='".$tooth8."',
tooth_21='".$tooth9."',
tooth_22='".$tooth10."',
tooth_23='".$tooth11."',
tooth_24='".$tooth12."',
tooth_25='".$tooth13."',
tooth_26='".$tooth14."',
tooth_27='".$tooth15."',
tooth_28='".$tooth16."',
tooth_41='".$tooth24."',
tooth_42='".$tooth23."',
tooth_43='".$tooth22."',
tooth_44='".$tooth21."',
tooth_45='".$tooth20."',
tooth_46='".$tooth19."',
tooth_47='".$tooth18."',
tooth_48='".$tooth17."',
tooth_31='".$tooth25."',
tooth_32='".$tooth26."',
tooth_33='".$tooth27."',
tooth_34='".$tooth28."',
tooth_35='".$tooth29."',
tooth_36='".$tooth30."',
tooth_37='".$tooth31."',
tooth_38='".$tooth32."',
legend_11='".$legend1."',
legend_12='".$legend2."',
legend_13='".$legend3."',
legend_14='".$legend4."',
legend_15='".$legend5."',
legend_16='".$legend6."',
legend_17='".$legend7."',
legend_18='".$legend8."',
legend_21='".$legend9."',
legend_22='".$legend10."',
legend_23='".$legend11."',
legend_24='".$legend12."',
legend_25='".$legend13."',
legend_26='".$legend14."',
legend_27='".$legend15."',
legend_28='".$legend16."',
legend_31='".$legend17."',
legend_32='".$legend18."',
legend_33='".$legend19."',
legend_34='".$legend20."',
legend_35='".$legend21."',
legend_36='".$legend22."',
legend_37='".$legend23."',
legend_38='".$legend24."',
legend_41='".$legend25."',
legend_42='".$legend26."',
legend_43='".$legend27."',
legend_44='".$legend28."',
legend_45='".$legend29."',
legend_46='".$legend30."',
legend_47='".$legend31."',
legend_48='".$legend32."',
tooth_chart_name='".$chart_name."',
tooth_chart_date='".$date."'

WHERE patient_id='".$id."'";
$res=mysql_query($sql); 


$sqls="INSERT INTO patient_tooth_chart_extra_adult 
(patient_id,
 tooth_18,
tooth_17,
tooth_16,
tooth_15,
tooth_14,
tooth_13,
tooth_12,
tooth_11,
tooth_21,
tooth_22,
tooth_23,
tooth_24,
tooth_25,
tooth_26,
tooth_27,
tooth_28,
tooth_41,
tooth_42,
tooth_43,
tooth_44,
tooth_45,
tooth_46,
tooth_47,
tooth_48,
tooth_31,
tooth_32,
tooth_33,
tooth_34,
tooth_35,
tooth_36,
tooth_37,
tooth_38,
legend_11,
legend_12,
legend_13,
legend_14,
legend_15,
legend_16,
legend_17,
legend_18,
legend_21,
legend_22,
legend_23,
legend_24,
legend_25,
legend_26,
legend_27,
legend_28,
legend_31,
legend_32,
legend_33,
legend_34,
legend_35,
legend_36,
legend_37,
legend_38,
legend_41,
legend_42,
legend_43,
legend_44,
legend_45,
legend_46,
legend_47,
legend_48,
chart_name,
date_chart,
chart_remarks)
VALUES
('$id',
 '$tooth1',
 '$tooth2',
 '$tooth3',
 '$tooth4',
 '$tooth5',
 '$tooth6',
 '$tooth7',
 '$tooth8',
 '$tooth9',
 '$tooth10',
 '$tooth11',
 '$tooth12',
 '$tooth13',
 '$tooth14',
 '$tooth15',
 '$tooth16',
 '$tooth24',
 '$tooth23',
 '$tooth22',
 '$tooth21',
 '$tooth20',
 '$tooth19',
 '$tooth18',
 '$tooth17',
 '$tooth25',
 '$tooth26',
 '$tooth27',
 '$tooth28',
 '$tooth29',
 '$tooth30',
 '$tooth31',
 '$tooth32',
 '$legend1',
 '$legend2',
 '$legend3',
 '$legend4',
 '$legend5',
 '$legend6',
 '$legend7',
 '$legend8',
 '$legend9',
 '$legend10',
 '$legend11',
 '$legend12',
 '$legend13',
 '$legend14',
 '$legend15',
 '$legend16',
 '$legend17',
 '$legend18',
 '$legend19',
 '$legend20',
 '$legend21',
 '$legend22',
 '$legend23',
 '$legend24',
 '$legend25',
 '$legend26',
 '$legend27',
 '$legend28',
 '$legend29',
 '$legend30',
 '$legend31',
 '$legend32',
 '$chart_name',
 NOW(),
 '$remark')";
$ress=mysql_query($sqls); 


}

else if($what_chart==2) {
	
	$sql="UPDATE patient_child_tooth SET
	 tooth_55='".$child1."',
	 tooth_54='".$child2."',
	 tooth_53='".$child3."',
	 tooth_52='".$child4."',
	 tooth_51='".$child5."',
	 tooth_61='".$child6."',
	 tooth_62='".$child7."',
	 tooth_63='".$child8."',
	 tooth_64='".$child9."',
	 tooth_65='".$child10."',
	 tooth_85='".$child11."',
	 tooth_84='".$child12."',
	 tooth_83='".$child13."',
	 tooth_82='".$child14."',
	 tooth_81='".$child15."',
	 tooth_71='".$child16."',
	 tooth_72='".$child17."',
	 tooth_73='".$child18."',
	 tooth_74='".$child19."',
	 tooth_75='".$child20."',
	 legend_55='".$child_leg1."',
	 legend_54='".$child_leg2."',
	 legend_53='".$child_leg3."',
	 legend_52='".$child_leg4."',
	 legend_51='".$child_leg5."',
	 legend_61='".$child_leg6."',
	 legend_62='".$child_leg7."',
	 legend_63='".$child_leg8."',
	 legend_64='".$child_leg9."',
	 legend_65='".$child_leg10."',
	 legend_85='".$child_leg11."',
	 legend_84='".$child_leg12."',
	 legend_83='".$child_leg13."',
	 legend_82='".$child_leg14."',
	 legend_81='".$child_leg15."',
	 legend_71='".$child_leg16."',
	 legend_72='".$child_leg17."',
	 legend_73='".$child_leg18."',
	 legend_74='".$child_leg19."',
	 legend_75='".$child_leg20."',
	 tooth_chart_name='".$chart_name."',
	 tooth_chart_date='".$date."',
	 tooth_remarks='".$remark."'
	WHERE patient_id='".$id."'
	";
	$res=mysql_query($sql);

	
	$sqls="INSERT INTO patient_tooth_chart_extra_child 
	(patient_id,
	 tooth_55,
	 tooth_54,
	 tooth_53,
	 tooth_52,
	 tooth_51,
	 tooth_61,
	 tooth_62,
	 tooth_63,
	 tooth_64,
	 tooth_65,
	 tooth_85,
	 tooth_84,
	 tooth_83,
	 tooth_82,
	 tooth_81,
	 tooth_71,
	 tooth_72,
	 tooth_73,
	 tooth_74,
	 tooth_75,
	 legend_55,
	 legend_54,
	 legend_53,
	 legend_52,
	 legend_51,
	 legend_61,
	 legend_62,
	 legend_63,
	 legend_64,
	 legend_65,
	 legend_85,
	 legend_84,
	 legend_83,
	 legend_82,
	 legend_81,
	 legend_71,
	 legend_72,
	 legend_73,
	 legend_74,
	 legend_75,
	 chart_name,
	 date_chart,
	 chart_remarks)
	VALUES(
	 '$id',
	 '$child1',
	 '$child2',
	 '$child3',
	 '$child4',
	 '$child5',
	 '$child6',
	 '$child7',
	 '$child8',
	 '$child9',
	 '$child10',
	 '$child11',
	 '$child12',
	 '$child13',
	 '$child14',
	 '$child15',
	 '$child16',
	 '$child17',
	 '$child18',
	 '$child19',
	 '$child20',
	 '$child_leg1',
	 '$child_leg2',
	 '$child_leg3',
	 '$child_leg4',
	 '$child_leg5',
	 '$child_leg6',
	 '$child_leg7',
	 '$child_leg8',
	 '$child_leg9',
	 '$child_leg10',
	 '$child_leg11',
	 '$child_leg12',
	 '$child_leg13',
	 '$child_leg14',
	 '$child_leg15',
	 '$child_leg16',
	 '$child_leg17',
	 '$child_leg18',
	 '$child_leg19',
	 '$child_leg20',
	 '$chart_name',
     NOW(),
	 '$remark')
	";
	$res=mysql_query($sqls);

	//$new_id=mysql_insert_id();
	
	//$sql="";
	
	
	}

}


// header('Location: patient_tooth_chart.php?id='.$id.'');
} */
		$this->load->view('charting/tooth/table_first_tooth');
		// $this->load->view('charting/box_patient_tooth', $data);
	}

}

?>