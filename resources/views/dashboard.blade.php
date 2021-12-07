@extends('layouts.parent')
@section('pageTitle', 'Dashboard')

@section('content')
<div class="row mt-5">
 <div class="col-12">
        <h3>Hello User!</h3>
         <p>Email</p>
         <p>id</p>
     </p>
 </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/lottie-player.min.js')}}"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
@endsection
