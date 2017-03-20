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
                                        <a href="{{ route('images.create') }}" data-rel="collapse" data-toggle="tooltip"
                                           data-placement="right" title="Create Image"><i
                                                    class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>
                                @if($images->count())
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($images as $image )
                                                <tr>
                                                <td>{{ $image->id }}</td>
                                                <td>
                                                    @if (Storage::disk('local')->exists( $image->image ))
                                                        <section class="row new-post">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <img width="100" src="{{ route('images.get', $image) }}" alt="" class="img-responsive">
                                                            </div>
                                                        </section>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('images.show', $image) }}" data-rel="collapse"
                                                       data-toggle="tooltip" data-placement="right"
                                                       title="Open Image"><i
                                                                class="glyphicon glyphicon-search"></i></a>
                                                    &nbsp;
                                                    <a href="{{ route('images.edit', $image) }}" data-rel="reload"
                                                       data-toggle="tooltip" data-placement="top" title="Edit Image"><i
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