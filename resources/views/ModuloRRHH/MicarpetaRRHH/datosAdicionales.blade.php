@extends('layouts.app')
@section('content')


<br>
<div class="container" align="center">

  <div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
      <div class="block-web">
        <div class="header">
          <div class="actions"></div>
          <h1 class=" text-center text-uppercase" >MIS DATOS PERSONALES</h1>
        </div>
        <div class="porlets-content">
          <!-- FORM INICIO -->
        {!! Form::open(['route'=>'post.registrar.rrhh','files' => true]) !!}

        {{ csrf_field() }}
        <table class="table-condensed text-right" >

          <tr>
            <td>DEPORTES:</td>
            <td><textarea name="deporte" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>

            <td>HOBBY'S:</td>
            <td><textarea name="hobby" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Cuál es su hobby?"></textarea></td>
          </tr>

          <tr>
            <td>ZONA LABORAL DE PREF.:</td>
            <td><textarea name="zona_lab_pref"  class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿zona laboral de preferencia?"></textarea></td>
            <td>EMPRENDIMIENTOS:</td>
            <td><textarea name="emprendimiento" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>
          </tr>

          <tr>
            <td>AREA DE MEJOR DESEMPEÑO:</td>
            <td><textarea name="area_mejor_desemp" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Cuál es el area en que mejor se desempeña?"></textarea></td>

            <td>LUGAR IDEAL PARA VIVIR:</td>
            <td><textarea name="lug_ideal" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Cuál es su lugar ideal para vivir?"></textarea></td>
          </tr>

          <tr>

            <td>INSTRUMENTAL:</td>
            <td><textarea name="instrumental" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Que deportes practica?"></textarea></td>
            <td>LUGAR DE NACIMIENTO:</td>
            <td><textarea name="lug_nac" class="form-control" style ="max-width:175px; max-height:175px;" placeholder="¿Donde nacio?"></textarea></td>

          </tr>

          <tr>

            <td>TRABAJO EN EQUIPO:</td>
            <td>
              <select style="width:175px;" name="trab_equipo" class="form-control">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>

            <td>TIENE COMPUTADOR:</td>
            <td>
              <select style="width:175px;" name="compu" class="form-control">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>CUENTA CON LUGAR ADECUADO DE TRABAJO:</td>
            <td>
              <select style="width:175px;" name="lug_trabajo" class="form-control">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>

            <td>TIENE INTERNET:</td>
            <td>
              <select style="width:175px;" name="internet" class="form-control" >
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>

          </tr>

          <tr>
            <td>NIVEL DE ESTUDIOS:</td>
            <td>{{ Form::select('est_enseñanza',App\EstadoEnseñanza::pluck('DESC_EST_ENS','ID_EST_ENS'),null,
            ['class' => 'form-control','style' => 'width:175px','placeholder'=>'Seleccione']) }}
            </td>

            <td>AREA A POSTULAR</td>
            <td>
              {{ Form::select('area_desemp',App\AreaDesempeño::pluck('DESC_AREA_DESEMP','ID_AREA_DESEMP'),null,
              ['class' => 'form-control','style' => 'width:175px','placeholder'=>'Seleccione']) }}
            </td>
          </tr>
          <tr>
            <td>SITUACION LABORAL</td>
            <td>
              {{ Form::select('sit_lab',App\SituacionLaboral::pluck('DESC_SIT_LAB','ID_SIT_LAB'),null,
              ['class' => 'form-control','style' => 'width:175px','placeholder'=>'Seleccione']) }}
            </td>
            <td>AÑOS DE EXPERIENCIA</td>
            <td>
              {{Form::number('años_exp',0,['class' => 'form-control','style' => 'width:175px'])}}
            </td>
          </tr>
          <tr>
            <td>REDES SOCIALES</td>
            <td>
              {{ Form::text('redes',null,
              ['class' => 'form-control','style' => 'width:175px','placeholder'=>'instagram,linkedin']) }}
            </td>
            <td>CAPACITACIONES</td>
            <td>
              {{Form::text('capacitaciones',null,['class' => 'form-control','style' => 'width:175px'])}}
            </td>
          </tr>
          <tr>
            <td>DOMINIO INGLES</td>
            <td>
              {{ Form::select('dom_ingles',App\Dominio::pluck('DESC_DOMINIO','ID_DOMINIO'),null,
              ['class' => 'form-control','style' => 'width:175px','placeholder'=>'Seleccione']) }}
            </td>
            <td>DOMINIO COMPUTACIONAL</td>
            <td>
              {{ Form::select('dom_compu',App\Dominio::pluck('DESC_DOMINIO','ID_DOMINIO'),null,
              ['class' => 'form-control','style' => 'width:175px','placeholder'=>'Seleccione']) }}
            </td>
          </tr>
          <tr>
            <td>DOMINIO SOFTWARE</td>
            <td>
              {{ Form::select('dom_software',App\Dominio::pluck('DESC_DOMINIO','ID_DOMINIO'),null,
              ['class' => 'form-control','style' => 'width:175px','placeholder'=>'Seleccione']) }}
            </td>
            <td>LICENCIA CONDUCIR</td>
            <td>
              <select id=lic_conducir name="lic_conducir" class="form-control" style="width:175px;">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>MOVILIZACION PROPIA</td>
            <td>
              <select id=mov_propia name="mov_propia" class="form-control" style="width:175px;">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>
            <td>DISCAPACIDAD</td>
            <td>
              <select id=discapacidad name="discapacidad" class="form-control" style="width:175px;">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>DICOM</td>
            <td>
              <select id=mov_propia name="mov_propia" class="form-control" style="width:175px;">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>
            <td>JORNADA A POSTULAR</td>
            <td>
              {{ Form::select('jornada',App\Jornada::pluck('DESC_JORNADA','ID_JORNADA'),null,
              ['class' => 'form-control','style' => 'width:175px','placeholder'=>'Seleccione']) }}
            </td>
          </tr>
          <tr>
            <td>FOTO</td>
            <td>
              {{ Form::file('foto',null,
              ['class' => 'form-control','style' => 'width:175px']) }}
            </td>
            <td>CERTIFICADO DE ANTECEDENTES</td>
            <td>
              {{ Form::file('cert_antec',null,
              ['class' => 'form-control','style' => 'width:175px']) }}
            </td>
          </tr>

          <tr>
            <td>RESIDENCIA ACTUAL:</td>
            <td><input type="text" name="resid_actual" readonly class="form-control"  style="width:175px;"></td>

            <td>VEHICULO:</td>
            <td>
              <select id=Selvehiculo class="form-control" style="width:175px;">
                <option>Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>MODELO:</td>
            <td><input type="text" readonly class="form-control" style="width:175px;"></td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>MARCA:</td>
            <td><input type="text" readonly class="form-control"  visible="false" style="width:175px;"></td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>TIPO:</td>
            <td><input type="text" readonly  class="form-control" style="width:175px;"></td>
          </tr>

          <tr>
            <td>PERTENENCIA A INSTITUCIONES:</td>
            <td colspan="3">
              <input type="checkbox" name="chilepais" value="Car">CHILE PAIS
              <input type="checkbox" name="greenpeace" value="Car">GREEN PEACE
              <input type="checkbox" name="bomberos" value="Car">BOMBEROS
              <input type="checkbox" name="ffaa" value="Car">FFAA
              <input type="checkbox" name="scouts" value="Car">SCOUTS
              <input type="checkbox" name="cruzroja" value="Car">CRUZ ROJA
            </td>
          </tr>

        </table>


        <br>
        <a href=""><button class="btn btn-primary btn-lg">REGISTRAR</button></a>

      {!! Form::close() !!}
          <!-- FORM FINAL -->

        </div><!--/porlets-content-->
      </div><!--/block-web-->
    </div><!--/col-md-12-->
  </div><!--/row-->



<br>
<br>



</div>
<div class="container">

<a href="{{route("CarpetaPersonal")}}"><button class="btn btn-primary btn-lg">Volver</button></a>

</div>



<br>
<br>

@endsection
