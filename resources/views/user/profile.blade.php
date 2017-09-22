@extends('layouts.app')

@section('content')
<div class="second-nav">
    <ul class="second-navbar-nav">
        <li><a href="{{ route('home') }}">个人信息</a></li>
        <li><a href="{{ route('tidings') }}">修改密码</a></li>
        <li><a href="{{ route('favorites') }}">我的收藏</a></li>
        <li><a href="{{ route('billings') }}">开票信息</a></li>
    </ul>
</div>
<div class="container" style="width: 100%;background-color: #f7f7f7">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 profile">
            <div class="panel panel-default profile-panel">
                <div class="panel-heading" style="padding: 15px;">个人信息</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                          <label for="username" class="col-md-3 control-label profile-label">用户名</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control none" id="username" placeholder="请输入用户名">
                          </div>
                        </div>
                        <hr class="profile-hr">
                        <div class="form-group">
                          <label for="phone" class="col-md-3 control-label profile-label">手机号</label>
                          <div class="col-md-8">
                            <input type="tel" class="form-control none" id="phone" placeholder="请输入手机号">
                          </div>
                        </div>
                        <hr class="profile-hr">
                        <div class="form-group">
                          <label for="gander" class="col-md-3 control-label profile-label">性&nbsp;&nbsp;&nbsp;&nbsp;别</label>
                          <div class="col-md-8 gander">
                            <label class="radio-inline">
                            <input type="radio" id="gender1" name="gander" value="1"> <span>男</span>
                            </label>
                            <label class="radio-inline">
                            <input type="radio" id="gender2" name="gander" value="2"> <span>女</span>
                            </label>
                            <label class="radio-inline">
                            <input type="radio" id="gender3" name="gander" value="3"> <span>保密</span>
                            </label>
                          </div>
                        </div>
                        <hr class="profile-hr">
                        <div class="form-group">
                          <div class="col-md-offset-3 col-md-6">
                            <button type="submit" style="margin: .5rem 0px 1rem;" class="btn btn-default btn-desc btn-block">保存</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
