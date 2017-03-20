@extends('admin.layouts')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">Create Contact Page</div>

                </div>
                <div class="panel-body">

                    <form action="{{ route('contacts.store') }}" method="POST" class="form-horizontal" role="form">
                        {{ csrf_field() }}

                        {{-- Adress input --}}
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address :</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') ?? $contact->address }}"
                                       placeholder="Enter Your address"
                                       required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- End Address input --}}

                        {{-- Phone input --}}
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone :</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') ?? $contact->phone }}"
                                       placeholder="Enter Your phone"
                                       required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- End Phone input --}}

                        {{-- Email input --}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email :</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') ?? $contact->email }}"
                                       placeholder="Enter Your email"
                                       required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- End Email input --}}

                        {{-- Work Time input --}}
                        <div class="form-group{{ $errors->has('worktime') ? ' has-error' : '' }}">
                            <label for="worktime" class="col-md-4 control-label">Work Time:</label>
                            <div class="col-md-6">
                                <input id="worktime" type="text" class="form-control" name="worktime" value="{{ old('worktime') ?? $contact->worktime }}"
                                       placeholder="Enter Your worktime"
                                       required>

                                @if ($errors->has('worktime'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('worktime') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- End Work Time input --}}

                        {{-- Submit --}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        {{-- End Submit --}}
                    </form>
                    {{-- Form for delete --}}
                    @include('admin.includes.form_delete', ['methodDestroy' => 'contacts.destroy', 'value' => $contact ])

                </div>
            </div>
        </div>
    </div>
@endsection
