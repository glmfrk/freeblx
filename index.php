
<?php get_header();?>

<!--Breadcrumbs ==================================================
================================================== -->
<div class="breadcrumbs">
  <div class="container">
    <header>
      <h3>Blog Page</h3>
      <p>- Free, fully <span class="pink">responsive HTML</span> site template made by <a href="http://www.anarieldesign.com/" rel="nofollow"><strong>Anariel Design</strong></a> -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- breadcrumbs ends here --> 
<!-- Blog ==================================================
================================================== -->
<div class="container">
  <div class="ten columns alpha">
  
  <?php
if(have_posts()) :

  while(have_posts()) : the_post() ;?>

    <article class="post">
      <h3 class="singlePost_title"><a href="<?php the_permalink ();?>"><?php the_title ('<h3>','</h3>');?></a></h3>
     <a href="<?php the_permalink();?>" class="prettyPhoto[gal]"><?php the_post_thumbnail();?></a>
      <div class="entry-date">
        <div class="number"><?php the_time ('d ,M');?></div>
      </div>
	  <div id="post_meta">
		posted by : <?php the_author_posts_link();?> | categories : <?php the_category (',');?> 
	  
	  </div>
      <p><?php read_more(50); ?> ...</p>
      <a href="<?php the_permalink ();?>">more <span>+</span></a> </article> 
	<?php endwhile ;
	
	// if have no content, inqulde the 'No Post Found ' template
	else:
		get_template_part('template-parts/post/content','none');
	endif;
	wp_reset_postdata(); // optional function nadilew somossanai
	?>
	
  </div>
  <!-- ten columns ends here -->
  
  <aside class="six columns omega shadow1">
    <section class="recentnews">
      <h4 class="sidebarheader">Recent News</h4>
      <ul class="tabs">
        <li><a class="active" href="#trends">Trends</a></li>
        <li><a class="" href="#fashion">Fashion</a></li>
        <li><a class="" href="#shows">Shows</a></li>
      </ul>
      <ul class="tabs-content">
        <li class="active" id="trends">
          <p>Lorem ipsum dolor sit amet, proscriptum videt ulteriori. Filiam sunt amore nec est cum autem est se in. Cellam sanctissima coniunx in lucem exempli paupers coniunx rex cum autem quod ait regem Ardalio. Filiam sunt amore nec est cum autem est se in.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam,feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
        </li>
        <li id="fashion">
          <p>Lorem ipsum dolor sit amet, proscriptum videt ulteriori. Filiam sunt amore nec est cum autem est se in. Cellam sanctissima coniunx in lucem exempli paupers coniunx rex cum autem quod ait regem Ardalio. Filiam sunt amore nec est cum autem est se in.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
        </li>
        <li id="shows">
          <p>Lorem ipsum dolor sit amet, proscriptum videt ulteriori. Filiam sunt amore nec est cum autem est se in. Cellam sanctissima coniunx in lucem exempli paupers coniunx rex cum autem quod ait regem Ardalio. Filiam sunt amore nec est cum autem est se in.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam,feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
        </li>
      </ul>
    </section>
    <!--end recent news-->
    <section class="latestphotos">
      <h4 class="sidebarheader">Latest Photos</h4>
      <div class="one_half"> <img class="shadow" src="<?php echo esc_url (get_template_directory_uri());?>/images/images/work1.jpg" alt="work1" /> </div>
      <div class="one_half lastcolumn"> <img class="shadow" src="<?php echo esc_url (get_template_directory_uri());?>/images/images/work2.jpg" alt="work2" /> </div>
      <div class="one_half"> <img class="shadow" src="<?php echo esc_url (get_template_directory_uri());?>/images/images/work3.jpg" alt="work3" /> </div>
      <div class="one_half lastcolumn"> <img class="shadow" src="<?php echo esc_url (get_template_directory_uri());?>/images/images/work4.jpg" alt="work4" /> </div>
    </section>
    <!--end latestphotos-->
    
    <section class="categorie">
      <h4 class="sidebarheader">Categories</h4>
      <ul class="categories">
        <li><a href="#">Fashion</a></li>
        <li><a href="#">Beauty</a></li>
        <li><a href="#">Charity</a></li>
        <li><a href="#">Fashion Shows</a></li>
      </ul>
    </section>
    <!--end categories--> 
  </aside>
  <!--end six columns--> 
 
</div>
<!-- container ends here --> 
<div class="container">
 <div id="pagination">
	
	<ul class="pagination_area">

		<?php
		the_posts_pagination(array(
			//'mid_size' => 2,
			'show_all' => true,
			'prev_text' => __( 'PREV', 'freeblx' ),
			'next_text' => __( '<i class="icon-arrow-right"></i>', 'freeblx' ),
			'screen_reader_text' => 'pagination',
			'before_page_number' => '<b>page </b>'
		));
		
		
		?>
		<!--
		<li class="page_item"><a href="#" class="page_link "> 1</a></li>
		<span aria-current="page" class="page-numbers current"><li class="page_item"><a href="#" class="page_link "> 1</a></li></span>
		
		<span aria-current="page" class="page-numbers current"><li class="page_item"><a href="#" class="page_link"><i class="icon-arrow-right"></i></a></li></span> 
		 -->
</div>
	</nav>
		
		
		
			
	</ul>
</div>
</div>

<?php get_footer();?>


