@extends('layouts.admin')
@section('body')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <label style="font-size: 20px; font-weight: bold;" >ข้อมูลประเภทหอพัก </label>&nbsp;&nbsp;
                <a href="/admin/roomtype"> แสดงประเภทห้องพักทั้งหมด </a>

            </div>
                @csrf

            <div class="form-inline">
                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Firstname_Eng" class="col-sm-2">รหัสประชาชน / หนังสือเดินทาง</label>
                    <label>{{ $userdetails[0]->Code_ID}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Firstname_Eng" class="col-sm-2">Name </label>
                    <label class="col-sm-2">{{ $userdetails[0]->Firstname_Eng}}&nbsp;&nbsp;{{ $userdetails[0]->Lastname_Eng}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Firstname_Eng" class="col-sm-2">ชื่อ-นามสกุล </label>
                    <label class="col-sm-2" >{{ $userdetails[0]->Firstname_Thai}}&nbsp;&nbsp;{{ $userdetails[0]->Lastname_Thai}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Firstname_Eng" class="col-sm-2">สถานะ</label>
                    <label class="col-sm-2" >{{ $userdetails[0]->Status}}</label>
                    <label for="Firstname_Eng" class="col-sm-2">รหัสนิสิต </label>
                    <label class="col-sm-2">{{ $userdetails[0]->Collegian_ID}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Gender" class="col-sm-2">เพศ </label>
                    <label class="col-sm-2" >{{ $userdetails[0]->Status}}</label>
                    <label for="Firstname_Eng" class="col-sm-2">วันเกิด </label>
                    <label class="col-sm-2">{{ $userdetails[0]->Birth_Date}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Gender" class="col-sm-2">E-mail </label>
                    <label class="col-sm-2" > </label>
                    <label for="Firstname_Eng" class="col-sm-2">เบอร์โทร </label>
                    <label class="col-sm-2">{{ $userdetails[0]->Phone}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Gender" class="col-sm-2">เชื้อชาติ </label>
                    <label class="col-sm-2" >{{ $userdetails[0]->ethnicity}}</label>
                    <label for="Firstname_Eng" class="col-sm-2">สัญชาติ </label>
                    <label class="col-sm-2">{{ $userdetails[0]->nationality}}</label>
                    <label for="Firstname_Eng" class="col-sm-2">ศาสนา </label>
                    <label class="col-sm-2">{{ $userdetails[0]->religion}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Gender" class="col-sm-2">ที่อยุ่ </label>
                    <label class="col-sm-4" >{{ $userdetails[0]->Address}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Firstname_Eng" class="col-sm-2">ตำบล </label>
                    <label class="col-sm-2">{{ $userdetails[0]->Amphures}}</label>
                    <label for="Gender" class="col-sm-2">อำเภอ / เขต </label>
                    <label class="col-sm-2" >{{ $userdetails[0]->Districts}}</label>
                    <label for="Firstname_Eng" class="col-sm-2">จังหวัด </label>
                    <label class="col-sm-2">{{ $userdetails[0]->Provinces}}</label>
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                    <label for="Firstname_Eng" class="col-sm-2">ประเทศ </label>
                    <label class="col-sm-2">{{ $userdetails[0]->country}}</label>

                </div>

            </div>
        </div>


    </div>
</div>
@endsection
