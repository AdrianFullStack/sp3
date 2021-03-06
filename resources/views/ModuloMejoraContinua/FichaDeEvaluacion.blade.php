
@extends('layouts.app')
@section('content')

<div class="container-fluid " align="center">

  <br>

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class="text-center text-uppercase">MODULO MEJORAMIENTO CONTINUO</h1>
        </div>
        <div class="porlets-content">

        <h3 class="text-center">FICHA DE EVALUACION</h3>

        <h4 class="text-center">PROVEEDOR</h4>


        <div class="table-responsive">
          <h3 class="text-center">RESPECTO A LA OPERACION </h3>

            <table class="table table-bordered">
                <tr>
                  <td>PREGUNTA</td>

                  <td colspan="5">EVALUACION</td>
                  <td >COMENTARIO</td>
                </tr>

                <tr>
                  <td>En su opinion, la persona que solicito sus servicios, fue claro respecto al requerimiento.</td>
                  <td colspan="5">
                      <input type="text" class="form-control" style="width:175px;" readonly />
                  </td>
                  <td>
                    <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                  </td>
                </tr>

                <tr>
                  <td>En su opinión, la persona que solicito sus servicios, Respeto los acuerdos de trabajo pactados previa ejecución del servicio.</td>
                  <td colspan="5">
                      <input type="text" class="form-control" style="width:175px;" readonly />
                  </td>
                  <td>
                    <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                  </td>
                </tr>

                <tr>
                  <td>En su opinion, la persona en terreno, le entrego indicasiones claras al momento de ejecutar su servicio.</td>
                  <td colspan="5">
                      <input type="text" class="form-control" style="width:175px;" readonly />
                  </td>
                  <td>
                    <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                  </td>
                </tr>
            </table>
          <h3 class="text-center">RESPECTO A LA ADMINISTRACION </h3>

            <table class="table table-bordered">
                <tr>
                  <td>PREGUNTA</td>

                  <td colspan="5">EVALUACION</td>
                  <td >COMENTARIO</td>
                </tr>

                <tr>
                  <td>Se respetaron los tiempos de entregados de pago de sus servicios.</td>
                  <td colspan="5">
                    <input type="text" class="form-control" style="width:175px;" readonly />
                  </td>
                  <td>
                    <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                  </td>
                </tr>

                <tr>
                  <td>Se le entrego informacion adecuada respecto a como cobrar sus servicios.</td>
                  <td colspan="5">
                    <input type="text" class="form-control" style="width:175px;" readonly />
                  </td>
                  <td>
                    <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                  </td>
                </tr>

                <tr>
                  <td>Los pagos realizados correspondian a los montos acordados previa ejecuasion del servicio.</td>
                  <td colspan="5">
                    <input type="text" class="form-control" style="width:175px;" readonly />
                  </td>
                  <td>
                    <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                  </td>
                </tr>
                <tr>
                  <td>El personal administrativo atendio sus solicitudes, sean estas telefonicas, electroncias o presenciales.</td>
                  <td colspan="5">
                    <input type="text" class="form-control" style="width:175px;" readonly />
                  </td>
                  <td>
                    <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                  </td>
                </tr>
            </table>

        <h4 class="text-center">CLIENTE</h4>


                    <h3 class="text-center">RESPECTO AL PRODUCTO</h3>

                    <table class="table table-bordered">
                      <tr>
                        <td >PREGUNTA</td>

                        <td colspan="5">EVALUACION</td>
                        <td >COMENTARIO</td>
                      </tr>

                      <tr>
                        <td>El producto cumple con las descripciones entregadas por el ejecutivo de ventas</td>
                        <td colspan="5">
                          <input type="text" class="form-control" style="width:175px;" readonly />
                        </td>
                        <td>
                          <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                        </td>
                      </tr>

                      <tr>
                        <td>El producto se entrego en el tiempo acordado por el ejecutivo de ventas</td>
                        <td colspan="5">
                        <input type="text" class="form-control" style="width:175px;" readonly />
                        </td>
                        <td>
                          <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td>El producto fue entregado en condiciones adecuadas, es decir no presentaba daños o indicios de manipulación de terceros.</td>
                        <td colspan="5">
                          <input type="text" class="form-control" style="width:175px;" readonly />
                        </td>
                        <td>
                          <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                        </td>
                      </tr>

                      <tr>
                        <td>La calidad del producto obedece en su criterio al valor que usted cancelo por él</td>
                        <td colspan="5">
                          <input type="text" class="form-control" style="width:175px;" readonly />
                        </td>
                        <td>
                          <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td>El producto entregado cumple cabalmente con las necesidad que usted buscaba satisfacer</td>
                        <td colspan="5">
                          <input type="text" class="form-control" style="width:175px;" readonly />
                        </td>
                        <td>
                          <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td>El producto entregado en su criterio posee características innovadoras</td>
                        <td colspan="5">
                          <input type="text" class="form-control" style="width:175px;" readonly />
                        </td>

                         <td>
                          <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                        </td>

                      </tr>



                    </table>
          <h3 class="text-center">RESPECTO AL PERSONAL COMERCIAL </h3>

                        <table class="table table-bordered">
                          <tr>
                            <td>PREGUNTA</td>

                            <td colspan="5">EVALUACION</td>
                            <td >COMENTARIO</td>
                          </tr>
                          <tr>
                            <td>El personal que lo atendio, mostro interes en satisfacer su necesidades</td>
                            <td colspan="5">
                            <input type="text" class="form-control" style="width:175px;" />
                            </td>
                            <td>
                              <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                            </td>
                          </tr>

                          <tr>
                            <td>El personal que lo atendio, manejaba la informacion adecuada para poder responder  ante sus dudas o sus intereses.</td>
                            <td colspan="5">
                              <input type="text" class="form-control" style="width:175px;" />
                            </td>
                            <td>
                              <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                            </td>
                          </tr>

                          <tr>
                            <td>El personal que lo atendio, utilizo un lenguaje adecuado y formal durante la atencion.</td>
                            <td colspan="5">
                              <input type="text" class="form-control" style="width:175px;" />
                            </td>
                            <td>
                              <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                            </td>
                          </tr>

                          <tr>
                            <td>El personal que lo atendio contaba del material adecuado para ejemplificar la informacion entregada.</td>
                            <td colspan="5">
                            <input type="text" class="form-control" style="width:175px;" />
                            </td>
                            <td>
                              <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                            </td>
                          </tr>

                        </table>
        <h3 class="text-center">RESPECTO AL PERSONAL OPERATIVO </h3>

                      <table class="table table-bordered">
                          <tr>
                            <td>PREGUNTA</td>

                            <td colspan="5">EVALUACION</td>
                            <td >COMENTARIO</td>
                          </tr>

                          <tr>
                            <td>El personal que ejecuto el servicio, mantubo un compartamiento profesional durante la ejecusion del servicio.</td>
                            <td colspan="5">
                            <input type="text" class="form-control" style="width:175px;" />
                            </td>
                            <td>
                              <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                            </td>
                          </tr>

                          <tr>
                            <td>El personal que ejecuto el servicio, en su opinion resguardo las medidas de seguridad necesarias.</td>
                            <td colspan="5">
                            <input type="text" class="form-control" style="width:175px;" />
                            </td>
                            <td>
                              <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                            </td>
                          </tr>

                          <tr>
                            <td>En su opinion la cantidad de personal que asistio a ejecutar el servicio fue la necesaria o suficiente.</td>
                            <td colspan="5">
                            <input type="text" class="form-control" style="width:175px;" />
                            </td>
                            <td>
                              <textarea class="form-control" style="width:200px; max-width:200px; min-width:200px;  height:200px; min-height:200px;" readonly></textarea>
                            </td>
                          </tr>


                      </table>


        </div>


        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->

</div>
<br>
<div class="container">

<a href="javascript:history.back(1)"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>
</a>
<br>
@endsection
