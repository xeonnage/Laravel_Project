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
                    <p><strong>Name : </strong>{!! Auth::user()->name !!}</p>
                    <p><strong>Email : </strong>{!! Auth::user()->email !!}</p>

                    @if( Auth::user()->checkIsAdmin() )
                        <a href="admin/dormitory" class="btn btn-primary">Management</a>
                    @endif
                    <a href="user/UserDetail/create " class="btn btn-primary">เพื่มข้อมูลส่วนตัว</a>
                    {{-- <a href="{{ route('user.UserDetail.create'$users[0]->id.":".$email) }}" >เพื่มข้อมูลส่วนตัว </a> --}}

                    <a href="" class="btn btn-success">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

