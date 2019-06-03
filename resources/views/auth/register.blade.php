@extends('layouts.app')

@section('content')
<div class="container">
        <center>
        
                <div class = "loginRegisHead">
                <div class="intro-text">
                    <div class="animate01 bounceIn animated slow"><i class="fa fa-registered"></i>&nbsp;&nbsp;<b>Register .</b></div>
                   
                </div>
                </div>
            
        </center>
        <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ __('Name') }} :</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right"><i class ="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;{{ __('E-Mail Address') }} :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="  Enter your email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ __('Nickname') }} :</label>
                        
                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control{{ $errors->has('nickname') ? ' is-invalid' : '' }}" name="nickname" value="{{ old('nickname') }}" required autofocus placeholder="Enter your nickname">
                        
                                @if ($errors->has('nickname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="institution" class="col-md-4 col-form-label text-md-right"><i class="fa fa-university"></i>&nbsp;&nbsp;{{ __('Institution') }} :</label>
                        
                            <div class="col-md-6">
                                <input id="institution" type="text" class="form-control{{ $errors->has('institution') ? ' is-invalid' : '' }}" name="institution" value="{{ old('institution') }}" required autofocus placeholder="Enter your institution">
                        
                                @if ($errors->has('institution'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                       

                        <div class="form-group row">
                            <label for="faculty" class="col-md-4 col-form-label text-md-right"><i class="fa fa-building"></i>&nbsp;&nbsp;{{ __('Faculty') }} :</label>
                        
                            <div class="col-md-6">
                                <input id="faculty" type="text" class="form-control{{ $errors->has('faculty') ? ' is-invalid' : '' }}" name="faculty" value="{{ old('faculty') }}" required autofocus placeholder="Enter your faculty">
                        
                                @if ($errors->has('faculty'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right"><i class="fa fa-building"></i>&nbsp;&nbsp;{{ __('Department') }} :</label>
                        
                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required autofocus placeholder="Enter your department">
                        
                                @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right"><i class="fa fa-book"></i>&nbsp;&nbsp;{{ __('Status') }} :</label>
                        
                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ old('status') }}" required autofocus placeholder="Enter your status">
                        
                                @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right"><i class="fa fa-book"></i>&nbsp;&nbsp;{{ __('Subject') }} :</label>
                        
                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" required autofocus placeholder="Enter your subject">
                        
                                @if ($errors->has('subject'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right"><i class="fa fa-book"></i>&nbsp;&nbsp;{{ __('Level') }} :</label>
                        
                            <div class="col-md-6">
                                <input id="level" type="text" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" name="level" value="{{ old('level') }}" required autofocus placeholder="Enter your level">
                        
                                @if ($errors->has('level'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right"><i class="fa fa-lock"></i>&nbsp;&nbsp;{{ __('Password') }} :</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Enter your password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right"><i class="fa fa-lock"></i>&nbsp;&nbsp;{{ __('Confirm Password') }} :</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password" placeholder="Enter confirmation-password">
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
