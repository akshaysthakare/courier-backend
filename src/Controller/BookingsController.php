<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bookings Controller
 *
 * @property \App\Model\Table\BookingsTable $Bookings
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['JobTypes', 'DeliveryStatuses', 'BookingStatuses'],
        ];
        $bookings = $this->paginate($this->Bookings);

        $this->set(compact('bookings'));
    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booking = $this->Bookings->get($id, [
            'contain' => ['JobTypes', 'DeliveryStatuses', 'BookingStatuses'],
        ]);

        $this->set(compact('booking'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booking = $this->Bookings->newEmptyEntity();
        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The {0} has been saved.', 'Booking'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Booking'));
        }
        $jobTypes = $this->Bookings->JobTypes->find('list', ['limit' => 200]);
        $deliveryStatuses = $this->Bookings->DeliveryStatuses->find('list', ['limit' => 200]);
        $bookingStatuses = $this->Bookings->BookingStatuses->find('list', ['limit' => 200]);
        $this->set(compact('booking', 'jobTypes', 'deliveryStatuses', 'bookingStatuses'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booking = $this->Bookings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The {0} has been saved.', 'Booking'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Booking'));
        }
        $jobTypes = $this->Bookings->JobTypes->find('list', ['limit' => 200]);
        $deliveryStatuses = $this->Bookings->DeliveryStatuses->find('list', ['limit' => 200]);
        $bookingStatuses = $this->Bookings->BookingStatuses->find('list', ['limit' => 200]);
        $this->set(compact('booking', 'jobTypes', 'deliveryStatuses', 'bookingStatuses'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Bookings->get($id);
        if ($this->Bookings->delete($booking)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Booking'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Booking'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
