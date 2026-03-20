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
	<meta name="ROBOTS" content="<?php echo context::robotsPolicy(dcCore::app()->blog->settings->system->robots_policy,''); ?>" />

	<title><?php echo __('Archives'); ?> - <?php echo context::global_filters(dcCore::app()->blog->name,array (
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

	<?php
if (!isset($params)) $params = [];
$params['type'] = 'month';
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id; }
dcCore::app()->ctx->archives = dcCore::app()->blog->getDates($params); unset($params);
?>
<?php while (dcCore::app()->ctx->archives->fetch()) : ?>
		<link rel="chapter" href="<?php echo context::global_filters(dcCore::app()->ctx->archives->url(dcCore::app()),array (
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
),'ArchiveURL'); ?>" title="<?php echo context::global_filters(dt::dt2str('%B %Y',dcCore::app()->ctx->archives->dt),array (
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
),'ArchiveDate'); ?>" />
	<?php endwhile; dcCore::app()->ctx->archives = null; ?>

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
	<?php
if (!isset($params)) $params = [];
dcCore::app()->ctx->categories = dcCore::app()->blog->getCategories($params);
?>
<?php while (dcCore::app()->ctx->categories->fetch()) : ?>
		<link rel="section" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("category",dcCore::app()->ctx->categories->cat_url),array (
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
),'CategoryURL'); ?>" title="<?php echo context::global_filters(dcCore::app()->ctx->categories->cat_title,array (
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
),'CategoryTitle'); ?>" />
	<?php endwhile; dcCore::app()->ctx->categories = null; unset($params); ?>
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
<body class="dc-archive">
	<div id="page">
		<?php try { echo dcCore::app()->tpl->getData('_top.html'); } catch (Exception $e) {} ?>


		<div id="wrapper">

			<div id="main">
				<div id="content">

					<div id="content-info">
						<h2><?php echo __('Archives'); ?></h2>
					</div>

					<div class="content-inner">

						<div id="time-criteria"><!-- entries sorted by date -->
							<div id="by-date" class="arch-block">
								<h3><?php echo __('By date'); ?></h3>
								<p class="fromto"><?php echo __('FromDay'); ?> <?php if (dcCore::app()->ctx->exists("meta") && dcCore::app()->ctx->meta->rows() && (dcCore::app()->ctx->meta->meta_type == "tag")) { if (!isset($params)) { $params = []; }
if (!isset($params['from'])) { $params['from'] = ''; }
if (!isset($params['sql'])) { $params['sql'] = ''; }
$params['from'] .= ', '.dcCore::app()->prefix.'meta META ';
$params['sql'] .= 'AND META.post_id = P.post_id ';
$params['sql'] .= "AND META.meta_type = 'tag' ";
$params['sql'] .= "AND META.meta_id = '".dcCore::app()->con->escape(dcCore::app()->ctx->meta->meta_id)."' ";
} ?>
<?php
if (!isset($_page_number)) { $_page_number = 1; }
$params['limit'] = 1;
$nb_entry_first_page = $nb_entry_per_page = 1;
if ((dcCore::app()->url->type == 'default') || (dcCore::app()->url->type == 'default-page')) {
    $params['limit'] = [($_page_number == 1 ? 0 : ($_page_number - 2) * $nb_entry_per_page + $nb_entry_first_page),$params['limit']];
} else {
    $params['limit'] = [($_page_number - 1) * $nb_entry_per_page,$params['limit']];
}
if (dcCore::app()->ctx->exists("users")) { $params['user_id'] = dcCore::app()->ctx->users->user_id; }
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id.(dcCore::app()->blog->settings->system->inc_subcats?' ?sub':'');}
if (dcCore::app()->ctx->exists("archives")) { $params['post_year'] = dcCore::app()->ctx->archives->year(); $params['post_month'] = dcCore::app()->ctx->archives->month(); }
if (dcCore::app()->ctx->exists("langs")) { $params['post_lang'] = dcCore::app()->ctx->langs->post_lang; }
if (isset($_search)) { $params['search'] = $_search; }
$params['order'] = 'post_dt asc';
$params['no_content'] = true;
dcCore::app()->ctx->post_params = $params;
dcCore::app()->ctx->posts = dcCore::app()->blog->getPosts($params); unset($params);
?>
<?php while (dcCore::app()->ctx->posts->fetch()) : ?><a href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->posts->getDate('%e %B %Y',''),array (
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
  'format' => '%e %B %Y',
),'EntryDate'); ?></a><?php endwhile; dcCore::app()->ctx->posts = null; dcCore::app()->ctx->post_params = null; ?> <?php echo __('toDay'); ?> <?php if (dcCore::app()->ctx->exists("meta") && dcCore::app()->ctx->meta->rows() && (dcCore::app()->ctx->meta->meta_type == "tag")) { if (!isset($params)) { $params = []; }
if (!isset($params['from'])) { $params['from'] = ''; }
if (!isset($params['sql'])) { $params['sql'] = ''; }
$params['from'] .= ', '.dcCore::app()->prefix.'meta META ';
$params['sql'] .= 'AND META.post_id = P.post_id ';
$params['sql'] .= "AND META.meta_type = 'tag' ";
$params['sql'] .= "AND META.meta_id = '".dcCore::app()->con->escape(dcCore::app()->ctx->meta->meta_id)."' ";
} ?>
<?php
if (!isset($_page_number)) { $_page_number = 1; }
$params['limit'] = 1;
$nb_entry_first_page = $nb_entry_per_page = 1;
if ((dcCore::app()->url->type == 'default') || (dcCore::app()->url->type == 'default-page')) {
    $params['limit'] = [($_page_number == 1 ? 0 : ($_page_number - 2) * $nb_entry_per_page + $nb_entry_first_page),$params['limit']];
} else {
    $params['limit'] = [($_page_number - 1) * $nb_entry_per_page,$params['limit']];
}
if (dcCore::app()->ctx->exists("users")) { $params['user_id'] = dcCore::app()->ctx->users->user_id; }
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id.(dcCore::app()->blog->settings->system->inc_subcats?' ?sub':'');}
if (dcCore::app()->ctx->exists("archives")) { $params['post_year'] = dcCore::app()->ctx->archives->year(); $params['post_month'] = dcCore::app()->ctx->archives->month(); }
if (dcCore::app()->ctx->exists("langs")) { $params['post_lang'] = dcCore::app()->ctx->langs->post_lang; }
if (isset($_search)) { $params['search'] = $_search; }
$params['order'] = 'post_dt desc';
$params['no_content'] = true;
dcCore::app()->ctx->post_params = $params;
dcCore::app()->ctx->posts = dcCore::app()->blog->getPosts($params); unset($params);
?>
<?php while (dcCore::app()->ctx->posts->fetch()) : ?><a href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->posts->getDate('%e %B %Y',''),array (
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
  'format' => '%e %B %Y',
),'EntryDate'); ?></a><?php endwhile; dcCore::app()->ctx->posts = null; dcCore::app()->ctx->post_params = null; ?></p>
								<?php
