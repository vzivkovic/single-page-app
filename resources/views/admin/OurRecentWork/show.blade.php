@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Show image</div>

                    <div class="panel-options">
                        <a href="{{ route('images.edit', $image) }}" data-rel="reload"
                           data-toggle="tooltip" data-placement="top" title="Edit Image"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                    </div>
                </div>
                @if (Storage::disk('local')->exists( $image->image))
                <div class="panel-body">
                    <img width="500" src="{{ route('images.get', $image) }}" alt="Our recent work">
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection