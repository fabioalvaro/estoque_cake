<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\DashboardTable $Dashboard
 */
class DashboardController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
      // $this->set('dashboard', $this->paginate($this->Dashboard));
       $this->set('_serialize', ['dashboard']);
    }

}
