<?php
/*
 Template Name:About page
 */
?>
<?php get_header();?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>







		


<!---------------------FIRST SECTION - AWARD WINNING------------------------->
	<?php
		if( have_rows('first_section_repeater') ):
		    while ( have_rows('first_section_repeater') ) : the_row();

			$FIRST_SECTION_CONTENT = get_sub_field( 'first_section_content' );
			$FIRST_SECTION_BUTTON = get_sub_field( 'first_section_button' );
			$FIRST_SECTION_IMAGE = get_sub_field( 'first_section_image' );
		?>



<div class="container">
  <div class="winningwrapper">
         	<?php
if(get_field('main_about_title_'))
{
	echo '<h2 class="winnigtitle" style="text-align:center; color:black; margin-top:50px; margin-bottom:30px; font-size:35px;">' . get_field('main_about_title_') . '</h2>';
}
?>



         	<?php
if(get_field('main_about_sub_title'))
{
	echo '<h1 class="winnigdesc" style="text-align:center; color:grey; margin-top:5px; margin-bottom:50px; font-size:20px;">' . get_field('main_about_sub_title') . '</h1>';
}
?>
      <div class="row">
        <div class="col-md-6">
          <p class="winnigbulk"><?php echo $FIRST_SECTION_CONTENT; ?></p>
            <button id="thehehe" class="winningbutton"><?php echo $FIRST_SECTION_BUTTON; ?></button>
        </div>
        <div class="col-md-6">
          
          		<?php 
		$FIRST_SECTION_IMAGE = get_sub_field('first_section_image');
		if( $FIRST_SECTION_IMAGE ){
		$url = $FIRST_SECTION_IMAGE['url'];
		$title = $FIRST_SECTION_IMAGE['title'];
		$alt = $FIRST_SECTION_IMAGE['alt'];
		$caption = $FIRST_SECTION_IMAGE['caption'];
		$size = 'large';
		$thumb = $FIRST_SECTION_IMAGE['sizes'][ $size ];}
	?>
		<img class="winningimage" src="<?php echo $thumb ?>" alt="<?php echo $alt ?>" />
        </div>
      </div>
    </div>
</div>
<?php endwhile; endif; ?>
<!---------------------FIRST SECTION - AWARD WINNING------------------------->



<!----------------------FUN FACTS ------------------------------->
<div class="container-fluid">
	<div class="funbacker">
		<?php
			if(get_field('fun_facts_title')){
			echo '<h3 class="funtitle">' . get_field('fun_facts_title') . '</h3>';}
		?>

		<?php
			if(get_field('fun_facts_desc')){
			echo '<p class="fundesc">' . get_field('fun_facts_desc') . '</p>';}
		?>

		<?php
			if(get_field('fun_facts_content')){
			echo '<p class="funbulk">' . get_field('fun_facts_content') . '</p>';}
		?>
	

<div class="row">
	
		<?php
			if( have_rows('second_section_repeater') ):
			while ( have_rows('second_section_repeater') ) : the_row();

			$SECOND_MINI_THUMB = get_sub_field( 'second_mini_thumb' );
			$SECOND_THUMB_STATS = get_sub_field( 'second_thumb_stats' );
			$SECOND_THUMB_DESC = get_sub_field( 'second_thumb_desc' );
		?>
		<?php 
			$SECOND_MINI_THUMB = get_sub_field('second_mini_thumb');
			if( $SECOND_MINI_THUMB ){
			$url = $SECOND_MINI_THUMB['url'];
			$title = $SECOND_MINI_THUMB['title'];
			$alt = $SECOND_MINI_THUMB['alt'];
			$caption = $SECOND_MINI_THUMB['caption'];
			$size = 'large';
			$thumb = $SECOND_MINI_THUMB['sizes'][ $size ];}
		?>
			<div class="col-md-3">
						<img class="funvector" src="<?php echo $thumb ?>"/>
              			<P class="funnumbers"><?php echo $SECOND_THUMB_STATS; ?></P>
                		<p class="funsubtitles"><?php echo $SECOND_THUMB_DESC; ?></p>
              </div>

            <?php endwhile; else : endif;?>


		</div>
		</div>
</div>

      
        
   

<!----------------------FUN FACTS ------------------------------->























<!-------------------------POPULAR SERVICES---------------------------->

<div class="container">
  <div class="popularservice">
		<?php
			if(get_field('popular_services_titles')){
			echo '<h4 class="poptitle">' . get_field('popular_services_titles') . '</h4>';}
		?>
		<?php
			if(get_field('popular_services_desc')){
			echo '<p class="popdesc">' . get_field('popular_services_desc') . '</p>';}
		?>
	</div>
</div>


<!--------------------------->
<div class="container">
	<div class="row">
		<?php
			if( have_rows('popular_services_repeater') ):
			while ( have_rows('popular_services_repeater') ) : the_row();

			$POPULAR_SUB_THUMBS = get_sub_field( 'popular_sub_thumbs' );
			$POPULAR_SUB_TITLES_ = get_sub_field( 'popular_sub_titles_' );
			$POPULAR_SUB_DESC = get_sub_field( 'popular_sub_desc' );
			$POPULAR_READMORE = get_sub_field( 'popular_readmore' );
		?>


<div class="col-md-4">
	<div class="row">
		<div class="col-md-6">
			<?php 
				$POPULAR_SUB_THUMBS = get_sub_field('popular_sub_thumbs');
				if( $POPULAR_SUB_THUMBS ){
				$url = $POPULAR_SUB_THUMBS['url'];
				$title = $POPULAR_SUB_THUMBS['title'];
				$alt = $POPULAR_SUB_THUMBS['alt'];
				$caption = $POPULAR_SUB_THUMBS['caption'];
				$size = 'large';
				$thumb = $POPULAR_SUB_THUMBS['sizes'][ $size ];}
			?>


<div class="col-md-4">
		<img class="popimages" src="<?php echo $thumb ?>"/>
	</div>
</div>



<div class="col-md-6">
			<p class="popsubtitles"><?php echo $POPULAR_SUB_TITLES_; ?> </p>
		</div>
	</div>

<div class="container">
        <p class="popbulk"><?php echo $POPULAR_SUB_DESC; ?> </p>
        	<a href=""><?php echo $POPULAR_READMORE; ?> </a>
			</div>


</div>



	<?php
		endwhile; else : endif;
	?> 
  
	</div>
</div>
































<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria, basically do it again mate. ?'); ?></p>
<?php endif; ?>



<?php get_footer();?>