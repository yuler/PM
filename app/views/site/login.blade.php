@extends('site._layouts.default')

@section('title')
	用户登录
@stop

@section('container')
	<div id="login" class="container" ng-controller="UserCtrl">
		<div class="content" ng-hide="fake">
			<h2>用户登录</h2>
			<div>
			<% Form::open(['route'=>'site.login.post','method'=>'post','ng-submit'=>'login()']) %>
				<div class="input-wrapper">
					<% Form::email('email',null,['ng-model'=>'user.email','ng-init'=>'user.email="393342914@qq.com"','placeholder'=>'请输入邮箱地址','autofocus'=>'']) %>
				</div>
				<div class="input-wrapper">
					<% Form::password('password',['ng-model'=>'user.password','ng-init'=>'user.password="123"','placeholder'=>'请输入密码']) %>
				</div>
				<div class="input-wrapper">
					<% Form::button('登录',['type'=>'submit','submitting'=>'正在登录...']) %>
				</div>
				<div class="input-wrapper">
					<a href="#" class="btn btn-link btn-block">找回密码?</a>
				</div>
			<% Form::close() %>
			</div>
		</div>
	</div>
@stop