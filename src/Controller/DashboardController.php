<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DashboardController extends AppController{
	
// 	public $this->layout = "dashboard";
// 	public function beforeFilter(Event $event)
// 	{
// 		parent::beforeFilter($event);
// 		$this->Auth->allow(['index','dashboard1','dashboard','dashboard2','revenue']);
// 	}
	
	public function index() {
		$this->viewBuilder()->layout('dashboard');
		
	}
	
	public function dashboard1(){
		$this->viewBuilder()->layout('default');
	}

    public function dashboard(){
        $this->viewBuilder()->layout('default');
        $this->Feeds = TableRegistry::get('Feeds');
        $feeds = $this->Feeds->find('all');
       
        $this->set('feeds', $feeds);
    }
	
	public function dashboard2(){
		$this->viewBuilder()->layout('default');
	}
	
	public function revenue(){
		$this->viewBuilder()->layout('default');
	}
	
	public function money(){
		$this->viewBuilder()->layout('default');
	}
}