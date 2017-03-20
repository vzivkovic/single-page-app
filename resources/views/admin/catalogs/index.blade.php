@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-body">

                    {{--Table--}}
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class="panel-title">Our Recent Work</div>
                                    <div class="panel-options">
                                        <a href="{{ route('catalogs.create') }}" data-rel="collapse" data-toggle="tooltip"
                                           data-placement="right" title="Create Catalog"><i
                                                    class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>
                                @if($catalogs->count())
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Catalog</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($catalogs as $catalog )
                                                <tr>
                                                <td>{{ $catalog->id }}</td>
                                                <td>
                                                    @if (Storage::disk('local')->exists( $catalog->path ))
                                                        <section class="row new-post">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <img width="100" src="{{ route('catalogs.get', $catalog) }}" alt="" class="img-responsive">
                                                            </div>
                                                        </section>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('catalogs.show') }}" data-rel="collapse"
                                                       data-toggle="tooltip" data-placement="right"
                                                       title="Open Catalog"><i
                                                                class="glyphicon glyphicon-search"></i></a>
                                                    &nbsp;
                                                    <a href="{{ route('catalogs.edit', $catalog) }}" data-rel="reload"
                                                       data-toggle="tooltip" data-placement="top" title="Edit Catalog"><i
                                                                class="glyphicon glyphicon-pencil"></i></a>
                                                </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>
                        </div>
                    {{--EndTable--}}
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>