

<?php get_header();?>
<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3><?php the_title();?></h3>
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

  <!-- slider ends here -->
  <hr class="separator1">
  

 
    <?php
if(have_posts()) :

  while(have_posts()) : the_post() ;?>

    <article class="post">
	  <h3 class="singlePost_title"><a href="<?php the_permalink ();?>"><?php the_title ('<h3>','</h3>');?></a></h3>

      <a href="<?php the_permalink ();?>" class="prettyPhoto[gal]"><?php the_post_thumbnail();?></a>
      <p><?php the_content(); ?></p>
      </article> 
	<?php endwhile ;
	
	else:
	echo 'No Posts Found';
	endif;
	?>


</div>
<!-- container ends here --> 
<?php get_footer();?>