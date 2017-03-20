@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title"><a href="{{ route('home') }}">Contact page</a></div>

                    <div class="panel-options">
                        <a href="{{ route('contact.create') }}" data-rel="collapse"><i
                                    class="glyphicon glyphicon-plus"></i></a>
                    </div>
                </div>
                <div class="panel-body">
                    @if( count($contacts) )
                        @foreach($contacts as $contact)
                            {{ $contact->address }}
                            <br/>
                            {{ $contact->phone }}
                            <br/>
                            {{ $contact->email }}
                            <br/>
                            {{ $contact->worktime }}
                            <hr />
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection