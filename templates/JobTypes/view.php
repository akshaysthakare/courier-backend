<section class="content-header">
  <h1>
    Job Type
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
            <dd><?= h($jobType->name) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($jobType->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($jobType->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($jobType->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Jobs') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($jobType->jobs)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Pickup Location') ?></th>
                    <th scope="col"><?= __('Latitude') ?></th>
                    <th scope="col"><?= __('Longitude') ?></th>
                    <th scope="col"><?= __('Product Weight') ?></th>
                    <th scope="col"><?= __('Pickup Date Time') ?></th>
                    <th scope="col"><?= __('Job Type Id') ?></th>
                    <th scope="col"><?= __('Product Details') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($jobType->jobs as $jobs): ?>
              <tr>
                    <td><?= h($jobs->id) ?></td>
                    <td><?= h($jobs->pickup_location) ?></td>
                    <td><?= h($jobs->latitude) ?></td>
                    <td><?= h($jobs->longitude) ?></td>
                    <td><?= h($jobs->product_weight) ?></td>
                    <td><?= h($jobs->pickup_date_time) ?></td>
                    <td><?= h($jobs->job_type_id) ?></td>
                    <td><?= h($jobs->product_details) ?></td>
                    <td><?= h($jobs->created) ?></td>
                    <td><?= h($jobs->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Jobs', 'action' => 'view', $jobs->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Jobs', 'action' => 'edit', $jobs->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Jobs', 'action' => 'delete', $jobs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobs->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
