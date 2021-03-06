<?php 
/*
Template Name: Home
*/

	get_header();

?>
<!-- Slider ==================================================
================================================== -->
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
	<?php
	  
	  $slideitem = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => -1,
	  
	  ));
	while ($slideitem->have_posts()) : $slideitem->the_post(); ?>
      <li> <a href="<?php the_permalink ();?>"><?php the_post_thumbnail();?></a>
        <section class="caption">
          <h2 class="shadow3"><?php title(4);?>...</h2>
          <p><?php read_more(20); ?></p>
          <a class="button" href="<?php the_permalink ();?>">More..!</a></section>
		  
      </li>
      <?php endwhile;?>
    </ul>
  </div>
  <!-- flexslider ends here --> 
</section>
<!-- slider ends here --> 
<!-- info Box ==================================================
================================================== -->
<div class="infobox">
  <div class="container info">
    <header>
      <h1>Introducing Freebix!</h1>
      <p class="infop">- Free, fully <span class="pink">responsive HTML</span> site template made by <a href="http://www.anarieldesign.com/" rel="nofollow"><strong>Anariel Design</strong></a> -</p>
    </header>
    <hr class="separator">
  </div>
  <!-- container ends here --> 
</div>
<!-- infobox ends here --> 
<!--Latest Photos ==================================================
================================================== -->
<div class="container latest">
  <div class="one_third">
    <figure class="shadow"><a href="#" class="thumb"><img src="<?php echo get_template_directory_uri();?>/images/portfolio/a.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Retro Movie</h3>
        </a>
        <p class="bioquote">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. </p>
      </figcaption>
    </figure>
  </div>
  <!-- one_third ends here -->
  
  <div class="one_third">
    <figure class="shadow"><a href="#" class="thumb"><img src="<?php echo get_template_directory_uri();?>/images/portfolio/b.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Retro Movie</h3>
        </a>
        <p class="bioquote">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. </p>
      </figcaption>
    </figure>
  </div>
  <!-- one_third ends here -->
  <div class="one_third lastcolumn">
    <figure class="shadow"><a href="#" class="thumb"><img src="<?php echo get_template_directory_uri();?>/images/portfolio/c.jpg" alt="alt" /></a>
      <figcaption> <a href="#">
        <h3 class="heading">Retro Movie</h3>
        </a>
        <p class="bioquote">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. </p>
      </figcaption>
    </figure>
  </div>
  <!-- one_third ends here --> 
</div>
<!-- end container --> 
<!--Heading Box ==================================================
================================================== -->
<div class="headingblock">
  <div class="container heading">
    <header>
      <h2>Introducing Freebix!</h2>
      <p>- Free, fully <span class="pink">responsive HTML</span> site template made by <a href="http://www.anarieldesign.com/" rel="nofollow"><strong>Anariel Design</strong></a> -</p>
    </header>
  </div>
  <!-- container ends here -->
  <hr class="separator1">
</div>
<!-- headingblock ends here --> 
<!-- Latest News & Faq ==================================================
================================================== -->
<div class="container latest">
  <div class="two_third">
    <div class="accordion-trigger">
      <h3>What did you eat for breakfast?</h3>
    </div>
    <div class="accordion-container">
      <div class="one_third"> <img class="shadow" src="<?php echo get_template_directory_uri();?>/images/portfolio/a.jpg" alt="" /> </div>
      <!--end one_third-->
      <div class="one_third"> <img class="shadow" src="<?php echo get_template_directory_uri();?>/images/portfolio/b.jpg" alt="" /> </div>
      <!--end one_third-->
      <div class="one_third lastcolumn"> <img class="shadow" src="<?php echo get_template_directory_uri();?>/images/portfolio/c.jpg" alt="" /> </div>
      <!--end one_third-->
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>Morning or Night person?</h3>
    </div>
    <div class="accordion-container">
      <div class="one_half">
        <div class="video-holder">
          <div class="video-container">
            <iframe title="YouTube video player" class="youtube-player" src="http://www.youtube.com/embed/W7JXcoTty3Q"></iframe>
          </div>
          <!--video-container ends here--> 
        </div>
        <!--video-holder ends here--> 
      </div>
      <!--end one_half-->
      <div class="one_half lastcolumn">
        <div class="video-holder">
          <div class="video-container">
            <iframe title="YouTube video player" class="youtube-player" src="http://www.youtube.com/embed/W7JXcoTty3Q"></iframe>
          </div>
          <!--video-container ends here--> 
        </div>
        <!--video-holder ends here--> 
      </div>
      <!--end one_half-->
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>If you were a animal, which would you be?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>Your favorite places in the world?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>Your favorite color?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
      <hr class="separator1">
    </div>
    <div class="accordion-trigger">
      <h3>The 5 things you can't live without?</h3>
    </div>
    <div class="accordion-container">
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
      <hr class="separator1">
      <!-- ENDS Accordions --> 
    </div>
  </div>
  <!-- two_third ends here -->
  <div class="one_third lastcolumn">
    <h3>New Entries</h3>
    <article>
      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
      <p class="quote">One morning, when Gregor Samsa woke from troubled dreams.</p>
      <a href="#" title="">&rarr; download</a></article>
    <hr class="separator1">
    <article>
      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
      <p class="quote">One morning, when Gregor Samsa woke from troubled dreams.</p>
      <a href="#" title="">&rarr; download</a></article>
    <hr class="separator1">
    <article>
      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>
      <p class="quote">One morning, when Gregor Samsa woke from troubled dreams.</p>
      <a href="#" title="">&rarr; download</a></article>
  </div>
  <!-- one_third ends here --> 
</div>
<!-- end container --> 

<?php get_footer();?>

