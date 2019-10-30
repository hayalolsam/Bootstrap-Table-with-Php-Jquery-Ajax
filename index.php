<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/bootstrap-table.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div id="table_holder">
					<table id="table"></table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-table.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-table-export.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-table-mobile.min.js"></script>
	<!-- remove here for english language-->
	<script type="text/javascript" src="assets/js/bootstrap-table-tr-TR.min.js"></script>
	<!-- language finish-->
	<script type="text/javascript" src="assets/js/jspdf.min.js"></script>
	<script type="text/javascript" src="assets/js/jspdf.plugin.autotable.js"></script>
	<script type="text/javascript" src="assets/js/tableExport.min.js"></script>
	<script type="text/javascript" src="assets/js/manage_tables.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	table_support.init({
		resource: 'ajax.php',
		headers: [//table settings
			{"field":"checkbox","title":"select","switchable":true,"sortable":false,"checkbox":"select","class":"print_hide","sorter":""},
			{"field":"id","title":"id","switchable":true,"sortable":true,"checkbox":false,"class":"","sorter":""},
			{"field":"last_name","title":"Soyadı","switchable":true,"sortable":true,"checkbox":false,"class":"","sorter":""},
			{"field":"first_name","title":"Adı","switchable":true,"sortable":true,"checkbox":false,"class":"","sorter":""},
			{"field":"email","title":"E-Posta","switchable":true,"sortable":true,"checkbox":false,"class":"","sorter":""},
			{"field":"phone_number","title":"Telefon","switchable":true,"sortable":true,"checkbox":false,"class":"","sorter":""},
		],
		pageSize: 10,
		clickToSelect: false,
		uniqueId: 'id',
		enableActions: function(){
			console.log("An operation was performed.");//bir işlem yapıldı
			console.log(findSelect());//seçilen alan
		},
		onClickRow: function (row, id) {
			alert( row["id"] + " clicked" );//tıklanan satır id si
		},
		rowStyle: function rowStyle(row, index) {
			if(row["id"]=="1"){								
				return {classes: 'text-nowrap another-class',css: {"background-color": "rgba(55,180,80,1.00)", "color": "#fff"}};
			}
			else{
				return {classes: 'text-nowrap another-class',css: {"background-color": "rgba(55,0,80,1.00)", "color": "#fff"}};
			}
		}
	});
});
</script>
</body>
</html>