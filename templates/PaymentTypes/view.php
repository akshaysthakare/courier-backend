<section class="content-header">
  <h1>
    Payment Type
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
            <dd><?= h($paymentType->name) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($paymentType->id) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($paymentType->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($paymentType->modified) ?></dd>
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
          <h3 class="box-title"><?= __('Packagers') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($paymentType->packagers)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Mobile') ?></th>
                    <th scope="col"><?= __('Address') ?></th>
                    <th scope="col"><?= __('City') ?></th>
                    <th scope="col"><?= __('State') ?></th>
                    <th scope="col"><?= __('Packager Status Id') ?></th>
                    <th scope="col"><?= __('Payment Type Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($paymentType->packagers as $packagers): ?>
              <tr>
                    <td><?= h($packagers->id) ?></td>
                    <td><?= h($packagers->name) ?></td>
                    <td><?= h($packagers->email) ?></td>
                    <td><?= h($packagers->mobile) ?></td>
                    <td><?= h($packagers->address) ?></td>
                    <td><?= h($packagers->city) ?></td>
                    <td><?= h($packagers->state) ?></td>
                    <td><?= h($packagers->packager_status_id) ?></td>
                    <td><?= h($packagers->payment_type_id) ?></td>
                    <td><?= h($packagers->created) ?></td>
                    <td><?= h($packagers->modified) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Packagers', 'action' => 'view', $packagers->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Packagers', 'action' => 'edit', $packagers->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Packagers', 'action' => 'delete', $packagers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $packagers->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
