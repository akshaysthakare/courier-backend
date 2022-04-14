<section class="content-header">
  <h1>
    Packager
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
            <dd><?= h($packager->name) ?></dd>
            <dt scope="row"><?= __('Email') ?></dt>
            <dd><?= h($packager->email) ?></dd>
            <dt scope="row"><?= __('Address') ?></dt>
            <dd><?= h($packager->address) ?></dd>
            <dt scope="row"><?= __('City') ?></dt>
            <dd><?= h($packager->city) ?></dd>
            <dt scope="row"><?= __('State') ?></dt>
            <dd><?= h($packager->state) ?></dd>
            <dt scope="row"><?= __('Packager Status') ?></dt>
            <dd><?= $packager->has('packager_status') ? $this->Html->link($packager->packager_status->name, ['controller' => 'PackagerStatuses', 'action' => 'view', $packager->packager_status->id]) : '' ?></dd>
            <dt scope="row"><?= __('Payment Type') ?></dt>
            <dd><?= $packager->has('payment_type') ? $this->Html->link($packager->payment_type->name, ['controller' => 'PaymentTypes', 'action' => 'view', $packager->payment_type->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($packager->id) ?></dd>
            <dt scope="row"><?= __('Mobile') ?></dt>
            <dd><?= $this->Number->format($packager->mobile) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($packager->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($packager->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
