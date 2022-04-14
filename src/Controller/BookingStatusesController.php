<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BookingStatuses Controller
 *
 * @property \App\Model\Table\BookingStatusesTable $BookingStatuses
 * @method \App\Model\Entity\BookingStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookingStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bookingStatuses = $this->paginate($this->BookingStatuses);

        $this->set(compact('bookingStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Booking Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookingStatus = $this->BookingStatuses->get($id, [
            'contain' => ['Bookings'],
        ]);

        $this->set(compact('bookingStatus'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookingStatus = $this->BookingStatuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $bookingStatus = $this->BookingStatuses->patchEntity($bookingStatus, $this->request->getData());
            if ($this->BookingStatuses->save($bookingStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Booking Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Booking Status'));
        }
        $this->set(compact('bookingStatus'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Booking Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookingStatus = $this->BookingStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookingStatus = $this->BookingStatuses->patchEntity($bookingStatus, $this->request->getData());
            if ($this->BookingStatuses->save($bookingStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Booking Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Booking Status'));
        }
        $this->set(compact('bookingStatus'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Booking Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookingStatus = $this->BookingStatuses->get($id);
        if ($this->BookingStatuses->delete($bookingStatus)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Booking Status'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Booking Status'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
