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
      <div class="col-md-3">
        <div class="event">
          <p class="when">Friday, Nov 15 / 11 am - 1 pm</p>
          <p class="title">Innovation Friday</p>
          <p class="desc">
            Ennui drinking vinegar four loko VHS sustainable, 
            vinyl keytar post-ironic ugh coffee Truffaut.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="event">
          <p class="when">Friday, Nov 15 / 11 am - 1 pm</p>
          <p class="title">Innovation Friday</p>
          <p class="desc">
            Ennui drinking vinegar four loko VHS sustainable, 
            vinyl keytar post-ironic ugh coffee Truffaut.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="event">
          <p class="when">Friday, Nov 15 / 11 am - 1 pm</p>
          <p class="title">Innovation Friday</p>
          <p class="desc">
            Ennui drinking vinegar four loko VHS sustainable, 
            vinyl keytar post-ironic ugh coffee Truffaut.
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="event">
          <p class="when">Friday, Nov 15 / 11 am - 1 pm</p>
          <p class="title">Innovation Friday</p>
          <p class="desc">
            Ennui drinking vinegar four loko VHS sustainable, 
            vinyl keytar post-ironic ugh coffee Truffaut.
          </p>
        </div>
      </div>
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
<div id="resource-map">
  <div class="container-full">
    <div class="row">
      <div class="col-md-5">
        <h1 class="reg-heading">Resource Map</h1>
      </div>
    </div>
  </div>
  <div class="container map">
    <div class="col-md-2">
      <ul class="text-right">
        <li class="title">Type</li><a href="#courses">
          <div class="width-full">
            <li>Courses</li>
          </div></a><a href="#programs">
          <div class="width-full">
            <li>Programs</li>
          </div></a><a href="#competitions">
          <div class="width-full">
            <li>Competitions</li>
          </div></a><a href="#organizations">
          <div class="width-full">
            <li>Organizations</li>
          </div></a><a href="#tools">
          <div class="width-full">
            <li>Tools</li>
          </div></a>
        <li class="title">Stage</li><a href="#just-starting">
          <div class="width-full">
            <li>Just Starting</li>
          </div></a><a href="#making-progress">
          <div class="width-full">
            <li>Making Progress</li>
          </div></a><a href="#lift-off">
          <div class="width-full">
            <li>Lift Off</li>
          </div></a>
      </ul>
    </div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="resource-content">
            <p>shit goes here</p>
          </div>
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
