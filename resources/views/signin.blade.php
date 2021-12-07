@extends('layouts.master')
@section('pageTitle', 'Sign in')

@section('content')
<div class="row mt-5">
 

    <div class="row justify-content-center">
        <div class="col-md-4">
            <lottie-player src="{{asset('json/signin.json')}}"  background="transparent"  speed="1"  style="width: 200px; height: 200px; margin:auto;"  loop autoplay></lottie-player>
          
                    <form action="">
                        <label for="email">Email address</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control"  id="email">
                        </div>
                        <label for="password">Password</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control form-control"  id="password">
                        </div>
                        
                        <div class="input-group mt-3">
                            <input type="submit" class="btn btn-md btn-secondary form-control"  id="submit" value="sign in">
                        </div>
                    </form>
           
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/lottie-player.min.js')}}"></script>
@endsection
