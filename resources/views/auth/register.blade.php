@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>


                 <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="institute" class="col-md-4 col-form-label text-md-right">{{ __('Institute') }}</label>

                            <div class="col-md-6">
                                <input id="institute" type="text" class="form-control{{ $errors->has('institute') ? ' is-invalid' : '' }}" name="institute" value="{{ old('institute') }}" required autofocus>

                                @if ($errors->has('institute'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institute') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dept" class="col-md-4 col-form-label text-md-right">{{ __('Dept') }}</label>

                            <div class="col-md-6">
                                <input id="dept" type="text" class="form-control{{ $errors->has('dept') ? ' is-invalid' : '' }}" name="dept" value="{{ old('dept') }}" required autofocus>

                                @if ($errors->has('dept'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dept') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="iid" class="col-md-4 col-form-label text-md-right">{{ __('Institute ID') }}</label>

                            <div class="col-md-6">
                                <input id="iid" type="text" class="form-control{{ $errors->has('iid') ? ' is-invalid' : '' }}" name="iid" value="{{ old('iid') }}" required autofocus>

                                @if ($errors->has('iid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('iid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cell" class="col-md-4 col-form-label text-md-right">{{ __('cell') }}</label>

                            <div class="col-md-6">
                                <input id="cell" type="text" class="form-control{{ $errors->has('cell') ? ' is-invalid' : '' }}" name="cell" value="{{ old('cell') }}" required autofocus>

                                @if ($errors->has('cell'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cell') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
