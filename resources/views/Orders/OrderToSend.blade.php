@extends('layouts.admin')
@section('form')
    <h4>فهرست سفارشات منتظر ارسال</h4>
    <hr>
    <span>
    1-جهت ارسال بسته، سفاشارتی که به یک آدرس ارسال میشوند را انتخاب نمایید و بروی دکمه ثبت اطلاعات کلیک نمایید.
    </span>
    <br/>
    <span>
   2-عملیات ثبت ارسال بسته را از ابتدا تا انتها(پرداخت هزینه ارسال)پیش ببرید و سپس اقدام به ثبت  ارسال بسته جدید (در صورت نیاز) بنمایید.
    </span>
    <br/>
    <span>
   3-در این قسمت میتوانید با انتخاب (تیک) کنار کارهای حاضر و انتخاب ارسال کننده و زدن دکمه ثبت اطلاعات به مرحله پرداخت هزینه پیک بروید.
    </span>
    <br/>
    <span>
   4-هزینه بارها برای هر 25 کیلوگرم یک مبلغ پیک محاسبه خواهد شد. مشتری گرامی در صورت عدم پرداخت هزینه ارسال بار شما ارسال نخواهد شد.
    </span>
    <br/>
    <span>
5-درخواست ارسال بار شهرستان از شنبه تا چهارشنبه تا ساعت 15:30 و پنجشنبه تا 13 می باشد.
    </span>
    <br/>

    <span>
6-مشتریان و همکاران گرامی درهنگام دریافت بسته های ارسالی از باربری و ترمینال دقت فرمایید درصورت هرگونه خرابی در جابجایی(آب خوردگی،روغنی،پارگی و...) به عهده این مجموعه نمی باشد.
    </span>
    <br/>
    <br/>
    <span style="color: red">
       توجه: ثبت درخواست ارسال از ساعت 16:15 تا ساعت 16:30 امكان پذير نمی باشد
    </span>
<br/>
    <br/>
    <div class="form-group">

        <div class="col-md-4">
            نوع ارسال
            <select class="form-control" name="PaperHeat">
                <option value=""></option>
            </select>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-md-4">
            ارسال کنندگان
            <select class="form-control" name="PaperHeat">
                <option value=""></option>
            </select>
        </div>
    </div>
    <br/>
    <br/>

    <div class="portlet box blue ">

        <div class="portlet-body form ">

            <div class="form-body ">
                <br/>

                <table class="table table-hover table-bordered results">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>تصویر1</th>
                        <th>ش.سفارش</th>
                        <th>ش.فاکتور</th>
                        <th>نام</th>
                        <th>نوع سفارش</th>
                        <th>اندازه</th>
                        <th>خدمات</th>
                        <th>تاریخ چاپ</th>
                        <th>وضعیت سفارش</th>
                        <th>وزن</th>
                        <th>سفارش</th>
                        <th>طراحی</th>
                        <th>مبلغ کل</th>
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
                <button type="submit" class="btn green">ثبت اطلاعات</button>
            </div>
        </div>

    </div>





@endsection
