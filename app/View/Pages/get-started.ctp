<section class="inner-hero inside get-started" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png'); background-size: 100%">
    <!-- <img src="/dfcusa-web/app/webroot/img/img_hedr_stories@2x.png" alt="img" class="img-fluid"> -->
  <div class="container">
  	<h4 class="one-line"><span>Change starts with you.</span></h4>
  </div>
</section>


<section class="page-content">
	<div class="container">
  	<div class="row">
      <div class="col-sm-12">
        <h2>Getting Started with Design for Change</h2>
        <p>Students don't have to wait to change the world. They can drive lasting change in their communities, given the right tools and resources. DFC recognizes that every child can be a designer for change provided the right  tools, resources, and support.</p>
        <p>As an educator, here's how you get started:</p>
        <h3>STEP 1</h3>
        <h4>Download Our Free Educator’s Toolkit Poster</h4>
        <div class="pathway-block educator-block">
          <div class="pathway-img">
            <img src="/dfcusa-web/app/webroot/img/ico_c_toolkit.png" alt="img" class="img-fluid">
          </div>
          <div class="pathway-det">
            <h3>DFC EDUCATOR'S TOOLKIT POSTER</h3>
            <p>The DFC Toolkit Poster provides a quick overview of each stage of the DFC framework.</p>
            <a href="javascript:showMailingPopUp()" target="_new">DOWNLOAD</a>
            <!-- /dfcusa-web/app/webroot/files/Design%20for%20Change%20USA%20-%20Getting%20Started%20Poster.pdf -->
          </div>
        </div>
              
        <h3>STEP 2</h3>
        <h4>Engage your students using Design Sprints or Community Projects.</h4>
      </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        <div class="pathway-block sprint-block">
          <div class="pathway-img">
            <img src="/dfcusa-web/app/webroot/img/ico_c_designsprints.png" alt="img" class="img-fluid">
          </div>
          <div class="pathway-det">
            <h3>DESIGN SPRINTS</h3>
            <p>Implement quick, challenge-based activities that offer a fun, fresh, and exciting way to introduce Design for Change.
            <br/><br/><span class="small"><strong>Time Commitment:</strong></br>4 hours</span></p>
            <a href="/dfcusa-web/pages/get-started/design-sprints">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="pathway-block projects-block">
          <div class="pathway-img">
            <img src="/dfcusa-web/app/webroot/img/ico_c_projects.png" alt="img" class="img-fluid">
          </div>
          <div class="pathway-det">
            <h3>COMMUNITY PROJECTS</h3>
            <p>Build a customized learning experience for your students, using expert-designed lesson plans and activities.
            <br/><br/><span class="small"><strong>Time Commitment:</strong></br>8-10 weeks</span></p>
            <a href="/dfcusa-web/pages/get-started/community-projects">Learn more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        <h3>STEP 3</h3>
        <h4>Champion the Design for Change methodology in your organization.</h4>
      </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        <div class="pathway-block workshop-block">
          <div class="pathway-img">
            <img src="/dfcusa-web/app/webroot/img/ico_c_workshops.png" alt="img" class="img-fluid">
          </div>
          <div class="pathway-det">
            <h3>WORKSHOPS</h3>
            <p>Master the principles of design thinking and get trained on the Design for Change methodology.
            <br/><br/><span class="small"><strong>Time Commitment:</strong></br>2 Hours | 1/2 Day | Full Day</span></p>
            <a href="/dfcusa-web/pages/get-started/professional-development">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="pathway-block coaching-block">
          <div class="pathway-img">
            <img src="/dfcusa-web/app/webroot/img/ico_coaching.png" alt="img" class="img-fluid">
          </div>
          <div class="pathway-det">
            <h3>COACHING</h3>
            <p>Receive customized coaching sessions on adopting Design for Change across your organization.
            <br/><br/><span class="small"><strong>Time Commitment:</strong></br>Flexible</span></p>
            <a href="/dfcusa-web/pages/get-started/coaching">Learn more</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        <div class="pathway-block design-block">
        	<div class="pathway-img">
            <img src="/dfcusa-web/app/webroot/img/ico_c_custom.png" alt="img" class="img-fluid">
          </div>
          <div class="pathway-det">
            <h3>NEED A CUSTOM DESIGNED PROGRAM?</h3>
            <p>In the spirit of design thinking, our DFC Certified Coaches will co-create a series of learning experiences that best align to the priorities of your organization.</p>
            <a href="/pages/contact-us">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>

<script type="text/javascript">
  function showMailingPopUp() {
    if ($.cookie('MCPopupSubscribed')) {
      window.open('http://www.designforchange.us/dfcusa-web/app/webroot/files/Design%20for%20Change%20USA%20-%20Getting%20Started%20Poster.pdf');
    } else {
      $.removeCookie('MCPopupClosed', { path: '/' });
      window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us2.list-manage.com","uuid":"233ebb0aa3989a447582c85a1","lid":"e163a23026","uniqueMethods":true}) });      
    }
  }
</script>

<?php echo $this->element('newsletter'); ?>