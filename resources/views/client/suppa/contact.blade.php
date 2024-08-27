@extends('client.layouts.app')

@section('content')
    <!-- page title -->
    <section id="page-title" class="text-light"
        style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url({{ asset(setting('contacts')) }}); background-size: cover; background-position: center center;">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="page-title">
                <h1>CONTACT</h1>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="{{ route('client.noti') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa fa-user icon" style="margin-bottom:-4px !important; color: #A1A2A3;"
                                        aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa fa-align-left icon" style="margin-bottom:-4px !important; color: #A1A2A3;"
                                        aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Subject" name="subject"
                                    id="subject" required="">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope icon" style="margin-bottom:-4px !important; color: #A1A2A3;"
                                        aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Email" name="email" id="email"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa fa-phone icon" style="margin-bottom:-4px !important; color: #A1A2A3;"
                                        aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Tel" name="tel" id="phone">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fa fa-commenting icon" style="margin-bottom:-4px !important; color: #A1A2A3;"
                                        aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Remarks" name="remark"
                                    id="message" required="">
                            </div>
                        </div>
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        <div class="col text-center mt-2">
                            <button class="btn button-73"
                                style="border-radius:100px; 
                                text-align:center !important; 
                                color:#fff !important; 
                                background-color:#89C54D;
                                border-color: #89C54D;
                                ">Submit</button>

                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="container-fluid">
                        <img src="{{ asset(setting('aboutus')) }}" style="max-width: 100%; height: auto;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
