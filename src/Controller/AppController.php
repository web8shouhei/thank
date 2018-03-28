<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller {
  
  public function initialize() {

    parent::initialize();
    $this->loadComponent('RequestHandler');
    $this->loadComponent('Flash');
    $this->loadComponent('Security');
    $this->loadComponent('Csrf');
  }
}
