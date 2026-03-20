<?php 
$rateit_style = ""; 
if (empty($rateit_style)) {  $rateit_style = $core->blog->settings->rateit->rateit_rating_style; } 
if (empty($rateit_params)) { $rateit_params = array('type'=>'','id'=>''); 
if ($_ctx->exists('posts') && $_ctx->posts->post_type == 'post' && $core->blog->settings->rateit->rateit_post_active) { 
 $rateit_params['type'] = 'post'; 
 $rateit_params['id'] = $_ctx->posts->post_id; 
} 
if ($_ctx->exists('comments') && $core->blog->settings->rateit->rateit_comment_active) { 
 $rateit_params['type'] = 'comment'; 
 $rateit_params['id'] = $_ctx->comments->comment_id; 
} 
if ($_ctx->exists('categories') && $core->blog->settings->rateit->rateit_category_active) { 
 $rateit_params['type'] = 'category'; 
 $rateit_params['id'] = $_ctx->categories->cat_id; 
} 
if ($_ctx->exists('meta') && $_ctx->meta->meta_type = 'tag' && $core->blog->settings->rateit->rateit_tag_active) { 
 $rateit_params['type'] = 'tag'; 
 $rateit_params['id'] = $_ctx->meta->meta_id; 
} 
if ($_ctx->exists('posts') && $_ctx->posts->post_type == 'eventhandler' && $core->blog->settings->rateit->rateit_eventhandler_active) { 
 $rateit_params['type'] = 'eventhandler'; 
 $rateit_params['id'] = $_ctx->posts->post_id; 
} 
} if (!empty($rateit_params['type'])) { 
 $rateit_voted = $core->rateIt->voted($rateit_params['type'],$rateit_params['id']); 
 $_ctx->rateIt = $core->rateIt->get($rateit_params['type'],$rateit_params['id']); 
 ?> 


 <?php if('classic' == $rateit_style) : ?>

  <div class="rateit rateit-classic">
    <h3><?php 
$title = ''; 
if ($_ctx->rateIt->type == 'post') { $title = __('Rate this entry'); } 
if ($_ctx->rateIt->type == 'comment') { $title = __('Rate this comment'); } 
if ($_ctx->rateIt->type == 'category') { $title = __('Rate this category'); } 
if ($_ctx->rateIt->type == 'tag') { $title = __('Rate this tag'); } 
if ($_ctx->rateIt->type == 'eventhandler') { $title = __('Rate this event'); } 
if (empty($title)) $title = __('Rate this'); 
echo context::global_filters($title,array (
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
),'rateItTitle'); 
?> 
</h3>
	<p><?php echo context::global_filters(rateItContext::value("fullnote",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->note."/".$_ctx->rateIt->quotient),array (
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
),'rateItFullnote'); ?></p>
	<?php echo rateItContext::linker($rateit_voted,$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->note,$_ctx->rateIt->quotient,$rateit_style); ?>
    <ul>
      <li><?php echo __('Note:'); ?> <?php echo context::global_filters(rateItContext::value("note",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->note),array (
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
),'rateItNote'); ?></li>
      <li><?php echo __('Votes:'); ?> <?php echo context::global_filters(rateItContext::value("total",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->total),array (
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
),'rateItTotal'); ?></li>
      <li><?php echo __('Higher:'); ?> <?php echo context::global_filters(rateItContext::value("max",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->max),array (
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
),'rateItMax'); ?></li>
      <li><?php echo __('Lower:'); ?> <?php echo context::global_filters(rateItContext::value("min",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->min),array (
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
),'rateItMin'); ?></li>
    </ul>
  </div>
  <?php endif; ?>


 <?php if('twin' == $rateit_style) : ?>

  <div class="rateit rateit-twin">
	<p><?php echo context::global_filters(rateItContext::value("mincount",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->mincount),array (
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
),'rateItMinCount'); ?></p>
	<?php echo rateItContext::linker($rateit_voted,$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->note,$_ctx->rateIt->quotient,$rateit_style); ?>
	<p><?php echo context::global_filters(rateItContext::value("maxcount",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->maxcount),array (
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
),'rateItMaxCount'); ?></p>
  </div>
 <?php endif; ?>


 <?php if('simple' == $rateit_style) : ?>

  <div class="rateit retait-simple">
	<?php echo rateItContext::linker($rateit_voted,$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->note,$_ctx->rateIt->quotient,$rateit_style); ?>
	<p><?php echo context::global_filters(rateItContext::value("maxcount",$_ctx->rateIt->type,$_ctx->rateIt->id,$_ctx->rateIt->maxcount),array (
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
),'rateItMaxCount'); ?></p>
  </div>
 <?php endif; ?>



 <?php 
 unset($rateit_voted); 
 $_ctx->rateIt = null; 
} 
unset($rateit_params); 
unset($rateit_style); 
?> 
