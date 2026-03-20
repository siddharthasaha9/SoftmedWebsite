

  <article class="post <?php if((boolean)dcCore::app()->ctx->posts->isRepublished()) : ?>updated<?php endif; ?> simple" id="p<?php echo context::global_filters(dcCore::app()->ctx->posts->post_id,array (
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
),'EntryID'); ?>" role="article" lang="<?php if (dcCore::app()->ctx->posts->post_lang) { echo context::global_filters(dcCore::app()->ctx->posts->post_lang,array (
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
),'EntryLang'); } else {echo context::global_filters(dcCore::app()->blog->settings->system->lang,array (
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
),'EntryLang'); } ?>">
    
      <header>
        
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
        
        
          <div class="post-meta">
            
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
                <span class="post-date"><time datetime="<?php echo context::global_filters(dcCore::app()->ctx->posts->getISO8601Date(''),array (
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
),'EntryDate'); ?>"><?php echo context::global_filters(dcCore::app()->ctx->posts->getDate('',''),array (
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
),'EntryDate'); ?></time>. </span>
                <span class="post-permalink"><a href="<?php echo context::global_filters(dcCore::app()->ctx->posts->getURL(),array (
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
                  <ul class="post-tags-list">
                <?php endif; ?>
                <li class="post-tags-item"><a href="<?php echo context::global_filters(dcCore::app()->blog->url.dcCore::app()->url->getURLFor("tag",rawurlencode(dcCore::app()->ctx->meta->meta_id)),array (
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
        
      </header>
    
    

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
    
    

      <?php
if (dcCore::app()->ctx->posts !== null && dcCore::app()->media) {
dcCore::app()->ctx->attachments = new ArrayObject(dcCore::app()->media->getPostMedia(dcCore::app()->ctx->posts->post_id,null,"attachment"));
?>
<?php foreach (dcCore::app()->ctx->attachments as $attach_i => $attach_f) : $GLOBALS['attach_i'] = $attach_i; $GLOBALS['attach_f'] = $attach_f;dcCore::app()->ctx->file_url = $attach_f->file_url; ?>
        <?php if ($attach_i == 0) : ?>
          <footer class="post-attachments" id="attachments">
            <h3 class="post-attachments-title"><?php echo __('Attachments'); ?></h3>
            <ul class="post-attachments-list">
        <?php endif; ?>
        <li class="post-attachments-item <?php echo context::global_filters($attach_f->media_type,array (
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
?>" title="<?php echo context::global_filters($attach_f->basename,array (
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
          </footer>
        <?php endif; ?>
      <?php endforeach; dcCore::app()->ctx->attachments = null; unset($attach_i,$attach_f,dcCore::app()->ctx->file_url); ?><?php } ?>

    
  </article>


