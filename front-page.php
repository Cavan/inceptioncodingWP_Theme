<?php get_header();?>

<?php $getFrontPageFields = get_field('FrontPageFields'); ?>

<!-- Start Main Section -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center bg-white rounded">
  <h1 class="display-4 font-weight-bolder"><?php echo $getFrontPageFields['topheading'];?></h1>
  <p class="lead font-weight-normal"><?php echo $getFrontPageFields['topheadertext'];?></p>
  <p class="lead font-weight-normal"><?php echo $getFrontPageFields['topheadingsubtext'];?></p>
</div>

<div class="container ourServices">

  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
         <img class="serviceIcons" src="<?php bloginfo('template_directory');?>/icons/desktop-computer.png" /> 
        <h4 class="my-0 font-weight-normal">Desktop</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"></h1>
        <ul class="list-group mt-3 mb-4 servicesList">
          <li>For high performance applications</li>
          <li>We can develop for both Windows or Linux</li>
          <li>Examples: (Inventory Management, Command & Control, Production Monitoring)</li>
          
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
          <img class="serviceIcons" src="<?php bloginfo('template_directory');?>/icons/android.png" />
        <h4 class="my-0 font-weight-normal">Android</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"></h1>
        <ul class="list-group mt-3 mb-4 servicesList">
          <li>Designed specifically for Android OS</li>
          <li>Utilize handset hardware capabilities</li>
          <li>Good for applications that need access to the handset hardware & that are resource heavy</li>
          <li>Examples: (Delivery App, Fitness App, Interface & Communicate With Other Backend Systems)</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
          <img class="serviceIcons" src="<?php bloginfo('template_directory');?>/icons/webapp.png" />
        <h4 class="my-0 font-weight-normal">Web Apps</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"></h1>
        <ul class="list-group mt-3 mb-4 servicesList">
          <li>In browser application, responsive design, works in both desktop and mobile screens</li>
          <li>Works well for acting as a frontend hybrid between a mobile application & websites</li>
          <li>Good for interfacing with APIs & interacting with backend systems</li>
          <li>Examples: (E-Commerce Frontend Store, Frontend Dashboards For Data Analysis)</li>
        </ul>
      </div>
    </div>
    </div>
    </div>
    <!-- Our Process Section -->
    <div id="process" class="row">
      <div class="col bg-white rounded">
      <h1 class="font-weight-bolder text-center p-3 mb-5"><?php echo $getFrontPageFields['ourprocessheader'];?></h2>
      <p class="description lead font-weight-normal text-center"><?php echo $getFrontPageFields['ourprocesstext'];?></p>
    </div>
</div>
    <div id="processCards" class="row bg-white rounded">
        <div class="col-md">
                        <div class="card" style="width: 35rem;">
                <div class="card-header">
                    Taking Your Idea From Design to Development into Production
                </div>
                <ul class="list-group list-group-flush">
                  
                <li class="list-group-item font-weight-bold"><span class="process_1 rounded">Analysis Phase</span>
                    <ul class="font-weight-normal">
                        <li>Gather requirements</li>
                        <li>Understand the problem domain - what is your application going to be used for and what is the problem you want it to solve?
                        </li>
                        <li>Model the system</li>
                        <li>Review findings with client and repeat the process if necessary </li>
                    </ul>
                </li>
                        
                    <li class="list-group-item font-weight-bold"><span class="process_2 rounded">Design Phase</span>
                    <ul class="font-weight-normal">
                        <li>Start designing a solution based on the information gathered in the analysis phase</li>
                        <li>Design user interfaces</li>
                        <li>Design system interfaces</li>
                        <li>Design and integrate databases</li>
                        <li>Build initial prototype - This is to prove the design will work, and for confirmation of design details</li>
                    </ul>
                </li>
                    <li class="list-group-item font-weight-bold"><span class="process_3 rounded">Implementation Phase</span>
                    <ul class="font-weight-normal">
                        <li>Construct the system - start development of the system's software components</li>
                        <li>Testing - ensure the system and all components are operating as expected by performing unit tests on the system's various components</li>
                        <li>Install the system - get the system up and running on the client's platform for production</li>
                    </ul>
                </li>
                    <li class="list-group-item font-weight-bold"><span class="process_4 rounded">Support Phase</span>
                    <ul class="font-weight-normal">
                        <li>Ensure system is performing as per the requirements and, optimize where needed</li>
                        <li>Educate and train the client on the system and its capabilities
                      </li>
                        <li>Fix and update any bugs found</li>
                    </ul>
                </li>
                </ul>
                </div>
        </div>
        <div class="col-md">
            <img class="ourProcessImg" src="<?php bloginfo('template_directory');?>/images/OurProcess.png">
        </div>   
    </div>
    <!-- Pricing Section -->
    <div id="pricing" class="row">
      <div class="col bg-white rounded">
      <h1 class="font-weight-bolder text-center p-3 mb-5"><?php echo $getFrontPageFields['pricingheader'];?></h2>
      <p class="description lead font-weight-normal text-center"><?php echo $getFrontPageFields['pricingtext'];?>
        </p>
        <ul class="text-center">
            <li><?php echo $getFrontPageFields['pricingitem_1'];?>
            </li>
            <li><?php echo $getFrontPageFields['pricingitem_2'];?> 

            </li>
        </ul>
    </div>
</div>
<!-- End Main Section -->

  <?php get_footer();?>