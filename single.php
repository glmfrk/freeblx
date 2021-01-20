

<?php get_header();?>
<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Blog Single Post Page</h3>
      <p>- Free, fully <span class="pink">responsive HTML</span> site template made by <a href="http://www.anarieldesign.com/" rel="nofollow"><strong>Anariel Design</strong></a> -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 
<!-- Blog Single ==================================================
================================================== -->
<div class="container">

    <?php
if(have_posts()) :

  while(have_posts()) : the_post() ;?>

    <article class="post">
	
	 <div id="post_meta">
		posted by : <?php the_author_posts_link();?> | categories : <?php the_category (',');?>  | Post Time : <?php the_time('d M,y');?> | with <?php comments_popup_link('comment','1 comment','% comments','post_comment','comments off');?>
		<div class="singleimg">
	  <a href="<?the_permalink();?>"><?php the_post_thumbnail();?></a></div>
	  </div>
	
      <h3 class="singlePost_title"><a href="<?php the_permalink ();?>"><?php the_title ('<h3>','</h3>');?></a></h3>

      <p><?php the_content(); ?></p>
	  <div class="tags">
			<span>
			Tags List : </span>
			
			<?php the_tags(' ',' ','<br />');?>
			
			
	  </div>
      </article> 
	<?php endwhile ;
	
	else:
	echo 'No Posts Found';
	endif;
	?>
</div>
<!-- container ends here --> 
<?php get_footer();?>