<?= $this->element('admin/navbar') ?>   
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Vehículo</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                        
<div class="vehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicle) ?>
    <fieldset>
        <legend><?= __('Add Vehicle') ?></legend>
        <?php
            echo $this->Form->control('model');
            echo $this->Form->control('register');
            echo $this->Form->control('color');
            echo $this->Form->control('brand');
            echo $this->Form->control('year');
            echo $this->Form->control('detail');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

                        <!-- /.panel-body -->
</div>





