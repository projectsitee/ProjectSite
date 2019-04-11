@extends('layouts.admin')
@section('form')
    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                جدول پیگیری سفارشات
            </div>

        </div>
        <div class="portlet-body form ">

            <div class="form-body ">
                <div class="col-xs-6 col-sm-2">
                    <label class="control-label">شماره فاکتور</label>
                    <br/>
                    <input class="search form-control" type="text" name="InvoiceNumber" class="form-control"
                           required/>
                </div>
                <br/>

                <table class="table table-hover table-bordered results">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>تصویر</th>
                        <th>مشخصات</th>
                        <th>اندازه</th>
                        <th>ش.فاکتور</th>
                        <th>تعداد</th>
                        <th>ش.بسته</th>
                        <th>تاریخ ثبت</th>
                        <th>تاریخ چاپ</th>
                        <th>قیمت</th>
                        <th>وضعیت نهایی</th>

                        <th>عملیات</th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($order as $orde)
                        @if($orde->user_id == auth()->user()->id)

                        <tr>
                            <td style="color: red">#</td>
                            <td><img src="{{$orde->FrontImage}}" width="20" height="20"></td>
                            <td>{{$orde->Product}}/{{$orde->Paperback}}</td>
                            <td>{{$orde->Size}}</td>
                            <td>{{$orde->InvoiceNumber}}</td>
                            <td>{{$orde->Circulation}}</td>
                            <td> <span
                                        class="label label-sm label-danger">نامشخض</span>
                            </td>

                            <td>{{Verta::instance($orde->created_at)->format('Y-n-j')}}</td>
                            <td><span
                                        class="label label-sm label-danger">نامشخض</span></td>
                            <td><span
                                        class="label label-sm label-danger">نامشخض</span></td>
                            <td><span
                                        class="label label-sm label-danger">نامشخض</span></td>

                                <td><a href="{{url('/ViewAndEdit')}}/{{$orde->id}}"><img
                                src="{{asset('/icon/icons8-eye-50.png')}}"
                                title="مشاهده و ویرایش" width="20" height="20"></a>

                                {{--<a href="{{url('/MWL')}}"><img--}}
                                {{--src="{{asset('/icon/icons8-upload-document-64.png')}}"--}}
                                {{--title="عملیات MWL" width="30" height="30"></a>--}}

                                {{--<a href="#"><img src="{{asset('/icon/check.png')}}"--}}
                                {{--title="پرداخت شده"></a>--}}
                            </td>
                            {{--@else--}}
                                {{--<td> <span--}}
                                            {{--class="label label-sm label-danger">خریدی برای شما در سیستم ثبت نشده است</span>--}}
                                {{--</td>--}}


                        </tr>
                    </tbody>
                    @endif
                    @endforeach
                </table>

                <!-- END EXAMPLE TABLE PORTLET-->


                <!-- BEGIN EXAMPLE TABLE PORTLET-->

            </div>
        </div>
    </div>
@endsection
