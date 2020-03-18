@extends('layouts.admin')
@section('body')
@foreach($roomtype as $rmty)
@endforeach
<div class="table-responsive">

    <p><h2>แก้ไข้ข้อมูล ห้องพัก</h2></p>
    <form action="{{ route('roomtype.update',$rmty->id) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PUT')

        <div class="form-group">
            <label for="Description">ชื่อหอพัก <label style="color:red;"> * </label></label>
            <div {{-- class = "col-sm-4" --}}>
                <select class="form-control" name="Dormitory_Name">
                    <option value="{{ $rmty->Dormitory_ID }}">สถานะปัจุบัน: {{ $rmty->Name_Thai }} </option>
                    @foreach($dormitory as $dormitory)
                    <option value = "{{$dormitory->id}}">
                        {{$dormitory->Name_Thai}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="Description">ประเภทห้องพัก <label style="color:red;"> * </label></label>
            <div {{-- class = "col-sm-4" --}}>
                <select class="form-control" name="TypeName">
                    <option value="{{ $rmty->TypeName }}"><label style="color:red "> สถานะปัจุบัน: </label>{{ $rmty->TypeName }} </option>
                    <option value="ห้องปรับอากาศ">ห้องปรับอากาศ</option>
                    <option value="ห้องพัดลม">ห้องพัดลม</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="Name_TH">จำนวนคนทั้งหมด/ห้อง <label style="color:red;"> * </label></label>
            <input type="text" class="form-control" name="NemberPeople" id="NemberPeople" value="{{ $rmty->NemberPeople }}">
        </div>


        <button type="submit" name="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
        <button class="btn btn-secondary" type="reset">ยกเลิก</button>



</div>
@endsection
