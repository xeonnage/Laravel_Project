
@extends('layouts.admin')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">ประเภทห้องพัก
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
                @foreach($roomtype as $rmty)
                <tbody>
                <tr>
                    <td>{{ $i++ }} </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
