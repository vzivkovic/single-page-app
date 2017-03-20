<style>
    #fileselector {
        margin: 10px;
    }
    #upload-file-selector {
        display:none;
    }
    .margin-correction {
        margin-right: 10px;
    }
</style>
@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Upload Catalog</div>

                </div>
                <div class="panel-body">
                    <form action="{{ route('catalogs.store') }}" method="POST" enctype="multipart/form-data"
                          class="form-horizontal" role="form">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('catalog') ? ' has-error' : '' }}">
                            <label for="upload-file-selector" class="col-md-4 control-label">Catalog :</label>

                            <div class="col-md-6">
                                <span id="fileselector">
                                    <label class="btn btn-primary" for="upload-file-selector">
                                        <input id="upload-file-selector" type="file" name="name">
                                        <i class="fa_icon icon-upload-alt margin-correction"></i>Select File
                                    </label>
                                </span>
{{--                                <p class="help-block">Example block-level help text here.</p>--}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Upload Catalog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


