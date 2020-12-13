{{>header}}

{{#tractor}}

<div class="formularioContainer">

    <h5 class="registerTxt"> Actualización de Tractor</h5>

    <div class="mb-5">
        <p> Id: {{id}}</p>
        <p> Marca {{marca}} </p>
        <p> Patente {{patente}}</p>
        <p> Chasis {{chasis}}</p>

    </div>

<form class="col-md-8 formulario" action="../actualizarTractor" method="post">



    <input type="hidden" name="id" value="{{id}}">

    <input type="hidden" name="patente" value="{{patente}}">

    <input type="hidden" name="chasis" value="{{numeroDeChasis}}">

    <div class="form-row">
    <div class="form-group col-md-12 ">
        <label for="inputEmail4">Marca</label>
        <select class="custom-select" size="6" name="marca">

            <option selected value="{{marca}}">{{marca}} (Actual)</option>
            <option value="Scania">Scania</option>
            <option value="MAN">MAN</option>
            <option value="Mercedes Benz">Mercedes Benz</option>
            <option value="Volvo">Volvo</option>
            <option value="Renault">Renault</option>
            <option value="Isuzu">Isuzu</option>
        </select>
    </div>

        </div>

    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputText4">Modelo</label>
            <input type="text" class="form-control" id="inputText4" name="modelo" value="{{modelo}}">
        </div>

        <div class="form-group col-md-4">
            <label for="inputNumber4">Número de Motor</label>
            <input type="number" class="form-control" id="inputNumber4" min="0" name="motor" value="{{numeroDeMotor}}">
        </div>

        <div class="form-group col-md-4">
            <label for="inputNumber4">Kilometros</label>
            <input type="number" class="form-control" id="inputNumber4" min="0" name="kilometros" value="{{kilometros}}">
        </div>

    </div>


    <div class="form-group">

        <label for="inputPassword4">Año</label>
        <select class="custom-select" size="6" name="año">
            <option value="{{añoDeFabricacion}}" selected>{{añoDeFabricacion}} (Actual)</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

</div>

</main>

{{/tractor}}

{{> footer}}