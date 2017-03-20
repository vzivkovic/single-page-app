@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Contact page</div>

                    <div class="panel-options">
                        <a href="{{ route('contacts.edit', $contact) }}" data-rel="reload"
                           data-toggle="tooltip" data-placement="top" title="Edit Image"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    @if( count($contact) )
                        Address : {{ $contact->address }}
                        <br/>
                        Phone : {{ $contact->phone }}
                        <br/>
                        Email : {{ $contact->email }}
                        <br/>
                        Time Work : {{ $contact->worktime }}
                        <hr />
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
