@extends('layouts.app')

@section('htmlheader_title')
CONFIGURATION
@endsection

@section('header_css')
@endsection

@section('contentHeader')
<section class="content-header">
    <h1>CONFIGURATION </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li><a href="{{ url('home/configHardware') }}">การตั้งค่าทั่วไป</a></li>
        <li class="active"><a href="#">สำหรับ Selfcheck</a></li>
    </ul>

    <div class="tab-content">
            <form class="form-horizontal" name="frmMain" method="post" >
                <div style="max-height:400px;overflow-y: auto;overflow-x:hidden">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <label class="col-sm-12 col-md-12 control-label">เลือกฟังก์ชั่น   </label>
                            </div>
                            <div class="col-sm-8 col-md-7">
                                <div class="checkbox"> 
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="function_borrow"> ฟังก์ชั่นยืม
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="function_renew"> ฟังก์ชั่นยืมต่อ
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="function_return"> ฟังก์ชั่นคืน
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="member_booking_detail" > รายการหนังสือจอง
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="member_borrow_detail"> รายการหนังสือยืมอยู่
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="member_overdue_detail" > รายการหนังสือเกินกำหนด
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="member_payment_fine" > แสดงค่าปรับ
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label>
                                            <input type="checkbox" class="minimal-blue" name="function[]" value="member_payment_balance" > แสดงยอดเงินคงเหลือ
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-4 col-md-3 control-label">IP address (xxx.xxx.xxx.xxx)</label>
                        <div class="col-sm-8 col-md-6">
                            <input type="text" name="ip_address" class="form-control" 
                            value="">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-4 col-md-3 control-label">ชื่อเครื่องพิมพ์ใบเสร็จ</label>
                        <div class="col-sm-8 col-md-6">
                            <input type="text" name="printer_name" class="form-control" >
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="col-sm-4 col-md-3 control-label">Com port</label>
                        <div class="col-sm-8 col-md-6">
                            <input type="text" name="regorComd" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 col-md-3 control-label">รหัสปิดเครื่อง</label>
                        <div class="col-sm-8 col-md-4">
                            <input type="text" name="password_shutdown" class="form-control" >
                        </div>
                    </div>            
                </div>
                <hr>
                <div align="center">
                    <input name="submit_saveSC" type="submit" class="btn btn-lg btn-flat btn-success" id="submit_saveSC" value="บันทึกการเปลี่ยนแปลง">
                </div>
            </form>
        </div>
</div>
@endsection

@section('footer_js')
@endsection

@section('footer')
@endsection
