@extends('layouts.app')

@section('content')
       
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/contact_responsive.css')}}">

<!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1" style="border:1px solid gray; padding: 20px; border-radius: 25px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Sign In</div>

                        <form action="{{route('login')}}" id="contact_form" method="post">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email or Phone Number</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div> 

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="emailHelp" name="password" required="">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                        </form>
                        <br>
                        <a href="{{route('password.request')}}">Forgot Password?</a>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-facebook"></i> Login with Facebook</button>
                        <button type="submit" class="btn btn-danger btn-block"><i class="fab fa-google"></i> Login with Google</button>

                    </div>
                </div>



                <div class="col-lg-5 offset-lg-1" style="border:1px solid gray; padding: 20px; border-radius: 25px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Sign Up</div>

                        <form action="{{route('register')}}" id="contact_form" method="post"> 
                            @csrf
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Full Name" name="name" required="">
                                
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" aria-describedby="emailHelp" placeholder="Enter Your Phone Number" required="">
                                
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter Your Email"  required="">
                                
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Your Password" name="password" required="">
                                
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Confirm Your Password" name="password_confirmation" required="">
                                
                            </div>

                            <div class="contact_form_button">
                                <button type="submit" class="btn btn-info">Sign Up</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
        <div class="panel"></div>
    </div>





@endsection
