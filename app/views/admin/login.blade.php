@extends('layouts.master')
@section('content')
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
  <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Subway Time</a>
    <section class="m-b-lg">
      <header class="wrapper text-center">
        <strong>Sign in to get in touch</strong>
      </header>
      {{ Form::open(array('url' => '/sign_in')) }}
        <div class="list-group">
          <div class="list-group-item">
            {{Form::email('email', '', array('class' => 'form-control no-border', 'placeholder' => 'Email'))}}
          </div>
          <div class="list-group-item">
            {{Form::password('password', array('class' => 'form-control no-border', 'placeholder' => 'Password'))}}
          </div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
        <div class="text-center m-t m-b">
          <a href="#">
            <small>Forgot password?</small>
          </a>
        </div>
        <div class="line line-dashed"></div>
        <p class="text-muted text-center">
          <small>Do not have an account?</small>
        </p> <a href="signup.html" class="btn btn-lg btn-default btn-block">Create an account</a>
      {{ Form::close() }}
    </section>
  </div>
</section>
@include('layouts.footer')
@stop
