@extends('layouts.admin')
@section('body')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="table-responsive">
    <p><h2>เพื่มข้อมูล ประเภทห้องพัก</h2></p>
    <form action="{{ route('roomtype.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{-- <div class="form-group">
            <label for="TypeName">ประเภทห้องพัก <font style="color:red;"> * </font></label>
            <input type="text" class="form-control" name="TypeName" id="TypeName" placeholder="ห้องพักปรับอากาศ ">
        </div> --}}

        <div class="form-group">
            <label for="Description">ชื่อหอพัก <font style="color:red;"> * </font></label>
            <div {{-- class = "col-sm-4" --}}>
                <select class="form-control" name="Dormitory_Name">
                    <option value="" ><font style="color:brown" >กรุณาเลือกหอพัก</font></option>
                    @foreach($dormitory as $dormitory)
                    <option value = "{{$dormitory->Name_Thai}}">
                        {{$dormitory->Name_Thai}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="Description">ประเภทห้องพัก <font style="color:red;"> * </font></label>
            <div {{-- class = "col-sm-4" --}}>
                <select class="form-control" name="TypeName">
                    <option value="">โปรดเลือกประเภทห้องพัก</option>
                    <option value="ห้องปรับอากาศ">ห้องปรับอากาศ</option>
                    <option value="ห้องพัดลม">ห้องพัดลม</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="Name_TH">จำนวนคนทั้งหมด/ห้อง <font style="color:red;"> * </font></label>
            <input type="text" class="form-control" name="NemberPeople" id="NemberPeople" placeholder="จำนวนคน : 4 คน ">
        </div>



        <button type="submit" name="submit" class="btn btn-success">เพื่มข้อมูล</button>
        <button class="btn btn-secondary" type="reset">ยกเลิก</button>
    </form>
</div>
@endsection
