@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- You are logged in! --}}
                    <p><strong>id : </strong>{!! Auth::user()->id !!}</p>
                    <p><strong>Name : </strong>{!! Auth::user()->name !!}</p>
                    <p><strong>Email : </strong>{!! Auth::user()->email !!}</p>
                    <center>
                    @if( Auth::user()->checkIsAdmin() )
                        <a href="admin/dormitory" class="btn btn-primary">Management</a>
                    @endif

                    {{-- ชื่อตัวแปร  อ้อตัวแปลนี้มาจาก compact ปะ ที่ส่งค่ามา ใช่ๆ เดี๋ยวทดสอบรหัสที่ไม่ข้อมูลแปป --}}
                    @if(  sizeof($userdetail ) == 1  )
                        <a href="" class="btn btn-primary">แก้ไขข้อมูลส่วนตัว</a>
                    @else
                        <a href="user/UserDetail/create " class="btn btn-primary">เพื่มข้อมูลส่วนตัว</a>
                    @endif
                        {{-- {{ sizeof($5) }} --}}
                    &nbsp;
                    <a href="" class="btn btn-success">จองห้อง</a> &nbsp;
                    <a href="" class="btn btn-success">Home</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

