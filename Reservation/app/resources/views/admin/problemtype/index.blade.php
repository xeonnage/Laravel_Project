{{--
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
            <h2>เพื่มข้อหัว ประเภทปัญหา</h2>
            <form action="{{ route('/admin/Problemtype') }}" method="post">
                {{csrf_field()}}
                <div class="form-inline">
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 my-2">
                        <label for="name" class="col-sm-1" >Name</label>
                        <input type="text" class="form-control col-sm-8" name="ProblemName" id="ProblemName" placeholder="หัวข้อปัญหา">
                        <button type="submit" name="submit" class="btn btn-success col-sm-2">ยืนยัน</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="table-responsive my-3">
            <table class="table" border="0">
                <thead class="thead-dark">
                    <th><center>ลำดับ</center></th>
                    <th><center>ประเภทหัวข้อปัญหา</center></th>
                    <th><center>การดำเนินการ</center></th>
                </thead>

                @foreach($problemtype as $pbty)
                <tbody>
                <tr>
                    <td>{{ $pbty->id}}</td>
                    <td>{{ $pbty->ProblemName}}</td>
                    <td>
                        <a href="/admin/editProblemtype/{{$pbty->id}}" class="btn btn-primary">Edit</a>
                        <a href="/admin/deleteProblemtype/{{$pbty->id}}" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')" class="btn btn-danger">Remove</a>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection --}}