if (!isset($params)) $params = [];
$params['type'] = 'month';
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id; }
$params['order'] = 'asc';
 dcCore::app()->ctx->archives = dcCore::app()->blog->getDates($params); unset($params);
?>
<?php while (dcCore::app()->ctx->archives->fetch()) : ?>
									<?php if (dcCore::app()->ctx->archives->yearHeader()) : ?>
										<div>
											<h4><?php echo context::global_filters(dt::dt2str('%Y',dcCore::app()->ctx->archives->dt),array (
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
  'format' => '%Y',
),'ArchiveDate'); ?></h4>
											<ul>
									<?php endif; ?>
												<li><a href="<?php echo context::global_filters(dcCore::app()->ctx->archives->url(dcCore::app()),array (
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
),'ArchiveURL'); ?>" title="<?php echo context::global_filters(dt::dt2str('%B %Y',dcCore::app()->ctx->archives->dt),array (
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
),'ArchiveDate'); ?>"><?php echo context::global_filters(dt::dt2str('%B',dcCore::app()->ctx->archives->dt),array (
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
  'format' => '%B',
),'ArchiveDate'); ?></a>
													<span>(<?php echo context::global_filters(dcCore::app()->ctx->archives->nb_post,array (
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
),'ArchiveEntriesCount'); ?>)</span></li>
									<?php if (dcCore::app()->ctx->archives->yearFooter()) : ?>
											</ul>
										</div>
									<?php endif; ?>
								<?php endwhile; dcCore::app()->ctx->archives = null; ?>
							</div>
						</div>

						<div id="other-criteria"><!-- entries sorted by others criterias -->
							<?php
