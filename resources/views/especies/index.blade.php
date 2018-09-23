@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Especies</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('especies.create') !!}">Agregar nueva</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('especies.table')
                {!! $especies->setPath(URL::current())->appends(Request::except('page'))->render() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

