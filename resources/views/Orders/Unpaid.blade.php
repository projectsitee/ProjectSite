@extends('layouts.admin')
@section('form')
    <h4>فاکتورهای پرداخت نشده</h4>
    <hr>
    <span>
    در این قسمت می توانید فاکتورهای پرداخت نشده خود را مشاهده کنید. می توانید نسبت به پرداخت، اضافه و کم کردن سفارشات داخل فاکتورها و نیز حذف فاکتورها اقدام نمایید.
    </span>
    <br/>
    <h4>نکات مهم</h4>
    <span style="color: red">توجه نمایید که در صورت پرداخت نکردن وجه سفارشات خود کارتان برای چاپ ارسال نخواهد شد. در ضمن فاکتورهای استعلام قیمت شده به هیچ وجه پاک نخواهند شد.</span>

    <div class="portlet box blue ">

        <div class="portlet-body form ">

            <div class="form-body ">
                <br/>

                <table class="table table-hover table-bordered results">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>چاپ</th>
                        <th>شماره فاکتور</th>
                        <th>تاریخ ثبت</th>
                        <th>وضعیت</th>
                        <th>تعداد اقلام</th>
                        <th>جمع کل</th>
                        <th>عملیات کاربردی</th>
                    </tr>

                    </thead>
                    <tbody>
                    {{--@foreach($order as $orde)--}}
                    {{--@if($orde->user_id == auth()->user()->id)--}}

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    </tbody>

                </table>

                <!-- END EXAMPLE TABLE PORTLET-->


                <!-- BEGIN EXAMPLE TABLE PORTLET-->

            </div>
        </div>
    </div>
@endsection
