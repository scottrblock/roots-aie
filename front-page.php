<?php
/**
 * Template Name: Home Page
 */
?>
<div id="fearless-education">
  <div class="special-container">
    <div class="row">
      <div class="col-md-6 col-md-offset-6">
        <div class="header">
          <h1 class="ultra-heading">Fearless Education</h1>
        </div>
        <div class="info">
          <p>
            We are a community of faculty, staff, 
            students and alumni dedicated to inspiring, 
            developing and launching Fearless Ideas, the 
            heart of innovation and entrepreneurship. 
            Every corner of our campus, from the sciences 
            and humanities to research and business, is 
            committed to this vision.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="the-latest">
  <div class="container-full">
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
<div class="quote">
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

<div class="quote">
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
<div id="welcome">
  <div class="container-full">
    <div class="row">
      <div class="col-md-4">
        <h1 class="reg-heading">Welcome</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row content">
      <div class="col-md-3"><img src="../public/images/alienchang.jpg" alt=""></div>
      <div class="col-md-7 letter">
        <p><span class="intro">WELCOME TO THE ACADEMY </span>for Innovation and Entrepreneurship 
          at the University of Maryland.  The Academy is a signature 
          initiative to infuse the University with a culture of 
          innovation and entrepreneurship across all colleges, 
          building on the institution's excellence as a research 
          university. <br><br>Our mission is to support both the curricular 
          and experiential education of all students so that they 
          are inspired and empowered to translate creative ideas 
          into enterprising solutions that solve problems whether 
          economic, societal, technological, or cultural and 
          thereby create value.  The Academy embodies the core 
          land-grant university ideal of putting knowledge into 
          action.  This is where ideas—Fearless Ideas—are 
          transformed to impact. <br><br>The Office of the President 
          and the Office of the Provost created the Academy to underscore 
          the continual commitment this University has to make an impact on
          the lives of students and faculty so that they can make positive 
          difference in the world.  There is already an incredible foundation 
          of entrepreneurial courses and programs here, built over 25 years.  
          Our goal is to build on that foundation to grow existing, successful 
          programs nd to launch new courses and initiatives to address new needs 
          and opportunities. <br><br>Exciting new initiatives are coming soon, but 
          in the meantime, there are dozens of exciting entrepreneurial
          programs, events and competitions across campus year-round.  
          We encourage everyone to learn more about such programs as Innovation 
          Fridays, UMD Startup Boot Camp, Cupid's Cup, Social Value Symposium, 
          Do Good Challenge, UMD Business Model Competition, ACC Clean Energy 
          Challenge, and the annual Invention of the Year.  Details on all of these 
          programs—and more—can be found on this website. <br><br>Sincerely,<br><br><span class="who-is-it">Dean Chang</span><br><span class="what-does-he-do">Associate Vice President for Innovation and Entrepreneurship</span>
        </p>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('templates/content', 'page'); ?>
