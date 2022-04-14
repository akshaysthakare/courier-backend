<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Packager $packager
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Packager
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
          <?php echo $this->Form->create($packager, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('mobile');
                echo $this->Form->control('address');
                echo $this->Form->control('city');
                echo $this->Form->control('state');
                echo $this->Form->control('packager_status_id', ['options' => $packagerStatuses]);
                echo $this->Form->control('payment_type_id', ['options' => $paymentTypes]);
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