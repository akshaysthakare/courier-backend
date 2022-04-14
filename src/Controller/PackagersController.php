<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Packagers Controller
 *
 * @property \App\Model\Table\PackagersTable $Packagers
 * @method \App\Model\Entity\Packager[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackagersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PackagerStatuses', 'PaymentTypes'],
        ];
        $packagers = $this->paginate($this->Packagers);

        $this->set(compact('packagers'));
    }

    /**
     * View method
     *
     * @param string|null $id Packager id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packager = $this->Packagers->get($id, [
            'contain' => ['PackagerStatuses', 'PaymentTypes'],
        ]);

        $this->set(compact('packager'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packager = $this->Packagers->newEmptyEntity();
        if ($this->request->is('post')) {
            $packager = $this->Packagers->patchEntity($packager, $this->request->getData());
            if ($this->Packagers->save($packager)) {
                $this->Flash->success(__('The {0} has been saved.', 'Packager'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Packager'));
        }
        $packagerStatuses = $this->Packagers->PackagerStatuses->find('list', ['limit' => 200]);
        $paymentTypes = $this->Packagers->PaymentTypes->find('list', ['limit' => 200]);
        $this->set(compact('packager', 'packagerStatuses', 'paymentTypes'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Packager id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packager = $this->Packagers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packager = $this->Packagers->patchEntity($packager, $this->request->getData());
            if ($this->Packagers->save($packager)) {
                $this->Flash->success(__('The {0} has been saved.', 'Packager'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Packager'));
        }
        $packagerStatuses = $this->Packagers->PackagerStatuses->find('list', ['limit' => 200]);
        $paymentTypes = $this->Packagers->PaymentTypes->find('list', ['limit' => 200]);
        $this->set(compact('packager', 'packagerStatuses', 'paymentTypes'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Packager id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packager = $this->Packagers->get($id);
        if ($this->Packagers->delete($packager)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Packager'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Packager'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
