@extends('layouts.admin')
@section('form')
    @if(session()->has('alert'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            اطلاعات شما با موفقیت بروزرسانی شد
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-layers font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">اطلاعات کاربری</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <form action="{{url('/UpdateProfile')}}/{{$user->id}}" method="post" id="form_sample_1"
                          class="form-horizontal"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">نام
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="FName" value="{{$user->FName}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">نام خانوادگی
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="LName" value="{{$user->LName}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">جنسیت
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="Sex" value="{{$user->Sex}}">
                                        <option value="1">مرد</option>
                                        <option value="2">زن</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">شماره تلفن ثابت
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="TelHome" value="{{$user->TelHome}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">شماره تلفن همراه
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="Phone" value="{{$user->Phone}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">پست الکترونیک
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="UserName"
                                           value="{{$user->UserName}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">نام شرکت یا موسسه
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="NameCompany"
                                           value="{{$user->NameCompany}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">استان
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="State">
                                        <option value="{{$user->State}}">{{$user->State}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">شهرستان
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="City">
                                        <option value="{{$user->City}}">{{$user->City}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">آدرس پستی
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="PostalAdderss"
                                           value="{{$user->PostalAdderss}}"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">کد پستی
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="PostalCode"
                                           value="{{$user->PostalCode}}"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">ثبت اطلاعات</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
