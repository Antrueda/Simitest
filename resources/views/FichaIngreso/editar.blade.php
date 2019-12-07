@extends('layouts.index')
@section('content')
  @component('layouts.components.perfilNNAJ.index',['modeloxx'=>$modeloxx])
    @slot('infoBasica')
    {!! Form::model($modeloxx,['route'=>[$rutaxxxx.'.editar',$modeloxx->id],'method'=>'PUT']) !!}
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.datosbasico.formulario.formulario')
      @include('layouts.components.botones.index')
    {!! Form::close() !!}
    @endslot
    @slot('vestuario')
    @if($vestuari['formular']==true)   
      {!!Form::open(['route'=>'vestuario.crear'])!!} 
    @else
      {!! Form::model($vestuari['vestuari'],['route'=>['vestuario.editar',$vestuari['vestuari']->id],'method'=>'PUT']) !!}
    @endif    
      <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.vestuario.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!}
    @endslot
    @slot('residencia')
    @if($residenc['formular']==true)   
      {!!Form::open(['route'=>'residencia.crear'])!!} 
    @else
      {!! Form::model($residenc['residenc'],['route'=>['residencia.editar',$residenc['residenc']->id],'method'=>'PUT']) !!}
    @endif
      <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')
      @include('fichaIngreso.residencia.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('escuela')
    @if($formacio['formular']==true)   
      {!!Form::open(['route'=>'formacion.crear'])!!} 
    @else
      {!! Form::model($formacio['formacio'],['route'=>['formacion.editar',$formacio['formacio']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')
      @include('fichaIngreso.escuela.form')
      @include('layouts.components.botones.index')
       {!! Form::close() !!} 
    @endslot
    @slot('compFamiliar')
    @if($composic['formular']==true)   
      {!!Form::open(['route'=>'composicion.crear'])!!} 
    @else
      {!! Form::model($composic['composic'],['route'=>['composicion.editar',$composic['composic']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.familia.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('salud')
    @if($saludxxx['formular']==true)   
      {!!Form::open(['route'=>'salud.crear'])!!} 
    @else
      {!! Form::model($saludxxx['saludxxx'],['route'=>['salud.editar',$saludxxx['saludxxx']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.salud.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('genIngresos')
    @if($geneingr['formular']==true)   
      {!!Form::open(['route'=>'ingresos.crear'])!!} 
    @else
      {!! Form::model($geneingr['geneingr'],['route'=>['ingresos.editar',$geneingr['geneingr']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.genIngreso.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('acTiempoLibre')
    @if($activida['formular']==true)   
      {!!Form::open(['route'=>'actividades.crear'])!!} 
    @else
      {!! Form::model($activida['activida'],['route'=>['actividades.editar',$activida['activida']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.actividad.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('redApoyo')
    @if($redeapoy['formular']==true)   
      {!!Form::open(['route'=>'red.crear'])!!} 
    @else
      {!! Form::model($redeapoy['redeapoy'],['route'=>['red.editar',$redeapoy['redeapoy']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.redesApoyo.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('JustRestaurativa')
    @if($justicia['formular']==true)   
      {!!Form::open(['route'=>'justicia.crear'])!!} 
    @else
      {!! Form::model($justicia['justicia'],['route'=>['justicia.editar',$justicia['justicia']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.justiciaRestaurativa.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('conSPA')
    @if($consuspa['formular']==true)   
      {!!Form::open(['route'=>'consumo.crear'])!!} 
    @else
      {!! Form::model($consuspa['consuspa'],['route'=>['consumo.editar',$consuspa['consuspa']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.consumoSPA.form')
      @include('layouts.components.botones.index')
       {!! Form::close() !!} 
    @endslot
    @slot('vioConEspecial')
    @if($violenci['formular']==true)   
      {!!Form::open(['route'=>'violencia.crear'])!!} 
    @else
      {!! Form::model($violenci['violenci'],['route'=>['violencia.editar',$violenci['violenci']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')
      @include('fichaIngreso.violencia.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!} 
    @endslot
    @slot('tPoblacion')
    @if($situacio['formular']==true)   
      {!!Form::open(['route'=>'situacion.crear'])!!} 
    @else
      {!! Form::model($situacio['situacio'],['route'=>['situacion.editar',$situacio['situacio']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.tipoPoblacion.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!}
    @endslot
    @slot('contacto')
    @if($contacto['formular']==true)   
      {!!Form::open(['route'=>'contacto.crear'])!!} 
    @else
      {!! Form::model($contacto['contacto'],['route'=>['contacto.editar',$contacto['contacto']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.contactoTratamientoDatos.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!}
    @endslot
    @slot('bienvenida')
    @if($bienveni['formular']==true)   
      {!!Form::open(['route'=>'bienvenida.crear'])!!} 
    @else
      {!! Form::model($bienveni['bienveni'],['route'=>['bienvenida.editar',$bienveni['bienveni']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.bienvenida.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!}
    @endslot
    @slot('autorizacion')
    @if($autorizx['formular']==true)   
      {!!Form::open(['route'=>'autorizacion.crear'])!!} 
    @else
      {!! Form::model($autorizx['autorizx'],['route'=>['autorizacion.editar',$autorizx['autorizx']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.autorizacion.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!}
    @endslot
    @slot('razones')
    @if($razonesx['formular']==true)   
      {!!Form::open(['route'=>'razones.crear'])!!} 
    @else
      {!! Form::model($razonesx['razonesx'],['route'=>['razones.editar',$razonesx['razonesx']->id],'method'=>'PUT']) !!}
    @endif
    <input id="sis_nnaj_id" name="sis_nnaj_id" type="hidden" value="{{ $modeloxx->id }}">
      @include('layouts.components.botones.index')  
      @include('fichaIngreso.razonesIngreso.form')
      @include('layouts.components.botones.index')
      {!! Form::close() !!}
    @endslot
  @endcomponent
@endsection
