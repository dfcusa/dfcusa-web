<?php
	
	$title = 'Service Learning Projects - Design for Change USA';
	$description = 'Design for Change equips young people to transform empathy into social action through innovative and collaborative experiences. Find out more here!';

	if ($_SERVER['REQUEST_URI'] == '') {

	} else if ($_SERVER['REQUEST_URI'] == '/pages/how-it-works') {
		$title = 'Global Goals - Design for Change USA';
		$description = 'Design for Change equips young people to transform empathy into social action using 4 steps: Feel, Imagine, Do, Share. See how it works here!';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/get-started') {
		$title = 'Education Community Service - Design for Change USA';
		$description = 'Design for Change recognizes that every child can be a designer for change provided the right tools, resources, and support. Find out how to get started here!';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/podcasts') {
		$title = 'Education Community Service - Design for Change USA';
		$description = 'Design for Change recognizes that every child can be a designer for change provided the right tools, resources, and support. Find out how to get started here!';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/get-started/design-sprints') {
		$title = 'Best Social Project Ideas - Design for Change USA';
		$description = 'Design Sprints introduce students to design thinking for social impact with a 4-hour experience that can launch them in Community Projects. ';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/get-started/community-action') {
		$title = 'Design Thinking Lesson Plans - Design for Change USA';
		$description = 'Community Actions offer an authentic and responsive experience for students, guiding them through the design thinking process. Find out more here!';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/get-started/empathy-warmups') {
		$title = 'Develop Empathy - Design for Change USA';
		$description = 'The empathy warmup serves to center student and community voice, activate students\' prior knowledge and connect students to perspectives about social issues. Find out more here!';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/get-started/design-thinking-classroom') {
		$title = 'Design Thinking Lessons - Design for Change USA';
		$description = 'At Design for Change, we equip educators to bring the design process to students. Let’s explore some of the basics of design thinking and what it looks like in a classroom.';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/get-started/coaching') {
		$title = 'Empathy Lesson Plans - Design for Change USA';
		$description = 'Coaching offers individual educators or entire organizations the ability to co-create a development plan for mastering the Design for Change methodology.';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/impact') {
		$title = 'Our Impact  - Design for Change USA';
		$description = 'Discover the impact the Design For Change program has had on students after participating in the program, conducted by Harvard Graduate School of Education.';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/get-started/workshops') {
		$title = 'Developing Empathy Skills - Design for Change USA';
		$description = 'Looking for a quick way to introduce educators to the Design for Change methodology, design thinking for social impact, and the UN Global Goals? ';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/stories') {
		$title = 'Stories of Change  - Design for Change USA';
		$description = 'Design for Change has seen what is possible when students have the tools to drive social change in their community. Read the stories of change here!';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/about-us') {
		$title = 'About - Design for Change USA';
		$description = 'Find everything needed to know about Design for Change, the team and our company missions and principles right here.';

	} else if ($_SERVER['REQUEST_URI'] == '/pages/contact-us') {
		$title = 'Contact - Design for Change USA';
		$description = 'If you have any questions about Design for Change, please feel free to contact us here. We will be happy to assist!';

	}
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="<?php echo $description ?>">
<meta name="author" content="Design for Change USA">
<title><?php echo $title ?></title>

<meta property="og:image" content="https://designforchange.us/app/webroot/img/logo_dfc_square.png" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $description ?>" />