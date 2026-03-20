<div id="header">

	<div id="top">
		<p id="logo" class="nosmall"><a href="<?php echo context::global_filters(dcCore::app()->blog->url,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogURL'); ?>"><img src="<?php echo themes\ductile\tplDuctileTheme::ductileLogoSrcHelper(); ?>" alt="<?php echo __('Home'); ?>" /></a></p>
		<h1><a href="<?php echo context::global_filters(dcCore::app()->blog->url,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogURL'); ?>"><span><?php echo context::global_filters(dcCore::app()->blog->name,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => '1',
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogName'); ?></span></a></h1>
		<p id="blogdesc" class="nosmall"><?php echo context::global_filters(dcCore::app()->blog->desc,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogDescription'); ?></p>
	</div>

	<ul id="prelude">
		<li class="nosmall"><a href="#main"><?php echo __('To content'); ?></a></li>
		<li><a href="#blognav"><?php echo __('To menu'); ?></a></li>
		<li><a href="#search"><?php echo __('To search'); ?></a></li>
	</ul>

	<?php if (dcCore::app()->hasBehavior('publicTopAfterContent')) { dcCore::app()->callBehavior('publicTopAfterContent',dcCore::app(),dcCore::app()->ctx);} ?>

	<?php echo tplSimpleMenu::displayMenu('supranav nosmall','sn-top',''); ?>

</div>
