<section class="content-header">
  <h1>
    Job
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
            <dt scope="row"><?= __('Pickup Location') ?></dt>
            <dd><?= h($job->pickup_location) ?></dd>
            <dt scope="row"><?= __('Job Type') ?></dt>
            <dd><?= $job->has('job_type') ? $this->Html->link($job->job_type->name, ['controller' => 'JobTypes', 'action' => 'view', $job->job_type->id]) : '' ?></dd>
            <dt scope="row"><?= __('Product Details') ?></dt>
            <dd><?= h($job->product_details) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($job->id) ?></dd>
            <dt scope="row"><?= __('Latitude') ?></dt>
            <dd><?= $this->Number->format($job->latitude) ?></dd>
            <dt scope="row"><?= __('Longitude') ?></dt>
            <dd><?= $this->Number->format($job->longitude) ?></dd>
            <dt scope="row"><?= __('Product Weight') ?></dt>
            <dd><?= $this->Number->format($job->product_weight) ?></dd>
            <dt scope="row"><?= __('Pickup Date Time') ?></dt>
            <dd><?= h($job->pickup_date_time) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($job->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($job->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
