@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >SOLICITUD DE PERMISO ESPECIAL</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->

          <table class="table-condensed text-right" align="center">

            <tr>
              <td>MOTIVO :</td>
              <td><textarea  style ="width:175px; height:200px;  max-width:175px;  max-height:200px;" placeholder="¿Cual es el motivo de la solicitud?"></textarea></td>
            </tr>

            <tr>

              <td>INICIO:</td>
              <td><input type="date"  style="width:175px;"></td>

            </tr>

            <tr>

              <td>FIN :</td>
              <td><input type="date"   style="width:175px;"></td>

            </tr>

          </table>

          <br>
          <button class="btn btn-primary btn-md">SOLICITAR</button>

          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->






</div>
<br>
<div class="container">

<a href="{{route('CarpetaPersonal')}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>



<br>
<br>

@endsection
