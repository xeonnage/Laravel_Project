@extends('layouts.admin')
@section('body')
@foreach($dormitory as $dorm)
@endforeach
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">ข้อมูลหอพัก
                {{-- <a href="#"> โอนเงิน </a> --}}
                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="roomtype/create" >เพิ่มประเภทห้อพัก
                </a>
            </div>
                @csrf

        <body {{--class="text-center"--}} style="">

            <table class="table" border="0">
                <thead>
                    <th><center>#ID</center></th>
                    <th><center>ชื่อหอพัก</center></th>
                    <th><center>ประเภทหอพัก</center></th>
                    <th><center>ประเภทห้องพัก</center></th>
                    <th><center>จำนวนคน </center></th>
                    <th><center>การดำเนินการ</center></th>

                    {{-- <th>Operation </th> --}}
                </thead>
                <?php   $i=1;?>
                    <tr>
                        <a  class="btn btn-success mr-2 " action="{{ route('dormitory.destroy',$dorm->id) }}">เพิ่มประเภทห้อพัก </a>
                    </tr>
            </table>
        </div>

    </div>
</div>
@endsection
