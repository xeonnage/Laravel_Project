
@extends('layouts.admin')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">หอพักนิสิต
                {{-- <a href="#"> โอนเงิน </a> --}}
                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="problemtype/create" >เพิ่มหัวข้อปัญหา
                </a>
            </div>
                @csrf

        <body {{--class="text-center"--}} style="">

            <table class="table" border="0">
                <thead>
                    <th><center>ลำดับ</center></th>
                    <th><center>ประเภทหัวข้อปัญหา</center></th>
                    <th><center>การดำเนินการ</center></th>
                    {{-- <th>Operation </th> --}}
                </thead>

                @foreach($problemtype as $pbty)
                <tbody>
                <tr>
                    <td>{{ $pbty->id}}</td>
                    <td>{{ $pbty->ProblemName}}</td>
                    <td>
                        <center>
                        <form method="post" action="{{ route('problemtype.destroy',$pbty->id) }}">
                            @csrf

                            {{-- <a class="btn btn-primary" href="{{ route('problemtype.show',$pbty->id) }}" >แสดงข้อมูล</a> --}}
                            <a class="btn btn-warning" href="{{ route('problemtype.edit',$pbty->id) }}" >แก้ไขข้อมูล</a>

                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">ลบข้อมูล</button>

                        </form>
                        </center>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
