<section class="content-header">
  <h1>
    Service
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
            <dd><?= h($service->name) ?></dd>
            <dt scope="row"><?= __('Image') ?></dt>
            <dd><?= h($service->image) ?></dd>
            <dt scope="row"><?= __('Color') ?></dt>
            <dd><?= h($service->color) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($service->id) ?></dd>
            <dt scope="row"><?= __('Packers Available') ?></dt>
            <dd><?= $this->Number->format($service->packers_available) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($service->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($service->modified) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
