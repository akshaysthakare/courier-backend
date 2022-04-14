<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PaymentTypes Controller
 *
 * @property \App\Model\Table\PaymentTypesTable $PaymentTypes
 * @method \App\Model\Entity\PaymentType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $paymentTypes = $this->paginate($this->PaymentTypes);

        $this->set(compact('paymentTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentType = $this->PaymentTypes->get($id, [
            'contain' => ['Packagers'],
        ]);

        $this->set(compact('paymentType'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentType = $this->PaymentTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $paymentType = $this->PaymentTypes->patchEntity($paymentType, $this->request->getData());
            if ($this->PaymentTypes->save($paymentType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Payment Type'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Payment Type'));
        }
        $this->set(compact('paymentType'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Payment Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentType = $this->PaymentTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentType = $this->PaymentTypes->patchEntity($paymentType, $this->request->getData());
            if ($this->PaymentTypes->save($paymentType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Payment Type'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Payment Type'));
        }
        $this->set(compact('paymentType'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Payment Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentType = $this->PaymentTypes->get($id);
        if ($this->PaymentTypes->delete($paymentType)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Payment Type'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Payment Type'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
