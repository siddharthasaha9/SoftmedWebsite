<?php echo "<?"; ?>xml version="1.0" encoding="utf-8"<?php echo "?>"; ?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xml:lang="<?php if (dcCore::app()->ctx->exists("cur_lang")) 
   { echo context::global_filters(dcCore::app()->ctx->cur_lang,array (
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
),'FeedLanguage'); }
elseif (dcCore::app()->ctx->exists("posts") && dcCore::app()->ctx->posts->exists("post_lang")) 
   { echo context::global_filters(dcCore::app()->ctx->posts->post_lang,array (
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
),'FeedLanguage'); }
else 
   { echo context::global_filters(dcCore::app()->blog->settings->system->lang,array (
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
),'FeedLanguage'); } ?>">
  <title type="html"><?php echo context::global_filters(dcCore::app()->blog->name,array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogName'); ?><?php if (dcCore::app()->ctx->feed_subtitle !== null) { echo context::global_filters(dcCore::app()->ctx->feed_subtitle,array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'SysFeedSubtitle');} ?></title>
  <subtitle type="html"><?php echo context::global_filters(dcCore::app()->blog->desc,array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogDescription'); ?></subtitle>
  <link href="<?php echo context::global_filters(http::getSelfURI(),array (
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
),'SysSelfURI'); ?>" rel="self" type="application/atom+xml" />
  <link href="<?php if (dcCore::app()->ctx->exists("cur_lang")) echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("lang",dcCore::app()->ctx->cur_lang),array (
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
),'BlogLanguageURL');
            else echo context::global_filters(dcCore::app()->blog->url,array (
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
),'BlogLanguageURL'); ?>" rel="alternate" type="text/html" title="<?php echo context::global_filters(dcCore::app()->blog->desc,array (
  0 => NULL,
  'encode_xml' => '1 ',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => ' 1 ',
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogDescription'); ?>" />
  <updated><?php echo context::global_filters(dt::iso8601(dcCore::app()->blog->upddt,dcCore::app()->blog->settings->system->blog_timezone),array (
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
),'BlogUpdateDate'); ?></updated>
  <author>
    <name><?php echo context::global_filters(dcCore::app()->blog->settings->system->editor,array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogEditor'); ?></name>
  </author>
  <id><?php echo context::global_filters("urn:md5:".dcCore::app()->blog->uid,array (
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
),'BlogFeedID'); ?></id>
  <generator uri="https://www.dotclear.org/">Dotclear</generator>
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
    <entry>
      <title><?php echo context::global_filters(dcCore::app()->ctx->posts->post_title,array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'EntryTitle'); ?></title>
      <link href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>" rel="alternate" type="text/html" title="<?php echo context::global_filters(dcCore::app()->ctx->posts->post_title,array (
  0 => NULL,
  'encode_xml' => ' 1 ',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'EntryTitle'); ?>" />
      <id><?php echo context::global_filters(dcCore::app()->ctx->posts->getFeedID(),array (
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
),'EntryFeedID'); ?></id>
      <published><?php echo context::global_filters(dcCore::app()->ctx->posts->getISO8601Date(''),array (
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
),'EntryDate'); ?></published>
      <?php if((boolean)dcCore::app()->ctx->posts->isRepublished()) : ?>
        <updated><?php echo context::global_filters(dcCore::app()->ctx->posts->getISO8601Date('upddt'),array (
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
  'upddt' => '1',
),'EntryDate'); ?></updated>
      <?php endif; ?>
      <?php if(!(boolean)dcCore::app()->ctx->posts->isRepublished()) : ?>
        <updated><?php echo context::global_filters(dcCore::app()->ctx->posts->getISO8601Date(''),array (
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
),'EntryDate'); ?></updated>
      <?php endif; ?>
      <author>
        <name><?php echo context::global_filters(dcCore::app()->ctx->posts->getAuthorCN(),array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'EntryAuthorCommonName'); ?></name>
      </author>
      <?php if(dcCore::app()->ctx->posts->cat_id) : ?>
        <dc:subject><?php echo context::global_filters(dcCore::app()->ctx->posts->cat_title,array (
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
),'EntryCategory'); ?></dc:subject>
      <?php endif; ?>
      <?php
dcCore::app()->ctx->meta = dcCore::app()->meta->getMetaRecordset(dcCore::app()->ctx->posts->post_meta,'tag'); dcCore::app()->ctx->meta->sort('meta_id_lower','asc'); ?><?php while (dcCore::app()->ctx->meta->fetch()) : ?>
        <dc:subject><?php echo context::global_filters(dcCore::app()->ctx->meta->meta_id,array (
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
),'TagID'); ?></dc:subject>
      <?php endwhile; dcCore::app()->ctx->meta = null; ?>
      <content type="html"><?php echo context::global_filters(dcCore::app()->ctx->posts->getExcerpt(1),array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
  'absolute_urls' => '1',
),'EntryExcerpt'); ?> <?php echo context::global_filters(dcCore::app()->ctx->posts->getContent(1),array (
  0 => NULL,
  'encode_xml' => '1',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
  'absolute_urls' => '1',
),'EntryContent'); ?></content>
      <?php
if (dcCore::app()->ctx->posts !== null && dcCore::app()->media) {
dcCore::app()->ctx->attachments = new ArrayObject(dcCore::app()->media->getPostMedia(dcCore::app()->ctx->posts->post_id,null,"attachment"));
?>
<?php foreach (dcCore::app()->ctx->attachments as $attach_i => $attach_f) : $GLOBALS['attach_i'] = $attach_i; $GLOBALS['attach_f'] = $attach_f;dcCore::app()->ctx->file_url = $attach_f->file_url; ?>
        <link rel="enclosure" href="<?php 
$url = $attach_f->file_url;
if (substr($url, 0, strlen(dcCore::app()->blog->host)) === dcCore::app()->blog->host) {
   $url = substr($url, strlen(dcCore::app()->blog->host));
}
echo context::global_filters($url,array (
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
),'AttachmentURL');
?>" length="<?php echo context::global_filters($attach_f->size,array (
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
  'full' => ' 1 ',
),'AttachmentSize'); ?>" type="<?php echo context::global_filters($attach_f->type,array (
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
),'AttachmentMimeType'); ?>" />
      <?php endforeach; dcCore::app()->ctx->attachments = null; unset($attach_i,$attach_f,dcCore::app()->ctx->file_url); ?><?php } ?>

      <?php if(dcCore::app()->ctx->posts->commentsActive()) : ?>
        <wfw:comment><?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>#comment-form</wfw:comment>
        <wfw:commentRss><?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("feed","atom"),array (
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
),'BlogFeedURL'); ?>/comments/<?php echo context::global_filters(dcCore::app()->ctx->posts->post_id,array (
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
),'EntryID'); ?></wfw:commentRss>
      <?php endif; ?>
    </entry>
  <?php endwhile; dcCore::app()->ctx->posts = null; dcCore::app()->ctx->post_params = null; ?>
</feed>
