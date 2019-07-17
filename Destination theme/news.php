<?php
/*
 Template Name:News page 
 */
?>
<?php get_header();?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!------------------FIRST FEET------------------------->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="first-image">
			
 <div class="container">
 	         <?php
			if( have_rows('top_news_repeater') ):
			while ( have_rows('top_news_repeater') ) : the_row();


			$WHO_ITS_BY = get_sub_field( 'who_its_by' );
			$THE_DATE_OF_POST = get_sub_field( 'the_date_of_post' );
			$COMMENTS_SECTION = get_sub_field( 'comments_section' );
			$TOP_NEWS_TITLE = get_sub_field( 'top_news_title' );
			$TOP_NEWS_IMAGE = get_sub_field( 'top_news_image' );
			$TOP_NEWS_DESC = get_sub_field( 'top_news_desc' );
		?>

       
		<h2><?php echo $TOP_NEWS_TITLE; ?></h2>




        <a href=""><?php echo $WHO_ITS_BY; ?></a>&nbsp;
        |&nbsp; <a href=""><?php echo $THE_DATE_OF_POST; ?></a> &nbsp;
        |&nbsp; <a href=""><?php echo $COMMENTS_SECTION; ?></a>
                   



               
                	
        <?php 
			$TOP_NEWS_IMAGE = get_sub_field('top_news_image');
			if( $TOP_NEWS_IMAGE ){
			$url = $TOP_NEWS_IMAGE['url'];
			$title = $TOP_NEWS_IMAGE['title'];
			$alt = $TOP_NEWS_IMAGE['alt'];
			$caption = $TOP_NEWS_IMAGE['caption'];
			$size = 'large';
			$thumb = $TOP_NEWS_IMAGE['sizes'][ $size ];}
		?>
			<img class="universalimage" src="<?php echo $thumb ?>"/>

                  <button class="thebuttonofall" id="buttonaligner" ><i class="fas fa-plus"></i></button>
                  <p><?php echo $TOP_NEWS_DESC; ?></p>
                  <?php endwhile; else : endif;?>

                </div>
            </div>
        </div>



        <!--------------------FIRST FEET----------------------->






<!-------------------------------------side bar-------------------------------->
<div class="col-md-3">
  <div class="container">
  <input class="extrasearch" placeholder="Search....">
            <img class="sidebarimages" src="sidebar_featured_1.jpg">
              <p>Top destinations in Europe</p>
            <div class="trioinfomation">
                <a href="">By Admin</a>&nbsp;
                |&nbsp; <a href="">January 31. 2019</a> &nbsp;
                |&nbsp; <a href="">3 Comments</a>
        </div>

        
            <img class="sidebarimages" src="sidebar_featured_2.jpg">
              <p>Best beaches in the world</p>
            <div class="trioinfomation">
                <a href="">By Admin</a>&nbsp;
                |&nbsp; <a href="">January 31. 2019</a> &nbsp;
                |&nbsp; <a href="">3 Comments</a>
            </div>
            <img class="sidebarimages" src="sidebar_featured_3.jpg">
              <p>Best beaches in the world</p>
            <div class="trioinfomation">
                <a href="">By Admin</a>&nbsp;
                |&nbsp; <a href="">January 31. 2019</a> &nbsp;
                |&nbsp; <a href="">3 Comments</a>
            </div>

            <div class="thedeal">         
              <p class="dealstitle">MALDIVE</p>
              <h4 ><i class="dealspercent">50%</i><img src="logo.png"><br> Last Minute Offer</h4>
              <p class="dealsdesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</p>
              <button id="madness" class="dealsbutton">See Offer</button>
            </div>

              <img class="sidebarofffers" src="offer_1.jpg">
          

            <div class="thedeal2">         
              <p class="dealstitle">MALDIVE</p>
              <h4 ><i class="dealspercent">50%</i><img src="logo.png"><br> Last Minute Offer</h4>
              <p class="dealsdesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</p>
              <button id="madness" class="dealsbutton">See Offer</button>
            </div>
              <img class="sidebarofffers" src="offer_2.jpg">
           

</div>
    </div>
</div>

</div>
<!-------------------------------------side bar-------------------------------->










<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria, basically do it again mate. ?'); ?></p>
<?php endif; ?>



<?php get_footer();?>