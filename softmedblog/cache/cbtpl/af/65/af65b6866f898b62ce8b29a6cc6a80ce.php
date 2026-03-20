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

	<title><?php echo context::global_filters(dcCore::app()->ctx->categories->cat_title,array (
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
),'CategoryTitle'); ?> - <?php echo context::global_filters(dcCore::app()->blog->name,array (
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
),'BlogName'); ?><?php if(!context::PaginationStart()) : ?> - <?php echo __('page'); ?> <?php echo context::global_filters(context::PaginationPosition(0),array (
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
),'PaginationCurrent'); ?><?php endif; ?></title>
	<meta name="description" lang="<?php echo context::global_filters(dcCore::app()->blog->settings->system->lang,array (
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
),'BlogLanguage'); ?>" content="<?php echo context::global_filters(dcCore::app()->ctx->categories->cat_desc,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => '1',
  'cut_string' => '180',
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => '1',
  'capitalize' => 0,
  'strip_tags' => 0,
),'CategoryDescription'); ?>" />
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

	<?php themes\ductile\tplDuctileTheme::ductileNbEntryPerPageHelper(0); ?>
	<?php if (dcCore::app()->ctx->exists("meta") && dcCore::app()->ctx->meta->rows() && (dcCore::app()->ctx->meta->meta_type == "tag")) { if (!isset($params)) { $params = []; }
if (!isset($params['from'])) { $params['from'] = ''; }
if (!isset($params['sql'])) { $params['sql'] = ''; }
$params['from'] .= ', '.dcCore::app()->prefix.'meta META ';
$params['sql'] .= 'AND META.post_id = P.post_id ';
$params['sql'] .= "AND META.meta_type = 'tag' ";
$params['sql'] .= "AND META.meta_id = '".dcCore::app()->con->escape(dcCore::app()->ctx->meta->meta_id)."' ";
} ?>
<?php
if (!isset($_page_number)) { $_page_number = 1; }
$nb_entry_first_page=dcCore::app()->ctx->nb_entry_first_page; $nb_entry_per_page = dcCore::app()->ctx->nb_entry_per_page;
if ((dcCore::app()->url->type == 'default') || (dcCore::app()->url->type == 'default-page')) {
    $params['limit'] = ($_page_number == 1 ? $nb_entry_first_page : $nb_entry_per_page);
} else {
    $params['limit'] = $nb_entry_per_page;
}
if ((dcCore::app()->url->type == 'default') || (dcCore::app()->url->type == 'default-page')) {
    $params['limit'] = [($_page_number == 1 ? 0 : ($_page_number - 2) * $nb_entry_per_page + $nb_entry_first_page),$params['limit']];
} else {
    $params['limit'] = [($_page_number - 1) * $nb_entry_per_page,$params['limit']];
}
if (dcCore::app()->ctx->exists("users")) { $params['user_id'] = dcCore::app()->ctx->users->user_id; }
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id.(dcCore::app()->blog->settings->system->inc_subcats?' ?sub':'');}
if (dcCore::app()->ctx->exists("archives")) { $params['post_year'] = dcCore::app()->ctx->archives->year(); $params['post_month'] = dcCore::app()->ctx->archives->month(); unset($params['limit']); }
if (dcCore::app()->ctx->exists("langs")) { $params['post_lang'] = dcCore::app()->ctx->langs->post_lang; }
if (isset($_search)) { $params['search'] = $_search; }
$params['order'] = 'post_dt desc';
$params['no_content'] = true;
dcCore::app()->ctx->post_params = $params;
dcCore::app()->ctx->posts = dcCore::app()->blog->getPosts($params); unset($params);
?>
<?php while (dcCore::app()->ctx->posts->fetch()) : ?>
		<?php if (dcCore::app()->ctx->posts->isStart()) : ?>
			<?php
