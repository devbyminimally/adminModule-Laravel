@extends('layouts.app')

@section('htmlheader_title')
USER
@endsection

@section('header_css')
@endsection

@section('contentHeader')
<section class="content-header">
    <h1>USER </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">รายละเอียด/แก้ไข ข้อมูลเจ้าหน้าที่ </a></li>
        <li><a href="#">เพิ่มข้อมูลเจ้าหน้าที่</a></li>
    </ul>
    <div class="tab-content">
        <table class="table table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ลำดับ </th>
                    <th>ชื่อ-นามสกุล </th>
                    <th>ชื่อผู้ใช้ </th>
                    <th>อีเมล </th>
                    <th width="25%">สิทธิ์การเข้าใช้งานอุปกรณ์ </th>
                    <th width="25%">สิทธิ์การเข้าถึงรายงาน </th>
                    <th>แก้ไข </th>
                    <th>ระงับสิทธิ์ </th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td></td>
            		<td></td>
            		<td></td>
            		<td></td>
            		<td></td>
            		<td></td>
            		<td align="center"><img src="{{ asset('images/edit.png') }}" width="30"></td>
            		<td align="center"><img src="{{ asset('images/unlock.png') }}" width="30"></td>
            	</tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('footer_js')
@endsection

@section('footer')
@endsection