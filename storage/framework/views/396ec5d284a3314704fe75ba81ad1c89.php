<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Laravel 10 Custom User Registration & Login Tutorial - AllPHPTricks.com</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/customer.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div id="wpwrap">

<div id="adminmenumain" role="navigation" aria-label="Main menu">
<div id="adminmenuback"></div>
<div id="adminmenuwrap">
<ul id="adminmenu">
	
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true"><div class="separator"></div></li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-post open-if-no-js menu-top-first" id="menu-posts">
	<a href="#" class="wp-has-submenu wp-not-current-submenu menu-top  open-if-no-js menu-top-first" aria-haspopup="true"><div class="wp-menu-name">&nbsp</div></a>
	
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" id="menu-media">
	<a href="<?php echo e(route('list')); ?>" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-media" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-admin-media"><br>
	</div><div class="wp-menu-name">Customer</div></a>
	</li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
	<a href="<?php echo e(route('invoice.list')); ?>" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-admin-page"><br></div><div class="wp-menu-name">Invoice</div></a>
	</li>
	
</div>
</div>
<div id="wpcontent">

		<div id="wpadminbar" class="">
						<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		
		<li id="wp-admin-bar-comments"><a class="ab-item" href="#"><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text">0 comments awaiting moderation</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="#"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item" href="#">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item" href="#">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item" href="#">Page</a>		</li>
		</ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-my-account" class="menupop with-avatar" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><a class="ab-item" aria-haspopup="true" href="<?php echo e(route('logout')); ?> "><?php echo e(Auth::user()->name); ?><span><?php echo e(" "); ?></span> <div class="display-name"> Logout</div>
							<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                            </form>
						</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">

	
		<li id="wp-admin-bar-logout"><a class="ab-item" href="<?php echo e(route('logout')); ?>">Log Out</a>		</li></ul></div>		</li>
		</ul>			</div>
						

		
<div id="wpbody" role="main">
<div class="wrap">
	
</div>
</div><!-- wpbody-content -->
<div class="clear"> </div></div><!-- wpbody -->
<div class="clear"> </div></div><!-- wpcontent -->
<?php echo $__env->yieldContent('content'); ?>
<div id="wpfooter" role="contentinfo">
		<p id="footer-left" class="alignleft">
		<span id="footer-thankyou">Thank you for creating with <a href="#">WordPress</a>.</span>	</p>
	<div class="clear"></div>
</div>

</body>
</html><?php /**PATH D:\projects\php-machine-test\resources\views/auth/layouts.blade.php ENDPATH**/ ?>