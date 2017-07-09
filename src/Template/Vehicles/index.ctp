<?= $this->element('admin/navbar') ?>
<div id="page-wrapper">

<div class="panel panel-default">
  <div class="panel-heading">
   <h3><strong>Lista de Vehículos</strong> </h3>
   </div>
 <div class="panel-body">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead> 
            <tr>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Color</th>
                <th>Marca</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($vehicles as $vehicle): ?>
            <tr>

                <td><?= $vehicle->model ?></td>
                <td><?= $vehicle->register ?></td>
                <td><?= $vehicle->color ?></td>
                <td><?= $vehicle->brand ?></td>
                <td><?= $vehicle->year ?></td>
                <td>
                <?= $this->Html->link('Ver', ['action' => 'view', $vehicle->id], ['class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $vehicle->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $vehicle->id], [ 'class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?>
                </td>
            </tr>
             <?php endforeach; ?>
        </tbody>
   </table>
    </div>
    </div>


</div>
</div>
