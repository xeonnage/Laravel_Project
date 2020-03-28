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
    <p><h2>เพื่มหัวข้อปัญหา </h2></p>
    <form action="{{ route('problemtype.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="ProblemName">หัวข้อปัญหา <label style="color:red;"> * </label></label>
            <input type="text" class="form-control" name="ProblemName" id="ProblemName" placeholder="แจ้งซ่อม">
        </div>


        <button type="submit" name="submit" class="btn btn-success">เพื่มข้อมูล</button>
        <button class="btn btn-secondary" type="reset">ยกเลิก</button>
    </form>
</div>
@endsection
