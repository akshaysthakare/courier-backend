<section class="content-header">
  <h1>
    Booking Status
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($bookingStatus->name) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($bookingStatus->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($bookingStatus->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($bookingStatus->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Bookings') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($bookingStatus->bookings)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Amount') ?></th>
                    <th scope="col"><?= __('Job Type Id') ?></th>
                    <th scope="col"><?= __('Delivery Status Id') ?></th>
                    <th scope="col"><?= __('Pickup Date Time') ?></th>
                    <th scope="col"><?= __('Pickup Location') ?></th>
                    <th scope="col"><?= __('Drop Location') ?></th>
                    <th scope="col"><?= __('Booking Status Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($bookingStatus->bookings as $bookings): ?>
              <tr>
                    <td><?= h($bookings->id) ?></td>
                    <td><?= h($bookings->name) ?></td>
                    <td><?= h($bookings->amount) ?></td>
                    <td><?= h($bookings->job_type_id) ?></td>
                    <td><?= h($bookings->delivery_status_id) ?></td>
                    <td><?= h($bookings->pickup_date_time) ?></td>
                    <td><?= h($bookings->pickup_location) ?></td>
                    <td><?= h($bookings->drop_location) ?></td>
                    <td><?= h($bookings->booking_status_id) ?></td>
                    <td><?= h($bookings->created) ?></td>
                    <td><?= h($bookings->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Bookings', 'action' => 'view', $bookings->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Bookings', 'action' => 'edit', $bookings->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bookings', 'action' => 'delete', $bookings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookings->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
