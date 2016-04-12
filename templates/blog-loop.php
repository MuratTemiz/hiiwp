<?php
global $hiilite_options;
$post_meta = get_post_meta(get_the_id());
$hiilite_options['amp'] = get_theme_mod('amp');
if($hiilite_options['amp']) $_amp = 'amp-'; else $_amp = '';
?>
<article  <?php post_class('row row-o-content-top blog-article'); ?> itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" >
	<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php bloginfo('url')?>"/>
	<?php 
	if(has_post_thumbnail($post->id)): 
			
		$tn_id = get_post_thumbnail_id( $post->ID );

		$img = wp_get_attachment_image_src( $tn_id, 'large' );
		$width = $img[1];
		$height = $img[2];
	?>
	<figure class="flex-item half-width" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
		<meta itemprop="url" content="<?=$img[0];?>">
		<meta itemprop="width" content="<?=$img[1];?>">
		<meta itemprop="height" content="<?=$img[2];?>">
		<a href="<?=get_the_permalink()?>"><<?=$_amp?>img src='<?=$img[0];?>' layout='responsive' width='<?=$width?>' height='<?=$height?>'><?=($_amp!='')?'</amp-img>':''?></a>
	</figure><?php endif; ?>
	<div class="flex-item half-width content-box" >
		<span itemprop="articleSection" class="labels"><?php the_category(', '); ?></span>
		<meta itemprop="datePublished" content="<?php the_time('Y-m-d'); ?>">
		<h2><a href="<?=get_the_permalink()?>" itemprop="headline"><?php the_title(); ?></a></h2>
	
		<p><?php the_excerpt(); ?></p>
		<a class="button" href="<?php the_permalink() ?>">Read More</a>
	<div>
</article>
<?php
	
?>