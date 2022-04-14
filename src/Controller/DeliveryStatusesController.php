<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DeliveryStatuses Controller
 *
 * @property \App\Model\Table\DeliveryStatusesTable $DeliveryStatuses
 * @method \App\Model\Entity\DeliveryStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeliveryStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $deliveryStatuses = $this->paginate($this->DeliveryStatuses);

        $this->set(compact('deliveryStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Delivery Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deliveryStatus = $this->DeliveryStatuses->get($id, [
            'contain' => ['Bookings'],
        ]);

        $this->set(compact('deliveryStatus'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deliveryStatus = $this->DeliveryStatuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $deliveryStatus = $this->DeliveryStatuses->patchEntity($deliveryStatus, $this->request->getData());
            if ($this->DeliveryStatuses->save($deliveryStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Delivery Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Delivery Status'));
        }
        $this->set(compact('deliveryStatus'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Delivery Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deliveryStatus = $this->DeliveryStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deliveryStatus = $this->DeliveryStatuses->patchEntity($deliveryStatus, $this->request->getData());
            if ($this->DeliveryStatuses->save($deliveryStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Delivery Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Delivery Status'));
        }
        $this->set(compact('deliveryStatus'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Delivery Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deliveryStatus = $this->DeliveryStatuses->get($id);
        if ($this->DeliveryStatuses->delete($deliveryStatus)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Delivery Status'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Delivery Status'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
