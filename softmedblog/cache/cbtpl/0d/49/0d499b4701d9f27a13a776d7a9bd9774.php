<div id="p<?php echo context::global_filters(dcCore::app()->ctx->posts->post_id,array (
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
),'EntryID'); ?>" class="post simple">
	<h2 class="post-title"><?php echo context::global_filters(dcCore::app()->ctx->posts->post_title,array (
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
),'EntryTitle'); ?></h2>

	<div class="post-attr">
		<p class="post-info">
			<span class="post-author"><?php echo __('By'); ?> <?php echo context::global_filters(dcCore::app()->ctx->posts->getAuthorLink(),array (
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
),'EntryAuthorLink'); ?>, </span>
			<span class="post-date"><?php echo context::global_filters(dcCore::app()->ctx->posts->getDate('',''),array (
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
),'EntryDate'); ?>. </span>
			<span class="permalink"><a href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>"><?php echo __('Permalink'); ?></a></span>
			<?php if(dcCore::app()->ctx->posts->cat_id) : ?>
				<span class="post-cat"><?php
dcCore::app()->ctx->categories = dcCore::app()->blog->getCategoryParents(dcCore::app()->ctx->posts->cat_id);
while (dcCore::app()->ctx->categories->fetch()) : ?><a
				href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("category",dcCore::app()->ctx->categories->cat_url),array (
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
),'CategoryTitle'); ?></a> › <?php endwhile; dcCore::app()->ctx->categories = null; ?><a
				href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getCategoryURL(),array (
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
),'EntryCategoryURL'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->posts->cat_title,array (
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
),'EntryCategory'); ?></a></span>
			<?php endif; ?>
		</p>

		<?php
dcCore::app()->ctx->meta = dcCore::app()->meta->getMetaRecordset(dcCore::app()->ctx->posts->post_meta,'tag'); dcCore::app()->ctx->meta->sort('meta_id_lower','asc'); ?><?php while (dcCore::app()->ctx->meta->fetch()) : ?>
			<?php if (dcCore::app()->ctx->meta->isStart()) : ?>
				<ul class="post-tags">
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
),'TagURL'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->meta->meta_id,array (
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
			<?php endif; ?>
		<?php endwhile; dcCore::app()->ctx->meta = null; ?>
	</div>

	<?php if (dcCore::app()->hasBehavior('publicEntryBeforeContent')) { dcCore::app()->callBehavior('publicEntryBeforeContent',dcCore::app(),dcCore::app()->ctx);} ?>

	<?php if(dcCore::app()->ctx->posts->isExtended()) : ?>
		<div class="post-excerpt"><?php echo context::global_filters(dcCore::app()->ctx->posts->getExcerpt(0),array (
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
),'EntryExcerpt'); ?></div>
	<?php endif; ?>

	<div class="post-content"><?php echo context::global_filters(dcCore::app()->ctx->posts->getContent(0),array (
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
),'EntryContent'); ?></div>

	<?php if (dcCore::app()->hasBehavior('publicEntryAfterContent')) { dcCore::app()->callBehavior('publicEntryAfterContent',dcCore::app(),dcCore::app()->ctx);} ?>
</div>

<?php
if (dcCore::app()->ctx->posts !== null && dcCore::app()->media) {
dcCore::app()->ctx->attachments = new ArrayObject(dcCore::app()->media->getPostMedia(dcCore::app()->ctx->posts->post_id,null,"attachment"));
?>
<?php foreach (dcCore::app()->ctx->attachments as $attach_i => $attach_f) : $GLOBALS['attach_i'] = $attach_i; $GLOBALS['attach_f'] = $attach_f;dcCore::app()->ctx->file_url = $attach_f->file_url; ?>
	<?php if ($attach_i == 0) : ?>
		<div id="attachments">
			<h3><?php echo __('Attachments'); ?></h3>
			<ul>
	<?php endif; ?>
				<li class="<?php echo context::global_filters($attach_f->media_type,array (
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
),'AttachmentType'); ?>">
          <?php if($attach_f->type_prefix == "audio") : ?>
            <?php try { echo dcCore::app()->tpl->getData('_audio_player.html'); } catch (Exception $e) {} ?>

          <?php endif; ?>
          <?php if($attach_f->type_prefix == "video" && $attach_f->type != "video/x-flv") : ?>
            <?php try { echo dcCore::app()->tpl->getData('_video_player.html'); } catch (Exception $e) {} ?>

          <?php endif; ?>
          <?php if($attach_f->type_prefix != "audio" && $attach_f->type_prefix != "video" || $attach_f->type == "video/x-flv") : ?>
             <a href="<?php 
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
?>"
      title="<?php echo context::global_filters($attach_f->basename,array (
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
),'AttachmentFileName'); ?> (<?php echo context::global_filters(files::size($attach_f->size),array (
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
),'AttachmentSize'); ?>)"><?php echo context::global_filters($attach_f->media_title,array (
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
),'AttachmentTitle'); ?></a>
          <?php endif; ?>
				</li>
	<?php if ($attach_i+1 == count(dcCore::app()->ctx->attachments)) : ?>
			</ul>
		</div>
	<?php endif; ?>
