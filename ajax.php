<?php 
	header('Content-Type: text/html; charset=utf-8');
	mysql_select_db("ulutable",mysql_connect("localhost","root","mysql"));mysql_set_charset("utf8");
	$search = $_GET['search'];
	$limit  = $_GET['limit'];
	$offset = $_GET['offset'];
	$sort   = @$_GET['sort'];
	$order  = $_GET['order'];
	function search($search="", $rows = 0, $limit_from = 0, $sort = 'last_name', $order = 'asc', $count_only = FALSE){
		$sql="select ";
		if($count_only == TRUE){
			$sql.= "COUNT(id) as count";
		}else{
			$sql.="*";
		}		
		$sql.=" from users where (
			 first_name like '%".$search."%'
		or last_name like '%".$search."%'
		or email like  '%".$search."%'
		or phone_number like '%".$search."%'
		or CONCAT(first_name, ' ', last_name) like '%".$search."%')
		and id>=0 ";
		if(strlen($sort) > 0){
			$sql.="order by ".$sort." ".$order." ";
		}
		if($rows > 0){
			$sql.="limit $limit_from,$rows";
		}	
		return $sql;
	}
	$total_rows = mysql_fetch_object(mysql_query(search($search, 0, 0, 'last_name', 'asc', TRUE)));
	$sql=search($search, $limit, $offset, $sort, $order);
	$customers = mysql_query($sql);
	$data_rows = array();
	while($person=mysql_fetch_object($customers)){
		$data_rows[] = array (
			'id' => $person->id,
			'last_name' => $person->last_name,
			'first_name' => $person->first_name,
			'email' => $person->email,
			'phone_number' => $person->phone_number,
		);
	}
	echo json_encode(array('total' => $total_rows->count, 'rows' => $data_rows));