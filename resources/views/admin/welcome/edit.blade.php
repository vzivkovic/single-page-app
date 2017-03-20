@extends('admin.layouts')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Welcome update</div>
                </div>
                <div class="panel-body">
                    <form action="{{ route('welcome.store') }}" method="POST" class="form-horizontal" role="form">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title :</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title"
                                       value="{{ old('title') ? old('title ') : $welcome->title }}"
                                       placeholder="Enter Title" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Text :</label>
                            <div class="col-md-6">
                                <textarea name="body" class="form-control" rows="3" required
                                          placeholder="Enter Text ">{{ old('body') ? old('body') : $welcome->body }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                    @include('admin.includes.form_delete', ['methodDestroy' => 'welcome.destroy', 'value' => $welcome ])

                </div>
            </div>
        </div>
    </div>

@endsection
