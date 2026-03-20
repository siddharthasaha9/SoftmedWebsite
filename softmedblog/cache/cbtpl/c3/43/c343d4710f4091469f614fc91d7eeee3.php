

  <?php if((dcCore::app()->ctx->posts->hasComments() || dcCore::app()->ctx->posts->commentsActive()) || (dcCore::app()->ctx->posts->hasTrackbacks() || dcCore::app()->ctx->posts->trackbacksActive())) : ?>
    <section class="post-feedback">
  <?php endif; ?>
  

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
              <div class="feedback__comments" id="comments">
                <h3><?php if ((dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback) == 0) {
  printf(__('no reactions'),(dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback));
} elseif ((dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback) == 1) {
  printf(__('one reaction'),(dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback));
} else {
  printf(__('%s reactions'),(dcCore::app()->ctx->posts->nb_comment + dcCore::app()->ctx->posts->nb_trackback));
} ?></h3>
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
                <ul class="comments-list">
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
),'CommentAuthorLink'); ?> - <time datetime="<?php echo context::global_filters(dcCore::app()->ctx->comments->getISO8601Date(''),array (
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
),'CommentDate'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->comments->getDate('%d',''),array (
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
),'CommentTime'); ?></time>
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
      
      
      

        <form class="comment-form" action="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
),'EntryURL'); ?>#pr" method="post" id="comment-form" role="form">
          
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
                
                
                  <p class="buttons"><button type="submit" class="submit" value="<?php echo __('Send'); ?>"><?php echo __('Send'); ?></button></p>
                
              </div>
            <?php endif; ?>
          
          
            <h3><?php echo __('Add a comment'); ?></h3>
          
          
            

              <?php if (dcCore::app()->hasBehavior('publicCommentFormBeforeContent')) { dcCore::app()->callBehavior('publicCommentFormBeforeContent',dcCore::app(),dcCore::app()->ctx);} ?>
              <p class="field name-field"><label for="c_name"><?php echo __('Name or nickname'); ?><abbr title="<?php echo __('Required field'); ?>">*</abbr>&nbsp;:</label>
                <input name="c_name" id="c_name" type="text" size="30" maxlength="255" value="<?php echo context::global_filters(dcCore::app()->ctx->comment_preview["name"],array (
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
),'CommentPreviewName'); ?>" required />
              </p>
              <p class="field mail-field"><label for="c_mail"><?php echo __('Email address'); ?><abbr title="<?php echo __('Required field'); ?>">*</abbr>&nbsp;:</label>
                <input name="c_mail" id="c_mail" type="email" size="30" maxlength="255" value="<?php echo context::global_filters(dcCore::app()->ctx->comment_preview["mail"],array (
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
),'CommentPreviewEmail'); ?>" required />
              </p>
              <p class="field site-field"><label for="c_site"><?php echo __('Website'); ?>&nbsp;:</label>
                <input name="c_site" id="c_site" type="url" size="30" maxlength="255" value="<?php echo context::global_filters(dcCore::app()->ctx->comment_preview["site"],array (
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
              <p class="field field-content"><label for="c_content"><?php echo __('Comment'); ?><abbr title="<?php echo __('Required field'); ?>">*</abbr>&nbsp;:</label>
                <textarea name="c_content" id="c_content" cols="35" rows="7" required aria-describedby="c_help"><?php echo context::global_filters(dcCore::app()->ctx->comment_preview["rawcontent"],array (
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
              <p class="form-help" id="c_help"><?php if (dcCore::app()->blog->settings->system->wiki_comments) {
  echo __('Comments can be formatted using a simple wiki syntax.');
} else {
  echo __('HTML code is displayed as text and web addresses are automatically converted.');
} ?></p>

              <?php if (dcCore::app()->hasBehavior('publicCommentFormAfterContent')) { dcCore::app()->callBehavior('publicCommentFormAfterContent',dcCore::app(),dcCore::app()->ctx);} ?>
            
            
              <p class="buttons">
                <button type="submit" class="preview" name="preview" value="<?php echo __('Preview'); ?>"><?php echo __('Preview'); ?></button>
                <?php if (dcCore::app()->blog->settings->system->comment_preview_optional || (dcCore::app()->ctx->comment_preview !== null && dcCore::app()->ctx->comment_preview["preview"])) : ?>
                  <button type="submit" class="submit" value="<?php echo __('Send'); ?>"><?php echo __('Send'); ?></button>
                <?php endif; ?>
              </p>
            
          
        </form>
      
      
    <?php endif; ?>
  
  
    <?php if(dcCore::app()->ctx->posts->trackbacksActive()) : ?>
      <div class="send-ping">
        
          <h3><?php echo __('Add ping'); ?></h3>
        
        
          <p id="ping-url"><?php echo __('Trackback URL'); ?>&nbsp;: <?php if (dcCore::app()->ctx->posts->trackbacksActive()) { echo dcCore::app()->ctx->posts->getTrackbackLink(); } ?>
</p>
        
      </div>
    <?php endif; ?>
  
  <?php if((dcCore::app()->ctx->posts->hasComments() || dcCore::app()->ctx->posts->commentsActive()) || (dcCore::app()->ctx->posts->hasTrackbacks() || dcCore::app()->ctx->posts->trackbacksActive())) : ?>
    </section> 
  <?php endif; ?>


