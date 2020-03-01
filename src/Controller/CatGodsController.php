<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CatGods Controller
 *
 * @property \App\Model\Table\CatGodsTable $CatGods
 *
 * @method \App\Model\Entity\CatGod[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CatGodsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $catGods = $this->CatGods->find()->limit(9)->toArray();
        $this->set(compact('catGods'));
        $this->viewBuilder()
            ->setOption('serialize', ['catGods']);
    }
}
