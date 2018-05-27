@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <div class="container-fluid" align="center">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="block-web">
                        <div class="header">
                            <div class="actions"></div>
                            <h1 class="text-center text-uppercase">REGISTRO</h1>
                        </div>
                        <div class="porlets-content">
                            <!-- FORM INICIO -->


                            <table class="table-condensed">
                                <tr>
                                    <td><a href="{{route('regCliente')}}"><button class='btn btn-primary btn-lg'   style="width:250px; margin-bottom: 15px;">REGISTRAR CLIENTE</button></a></td>
                                </tr>
                                <tr>
                                    <td><a href="{{route('regProspecto')}}"><button class='btn btn-primary btn-lg' style="width:250px; margin-bottom: 15px;"> REGISTRAR PROSPECTO</button></a></td>
                                </tr>
                            </table>

                            <!-- FORM FINAL -->

                        </div><!--/porlets-content-->
                    </div><!--/block-web-->
                </div><!--/col-md-12-->
            </div><!--/row-->

        </div>
        <br>
        <br>
    </div>
    <div class="container">  <a href="{{ route('CRM') }}"><button class="btn btn-primary btn-lg">Volver</button></a></div>
@endsection