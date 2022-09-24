
<section class="container">

    <h1>Envíenos su consulta!</h1>
    <div class="row">
        <div class="col-lg-8">

            <?php echo validation_errors(); ?>
            <!-- Genero el formulario para crear una usuario -->

            <div class="well bs-component form-horizontal">
                <?php echo form_open('cargo_consulta', 
                                    ['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
                <fieldset>
                        <div class="form-group"> 
                            <label class="col-lg-2 control-label">Nombre: <em>*</em></label>
                            <div class="col-lg-10">
                                <?php echo form_input(['name' => 'nombre',
                                                        'id' => 'nombre',
                                                        'class' => 'form-control',
                                                        'placeholder' => 'Nombre',
                                                        'required' => 'required',
                                                        'value' =>set_value('nombre')]); ?>
                            </div>
                            <i class="form-control" style="display: none;"></i>
                        </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Consulta</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'consulta', 
                                                    'id' => 'consulta', 
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Consulta', 
                                                    'required'=>'required', 
                                                    'autofocus'=>'autofocus',
                                                    'value'=>set_value('consulta')]); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <?php echo form_input(['name' => 'email', 
                                                    'id' => 'email', 
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Email', 
                                                    'required'=>'required',
                                                    'value'=>set_value('email')]); ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-lg-offset-4">
                        <?php echo form_submit('submit', 'Enviar!',"class='btn btn-primary' "); ?> <br><br>
                    <!--
                       <?php echo form_reset ('reset', 'Editar', "class='btn btn-primary'"); ?><br>
                    -->
                        <?php echo form_close(); ?>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

</section>

