<?php
namespace App\Controller;

use Cake\Event\Event;
class DashboardController extends AppController{
	
// 	public $this->layout = "dashboard";
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow(['index','dashboard1','dashboard2']);
	}
	
	public function index() {
		$this->viewBuilder()->layout('dashboard');
		
	}
	
	public function dashboard1(){
		$this->viewBuilder()->layout('keen');
	}
	
	public function dashboard2(){
		$this->viewBuilder()->layout('keen');
	}
}