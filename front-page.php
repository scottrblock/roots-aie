<?php
/**
 * Template Name: Home Page
 */
?>
<div class="img-big" id="fearless-education">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-6">
        <div class="header">
          <h1 class="ultra-heading">Innovate Fearlessly</h1>
        </div>
        <div class="info">
          <p>
            At the Academy, we cultivate a campus of fearless innovators to reframe and disrupt the norm to bring about change. By empowering students to reimagine the landscape, not blend in, we prepare them to solve the world’s toughest problems.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="the-latest">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1 class="reg-heading">The Latest</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="upcoming-events">
        <!-- populated with js -->
      </div>
    </div>

    <div class="row">
      <?php
        global $post;
        $args = array(
          'post_type' => 'event',
          'meta_key' => 'wpcf-start-date',
          'orderby' => 'meta_value_num',
          'posts_per_page' => '-1',
          'order' => 'ASC'
        );

        $custom_query = new WP_Query($args);
        $counter = 0;
        while($custom_query->have_posts()) : $custom_query->the_post();
          $event_date = types_render_field("start-date", array("raw" => "true"));
          if( $event_date > strtotime('now') && $counter < 4 ){
      ?>
      
            <div class="col-md-3">
              <div class="event">
                <p class="when"><?php echo date("l, M jS / g:i a", $event_date); ?></p>
                <p class="title"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></p>
                <p class="desc">
                  <?php echo types_render_field("summary"); ?>
                </p>
              </div>
            </div>

      <?php
        }

        $counter = $counter + 1;
        endwhile;
      ?>

    </div>
    <div class="row">
      
      <?php
        $args = array(
          'limit' => 4,
          'posts_per_page' => 4
        );

        $custom_query = new WP_Query($args);

        while($custom_query->have_posts()) : $custom_query->the_post();
      ?>
        
        <div class="col-md-6">
          <div class="info-box">
            <h4 class="title"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h4>
            <p class="desc">
              <?php echo get_the_excerpt(); ?>
            </p>
          </div>
        </div>

      <?php
        endwhile;
      ?>
    </div>
  
    <div class="row">
      <div class="col-md-6">
        <div id="facebook-posts">
          <?php
            require 'facebook.php';

            //Application 
            $facebook = new Facebook(array(
                'appId'  => '214224098776275',
                'secret' => 'e4d6a26a7b89869bf493ccbd5b30a81b',
                'cookie' => true, 
            ));

            $param  =   array(
              'method'    => 'fql.query',
              'query'     => "SELECT message FROM stream WHERE source_id= 210630815771359 AND actor_id= 210630815771359 AND message LIMIT 0, 4"
            );
            
            $fqlResult   =   $facebook->api($param);
            $counter = 0;

            foreach( $fqlResult as  $rows ):
              if ($counter % 2 == 0){
               // echo "<div class='row'>";
              }
            ?>
                <div class="info-box">
                  <p class="desc">
                    <?php echo $rows['message']; ?>
                  </p>
                </div>

            <?php
              if ($counter % 2 == 1){
                //echo "</div>";
              }

              $counter = $counter + 1;

              endforeach;
            ?>
        </div>

      </div>

      <div class="col-md-6">
        <div id="twitter-posts">
          <?php echo do_shortcode("[twitter-widget username='UMDInnovation' targetBlank='true' items='5' showts='181440000' showretweets='true' showintents='false' showfollow='false' hidefrom='true']"); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="quote quote-1">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <h2>
          Every corner of our campus, from the sciences and humanities 
          to research and business, is committed to this vision.
        </h2>
      </div>
    </div>
  </div>
</div>

<div id="mission">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Mission</h1>
      </div>
      <div class="col-md-5">
        <h4 class="mission-subhead">The Academy - so what is it that we do, exactly?</h4>
        <p>
          Our mission is to engage all UMD students in 
          innovation & entrepreneurship to prepare them 
          to tackle the world’s toughest problems.
        </p>
        <h5 class="mission-subhead-letter first">Skills our students gain - </h5>
        <p>
          Our students completely reimagine the landscape by 
          developing deep empathy for potential stakeholders, 
          reframing problems, and trying unexpected & game-changing
          solutions.
        </p>
        <h5 class="mission-subhead-letter">Who we are -</h5>
        <p>
          Operating directly out of the Office of the President and 
          the Office of the Provost, our core team is multi-disciplinary, 
          creative and has a “bias to yes” attitude. We collaborate with 
          an extended team of I&E-related programs & departments across 
          campus that are passionate about creating innovation opportunities 
          in all 12 colleges & schools.
        </p>
      </div>
      <div class="col-md-6 col-md-offset-1">
        <div class="row">
          
          <div class="col-md-6"> <!-- One pic -->
            <img src="/wp-content/themes/<?php echo get_template();?>/assets/img/sticky-1.png" alt="Sticky Note">
          </div>
          
          <div class="col-md-6"> <!-- Two pic -->
            <img src="/wp-content/themes/<?php echo get_template();?>/assets/img/sticky-2.png" alt="Sticky Note">
            <img src="/wp-content/themes/<?php echo get_template();?>/assets/img/sticky-3.png" alt="Sticky Note">
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="quote quote-2">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-2">
        <h2>
          There is already an incredible foundation of entrepreneurial 
          courses and programs here, built over 25 years.
        </h2>
      </div>
    </div>
  </div>
</div>


<?php get_template_part('templates/content', 'page'); ?>
