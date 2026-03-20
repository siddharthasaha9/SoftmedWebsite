<div id="footer" role="contentinfo">
  <p><?php printf(__("Powered by %s"),"<a href=\"https://dotclear.org/\">Dotclear</a>"); ?></p>
</div>
<?php if (dcCore::app()->hasBehavior('publicFooterContent')) { dcCore::app()->callBehavior('publicFooterContent',dcCore::app(),dcCore::app()->ctx);} ?>
