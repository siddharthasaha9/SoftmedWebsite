<!DOCTYPE html>
<html lang="<?php echo context::global_filters(dcCore::app()->blog->settings->system->lang,array (
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
),'BlogLanguage'); ?>">
<head>
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="<?php echo context::robotsPolicy(dcCore::app()->blog->settings->system->robots_policy,'NOINDEX,NOARCHIVE'); ?>" />

	<title><?php echo __('Document not found'); ?> - <?php echo context::global_filters(dcCore::app()->blog->name,array (
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
),'BlogName'); ?></title>
	<meta name="copyright" content="<?php echo context::global_filters(dcCore::app()->blog->settings->system->copyright_notice,array (
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
),'BlogCopyrightNotice'); ?>" />
	<meta name="author" content="<?php echo context::global_filters(dcCore::app()->blog->settings->system->editor,array (
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
),'BlogEditor'); ?>" />

	<link rel="contents" title="<?php echo __('Archives'); ?>" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("archive"),array (
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
),'BlogArchiveURL'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("feed","atom"),array (
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
  'type' => 'atom',
),'BlogFeedURL'); ?>" />

	<?php try { echo dcCore::app()->tpl->getData('_head.html'); } catch (Exception $e) {} ?>

</head>
<body class="dc-404">
	<div id="page">
		<?php try { echo dcCore::app()->tpl->getData('_top.html'); } catch (Exception $e) {} ?>


		<div id="wrapper">

			<div id="main">
				<div id="content">

					<div id="content-info">
						<h2><?php echo __('Document not found'); ?></h2>
						<p><?php echo __('URL you\'ve tried has typos, or the page has been deleted or moved.'); ?></p>
					</div>

					<div class="content-inner">
						<h3><?php echo __('Suggestions:'); ?></h3>
						<ul>
							<li><a href="<?php echo context::global_filters(dcCore::app()->blog->url,array (
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
),'BlogURL'); ?>"><?php echo __('Go to homepage'); ?></a></li>
							<li><a href="#search"><?php echo __('Use search form'); ?></a></li>
							<li><a href="<?php echo context::global_filters(dcCore::app()->blog->url,array (
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
),'BlogURL'); ?>archive"><?php echo __('Explore archives'); ?></a></li>
						</ul>
					</div> <!-- End #content-inner -->

				</div> <!-- End #content -->
			</div> <!-- End #main -->

			<?php try { echo dcCore::app()->tpl->getData('_sidebar.html'); } catch (Exception $e) {} ?>


		</div> <!-- End #wrapper -->

		<?php try { echo dcCore::app()->tpl->getData('_footer.html'); } catch (Exception $e) {} ?>

	</div> <!-- End #page -->
</body>
</html>
