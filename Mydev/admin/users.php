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
			<div class="row">
				<div class="user-form col-md-4 col-lg-5">
					<form class="form-horizontal">
						<h2>注册管理员用户</h2>
						<!-- 验证失败信息 -->
						<!-- <div class="alert alert-danger" role="alert">请完善用户信息！</div> -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">邮箱：</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="email" placeholder="请输入邮箱账号">
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">密码：</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="password" placeholder="请输入密码">
							</div>
						</div>
						<div class="form-group">
							<label for="nickName" class="col-sm-3 control-label">昵称：</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="nickName" placeholder="请输入昵称">
							</div>
						</div>
						<div class="form-radio form-group ">
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										状态1
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										状态2
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
										状态3
									</label>
								</div>
							</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10 ">
								<button type="submit" class="btn btn-default ">注册</button>
							</div>
						</div>
					</form>
				</div>
				<div class="user-table col-md-8 col-lg-7">
					<div class="fold-btn">
						<a href="#" class="btn btn-danger" style="display: none;">批量删除</a>
					</div>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="text-center"><input type="checkbox"></th>
								<th>邮箱</th>
								<th>昵称</th>
								<th>注册时间</th>
								<th>状态</th>
								<th class="text-center">操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><input type="checkbox"></td>
								<td>test1@qq.com</td>
								<td>小猪</td>
								<td>2019-01-01</td>
								<td>actived</td>
								<td class="text-center">
									<a href="#" class="btn btn-default btn-sm">编辑</a>
									<a href="#" class="btn btn-danger btn-sm">删除</a>
								</td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox"></td>
								<td>test2@qq.com</td>
								<td>小马</td>
								<td>2019-01-01</td>
								<td>actived</td>
								<td class="text-center">
									<a href="#" class="btn btn-default btn-sm">编辑</a>
									<a href="#" class="btn btn-danger btn-sm">删除</a>
								</td>
							</tr>
							<tr>
								<td class="text-center"><input type="checkbox"></td>
								<td>test3@qq.com</td>
								<td>小刘</td>
								<td>2019-01-01</td>
								<td>actived</td>
								<td class="text-center">
									<a href="#" class="btn btn-default btn-sm">编辑</a>
									<a href="#" class="btn btn-danger btn-sm">删除</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<?php require_once 'inc/aside.php'; ?>
	
	<script src="/Mydev/static/assets/vendors/jquery/jquery.min.js"></script>
	<script src="/Mydev/static/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>