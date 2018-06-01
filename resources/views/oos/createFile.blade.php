@extends('base')

@section('title', '自动创建文件')

@section('sidebar')
@endsection

@section('content')
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">R+</h1>
            </div>
            <h3>{{ config('app.systemName') }}</h3>

            <form class="m-t" role="form" action="" onsubmit="return false">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="密码" required="">
                </div>
                <button onclick="loginIn()" class="btn btn-primary block full-width m-b">登 录</button>

            </form>
        </div>
    </div>
    <script>
        function loginIn() {

            var name = $("#name").val();
            var pass = $("#password").val();

        }
    </script>
@endsection
