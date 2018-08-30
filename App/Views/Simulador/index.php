<div class="container mt-3">
    <form action="Simulador/Calcular">
        <div class="form-row">
            <div class="form-group col">
                <label for="selectDddOrigem">Origem:</label>
                <select class="form-control" id="selectDddOrigem">
                <?php
                    foreach ( $origin as $e ) 
                        { echo '<option value="'.$e.'"'.'>'.$e."</option>"; } 
                ?>
                </select>
            </div>
            <div class="form-group col" action="Simulador/Calcular">
                <label for="selectDddDestino">Destino:</label>
                <select class="form-control" id="selectDddDestino">
                <?php
                    foreach ( $destiny as $e ) 
                        { echo '<option value="'.$e.'"'.'>'.$e."</option>"; } 
                ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="minutos">Minutos:</label>
            <input type="number" min="0" class="form-control" id="minutos">
        </div>
        <button type="submit" class="btn btn-primary" >Calcular</button>
    </form>
</div>