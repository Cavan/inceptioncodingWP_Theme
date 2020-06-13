<?php /* Template Name: portfolioPage */ ?>
 
<?php get_header();?>

<!-- Start Main Section -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center bg-white rounded">
  <h1 class="display-4 font-weight-bolder">Portfolio</h1>
  <p class="lead font-weight-normal">Below are some examples of our work</p>
</div>
<div class="container-fluid">
  <div class="row portfolioEntries">
      <div class="col-md">
            <div class="slideshow-container">
              <div class="mySlides1">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_1/alertFeed.png" style="width:35%">
              </div>

              <div class="mySlides1">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_1/openfront.jpg" style="width:100%">
              </div>

              <div class="mySlides1">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_1/overhead.jpg" style="width:100%">
              </div>

              <div class="mySlides1">
                <img class="align-middle" src="<?php bloginfo('template_directory');?>/portfolioImages/project_1/startscreen.png" style="width:35%">
              </div>

              <div class="mySlides1">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_1/commandScreen.png" style="width:35%">
              </div>

              <div class="mySlides1">
              <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_1/frontView.jpg" style="width:100%">
              </div>

              <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
              <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
            </div>
          
                         
      </div>
      <div class="col-md">
      <div class="card">
        <div class="card-header">
        <h4>Arduino Hardware Prototype with Companion Application</h4>
        </div>
        <div class="card-body">
          
          <h5>Hardware Unit: <span class="font-weight-bold">Software written in C/C++</span></h5>
          <ul>
            <li>We designed and assembled a hardware prototype using an Arduino Mega 2560 microcontroller. The system was designed to monitor a 360-degree area within 7 meters of the unit.</li> 
             <li> The system is equipped with 4 infrared sensors, when trigged the unit’s camera will move in the direction where motion was detected capturing an image.</li> 
            <li>Images are stored on a removable SD card located on the unit, and can be viewed on an SD card reader.</li>
            </ul>
          <h5>Mobile Application (Android): <span class="font-weight-bold">Written in Java</span></h5>
          <ul>
            <li>Receives notifications sent via SMS from the hardware when motion is detected.</li>
            <li>Controls the hardware unit by sending AT Commands via SMS text.</li>
            <li>The app can command the hardware unit to capture images in four directions, front, rear, left, and right.</li>
            <li>Received SMS alerts are also viewable in the app showing the date and time received</li>
          </ul>
         
  </div>
  </div>
      </div>

  </div>

  <div class="row portfolioEntries">
      <div class="col-md">
      <div class="slideshow-container">
              <div class="mySlides2">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_2/andonboard.png" style="width:100%">
              </div>

              <div class="mySlides2">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_2/workstation.png" style="width:100%">
              </div>

              <div class="mySlides2">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_2/configurationTool.png" style="width:100%">
              </div>

              <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
            </div>
      </div>
      <div class="col-md">
      <div class="card">
        <div class="card-header">
        <h4>Production Simulation System</h4>
        </div>
        <div class="card-body">
         
          <h5>Technologies Used: <span class="font-weight-bold">C#, Microsoft SQL Server</span></h5>  
          <ul>
            <li>Simulates a production line with configurable speeds, and worker skill levels</li>
            <li>Data is sent over a network to a database using SQL Server</li>
            <li>Data is retrieved and then displayed on an Andon board showing current stock levels for the work station in realtime</li>
            </ul>
          
  </div>
  </div>
      </div>

  </div>

  <div class="row portfolioEntries">
      <div class="col-md">
      <div class="slideshow-container">
              <div class="mySlides3">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_3/productionStatus.png" style="width:100%">
              </div>

              <div class="mySlides3">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_3/logIssue.png" style="width:100%">
              </div>

              <div class="mySlides3">
                <img src="<?php bloginfo('template_directory');?>/portfolioImages/project_3/productionOverview.png" style="width:100%">
              </div>

              <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
              <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
            </div>
      </div>
      <div class="col-md">
      <div class="card">
        <div class="card-header">
        <h4>Production HMI System</h4>
        </div>
        <div class="card-body">
          
          <h5>Technologies Used: <span class="font-weight-bold">React.js</span></h5>   
          <ul>
            <li>Frontend developed using React.js to display the current status of a paint production line</li>
            <li>Displays where issues arise during the production process to alert line supervisors</li>
            <li>Displays statistical data based on the day’s production levels</li>
            <li>Log feature allows authorized users to log production issues easily for later review</li>
            </ul>
          
  </div>
  </div>
      </div>

  </div>
</div> <!-- container end -->

<?php get_footer();?>