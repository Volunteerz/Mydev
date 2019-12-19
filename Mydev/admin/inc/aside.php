

<div class="aside">
		<div class="profile">
			<img class="avatar" src="/Mydev/static/assets/imgs/default.png">
			<h3 class="name">用户名</h3>
		</div>
		<ul class="nav">
			<li <?php echo $_SERVER['PHP_SELF']=='/Mydev/admin/index.php'? 'class="active"' : ''; ?>><a href="index.php"><i class="fa fa-pencil-square-o"></i>首页</a></li>
			<li <?php echo $_SERVER['PHP_SELF']=='/Mydev/admin/users.php'? 'class="active"' : ''; ?>><a href="users.php"><i class="fa fa-users"></i>用户</a></li>
			<?php $menu_manage=array('/Mydev/admin/companies.php','/Mydev/admin/customers.php','/Mydev/admin/categories.php','/Mydev/admin/posts.php'); ?>
			<li <?php echo in_array($_SERVER['PHP_SELF'],$menu_manage) ? 'class="active"' : ''; ?>>
				<a data-toggle="collapse" class="<?php echo in_array($_SERVER['PHP_SELF'],$menu_manage) or $_SERVER['PHP_SELF']=='' ? 'collapse ' : 'collapsed'; ?>" aria-expanded="false"  href="#menu-manage"><i class="fa fa-bars"></i>管理<i class="fa fa-angle-right"></i></a>
				<ul class="collapse <?php echo in_array($_SERVER['PHP_SELF'],$menu_manage) ? 'in ' : ''; ?>" id="menu-manage">
					<li <?php echo $_SERVER['PHP_SELF']=='/Mydev/admin/companies.php'? 'class="active"' : ''; ?>><a href="companies.php">企业用户</a></li>
					<li <?php echo $_SERVER['PHP_SELF']=='/Mydev/admin/customers.php'? 'class="active"' : ''; ?>><a href="customers.php">个人用户</a></li>
					<li <?php echo $_SERVER['PHP_SELF']=='/Mydev/admin/categories.php'? 'class="active"' : ''; ?>><a href="categories.php">职位目录</a></li>
					<li <?php echo $_SERVER['PHP_SELF']=='/Mydev/admin/posts.php'? 'class="active"' : ''; ?>><a href="posts.php">帖子</a></li>
				</ul>
			</li>
			<li>
				<a data-toggle="collapse" class="collapsed" aria-expanded="false" href="#menu-setting"><i class="fa fa-wrench"></i>设置<i class="fa fa-angle-right"></i></a>
				<ul class="collapse" id="menu-setting">
					
				</ul>
			</li>
		</ul>
	</div>