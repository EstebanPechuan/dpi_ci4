<main>
    <?php
        $clase['menu_activo'] = 'contacto';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>

    <section class="form-dpi">
        <h1>Formulario de Contacto</h1>
        <p>Mesa  de Consultas de Gobierno</p>

        <form action="">
            <div class="form-row">
                <div class="form-column">
                    <div class="input-group">
                        <input type="text" id="name" name="name" placeholder="" required>
                        <label for="name">Nombre y Apellido</label>
                    </div>

                    <div class="input-group">
                        <input type="email" id="email" name="email" placeholder="" required>
                        <label for="email">Correo Electrónico</label>
                    </div>
                    
                    <div class="input-group">
                        <input type="text" id="phone" name="phone" placeholder="">
                        <label for="phone">Celular/Fijo</label>
                    </div>
        
                    <div class="input-group">
                        <input type="number" id="tel" name="tel" placeholder="" required>
                        <label for="tel">Teléfono</label>
                    </div>
                </div>

                <div class="input-group textarea">
                    <textarea name="message" id="message" rows="" placeholder=""></textarea>
                    <label for="message">Consulta</label>
                </div>
            </div>
            

            <div class="form-row row-center">
                <input type="submit" value="Enviar mensaje" class="">
                <input type="reset" value="Limpiar Formulario" class="">
            </div>
        </form>    
    </section>

    <?php
        echo view('includes/flyer_violencia');
    ?>
</main>