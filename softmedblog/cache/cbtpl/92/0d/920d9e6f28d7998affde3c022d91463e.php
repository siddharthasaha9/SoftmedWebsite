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
	<meta name="ROBOTS" content="<?php echo context::robotsPolicy(dcCore::app()->blog->settings->system->robots_policy,'NOINDEX'); ?>" />

	<title><?php echo __('Tags'); ?> - <?php echo context::global_filters(dcCore::app()->blog->name,array (
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
	<meta name="date" scheme="W3CDTF" content="<?php echo context::global_filters(dt::iso8601(dcCore::app()->blog->upddt,dcCore::app()->blog->settings->system->blog_timezone),array (
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
  'iso8601' => '1',
),'BlogUpdateDate'); ?>" />

	<link rel="contents" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("archive"),array (
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
),'BlogArchiveURL'); ?>" title="<?php echo __('Archives'); ?>" />

	<link rel="meta" type="application/xbel+xml" title="Blogroll" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("xbel"),array (
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
),'BlogrollXbelLink'); ?>" />

	<?php try { echo dcCore::app()->tpl->getData('_head.html'); } catch (Exception $e) {} ?>

</head>
<body class="dc-tags">
	<div id="page">
		<?php try { echo dcCore::app()->tpl->getData('_top.html'); } catch (Exception $e) {} ?>


		<div id="wrapper">

			<div id="main">
				<div id="content">

					<div id="content-info">
						<h2><?php echo __('Tags'); ?></h2>
					</div>

					<div class="content-inner">
						<ul class="tags">
							<?php
dcCore::app()->ctx->meta = dcCore::app()->meta->computeMetaStats(dcCore::app()->meta->getMetadata(['meta_type'=>'tag','limit'=>null])); dcCore::app()->ctx->meta->sort('meta_id_lower','asc'); ?><?php while (dcCore::app()->ctx->meta->fetch()) : ?>
								<li><a href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("tag",rawurlencode(dcCore::app()->ctx->meta->meta_id)),array (
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
),'TagURL'); ?>" class="tag<?php echo dcCore::app()->ctx->meta->roundpercent; ?>"><?php echo context::global_filters(dcCore::app()->ctx->meta->meta_id,array (
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
),'TagID'); ?></a></li>
							<?php endwhile; dcCore::app()->ctx->meta = null; ?>
						</ul>
					</div>

				</div>
			</div> <!-- End #main -->

			<?php try { echo dcCore::app()->tpl->getData('_sidebar.html'); } catch (Exception $e) {} ?>


		</div> <!-- End #wrapper -->

		<?php try { echo dcCore::app()->tpl->getData('_footer.html'); } catch (Exception $e) {} ?>

	</div> <!-- End #page -->
</body>
</html>
