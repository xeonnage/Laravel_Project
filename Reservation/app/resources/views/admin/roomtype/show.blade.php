@extends('layouts.admin')
@section('body')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <label style="font-size: 20px; font-weight: bold;" >ข้อมูลประเภทหอพัก </label>&nbsp;&nbsp;
                <a href="/admin/roomtype"> แสดงประเภทห้องพักทั้งหมด </a>
                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:12px; text-align:right"
                    {{-- href="roomtype/create" >เพิ่มประเภทหอ --}}
                    href="/admin/roomtype/create" >เพิ่มประเภทหอพัก
                </a>
            </div>
                @csrf

        <body {{--class="text-center"--}} style="">

            <table class="table" border="0">
                <thead>
                    <tr>
                        <td>ชื่อหอพักภาษาอังกฤษ</td>
                        <td>{{ $dormitory[0]->Name_Eng}}</td>
                    </tr>
                    <tr>
                        <td>ชื่อหอพักภาษาไทย</td>
                        <td>{{ $dormitory[0]->Name_Thai}}</td>
                    </tr>
                    <tr>
                        <td>ประเภทหอพัก</td>
                        <td>{{ $dormitory[0]->Description}}</td>
                    </tr>
                    <tr>
                        <td>ประเภทหอห้องพัก</td>
                        <td>
                            {{-- {{ $roomtype[0]->Type}} --}}
                            @if ( $roomtype[0]->Type == 1 )
                                ห้องปรับอากาศ
                            @else
                                ห้องพัดลม
                            @endif
                        </td>
                    </tr>
                </thead>
                <thead>
                    <th><center>#ลำดับ</center></th>
                    <th><center>เลขห้อง</center></th>
                    <th><center>ชั้น</center></th>
                    <th><center>จำนวนคน</center></th>
                    <th><center>สถานะ</center></th>
                    <th><center>การดำเนินการ</center></th>

                    {{-- <th>Operation </th> --}}
                </thead>
                <?php   $i=1;?>

                <tbody>


            </table>

        </div>


    </div>
</div>
@endsection
