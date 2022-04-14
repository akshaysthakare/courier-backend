<section class="content-header">
  <h1>
    Booking
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
            <dd><?= h($booking->name) ?></dd>
            <dt scope="row"><?= __('Amount') ?></dt>
            <dd><?= h($booking->amount) ?></dd>
            <dt scope="row"><?= __('Job Type') ?></dt>
            <dd><?= $booking->has('job_type') ? $this->Html->link($booking->job_type->name, ['controller' => 'JobTypes', 'action' => 'view', $booking->job_type->id]) : '' ?></dd>
            <dt scope="row"><?= __('Delivery Status') ?></dt>
            <dd><?= $booking->has('delivery_status') ? $this->Html->link($booking->delivery_status->name, ['controller' => 'DeliveryStatuses', 'action' => 'view', $booking->delivery_status->id]) : '' ?></dd>
            <dt scope="row"><?= __('Pickup Location') ?></dt>
            <dd><?= h($booking->pickup_location) ?></dd>
            <dt scope="row"><?= __('Drop Location') ?></dt>
            <dd><?= h($booking->drop_location) ?></dd>
            <dt scope="row"><?= __('Booking Status') ?></dt>
            <dd><?= $booking->has('booking_status') ? $this->Html->link($booking->booking_status->name, ['controller' => 'BookingStatuses', 'action' => 'view', $booking->booking_status->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($booking->id) ?></dd>
            <dt scope="row"><?= __('Pickup Date Time') ?></dt>
            <dd><?= h($booking->pickup_date_time) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($booking->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($booking->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
