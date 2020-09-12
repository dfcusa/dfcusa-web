<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */

	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}

		$is_homepage = $this->request->here === '/';

		$this->set(compact('page', 'subpage', 'title_for_layout', 'is_homepage'));

		if (strpos($_SERVER['HTTP_HOST'], 'doorstepchallenge')) {
			$this->redirect('/doorstepchallenge');
		} else {
			$this->layout = 'default';
			$this->render(implode('/', $path));
		}
	}

	public function dogoodfromhome() {
		$this->layout = 'blank';
		$this->render('/Pages/challenges/dogoodfromhome');
	}	

	public function activities() {
		echo '123';
		$this->layout = 'blank';
		$this->render('/Pages/podcasts');
	}	

	public function rawHeader() {
		$this->layout = 'header';
		$this->render('blank');
	}

	public function rawFooter() {
		$this->layout = 'footer';
		$this->render('blank');
	}

	public function getPosts() {
		$this->autoRender = false;
		$this->response->type('application/json');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://design-for-change-usa.ghost.io/ghost/api/v3/content/posts/?key=cb10cbffebdbaa132be9d68acc&limit=3',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		echo json_encode(json_decode($response, true));
	}
}
