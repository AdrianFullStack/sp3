@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xs-12 col-md-12 col-sm-12">
    <div class="block-web">
      <div class="header">
        <div class="actions"></div>
        <h1 class="text-center text-uppercase">AFP</h1>
      </div>
      <div class="porlets-content">
        <!-- FORM INICIO -->
        <div class="container" align="center">



          <table class="table-condensed table-bordered">

            <tr>
              <td>AFP</td>
              <td>PORCENTAJE. DSCTO</td>
              <td>ACCION</td>
            </tr>

            <tr>
              <td><input type="text" class="form-control" readOnly  style="width:175px;"></td>
              <td><input type="text" class="form-control" readOnly  style="width:175px;"></td>
              <td><button class="btn btn-primary btn-xs">ELIMINAR</button></td>
            </tr>

            <tr>
              <td><input type="text" class="form-control"   style="width:175px;"></td>
              <td><input type="number" min="0" max="100" class="form-control"   style="width:175px;"></td>
              <td><button class="btn btn-primary btn-xs">AGREGAR</button></td>
            </tr>

            <tr>
              <td></td>
              <td></td>
            </tr>


          </table>

        </div>

        <!-- FORM FINAL -->

      </div><!--/porlets-content-->
    </div><!--/block-web-->
  </div><!--/col-md-12-->
</div><!--/row-->

<br>
<br>
<div class="container">  <a href="{{route('configuracion')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
<br>
<br>


@endsection
