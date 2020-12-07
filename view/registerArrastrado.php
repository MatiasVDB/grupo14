{{> header}}

<div class="formularioContainer">

    <h5 id="ingresar" class="mb-3 registerTxt">Registrar arrastrado</h5>

    <form action="./registrarArrastrado" class="col-md-8  formulario" method="post">


        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Patente</label>
                <input name="patente" id="inputPatente" class="form-control" placeholder="Patente" required>

            </div>


            <div class="form-group col-md-4">
                <label>Chasis</label>
                <input name="chasis" id="inputChasis" class="form-control" placeholder="Chasis" required>


            </div>

        </div>


        <div class="form-row">

            <div class="form-group col-md-8">

                <label> Tipo De Carga</label>

                <select class="custom-select" name="carga" required>
                    <option selected>Carga</option>
                    <option value="1">Granel</option>
                    <option value="2">Liquida</option>
                    <option value="3">Jaula</option>
                    <option value="4"
                    ">20"</option>
                    <option value="5"
                    ">40"</option>
                    <option value="6">Jaula</option>
                    <option value="7">CarCarrier</option>
                </select>

            </div>

        </div>


        <button type="submit" class="btn btn-primary">Registrar</button>

        {{error}}

    </form>

</div>

{{> footer}}