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
                    <div class="panel-title">Upload Image</div>

                </div>
                <div class="panel-body">
                    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data"
                          class="form-horizontal" role="form">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="upload-file-selector" class="col-md-4 control-label">Image :</label>

                            <div class="col-md-6">
                                <span id="fileselector">
                                    <label class="btn btn-primary" for="upload-file-selector">
                                        <input id="upload-file-selector" type="file" name="image">
                                        <i class="fa_icon icon-upload-alt margin-correction"></i>Select File
                                    </label>
                                </span>
{{--                                <p class="help-block">Example block-level help text here.</p>--}}
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                          <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Upload Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


