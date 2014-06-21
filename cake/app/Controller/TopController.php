<?php
class TopController extends Controller {

	public function index () {
		$this->set('title_for_layout', 'ヤマコレ');
		$this->render('index');
	}

}