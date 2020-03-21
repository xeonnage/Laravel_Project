@extends('layouts.admin')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">ห้องพัก ดดด
                {{-- <a href="#"> โอนเงิน </a> --}}
                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="rooms/create" >เพิ่มห้องพัก
                </a>
            </div>
                @csrf

        <body {{--class="text-center"--}} style="">

            <table class="table" border="0">
                <thead>
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
                    <td>{{ $rm->AtNumberPreple }}</td>
                    <td>{{ $rm->StatusRoom }}</td>
                    <td>
                        @if( $rm->Type  == 1)
                            ห้องปรับอากาศ
                        @else
                            ห้องพัดลม
                        @endif
                        {{-- {{ $rm->Type }} --}}
                    </td>
                    <td>{{ $rm->Name_Thai }}</td>

                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
