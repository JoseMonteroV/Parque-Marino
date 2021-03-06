@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Salinidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($salinidad, ['route' => ['salinidads.update', $salinidad->id], 'method' => 'patch']) !!}

                        @include('salinidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection