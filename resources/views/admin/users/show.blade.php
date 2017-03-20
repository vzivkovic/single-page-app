@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">User page</div>

                    <div class="panel-options">
                        <a href="{{ route('users.edit', $user) }}" data-rel="reload"
                           data-toggle="tooltip" data-placement="top" title="Edit Image"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    @if( count($user) )
                       Name : {{ $user->name }}
                        <br/>
                        Email : {{ $user->email}}
                        <hr/>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
