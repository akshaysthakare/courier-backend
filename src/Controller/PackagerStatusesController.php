<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PackagerStatuses Controller
 *
 * @property \App\Model\Table\PackagerStatusesTable $PackagerStatuses
 * @method \App\Model\Entity\PackagerStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackagerStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $packagerStatuses = $this->paginate($this->PackagerStatuses);

        $this->set(compact('packagerStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Packager Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packagerStatus = $this->PackagerStatuses->get($id, [
            'contain' => ['Packagers'],
        ]);

        $this->set(compact('packagerStatus'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packagerStatus = $this->PackagerStatuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $packagerStatus = $this->PackagerStatuses->patchEntity($packagerStatus, $this->request->getData());
            if ($this->PackagerStatuses->save($packagerStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Packager Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Packager Status'));
        }
        $this->set(compact('packagerStatus'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Packager Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packagerStatus = $this->PackagerStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packagerStatus = $this->PackagerStatuses->patchEntity($packagerStatus, $this->request->getData());
            if ($this->PackagerStatuses->save($packagerStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Packager Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Packager Status'));
        }
        $this->set(compact('packagerStatus'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Packager Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packagerStatus = $this->PackagerStatuses->get($id);
        if ($this->PackagerStatuses->delete($packagerStatus)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Packager Status'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Packager Status'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
