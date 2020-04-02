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
<div class="container">
    <div class="row justify-content-center">
<div class="table-responsive">
    {{-- {{ $type }}
    {{ $dormitory[0]->Name_Thai }} --}}
    <p><h2>เพื่มข้อมูล ห้องพัก </h2></p>
    <form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{-- <div class="form-group">
            <label for="TypeName">ประเภทห้องพัก <font style="color:red;"> * </font></label>
            <input type="text" class="form-control" name="TypeName" id="TypeName" placeholder="ห้องพักปรับอากาศ ">
        </div> --}}
        <div class="form-inline">
            <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                <strong class="col-sm-2" for="Dormitory_ID">ชื่อหอพัก <strong style="color:red;"> * </strong></strong>
                <div class = "col-sm-9">
                    <input type="hidden" value= "{{$dormitory[0]->id}}" class="form-control" name="Dormitory_ID" id="Dormitory_ID"/>
                    <input type="text" class="form-control" name="Dormitory_NAME" id="Dormitory_NAME" value="{{ $dormitory[0]->Name_Thai }}"   readonly>
                </div>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                <strong class="col-sm-2" for="Roomtype_ID">ประเภทห้องพัก <strong style="color:red;"> * </strong></strong>
                <div class = "col-sm-9">
                    <input type="hidden" value= "{{$type}}" class="form-control" name="Roomtype_ID" id="Roomtype_ID" />
                    <input type="text" class="form-control" name="Roomtype_NAME" id="Roomtype_NAME"

                    @if( $type == 1  )
                        value="ห้องปรับอากาศ "
                    @else
                        value="ห้องพัดลม  "
                    @endif
                    readonly
                    >
                </div>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                <strong class="col-sm-2"  for="RoomCode_ID">เลขห้อง<strong style="color:red;"> * </strong></strong>
                <input type="text" class="form-control col-sm-3" name="RoomCode_ID" id="RoomCode_ID" placeholder="เลขห้อง ... ">

                <strong class="col-sm-1" for="Floor">ชั้น <strong style="color:red;"> * </strong></strong>
                <input type="text" class="form-control col-sm-3" name="Floor" id="Floor" placeholder="ชั้น ...">

                &nbsp; &nbsp;
                <button type="submit" name="submit" class="btn btn-success" href="{{ route('rooms.create',$dormitory[0]->id.":".$type) }}">เพื่มข้อมูล</button>
                <button class="btn btn-secondary" type="reset">ยกเลิก</button>
            </div>
        </div>
    </form>
</div>
@if($room->count()>0)
    <div class="col-md-12">
    <div class="card">
        <div class="table-responsive my-3">
            <table class="table" border="0">
                <thead class="thead-dark">
                    <th><center>#ลำดับ</center></th>
                    <th><center>เลขหอพัก</center></th>
                    <th><center>ชั้น</center></th>
                    <th><center>จำนวนคน</center></th>
                    <th><center>สถานะ</center></th>
                    <th><center>ประเภทห้องพัก </center></th>
                    <th><center>ชื่อหอพัก </center></th>
                    <th><center>การดำเนินการ</center></th>

                    {{-- <th>Operation </th> --}}
                </thead>
                <?php   $i=1;?>
                @foreach ($room as $rm)
            <tbody>
                    <td>{{ $i++ }}</td>
                    <td>{{ $rm->RoomCode_ID }}</td>
                    <td>{{ $rm->Floor }}</td>
                    <td>{{ $rm->NumberPeople }} คน/ห้อง</td>
                    <td>
                        @if( $rm->NumberPeople == $rm->AtNumberPreple )
                        <p style="color: #ff1a1a"> ห้องเต็ม</p>
                        @else
                        <p style="color: #00cc00"> ว่าง {{$rm->NumberPeople - $rm->AtNumberPreple}} ที่ </p>
                        @endif

                    </td>
                    <td>
                        @if( $rm->Type  == 1)
                            ห้องปรับอากาศ
                        @else
                            ห้องพัดลม
                        @endif
                        {{-- {{ $rm->Type }} --}}
                    </td>
                    <td>{{ $rm->Name_Thai }}</td>
                    <td>
                        <center>
                        <form method="post" action="{{ route('rooms.destroy',$rm->RoomCode_ID) }}">
                            @csrf

                            <a class="btn btn-warning width:40px" href="{{ route('rooms.edit',$rm->RoomCode_ID) }}" >แก้ไขข้อมูล</a>
                            @method('DELETE')
                            <button class="btn btn-danger width:40%" type="submit">ลบข้อมูล </button>

                        </form>
                        </center>
                    </td>

                @endforeach
                </tbody>
            </table>
        </div>

@else
<div class="alert alert-danger col-sm-10 my-2">
    <p style="text-align:center">ไม่มีข้อมูล หัวข้อปัญหา</p>
</div>
@endif

{{$room->links()}}
@endsection
