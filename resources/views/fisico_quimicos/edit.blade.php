@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fisico Quimico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fisicoQuimico, ['route' => ['fisicoQuimicos.update', $fisicoQuimico->id], 'method' => 'patch']) !!}

                        @include('fisico_quimicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection