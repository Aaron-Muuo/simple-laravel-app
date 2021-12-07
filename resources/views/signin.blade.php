@extends('layouts.master')
@section('pageTitle', 'Sign in')

@section('meta')
<meta name="google-signin-client_id" content="583603447446-llb861bnrish66ifsptto9r0t0288e6n.apps.googleusercontent.com">
@endsection

@section('content')
<div class="row mt-5">
 

    <div class="row justify-content-center">
        <div class="col-md-4">
            <lottie-player src="{{asset('json/signin.json')}}"  background="transparent"  speed="1"  style="width: 200px; height: 200px; margin:auto;"  loop autoplay></lottie-player>

                    <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Sign in</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Create account</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="" class="mt-3">
                                    <label for="email">Email address</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control form-control"  id="email">
                                    </div>
                                    <label for="password">Password</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control form-control"  id="password">
                                    </div>
                                    <div>
                                        <input type="checkbox" class="form-check-input" id="check">
                                        <label class="form-check-label fw-bold" for="check"> Keep me signed in</label>
                                        <span class="float-end"><a href="/signin/reset" class="fw-bold link-success">Forgot password</a></span>
                                    </div>
                                    <div class="input-group mt-3">
                                        <input type="submit" class="btn btn-md btn-secondary form-control"  id="submit" value="Sign in">
                                    </div>
                                    <p class="text-center text-muted mt-3">OR</p>
                                    <div class="mt-3" style="display:flex; justify-content:center;">
                                        <div class="g-signin2" id="g-signin2"></div>
                                    </div>
                                </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           
                            <form action="" class="mt-3">
                                <label for="username">User name</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control form-control"  id="username">
                                </div>
                                <label for="email">Email address</label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control form-control"  id="email">
                                </div>
                                <label for="password">Password</label>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control form-control"  id="password">
                                </div>
                                <label for="password2">Confirm password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control form-control"  id="password2">
                                </div>
                                <label for="password2">Confirm password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control form-control"  id="password2">
                                </div>
                                <div class="input-group mt-3">
                                    <input type="submit" class="btn btn-md btn-secondary form-control"  id="submit" value="Create">
                                </div>
                            </form>
                        </div>
                      </div>
           
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{asset('js/lottie-player.min.js')}}"></script>
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

<script>
      function renderButton() {
      gapi.signin2.render('g-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSignIn,
        'onfailure': onFailure
      });
    }
    function onFailure(){

    }
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>
@endsection
