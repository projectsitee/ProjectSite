@extends('layouts.admin')
@section('form')
    <span>فاکتور جاری</span>
    <br/>
    <span>در این قسمت فاکتور ثبت شده خود را مشاهده می کنید. می توانید سفارشات دیگری را به این فاکتور اضافه کنید و یا نسبت به پرداخت وجه آن اقدام نمایید.</span>
    <br/>
    <span>سفارشات پرداخت نشده بعد از 48 ساعت از سیستم حذف خواهند شد.</span>
    <br/>
    <br/>
    <h4>مشخصات فاکتور</h4>
    <hr>
    <span>وضعیت فاکتور</span>=<span
            class="label label-sm label-danger">نامشخض</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span>شماره فاکتور</span>=<span
            class="label label-sm label-success">{{$orde->InvoiceNumber}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span>مبلغ سفارش</span>=<span
            class="label label-sm label-danger">نامشخص</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span>هزینه خدمات</span>=<span
            class="label label-sm label-danger">0</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span>هزینه طراحی</span>=<span
            class="label label-sm label-danger">0</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span>مبلغ بر ارزش افزوده</span>=<span
            class="label label-sm label-danger">0</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span>جمع کل (مبلغ فاکتور)</span>=<span
            class="label label-sm label-danger">نامشخص</span>
    <hr>
    <div class="portlet box blue ">
        <div class="portlet-body form ">
            <div class="form-body ">
                <br/>
                <table class="table table-hover table-bordered results">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>تصویر1</th>
                        <th>تصویر2</th>
                        <th>ش.سفارش</th>
                        <th>نوع سفارش</th>
                        <th>اندازه</th>
                        <th>خدمات</th>
                        <th>تاریخ ثبت</th>
                        <th>تاریخ چاپ</th>
                        <th>وضعیت سفارش</th>
                        <th>مبلغ کل</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($order as $orde)--}}
                    {{--@if($orde->user_id == auth()->user()->id)--}}
                    <tr>
                        <td style="color: red">#</td>
                        <td><img src="{{$orde->FrontImage}}" width="20" height="20"></td>
                        <td><img src="{{$orde->BackImage}}" width="20" height="20"></td>
                        <td><span
                                    class="label label-sm label-danger">نامشخض</span></td>
                        <td>{{$orde->Product}}
                            /
                            <br/>
                            {{$orde->Paperback}}
                            /
                            <br/>
                            {{$orde->Circulation}}
                        </td>
                        <td>{{$orde->Size}}</td>
                        <td> <span
                                    class="label label-sm label-success">{{$orde->Services}}</span>
                        </td>
                        <td>{{Verta::instance($orde->created_at)->format('Y-n-j')}}</td>
                        <td><span
                                    class="label label-sm label-danger">نامشخض</span></td>
                        <td><span
                                    class="label label-sm label-danger">نامشخض</span></td>
                        <td><span
                                    class="label label-sm label-danger">نامشخض</span></td>
                        <td>
                        </td>
                        {{--@else--}}
                        {{--<td> <span--}}
                        {{--class="label label-sm label-danger">خریدی برای شما در سیستم ثبت نشده است</span>--}}
                        {{--</td>--}}
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