<?php endforeach; dcCore::app()->ctx->attachments = null; unset($attach_i,$attach_f,dcCore::app()->ctx->file_url); ?><?php } ?>


<?php if((dcCore::app()->ctx->posts->hasComments() || dcCore::app()->ctx->posts->commentsActive())) : ?>
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
$params['order'] = 'comment_dt asc';
dcCore::app()->ctx->comments = dcCore::app()->blog->getComments($params); unset($params);
if (dcCore::app()->ctx->posts !== null) { dcCore::app()->blog->withoutPassword(true);}
dcCore::app()->ctx->pings = dcCore::app()->ctx->comments;
?>
<?php while (dcCore::app()->ctx->comments->fetch()) : ?>
		<?php if (dcCore::app()->ctx->comments->isStart()) : ?>
			<div id="comments">
				<h3><?php if ((dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback) == 0) {
  printf(__('no reactions'),(dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback));
} elseif ((dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback) == 1) {
  printf(__('one reaction'),(dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback));
} else {
  printf(__('%s reactions'),(dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback));
} ?></h3>
				<ul>
		<?php endif; ?>
					<?php if(!dcCore::app()->ctx->comments->comment_trackback) : ?>
						<li id="c<?php echo dcCore::app()->ctx->comments->comment_id; ?>" class="comment <?php if (dcCore::app()->ctx->comments->isMe()) { echo 'me'; } ?> <?php echo ((dcCore::app()->ctx->comments->index()+1)%2 ? "odd" : ""); ?> <?php if (dcCore::app()->ctx->comments->index() == 0) { echo 'first'; } ?>">
					<?php endif; ?>
					<?php if(dcCore::app()->ctx->comments->comment_trackback) : ?>
						<li id="c<?php echo dcCore::app()->ctx->pings->comment_id; ?>" class="ping <?php echo ((dcCore::app()->ctx->pings->index()+1)%2 ? "odd" : ""); ?> <?php if (dcCore::app()->ctx->pings->index() == 0) { echo 'first'; } ?>">
					<?php endif; ?>
							<p class="comment-info"><a href="#c<?php echo dcCore::app()->ctx->comments->comment_id; ?>" class="comment-number"><?php echo dcCore::app()->ctx->comments->index()+1; ?></a>
								<?php echo __('From'); ?> <?php echo context::global_filters(dcCore::app()->ctx->comments->getAuthorLink(),array (
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
),'CommentAuthorLink'); ?> - <?php echo context::global_filters(dcCore::app()->ctx->comments->getDate('%d',''),array (
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
  'format' => '%d',
),'CommentDate'); ?>/<?php echo context::global_filters(dcCore::app()->ctx->comments->getDate('%m',''),array (
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
  'format' => '%m',
),'CommentDate'); ?>/<?php echo context::global_filters(dcCore::app()->ctx->comments->getDate('%Y',''),array (
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
),'CommentDate'); ?>, <?php echo context::global_filters(dcCore::app()->ctx->comments->getTime('',''),array (
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
),'CommentTime'); ?>
							</p>
							<div class="comment-content">

								<?php if (dcCore::app()->hasBehavior('publicCommentBeforeContent')) { dcCore::app()->callBehavior('publicCommentBeforeContent',dcCore::app(),dcCore::app()->ctx);} ?>

								<?php echo context::global_filters(dcCore::app()->ctx->comments->getContent(0),array (
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
),'CommentContent'); ?>

								<?php if (dcCore::app()->hasBehavior('publicCommentAfterContent')) { dcCore::app()->callBehavior('publicCommentAfterContent',dcCore::app(),dcCore::app()->ctx);} ?>
							</div>
						</li>
		<?php if (dcCore::app()->ctx->comments->isEnd()) : ?>
					</ul>
				</div>
		<?php endif; ?>
	<?php endwhile; dcCore::app()->ctx->comments = null; ?>
<?php endif; ?>

<?php if(dcCore::app()->ctx->posts->commentsActive() || dcCore::app()->ctx->posts->trackbacksActive()) : ?>
	<p id="comments-feed"><a class="feed" href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("feed","atom"),array (
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
),'EntryID'); ?>"
		 title="<?php echo __('This post\'s comments Atom feed'); ?>"><?php echo __('This post\'s comments feed'); ?></a></p>
