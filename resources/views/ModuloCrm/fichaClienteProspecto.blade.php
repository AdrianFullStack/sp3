@extends('layouts.app')
@section('content')

<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >FICHA CLIENTE PROSPECTO</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->



            <table class="table-condensed text-right" align="center">
              <tr>
                <td>NOMBRE:</td>
                <td>
                  <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" readOnly/>
                </td>

                <td>NOMBRE DE FANTASIA:</td>
                <td>
                  <input name="nombre" type="text"  style="width:175px;" class="form-control" id="nombre" pattern="[A-Za-z]{4-16}" readOnly/>
                </td>

                <td>RUT:</td>
                <td>

                  <input type="text" id="rut" name="rut"  style="width:175px;" class="form-control" maxlength="10" readOnly oninput="checkRut(this)" />
                  <script src="{{asset('js/validarRUT.js')}}"></script>

                </td>

              </tr>
              <tr>

                <td>CONTACTO:</td>
                <td>
                  <input type="text"  style="width:175px;" class="form-control" readOnly/>
                </td>



                <td>EMAIL:</td>
                <td>
                  <input type="text"  style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>TELEFONO:</td>
                <td>
                  <input type="text"  style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>ACTIVIDAD COMERCIAL: </td>
                <td >
                  <input name="actividad" type="text"   style="width:175px;" id="actividad" class="form-control" readOnly/>
                </td>

                <td>SITIO WEB: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>GLOSA: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>
                <td>RUBRO:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>SUB RUBRO:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>ACTIVIDAD:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>BANCO:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>TIPO DE CUENTA:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>Nº DE CUENTA: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>ORIGEN: </td>
                <td >
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>PAIS:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>
                <td>REGION:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
              <tr>

                <td>COMUNA:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>CIUDAD:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

                <td>DIRECCION:</td>
                <td>
                  <input  type="text"   style="width:175px;" class="form-control" readOnly/>
                </td>

              </tr>
            </table>
            <br>

            <h3 class="text-center text-uppercase">CONTACTOS DE CLIENTE</h3>
            <table class="table table-bordered table-hover">


              <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>CELULAR</td>
                <td>EMAIL EMPRESARIAL</td>
                <td>EMAIL PERSONAL</td>
                <td>SUCURSAL</td>
                <td colspan="1">ACCION</td>
              </tr>


              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td><button class="btn btn-primary btn-xs" style="width:65px;">VER</button></td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="{{route('RegistroDeContacto')}}"<button class="btn btn-primary btn-xs" style="width:65px;">AGREGAR</button></td>

                </tr>

              </table>



          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->


<br>
<div class="container">  <a href="{{route('clientes')}}"><button class="btn btn-primary btn-lg">Volver</button></a></div>

</div>
</form>

<br>
<br>

@endsection
