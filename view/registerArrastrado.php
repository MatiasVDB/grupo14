{{> header}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Registrar arrastrado</h5>

    <form action="crearArrastrado" class="col-md-8  formulario" method="post">


        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Patente</label>
                <input name="patente" id="inputPatente" class="form-control" placeholder="Patente" required>

            </div>


            <div class="form-group col-md-6">
                <label>Chasis</label>
                <input name="chasis" id="inputChasis" type="number" class="form-control" placeholder="Chasis" required>


            </div>

        </div>


        <div class="form-row">

            <div class="col-md-12">

                <label> Tipo de carga  </label>

                <select class="form-control category-select" id="inputTipo" name="tipo">
                    <option value="Araña">Araña</option>
                    <option value="Jaula">Jaula</option>
                    <option value="Tanque"">Tanque</option>
                    <option value="Granel"">Granel</option>
                    <option value="CarCarrier">CarCarrier</option>
                </select>
            </div>

        </div>


        <button type="submit" class="btn btn-primary mt-4 mb-4">Registrar</button>

        {{error}}

    </form>

</div>

{{> footer}}