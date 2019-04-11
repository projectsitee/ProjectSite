@extends('layouts.admin')
@section('form')
    <h4>تغییر رمز</h4>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    <form action="{{url('/Order')}}" method="post" id="form_sample_1" class="form-horizontal"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-body">

                            <div class="form-group">
                                <label class="control-label col-md-3">رمز قبلی
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control" name="TelHome"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">رمز جدید
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control" name="TelHome"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">تکرار رمز جدید
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control" name="TelHome"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">ثبت</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
@endsection
