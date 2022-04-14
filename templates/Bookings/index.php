<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Bookings

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('job_type_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('delivery_status_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('pickup_date_time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('pickup_location') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('drop_location') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('booking_status_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($bookings as $booking): ?>
                <tr>
                  <td><?= $this->Number->format($booking->id) ?></td>
                  <td><?= h($booking->name) ?></td>
                  <td><?= h($booking->amount) ?></td>
                  <td><?= $this->Number->format($booking->job_type_id) ?></td>
                  <td><?= $this->Number->format($booking->delivery_status_id) ?></td>
                  <td><?= h($booking->pickup_date_time) ?></td>
                  <td><?= h($booking->pickup_location) ?></td>
                  <td><?= h($booking->drop_location) ?></td>
                  <td><?= $this->Number->format($booking->booking_status_id) ?></td>
                  <td><?= h($booking->created) ?></td>
                  <td><?= h($booking->modified) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $booking->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booking->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>