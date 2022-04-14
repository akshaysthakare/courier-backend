<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Job
      <small><?php echo __('Edit'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($job, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('pickup_location');
                echo $this->Form->control('latitude');
                echo $this->Form->control('longitude');
                echo $this->Form->control('product_weight');
                echo $this->Form->control('pickup_date_time', ['empty' => true]);
                echo $this->Form->control('job_type_id', ['options' => $jobTypes, 'empty' => true]);
                echo $this->Form->control('product_details');
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