$params = dcCore::app()->ctx->post_params;
dcCore::app()->ctx->pagination = dcCore::app()->blog->getPosts($params,true); unset($params);
?>
<?php if (dcCore::app()->ctx->pagination->f(0) > dcCore::app()->ctx->posts->count()) : ?>
				<?php if(!context::PaginationEnd()) : ?>
					<link rel="prev" title="<?php echo __('previous entries'); ?>" href="<?php echo context::global_filters(context::PaginationURL(1),array (
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
  'offset' => '1',
),'PaginationURL'); ?>" />
				<?php endif; ?>

				<?php if(!context::PaginationStart()) : ?>
					<link rel="next" title="<?php echo __('next entries'); ?>" href="<?php echo context::global_filters(context::PaginationURL(-1),array (
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
  'offset' => '-1',
),'PaginationURL'); ?>" />
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<link rel="chapter" href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>" title="<?php echo context::global_filters(dcCore::app()->ctx->posts->post_title,array (
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
),'EntryTitle'); ?>" />
	<?php endwhile; dcCore::app()->ctx->posts = null; dcCore::app()->ctx->post_params = null; ?>

	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("feed","category/".dcCore::app()->ctx->categories->cat_url."/atom"),array (
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
),'CategoryFeedURL'); ?>" />

	<?php try { echo dcCore::app()->tpl->getData('_head.html'); } catch (Exception $e) {} ?>

</head>
<body class="dc-category">
	<div id="page">
		<?php try { echo dcCore::app()->tpl->getData('_top.html'); } catch (Exception $e) {} ?>


		<div id="wrapper">

			<div id="main">
				<div id="content">

					<div id="content-info">
						<h2>
							<?php
dcCore::app()->ctx->categories = dcCore::app()->blog->getCategoryParents(dcCore::app()->ctx->categories->cat_id);
while (dcCore::app()->ctx->categories->fetch()) : ?>
								<a href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("category",dcCore::app()->ctx->categories->cat_url),array (
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
),'CategoryURL'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->categories->cat_title,array (
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
),'CategoryTitle'); ?></a> &rsaquo;
							<?php endwhile; dcCore::app()->ctx->categories = null; ?>
							<?php echo context::global_filters(dcCore::app()->ctx->categories->cat_title,array (
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
),'CategoryTitle'); ?>
						</h2>
						<?php echo context::global_filters(dcCore::app()->ctx->categories->cat_desc,array (
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
),'CategoryDescription'); ?>

						<?php if(dcCore::app()->ctx->categories->nb_post > 0) : ?>
							<p class="feed-info">
								<a type="application/atom+xml" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("feed","category/".dcCore::app()->ctx->categories->cat_url."/atom"),array (
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
),'CategoryFeedURL'); ?>"
								 title="<?php echo __('This category\'s entries Atom feed'); ?>" class="feed"><?php echo __('Entries feed'); ?></a>

								<?php if(dcCore::app()->blog->settings->system->allow_comments || dcCore::app()->blog->settings->system->allow_trackbacks) : ?>
									 - <a type="application/atom+xml" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("feed","category/".dcCore::app()->ctx->categories->cat_url."/atom"),array (
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
),'CategoryFeedURL'); ?>/comments"
									 title="<?php echo __('This category\'s comments Atom feed'); ?>" class="feed"><?php echo __('Comments feed'); ?></a>
								<?php endif; ?>
							</p>
						<?php endif; ?>

						<?php
