@extends('layouts.admin')
@section('form')
    <h4>فهرست سفارشات ارسال شده</h4>
    <hr>
    <div class="portlet box blue ">
        <div class="portlet-body form ">
            <div class="form-body ">
                <br/>
                <table class="table table-hover table-bordered results">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>عملیات کاربری</th>
                        <th>ش.بارنامه</th>
                        <th>ش.بسته</th>
                        <th>تاریخ تحویل</th>
                        <th>باربری</th>
                        <th>فامیلی</th>
                        <th>هزینه ارسال</th>
                        <th>استان</th>
                        <th>شهرستان</th>
                        <th>تاریخ درخواست</th>
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
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
