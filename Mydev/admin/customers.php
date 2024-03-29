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
	<link rel="stylesheet" type="text/css" href="/Mydev/static/assets/vendors/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/Mydev/static/assets/vendors/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/Mydev/static/assets/css/admin.css">
	<link rel="stylesheet" type="text/css" href="/Mydev/static/assets/css/style.css">
	<!-- [if lt IE 9] -->
	<script src="/Mydev/static/assets/vendors/html5shiv/html5shiv.js"></script>
	<script src="/Mydev/static/assets/vendors/respond/respond.min.js"></script>
	<!-- [endif] -->
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="main">
		<?php require_once 'inc/nav.php'; ?>

		<div class="container-fluid">
			<h3>个人用户</h3>
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
					<th>昵称</th>
					<th class="text-center">简介</th>
					<th>创建时间</th>
					<th>状态</th>
					<th class="text-center">操作</th>
				</tr>
				</thead>
				<tbody>
					<tr>
					<td>minye1@qq.com</td>
					<td>18333333970</td>
					<td>赤脚大仙</td>
					<td class="text-center">
						<button class="btn btn-default btn-sm">查看</button>
					</td>
					<td>2019-01-01</td>
					<td>审核</td>
					<td class="text-center">
						<a href="javascript:;" class="btn btn-success btn-sm">通过</a>
						<a href="javascript:;" class="btn btn-danger btn-sm">删除</a>
					</td>
				</tr>
				<tr>
					<td>json@qq.com</td>
					<td>12333333333</td>
					<td>赤脚eason</td>
					<td class="text-center">
						<button class="btn btn-default btn-sm">查看</button>
					</td>
					<td>2019-01-01</td>
					<td>激活</td>
					<td class="text-center">
						<a href="javascript:;" class="btn btn-danger btn-sm">删除</a>
					</td>
				</tr>
				</tbody>
			</table>	
		</div>
	</div>


	<?php require_once 'inc/aside.php'; ?>
	<script src="/Mydev/static/assets/vendors/jquery/jquery.min.js"></script>
	<script src="/Mydev/static/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>