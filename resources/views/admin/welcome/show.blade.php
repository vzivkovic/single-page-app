@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Welcome page</div>

                    <div class="panel-options">
                        <a href="{{ route('welcome.edit', $welcome) }}" data-rel="reload"
                           data-toggle="tooltip" data-placement="top" title="Edit Image"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    @if( count($welcome) )
                       Title : {{ $welcome->title }}
                        <br/>
                        Text : {{ $welcome->body}}
                        <hr/>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
