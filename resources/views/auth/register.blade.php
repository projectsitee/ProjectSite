@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{url('/AddMember')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="FName" value="{{ old('name') }}" autofocus>

                                    @if ($errors->has('FName'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('FName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="LName" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('LNmae'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('LName') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('جنسیت') }}</label>

                                <div class="col-md-6">
                                    <select name="Sex" class="form-control">

                                        <option
                                                value="1">مرد
                                        </option>

                                        <option
                                                value="2">زن
                                        </option>

                                    </select>
                                </div>

                            </div>


                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن ثابت') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="TelHome" value="{{ old('name') }}" required autofocus>


                                    @if ($errors->has('TelHome'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('TelHome') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن همراه') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="Phone" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('Phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Phone') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('پست الکترونیک') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="UserName" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('نام شرکت یا موسسه') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="NameCompany" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('استان') }}</label>

                                <div class="col-md-6">
                                    <select name="State" class="form-control">

                                        <option
                                                value="1">تهران
                                        </option>

                                        <option
                                                value="2">شیراز
                                        </option>

                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('شهرستان') }}</label>

                                <div class="col-md-6">
                                    <select name="City" class="form-control">

                                        <option
                                                value="1"></option>


                                    </select>
                                </div>

                            </div>


                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('ادرس پستی') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="PostalAdderss" value="{{ old('name') }}" required autofocus>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('کد پستی') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="PostalCode" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری(موبایل)') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('کلمه عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('تکرار کلمه عبور') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
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
