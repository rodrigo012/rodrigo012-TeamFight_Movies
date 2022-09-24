
<section class="container">
    <div class="row">
        <div class="col" id="texto">
          <h1 class="text-center mt-4 text-uppercase font-weight-bold font-italic">Carrito De Compras</h1>
        </div>
    </div>
    
    <br>
    <br>
      
    <?php  $cart_check = $this->cart->contents();
        // Si el carrito está vacio, mostrar el siguiente mensaje
        if (empty($cart_check)){
            echo "<div class='container'>
                    <div id='texto' class='text h2 text-center mt-4 text-uppercase font-weight-bold font-italic'>
                        <br>
                        <br>
                        <br>
                        Su carrito de compras esta vac&iacute;o.
                    </div>
                </div>";
            }?>    


    <?php // Todos los items de carrito en "$cart". 
        if ($cart = $this->cart->contents()): //Esta función devuelve un array de los elementos agregados en el carro
        ?>
<section class="container">
            <div class="container">
                <div class="table-responsive-sm" id="texto">
                    <table class="table table-bordered table-hover table-light table-striped ml-3">
                <tr>
                    <td>Producto</td>
                    <td>Precio Unitario</td>
                    <td>Cantidad</td>
                    <td>Subtotal</td>
                    <td>Opciones</td>
                </tr>

            <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
            echo form_open('carrito_actualiza');
                $gran_total = 0;
                $i = 1;
                $todos = 0;

                foreach ($cart as $item):
                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>
                    <tr>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            $ <?php echo number_format($item['price'], 2); ?>
                        </td>
                        <td>

                            <input type="number" value="<?php echo($item['qty']); ?>" name="<?php echo('cart[' . $item['id'] . '][qty]'); ?>" min="1"  max="<?php echo($item['stock']); ?>" size="2" maxlength="2" />

                        </td>
                            <?php $gran_total = $gran_total + $item['subtotal']; ?>
                        <td>
                            $ <?php echo number_format($item['subtotal'], 2) ?>
                        </td>
                        <td> 
                            <?php // Imagen
                                $path = '<img src= '. base_url('assets/img/cart_cross.jpg') . ' width="25px" height="20px">';
                                echo anchor('carrito_elimina/' . $item['rowid'], $path); 
                            ?>
                        </td>
                    </tr>
                <?php 
                endforeach; 
                ?>
                    
                <tr>
                    <td>
                        <b>Total: $
                            <?php //Gran Total
                            echo number_format($gran_total, 2);
                            ?>
                        </b>
                    </td> 

                    <td colspan="5" align="right">
                        <!-- Vaciar carrito-->
                        <?php echo anchor('carrito_elimina/all', 'Vaciar',"class='btn btn-danger' "); ?>

                        <!-- Actualizar carrito-->
                        <?php echo form_submit('submit', 'Actualizar',"class='btn btn-secondary ml-2' "); ?>

                        <!-- " Confirmar orden envia a carrito_controller/muestra_compra  -->
                        <?php echo anchor('comprar', 'Finalizar Compra', "class='btn btn-dark ml-2' "); ?> 
                    </td>
                </tr>
        </table>

        <br>
        <p class="text-center mb-4 ml-3 mr-2">
            * Recuerde presionar el boton actualizar, cada vez que cambia la cantidad de un item en el carrito.
        </p>          
        </div>
        </div>
        
        <?php echo form_close();
    endif; ?>

    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    </section>