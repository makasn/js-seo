<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\Event;

class HomeController extends AppController
{
    public function index()
    {
        $this->loadModel('CatGods');
        $this->loadModel('Comments');
        $catGods = $this->CatGods->find()->limit(9)->toArray();
        $comments = $this->Comments->find()->limit(6)->toArray();

        $this->set(compact('catGods'));
        $this->set(compact('comments'));
    }
}
