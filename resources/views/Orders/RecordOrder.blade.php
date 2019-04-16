@extends('layouts.admin')
@section('form')
    @if(session()->has('alert'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            سفارش شما با موفقیت در سیستم ثبت شد
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-layers font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">فرم ثبت سفارش</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <form action="{{url('/Order')}}" method="post" id="form_sample_1" class="form-horizontal"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">نام محصول
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="Product">
                                        <option value="0">انتخاب محصول...</option>
                                        <option value="کارت ویزیت">کارت ویزیت</option>
                                        <option value="فانتزی">فانتزی</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">نام جنس کاغذ
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="Paperback">
                                        <option value="0">انتخاب ...</option>
                                        <option value="سلفون براق یکرو">سلفون براق یکرو</option>
                                        <option value="سلفون براق دورو">سلفون براق دورو</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">گرمانژ کاغذ
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="PaperHeat">
                                        <option value="">نیاز به انتخاب نمی باشد</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">خدمات
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    فهرست خدمات:
                                    <textarea rows="5" cols="60" name="Services"
                                              placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">اندازه
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="Size">
                                        <option value="0">انتخاب ...</option>
                                        <option value="استاندارد (85*48)">استاندارد (85*48)</option>
                                        <option value="2لت عمودی (85*96)">2لت عمودی (85*96)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">تیراژ
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="Circulation">
                                        <option value="0">انتخاب ...</option>
                                        <option value="1000">1000</option>
                                        <option value="2000">2000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">توضیحات دیگر
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <textarea rows="2" cols="60" name="Description"
                                              placeholder="لطفا متن خود را وارد کنید"></textarea>
                                </div>
                            </div>
                            <span>مبلغ سفارش شما</span> = 0 ریال
                            <br/>
                            <span>مبلغ کل سفارش شما</span> = 0 ریال
                            <br/>
                            <span>حداقل زمان برای آماده شدن سفارش شما</span> = 0 روزکاری
                            <br/>
                            <i class="icon-info" style="color:red;"></i>
                            <span class="title" style="color:red;">توجه! هزینه ارسال بعد از آماده شدن سفارش و در هنگام ارسال از حساب شما کسر خواهد شد.</span>
                            <br/>
                            <i class="icon-info" style="color:red;"></i>
                            <span class="title" style="color:red;">تصویر با پسند .jpg  مورد قبول است.</span>
                            <br/>
                            <br/>
                            <div class="col-sm-2 imgUp">
                                <div class="imagePreview"></div>
                                <label class="btn btn-primary">
                                    انتخاب تصویر روی کار<input type="file" name="FrontImage" class="uploadFile img"
                                                               value="Upload Photo"
                                                               style="width: 0px;height: 0px;overflow: hidden;">
                                </label>
                            </div>
                            <div class="col-sm-2 imgUp">
                                <div class="imagePreview"></div>
                                <label class="btn btn-primary">
                                    انتخاب تصویر پشت کار<input type="file" name="BackImage" class="uploadFile img"
                                                               value="Upload Photo"
                                                               style="width: 0px;height: 0px;overflow: hidden;">
                                </label>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">ثبت اطلاعات</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
