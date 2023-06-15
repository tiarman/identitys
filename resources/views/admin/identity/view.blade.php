@extends('layouts.admin')


@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">

<style>
  <style>body {}

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container img {
    max-width: 100px;
    height: auto;
    margin-right: 10px;
  }

  .container h5 {
    margin: 0;
    color: #666;
  }

  .hidden {
    display: none;
  }
</style>

@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <section class="panel">
          <header class="panel-heading">
          </header>
          <div class="panel-body">
<div class="text-right">
  <button style="font-size: 20px; border-radius: 10px; padding: 10px" class="btn-primary" id="print-button" onclick="printPage()">PDF Download</button>
  
</div>          
            <div id="print-content">

            {{--  <a class="btn btn-primary" href="{{ route('pdfss') }}">Export TO PDF</a>  --}}
            <section style="background: #f6ffff; padding: 200px">

           
              <div style="justify-content: center">
                <div href="#" class="d-flex" style="justify-content: center">
                  <img class="me-3 rounded-circle" style="width: 40px; margin-right: 10px"
                    src="{{asset('assets/admin/images/bdlogo.png')}}">
                  <div class="chat-user-box">
                    <p class="m-0 user-title">Government of the People's Republic of Bangladesh
                    </p>
                    <p class="text-muted">Bureau of Manpower Employment and Training (BMET)</p>
                  </div>
                </div>

              </div>

              <div class="mt-5 text-center" style="background: #b1d7d7;">
                <h4 class="px-3 text-center heading position-relative"
                  style="background: #f6ffff; display: inline-block; font-size: 16px; font-weight: 400">BMET Emigration
                  Clearance Card</h4>
              </div>













              <div class="mt-4" style="text-align: -webkit-right;">
                <div class="row">
                  <div class="col-md-4" style="margin-top: 35px">
                    <img class="me-3" style="width: 100px; margin-right: 10px"
                      src="{{asset($identity->image)}}">
                    <br>
                    <div class="me-3" style="width: 100px; margin-right: 10px; visible-print"
                      style="text-align: -webkit-right;">
                      {!! QrCode::size(100)->generate(route('manage2', $identity->id)); !!}

                    </div>

                  </div>

                  <div class="col-md-6" style="text-align: left">

                    <h1 style="border-bottom: 1px solid #c3e8e8">Name <strong>{{$identity->name}}</strong></h1>
                    <h1 style="border-bottom: 1px solid #c3e8e8">Passport Number: <strong>{{$identity->passport_number}}</strong></h1>
                    <h1 style="border-bottom: 1px solid #c3e8e8">Passport Issue Date: <strong>{{$identity->passport_issue_date}}</strong></h1>
                    <h1 style="border-bottom: 1px solid #c3e8e8">Father: <strong>{{$identity->father}}</strong></h1>
                    <h1 style="border-bottom: 1px solid #c3e8e8">Spouse: <strong>{{$identity->spouse}}</strong></h1>
                    <h1 style="border-bottom: 1px solid #c3e8e8">BRA ID: <strong>{{$identity->bra}}</strong></h1>
                    <h1 style="border-bottom: 1px solid #c3e8e8">Clearance ID: <strong>{{$identity->clearance}}</strong></h1>
                    <h1 style="">Clearance Date: <strong>{{$identity->passport_issue_date}}</strong></h1>
                    {{--  <div class="table-responsive">
                      <table class="table mb-0">

                        <tbody>
                          <h1 style="text-align: left">Name <strong>{{$identity->name}} </strong></h1>
                          <tr>

                            <td>Passport Number: <strong>018792772</strong></td>

                          </tr>
                          <tr>

                            <td>Passport Issue Date: <strong>Aboul Basher</strong></td>

                          </tr>
                          <tr>

                            <td>Father: <strong>Aboul Basher</strong></td>


                          </tr>
                          <tr>

                            <td>Spouse: <strong>Aboul Basher</strong></td>


                          </tr>
                          <tr>

                            <td>BRA ID: <strong>Aboul Basher</strong></td>


                          </tr>
                          <tr>

                            <td>Clearance ID: <strong>Aboul Basher</strong></td>


                          </tr>
                          <tr>

                            <td>Clearance Date: <strong>Aboul Basher</strong></td>


                          </tr>
                        </tbody>
                      </table>
                    </div>  --}}
                  </div>


                  <div class="col-md-2">
                  </div>
                </div>
              </div>


              <div class="text-center" style="margin-top: 80px">
                <p style="font-size: 11px">Probash-Bondhu Call Center +88 08000102030 (Toll Free) +88 01784 333 333, +88 01794 333 333, +88 09610 102 030</p>
                <p style="font-size: 12px; font-weight: 600">For information, please contact Director (Emigration), Bureau of Manpower, Employment and Training (BMET) building, 89/2</p>
                <p style="font-size: 12px; font-weight: 600">Kakrail, Dhaka-1000, Bangladesh</p>
                <p style="font-size: 11px">Tel: 88-02-49357972, Fax: 88-02-8319948 www.bmet.gov.bd</p>

              </div>

            </section>

            </div>

           

          </div>
        </section>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
  function printPage() {
    // Hide the print button
    document.getElementById('print-button').classList.add('hidden');

    // Print the page
    window.print();

    // Show the print button again after a delay
    setTimeout(function() {
      document.getElementById('print-button').classList.remove('hidden');
    }, 1000);
  }
</script>


@endsection