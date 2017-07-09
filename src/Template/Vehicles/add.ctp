<?= $this->element('admin/navbar') ?> 
 
<div id="page-wrapper">
<?= $this->Form->create($vehicle) ?> 
            <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Registrar Vehículo</h1>
                        </div>
                <div class="col-md-16">       
                <div class="form-group"> 
                    <label>Modelo</label>
                   <?= $this->Form->control('model', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Ingrese el Modelo']) ?>     
                </div>
                <div class="form-group"> 
                    <label>Matrícula/Placa</label>
                   <?= $this->Form->control('register', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Ingrese la placa o matrícula']) ?>     
                </div>
                <div class="form-group"> 
                    <label>Color</label>
                   <?= $this->Form->control('color', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Color del Vehiculo']) ?>     
                </div>
                <div class="form-group"> 
                    <label>Marca</label>
                   <?= $this->Form->control('brand', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Ingrese la Marca']) ?>     
                </div>
                <div class="form-group"> 
                    <label>Año</label>
                   <?= $this->Form->control('year', ['class' => 'form-control', 'label' => false, 'placeholder' => 'Año del modelo']) ?>     
                </div>
                <div class="form-group"> 
                    <label>Detalle</label>
                   <?= $this->Form->control('detail', ['type' => 'textarea','class' => 'form-control', 'label' => false, 'placeholder' => 'Ingrese un detalle']) ?>     
                </div>
                <div class="form-group"> 
                   <?= $this->Form->button('Registrar', ['class' => 'btn btn-primary']) ?>
                </div>
                <!-- /.col-lg-12 -->
                </div> 
            </div>
            <!-- /.row -->
                       <?= $this->Form->end() ?>                <!-- /.panel-body -->
</div>
                         





