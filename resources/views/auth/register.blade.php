@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div  class="card-header" >{{ __('REGISTER A STUDENT') }}</div>

                <div  class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        @include('sweet::alert')

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" placeholder="eg. Mrs"  class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" placeholder="eg. Johnson" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName"  class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" placeholder="eg. Oyeyemi" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Parent E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="eg. johnsondec@gmail.com"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parent_name" class="col-md-4 col-form-label text-md-right">{{ __('Parent Name') }}</label>

                            <div class="col-md-6">
                                <input id="parent_name" type="text" placeholder="eg. Mr/Mrs Oyeyemi" class="form-control{{ $errors->has('parent_name') ? ' is-invalid' : '' }}" name="parent_name" value="{{ old('parent_name') }}" required autofocus>

                                @if ($errors->has('parent_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('parent_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="parent_phone" class="col-md-4 col-form-label text-md-right">{{ __('Parent Phone') }}</label>

                            <div class="col-md-6">
                                <input id="parent_phone" type="text" placeholder="eg. +2348069322274 " class="form-control{{ $errors->has('parent_phone') ? ' is-invalid' : '' }}" name="parent_phone" value="{{ old('parent_phone') }}" required autofocus>

                                @if ($errors->has('parent_phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('parent_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Current Class') }}</label>

                            <div class="col-md-6">
                                <input id="class" type="text" placeholder="eg. SS3C" class="form-control{{ $errors->has('class') ? ' is-invalid' : '' }}" name="class" value="{{ old('class') }}" required autofocus>

                                @if ($errors->has('class'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('Current School') }}</label>

                                <div class="col-md-6">
                                    <input id="class" type="text" placeholder="eg. Sunshine College" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" name="school" value="{{ old('school') }}" required autofocus>

                                    @if ($errors->has('class'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('school') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  class="btn">
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