<?php endif; ?>

<?php if(dcCore::app()->ctx->posts->commentsActive()) : ?>
	<?php if (dcCore::app()->ctx->form_error !== null) : ?>
		<p class="error" id="pr"><?php if (dcCore::app()->ctx->form_error !== null) { echo dcCore::app()->ctx->form_error; } ?></p>
	<?php endif; ?>

	<?php if (!empty($_GET['pub'])) : ?>
		<p class="message" id="pr"><?php echo __('Your comment has been published.'); ?></p>
	<?php endif; ?>

	<?php if (isset($_GET['pub']) && $_GET['pub'] == 0) : ?>
		<p class="message" id="pr"><?php echo __('Your comment has been submitted and will be reviewed for publication.'); ?></p>
	<?php endif; ?>

	<form action="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>#pr" method="post" id="comment-form">
		<?php if (dcCore::app()->ctx->comment_preview !== null && dcCore::app()->ctx->comment_preview["preview"]) : ?>
			<div id="pr">
				<h3><?php echo __('Your comment'); ?></h3>
				<div class="comment-preview"><?php echo context::global_filters(dcCore::app()->ctx->comment_preview["content"],array (
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
),'CommentPreviewContent'); ?></div>
				<p class="buttons"><input type="submit" class="submit" value="<?php echo __('send'); ?>" /></p>
			</div>
		<?php endif; ?>

		<h3><?php echo __('Add a comment'); ?></h3>
		<fieldset>

			<?php if (dcCore::app()->hasBehavior('publicCommentFormBeforeContent')) { dcCore::app()->callBehavior('publicCommentFormBeforeContent',dcCore::app(),dcCore::app()->ctx);} ?>

			<p class="field"><label for="c_name"><?php echo __('Name or nickname'); ?>&nbsp;:</label>
				<input name="c_name" id="c_name" type="text" size="30" maxlength="255"
				 value="<?php echo context::global_filters(dcCore::app()->ctx->comment_preview["name"],array (
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
),'CommentPreviewName'); ?>" />
			</p>

			<p class="field"><label for="c_mail"><?php echo __('Email address'); ?>&nbsp;:</label>
				<input name="c_mail" id="c_mail" type="text" size="30" maxlength="255"
				 value="<?php echo context::global_filters(dcCore::app()->ctx->comment_preview["mail"],array (
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
),'CommentPreviewEmail'); ?>" />
			</p>

			<p class="field"><label for="c_site"><?php echo __('Website'); ?> (<?php echo __('optional'); ?>)&nbsp;:</label>
				<input name="c_site" id="c_site" type="text" size="30" maxlength="255"
				 value="<?php echo context::global_filters(dcCore::app()->ctx->comment_preview["site"],array (
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
),'CommentPreviewSite'); ?>" />
			</p>

			<p style="display:none">
				<input name="f_mail" type="text" size="30" maxlength="255" value="" />
			</p>

			<p class="field"><label for="c_content"><?php echo __('Comment'); ?>&nbsp;:</label>
				<textarea name="c_content" id="c_content" cols="35"
				 rows="7"><?php echo context::global_filters(dcCore::app()->ctx->comment_preview["rawcontent"],array (
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
  'raw' => '1',
),'CommentPreviewContent'); ?></textarea>
			</p>

			<p class="form-help"><?php if (dcCore::app()->blog->settings->system->wiki_comments) {
  echo __('Comments can be formatted using a simple wiki syntax.');
} else {
  echo __('HTML code is displayed as text and web addresses are automatically converted.');
} ?></p>

			<?php if (dcCore::app()->hasBehavior('publicCommentFormAfterContent')) { dcCore::app()->callBehavior('publicCommentFormAfterContent',dcCore::app(),dcCore::app()->ctx);} ?>
		</fieldset>

		<fieldset>
			<p class="buttons">
				<input type="submit" class="preview" name="preview" value="<?php echo __('preview'); ?>" />
				
			</p>
		</fieldset>
	</form>
<?php endif; ?>

<?php if(dcCore::app()->ctx->posts->trackbacksActive()) : ?>
	<div id="ping-url">
		<h3><?php echo __('Add ping'); ?></h3>
		<p><?php echo __('Trackback URL'); ?>&nbsp;: <?php if (dcCore::app()->ctx->posts->trackbacksActive()) { echo dcCore::app()->ctx->posts->getTrackbackLink(); } ?>
</p>
	</div>
<?php endif; ?>
