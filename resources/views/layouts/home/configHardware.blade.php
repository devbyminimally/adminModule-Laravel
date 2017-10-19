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
        <li class="active"><a href="#">การตั้งค่าทั่วไป</a></li>
        <li><a href="{{ url('home/configSc') }}">สำหรับ Selfcheck</a></li>
    </ul>

    <div class="tab-content">
        <form class="form-horizontal" name="frmMain" method="post" enctype="multipart/form-data" >
            <div style="max-height:400px;overflow-y: auto;overflow-x:hidden">
                <div class="form-group">
                    <label class="col-sm-4 col-md-3 control-label">จำนวนหลักของรหัสหนังสือ</label>
                    <div class="col-sm-8 col-md-2">
                        <input type="text" name="lenght_id" class="form-control" data-validation="number" data-validation-allowing="range[1;100]" 
                        value="lenght_id">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-4 col-md-3 control-label">ลิ้งค์ API</label>
                    <div class="col-sm-8 col-md-6">
                        <input type="text" name="path_api" class="form-control" 
                        value="path_api">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-md-3 control-label">ลิ้งค์แสดงปกหนังสือ</label>
                    <div class="col-sm-8 col-md-6">
                        <input type="text" name="path_imageBook" class="form-control" 
                        value="path_imageBook">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-md-3 control-label">ลิ้งค์แสดงรูปสมาชิก</label>
                    <div class="col-sm-8 col-md-6">
                        <input type="text" name="path_imageMember" class="form-control" 
                        value="path_imageMember">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-md-3 control-label">ลิ้งค์บันทึกและเรียกใช้รูปภาพและวีดีโอประชาสัมพันธ์</label>
                    <div class="col-sm-8 col-md-6">
                        <input type="text" name="path_presentation" class="form-control" 
                        value="path_presentation">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="col-sm-4 col-md-3 control-label">โลโก้</label>
                    <div class="col-sm-2 col-md-2" align="center">
                        <img src="logoLibrary; ?>" width="100px" class="img-thumbnail">
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <input type="file" name="logoLibrary" class="form-control" data-validation="mime size" data-validation-allowing="jpg, png, gif" data-validation-max-size="2M">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 col-md-3 control-label">โลโก้บนใบพิมพ์รายการ</label>
                    <div class="col-sm-2 col-md-2" align="center">
                        <img src="logoReceipt; ?>" width="100px" class="img-thumbnail">
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <input type="file" name="logoReceipt" class="form-control" data-validation="mime size" data-validation-allowing="bmp" data-validation-max-size="2M">
                    </div>
                </div>
            </div>
            <hr>
            <div align="center">
                <input name="submit_save" type="submit" class="btn btn-lg btn-flat btn-success" id="submit_save" value="บันทึกการเปลี่ยนแปลง">
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer_js')
@endsection

@section('footer')
@endsection