if (!isset($params)) $params = [];
$params['level'] = 1;
dcCore::app()->ctx->categories = dcCore::app()->blog->getCategories($params);
?>
<?php while (dcCore::app()->ctx->categories->fetch()) : ?>
								<?php if (dcCore::app()->ctx->categories->isStart()) : ?>
									<div id="by-cat" class="arch-block">
										<h3><?php echo __('By category'); ?></h3>
										<ul>
								<?php endif; ?>
											<li><a href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("category",dcCore::app()->ctx->categories->cat_url),array (
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
),'CategoryTitle'); ?></a>
								<?php
dcCore::app()->ctx->categories = dcCore::app()->blog->getCategoryFirstChildren(dcCore::app()->ctx->categories->cat_id);
while (dcCore::app()->ctx->categories->fetch()) : ?>
									<?php if (dcCore::app()->ctx->categories->isStart()) : ?>
												<ul>
									<?php endif; ?>
														<li><a href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("category",dcCore::app()->ctx->categories->cat_url),array (
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
									<?php endif; ?>
								<?php endwhile; dcCore::app()->ctx->categories = null; ?>
											</li>
								<?php if (dcCore::app()->ctx->categories->isEnd()) : ?>
										</ul>
									</div>
								<?php endif; ?>
							<?php endwhile; dcCore::app()->ctx->categories = null; unset($params); ?>

							<?php
dcCore::app()->ctx->meta = dcCore::app()->meta->computeMetaStats(dcCore::app()->meta->getMetadata(['meta_type'=>'tag','limit'=>null,'order'=>'count DESC'])); dcCore::app()->ctx->meta->sort('count','desc'); ?><?php while (dcCore::app()->ctx->meta->fetch()) : ?>
								<?php if (dcCore::app()->ctx->meta->isStart()) : ?>
									<div id="by-tag" class="arch-block">
										<h3><?php echo __('By tag'); ?></h3>
										<ul>
								<?php endif; ?>
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
								<?php if (dcCore::app()->ctx->meta->isEnd()) : ?>
										</ul>
									</div>
								<?php endif; ?>
							<?php endwhile; dcCore::app()->ctx->meta = null; ?>
						</div>

						<div id="more-arch"><!-- others things -->
							<div class="arch-block">
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
$params['post_type'] = preg_split('/\s*,\s*/','page',-1,PREG_SPLIT_NO_EMPTY);
if (dcCore::app()->ctx->exists("users")) { $params['user_id'] = dcCore::app()->ctx->users->user_id; }
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id.(dcCore::app()->blog->settings->system->inc_subcats?' ?sub':'');}
if (dcCore::app()->ctx->exists("archives")) { $params['post_year'] = dcCore::app()->ctx->archives->year(); $params['post_month'] = dcCore::app()->ctx->archives->month(); }
if (dcCore::app()->ctx->exists("langs")) { $params['post_lang'] = dcCore::app()->ctx->langs->post_lang; }
if (isset($_search)) { $params['search'] = $_search; }
$params['order'] = 'post_dt desc';
$params['no_content'] = true;
$params['post_selected'] = 0;dcCore::app()->ctx->post_params = $params;
dcCore::app()->ctx->posts = dcCore::app()->blog->getPosts($params); unset($params);
?>
<?php while (dcCore::app()->ctx->posts->fetch()) : ?>
									<?php if (dcCore::app()->ctx->posts->isStart()) : ?>
										<h3><?php echo __('Pages'); ?></h3>
										<ul>
									<?php endif; ?>
											<li><a href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->posts->post_title,array (
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
),'EntryTitle'); ?></a></li>
									<?php if (dcCore::app()->ctx->posts->isEnd()) : ?>
										</ul>
									<?php endif; ?>
								<?php endwhile; dcCore::app()->ctx->posts = null; dcCore::app()->ctx->post_params = null; ?>
							</div>
						</div>
					</div> <!-- End .content-inner -->

				</div> <!-- End #content -->
			</div> <!-- End #main -->

			<div id="sidebar">
				<div id="blognav">
					<?php publicWidgets::widgetHandler('search','
					'); ?>
				</div> <!-- End #blognav -->

				<div id="blogextra">
					<?php publicWidgets::widgetsHandler('extra',''); ?>
				</div> <!-- End #blogextra -->

			</div> <!-- End #sidebar -->
		</div> <!-- End #wrapper -->

		<?php try { echo dcCore::app()->tpl->getData('_footer.html'); } catch (Exception $e) {} ?>

	</div> <!-- End #page -->
</body>
</html>