dcCore::app()->ctx->categories = dcCore::app()->blog->getCategoryFirstChildren(dcCore::app()->ctx->categories->cat_id);
while (dcCore::app()->ctx->categories->fetch()) : ?>
							<?php if (dcCore::app()->ctx->categories->isStart()) : ?>
								<div id="subcategories">
									<h3><?php echo __('Subcategories'); ?></h3>
									<ul>
							<?php endif; ?>
										<li class="post-cat"><a href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("category",dcCore::app()->ctx->categories->cat_url),array (
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
),'CategoryURL'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->categories->cat_title,array (
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
),'CategoryTitle'); ?></a></li>
							<?php if (dcCore::app()->ctx->categories->isEnd()) : ?>
									</ul>
								</div>
							<?php endif; ?>
						<?php endwhile; dcCore::app()->ctx->categories = null; ?>
					</div>

					<div class="content-inner">
						<?php themes\ductile\tplDuctileTheme::ductileNbEntryPerPageHelper(0); ?>
						<?php if (dcCore::app()->ctx->exists("meta") && dcCore::app()->ctx->meta->rows() && (dcCore::app()->ctx->meta->meta_type == "tag")) { if (!isset($params)) { $params = []; }
if (!isset($params['from'])) { $params['from'] = ''; }
if (!isset($params['sql'])) { $params['sql'] = ''; }
$params['from'] .= ', '.dcCore::app()->prefix.'meta META ';
$params['sql'] .= 'AND META.post_id = P.post_id ';
$params['sql'] .= "AND META.meta_type = 'tag' ";
$params['sql'] .= "AND META.meta_id = '".dcCore::app()->con->escape(dcCore::app()->ctx->meta->meta_id)."' ";
} ?>
<?php
if (!isset($_page_number)) { $_page_number = 1; }
$nb_entry_first_page=dcCore::app()->ctx->nb_entry_first_page; $nb_entry_per_page = dcCore::app()->ctx->nb_entry_per_page;
if ((dcCore::app()->url->type == 'default') || (dcCore::app()->url->type == 'default-page')) {
    $params['limit'] = ($_page_number == 1 ? $nb_entry_first_page : $nb_entry_per_page);
} else {
    $params['limit'] = $nb_entry_per_page;
}
if ((dcCore::app()->url->type == 'default') || (dcCore::app()->url->type == 'default-page')) {
    $params['limit'] = [($_page_number == 1 ? 0 : ($_page_number - 2) * $nb_entry_per_page + $nb_entry_first_page),$params['limit']];
} else {
    $params['limit'] = [($_page_number - 1) * $nb_entry_per_page,$params['limit']];
}
if (dcCore::app()->ctx->exists("users")) { $params['user_id'] = dcCore::app()->ctx->users->user_id; }
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id.(dcCore::app()->blog->settings->system->inc_subcats?' ?sub':'');}
if (dcCore::app()->ctx->exists("archives")) { $params['post_year'] = dcCore::app()->ctx->archives->year(); $params['post_month'] = dcCore::app()->ctx->archives->month(); unset($params['limit']); }
if (dcCore::app()->ctx->exists("langs")) { $params['post_lang'] = dcCore::app()->ctx->langs->post_lang; }
if (isset($_search)) { $params['search'] = $_search; }
$params['order'] = 'post_dt desc';
dcCore::app()->ctx->post_params = $params;
dcCore::app()->ctx->posts = dcCore::app()->blog->getPosts($params); unset($params);
?>
<?php while (dcCore::app()->ctx->posts->fetch()) : ?>
							<?php 
switch (themes\ductile\tplDuctileTheme::ductileEntriesListHelper('short')) {
   case 'title':
?>
<?php try { echo dcCore::app()->tpl->getData('_entry-title.html'); } catch (Exception $e) {} ?>

<?php 
       break;
   case 'short':
?>
<?php try { echo dcCore::app()->tpl->getData('_entry-short.html'); } catch (Exception $e) {} ?>

<?php 
       break;
   case 'full':
?>
<?php try { echo dcCore::app()->tpl->getData('_entry-full.html'); } catch (Exception $e) {} ?>

<?php 
       break;
}
?>

							<?php if (dcCore::app()->ctx->posts->isEnd()) : ?>
								<?php try { echo dcCore::app()->tpl->getData('_pagination.html'); } catch (Exception $e) {} ?>

							<?php endif; ?>
						<?php endwhile; dcCore::app()->ctx->posts = null; dcCore::app()->ctx->post_params = null; ?>
					</div> <!-- End #content-inner -->
				</div> <!-- End #content -->
			</div> <!-- End #main -->

			<?php try { echo dcCore::app()->tpl->getData('_sidebar.html'); } catch (Exception $e) {} ?>


		</div> <!-- End #wrapper -->

		<?php try { echo dcCore::app()->tpl->getData('_footer.html'); } catch (Exception $e) {} ?>

	</div> <!-- End #page -->
</body>
</html>
