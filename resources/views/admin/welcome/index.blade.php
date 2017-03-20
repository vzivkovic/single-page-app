@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title"><a href="{{ route('home') }}">Welcome page</a></div>

                    <div class="panel-options">
                        <a href="{{ route('welcome.create') }}" data-rel="collapse"><i
                                    class="glyphicon glyphicon-plus"></i></a>
                    </div>

                </div>
                <div class="panel-body">
                    @if( count($welcomes) )
                        @foreach($welcomes as $welcome)
                            {{ $welcome->title }}
                            <br/>
                            {{ $welcome->body}}
                            <hr />
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection