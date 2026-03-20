<?php echo "<?"; ?>xml version="1.0" encoding="utf-8"<?php echo "?>"; ?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="<?php if (dcCore::app()->ctx->exists("cur_lang")) 
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
),'SysFeedSubtitle');} ?> - <?php echo __('Comments'); ?></title>
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
if (dcCore::app()->ctx->nb_comment_per_page !== null) { $params['limit'] = dcCore::app()->ctx->nb_comment_per_page; }
if (dcCore::app()->ctx->posts !== null) { $params['post_id'] = dcCore::app()->ctx->posts->post_id; dcCore::app()->blog->withoutPassword(false);
}
if (dcCore::app()->ctx->exists("categories")) { $params['cat_id'] = dcCore::app()->ctx->categories->cat_id; }
if (dcCore::app()->ctx->exists("langs")) { $params['sql'] = "AND P.post_lang = '".dcCore::app()->blog->con->escape(dcCore::app()->ctx->langs->post_lang)."' "; }
$params['order'] = 'comment_dt desc';
dcCore::app()->ctx->comments = dcCore::app()->blog->getComments($params); unset($params);
if (dcCore::app()->ctx->posts !== null) { dcCore::app()->blog->withoutPassword(true);}
dcCore::app()->ctx->pings = dcCore::app()->ctx->comments;
?>
<?php while (dcCore::app()->ctx->comments->fetch()) : ?>
    <?php if(dcCore::app()->ctx->comments->comment_trackback) : ?>
      <entry>
        <title>[ping] <?php echo context::global_filters(dcCore::app()->ctx->pings->post_title,array (
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
),'PingEntryTitle'); ?> - <?php echo context::global_filters(dcCore::app()->ctx->pings->comment_author,array (
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
),'PingBlogName'); ?></title>
        <link href="<?php echo context::global_filters(dcCore::app()->ctx->pings->getPostURL(),array (
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
),'PingPostURL'); ?>#c<?php echo dcCore::app()->ctx->pings->comment_id; ?>" rel="alternate" type="text/html" title="[ping] <?php echo context::global_filters(dcCore::app()->ctx->pings->post_title,array (
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
),'PingEntryTitle'); ?> - <?php echo context::global_filters(dcCore::app()->ctx->pings->comment_author,array (
  0 => NULL,
  'encode_xml' => '1 ',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'PingBlogName'); ?>" />
        <id><?php echo context::global_filters(dcCore::app()->ctx->pings->getFeedID(),array (
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
),'PingFeedID'); ?></id>
        <published><?php echo context::global_filters(dcCore::app()->ctx->pings->getISO8601Date(''),array (
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
),'PingDate'); ?></published>
        <updated><?php echo context::global_filters(dcCore::app()->ctx->pings->getISO8601Date('upddt'),array (
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
),'PingDate'); ?></updated>
        <author>
          <name><?php echo context::global_filters(dcCore::app()->ctx->pings->comment_author,array (
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
),'PingBlogName'); ?></name>
        </author>
        <content type="html">&lt;p&gt;&lt;a href="<?php echo context::global_filters(dcCore::app()->ctx->pings->getAuthorURL(),array (
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
),'PingAuthorURL'); ?>"&gt;<?php echo context::global_filters(dcCore::app()->ctx->pings->getTrackbackTitle(),array (
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
),'PingTitle'); ?>&lt;/a&gt;&lt;/p&gt; <?php echo context::global_filters(dcCore::app()->ctx->pings->getTrackbackContent(),array (
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
),'PingContent'); ?></content>
      </entry>
    <?php endif; ?>
    <?php if(!dcCore::app()->ctx->comments->comment_trackback) : ?>
      <entry>
        <title><?php echo context::global_filters(dcCore::app()->ctx->comments->post_title,array (
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
),'CommentEntryTitle'); ?> - <?php echo context::global_filters(dcCore::app()->ctx->comments->comment_author,array (
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
),'CommentAuthor'); ?></title>
        <link href="<?php echo context::global_filters(dcCore::app()->ctx->comments->getPostURL(),array (
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
),'CommentPostURL'); ?>#c<?php echo dcCore::app()->ctx->comments->comment_id; ?>" rel="alternate" type="text/html" title="<?php echo context::global_filters(dcCore::app()->ctx->comments->post_title,array (
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
),'CommentEntryTitle'); ?> - <?php echo context::global_filters(dcCore::app()->ctx->comments->comment_author,array (
  0 => NULL,
  'encode_xml' => '1 ',
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'CommentAuthor'); ?>" />
        <id><?php echo context::global_filters(dcCore::app()->ctx->comments->getFeedID(),array (
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
),'CommentFeedID'); ?></id>
        <published><?php echo context::global_filters(dcCore::app()->ctx->comments->getISO8601Date(''),array (
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
),'CommentDate'); ?></published>
        <updated><?php echo context::global_filters(dcCore::app()->ctx->comments->getISO8601Date('upddt'),array (
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
),'CommentDate'); ?></updated>
        <author>
          <name><?php echo context::global_filters(dcCore::app()->ctx->comments->comment_author,array (
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
),'CommentAuthor'); ?></name>
        </author>
        <content type="html"><?php echo context::global_filters(dcCore::app()->ctx->comments->getContent(1),array (
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
),'CommentContent'); ?></content>
      </entry>
    <?php endif; ?>
  <?php endwhile; dcCore::app()->ctx->comments = null; ?>
</feed>
