@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Show catalog</div>

                    <div class="panel-options">
                        <a href="{{ route('catalogs.edit', $catalog) }}" data-rel="reload"
                           data-toggle="tooltip" data-placement="top" title="Edit Catalog"><i
                                    class="glyphicon glyphicon-pencil"></i></a>
                    </div>
                </div>
                @if (Storage::disk('local')->exists($catalog->path))
                    <div class="panel-body">
                        Catalog name : {{ $catalog->name }}
                        <hr />
                        Catalog : <a href="{{ route('catalogs.download',$catalog) }}">Download</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection