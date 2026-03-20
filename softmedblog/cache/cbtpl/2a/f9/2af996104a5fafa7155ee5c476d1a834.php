<ul id="gotop" class="supranav nobig"><li><a href="#top"><?php echo __('To top'); ?></a></li></ul>

<?php echo tplSimpleMenu::displayMenu('supranav nobig','sn-bottom',''); ?>
<div id="footer">
	<div id="blogcustom">
		<?php publicWidgets::widgetsHandler('custom',''); ?>
	</div> <!-- End #custom widgets -->

	<?php if (dcCore::app()->hasBehavior('publicInsideFooter')) { dcCore::app()->callBehavior('publicInsideFooter',dcCore::app(),dcCore::app()->ctx);} ?>

	<p><?php printf(__("Powered by %s"),"<a href=\"https://dotclear.org/\">Dotclear</a>"); ?></p>
</div>
<?php if (dcCore::app()->hasBehavior('publicFooterContent')) { dcCore::app()->callBehavior('publicFooterContent',dcCore::app(),dcCore::app()->ctx);} ?>
