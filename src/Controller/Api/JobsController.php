<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Firebase\JWT\JWT;

class JobsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];

    public function initialize(): void
    {
        parent::initialize();

//        $this->Authentication->allowUnauthenticated(['index']);

    }

public function index() {
        $this->Crud->on('beforePaginate', function(\cake\Event\EventInterface $event){
//            $this->paginate['conditions']['is_active']=true;
            $this->paginate['contain']=['JobTypes'];

        });

        return $this->Crud->execute();
}


}
