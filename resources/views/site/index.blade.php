@extends('layouts.site')

@section('stylesheet')
  <style>
    .about-t-s {
      /* margin-top: -50px; */
    }

    .touch-solve {
      font-weight: bold;
    }

    .about-t-s-container {
      color: whitesmoke !important;
      /* background-color: rgba(82, 122, 190, 0.993); */
      background-color: rgba(14, 36, 73, 0.993);
    }

    .about-ts {
      color: lightgray;
    }

    .client-head {
      font-weight: bold;
    }

    {{--<<<<<<< HEAD--}}

    .welcome-container {
      background-color: rgb(234, 234, 241);
    }

    .welcome-container > div {
      border: 1px solid rgba(34, 33, 33, 0.322);
    }

    .welcome-head {
      font-family: 'Times New Roman', Times, serif;
      font-size: 50px;
    }

    .welcome-bottom {
      width: 80px;
      border-bottom: 3px solid rgb(61, 114, 252);
    }

    .welcome-text {
      font-family: 'Times New Roman', Times, serif;
      color: rgb(102, 92, 92);
      text-align: justify;
      font-size: 22px;
    }

    /* [1] The container */
    .img-hover-zoom {
      /* height: 300px; [1.1] Set it as per your need */
      position: relative;
      overflow: hidden; /* [1.2] Hide the overflowing of child elements */
    }

    /* [2] Transition property for smooth transformation of images */
    .img-hover-zoom img {
      transition: transform .5s ease;
    }

    /* [3] Finally, transforming the image when container gets hovered */
    .img-hover-zoom:hover img {
      transform: scale(1.2);
      /* padding: 3px; */
    }

    .img-hover-zoom:hover {

      border-bottom: 3px solid rgb(61, 114, 252);
    }

    .img-hover-zoom {

      border-bottom: 3px solid rgb(43, 42, 42);
    }

    .img-text {
      position: absolute;
      bottom: 0px;
      left: 0px;
      padding: 5px 10px;
      background-color: rgb(61, 114, 252);
      color: white;
      font-weight: bold;
      font-size: 18px;
      /* z-index: 111; */
    }

    .graduates-list > a {
      text-decoration: none;
      color: white;

    }

    .graduates-list:hover i {
      transition: ease-in-out .5s;
      color: lightgreen;
      transform: scale(1.5);
    }
  </style>
@endsection


@section('content')


<!-- Start Home -->
<section class="bg-home" style="background: url('{{asset('assets/frontend/images/bg-home.jpg')}}') center center;">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading text-center text-white">
                            <h6 class="small-title text-uppercase text-light mb-3">Find identity, create trackable resumes and enrich your applications.</h6>
                            <h1 class="heading font-weight-bold mb-4">The Easiest Way to Get Your New Identity</h1>
                        </div>
                    </div>
                </div>
                <div class="home-form-position">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-registration-form p-4 mb-3">
                                <form class="registration-form">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-briefcase"></i>
                                                <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Job keybords...">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-location-arrow"></i>
                                                <select id="select-country" class="demo-default">
                                                    <option value="">Location</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">&Aring;land Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <i class="fa fa-list-alt"></i>
                                                <select id="select-category" class="demo-default">
                                                    <option value="">Categories...</option>
                                                    <option value="4">Accounting</option>
                                                    <option value="1">IT & Software</option>
                                                    <option value="3">Marketing</option>
                                                    <option value="5">Banking</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="registration-form-box">
                                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

@endsection
@section('script')
@endsection
