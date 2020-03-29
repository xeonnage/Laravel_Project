
@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="table-responsive">
            <p><h2>เพื่มข้อมูลประวัติส่วนตัว </h2></p>
            <form action="/admin/Problemtype" method="post" >
                {{csrf_field()}}
                <div class="form-inline">
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">รหัสประชาชน / หนังสือเดินทาง <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-10" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label style="text-align:left" for="ProblemName" class="col-sm-2">Firstname <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">Lastname <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">ชื่อจริง <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">นามสกุล <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">สถานะ  <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">รหัสนิสิต <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">เพศ  <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">วันเกิด <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">เชื้อชาติ  <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-2" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">สัญชาติ <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-2" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">ศาสนา <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-2" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">คณะ  <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-2" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">สาขา <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-2" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">ชั้นปี <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-2" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">เบอร์โทร  <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">อีเมล <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">ที่อยุ่  <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">ตำบล <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="ProblemName" class="col-sm-2">จังหวัด  <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">

                        <label for="ProblemName" class="col-sm-2">ประเทศ <label style="color:red;"> * </label></label>
                        <input type="text" class="form-control col-sm-4" name="ProblemName" id="ProblemName" placeholder=" ">
                    </div>



                    <button type="submit" name="submit" class="btn btn-success col-sm-2 my-3">ยืนยัน</button>
                </div>
                {{-- <button class="btn btn-secondary" type="reset">ยกเลิก</button> --}}
            </form>
        </div>

    </div>
</div>
@endsection
