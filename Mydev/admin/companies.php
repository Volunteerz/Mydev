<?php  
	require_once '../functions.php';


	current_manager();

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="/MrWhite/static/assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/MrWhite/static/assets/vendors/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/MrWhite/static/assets/css/admin.css">
	<link rel="stylesheet" type="text/css" href="/MrWhite/static/assets/css/style.css">
	<!-- [if lt IE 9] -->
	<script src="/MrWhite/static/assets/vendors/html5shiv/html5shiv.js"></script>
	<script src="/MrWhite/static/assets/vendors/respond/respond.min.js"></script>
	<!-- [endif] -->
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="main">
		<?php require_once 'inc/nav.php'; ?>

		<div class="container-fluid">
			<h3>企业用户</h3>
			<div class="row">
				<div class="col-md-8">
					<form class="form-inline" autocomplete="off" novalidate >
						<div class="form-group">
							<label for="username" class="col-sm-3 control-label sr-only">邮箱：</label>

							<input type="text" class="form-control" id="username" placeholder="输入用户名">

						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default ">搜索</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<nav class="posts-pagination text-right inline" aria-label="Page navigation">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>	
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
					<th>邮箱</th>
					<th>联系电话</th>
					<th>企业名称</th>
					<th class="text-center">企业信息</th>
					<th>注册时间</th>
					<th>状态</th>
					<th class="text-center">操作</th>
				</tr>
				</thead>
				<tbody>
					<tr>
					<td>minye@163.com</td>
					<td>18222231970</td>		
					<td>minye's company</td>
					<td class="text-center">
						<a href="javascript:;" class="btn btn-default btn-sm">查看</a>
					</td>
					<td>2019-09-01</td>		
					<td>待审核</td>
					<td class="text-center">
						<a href="javascript:;" class="btn btn-success btn-sm">通过</a>
						<a href="javascript:;" class="btn btn-danger btn-sm">删除</a>
					</td>
				</tr>
				</tbody>
			</table>	
		</div>
	</div>


	<?php require_once 'inc/aside.php'; ?>
	<script src="/MrWhite/static/assets/vendors/jquery/jquery.min.js"></script>
	<script src="/MrWhite/static/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>