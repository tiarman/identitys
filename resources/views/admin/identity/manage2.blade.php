<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://clearance.amiprobashi.com/css/bootstrap.min.css">
  <link rel="shortcut icon" href="https://clearance.amiprobashi.com/img/ami.png">
  <title>Clearance Card</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
    }

    .cc_card_head {
      background-size: 100% 100%;
      position: relative;
    }

    .cc_card_body {
      background-size: 100% 100%;
      position: relative;
      padding: 0 6%;
    }

    .cc_top_content h4 {
      font-size: 16px;
    }

    .cc_card_footer {
      background-size: 100% 100%;
      position: relative;
    }

    .cc_top_logo {
      display: flex;
      justify-content: space-between;
    }

    .cc_person_box_item {
      background: #FFFFFF;
      box-shadow: 0px 15px 50px rgba(160, 163, 189, 0.2);
      border-radius: 10px;
      padding: 30px 15px;
      margin-bottom: 20px;
    }

    .cc_person_box_item p {
      margin-bottom: 0;
    }

    .cc_view_btn {
      background: #117D7C;
      border-radius: 4px;
      font-size: 12px;
      color: #FFFFFF;
      display: inline-block;
      padding: 3px 15px;
    }

    .candidate_info_area {
      background: linear-gradient(95.29deg, #057170 2.13%, rgba(17, 125, 124, 0.77) 110.17%);
      box-shadow: 0px 16.8372px 56.1239px rgba(160, 163, 189, 0.2);
      border-radius: 11.2248px;
      padding: 20px;
      align-items: center !important;
    }

    .scanned_btn {
      padding: 5px 15px;
      display: inline-block;
      background: #fff;
      font-weight: 600;
      font-size: 13.4697px;
      color: #117D7C;
      border-radius: 5px;
    }

    .candidate_top_info_left p {
      margin-bottom: 5px;
      font-size: 10px;
    }

    .candidate_document_list {
      background: #FFFFFF;
      border: 0.75px solid rgba(160, 163, 189, 0.4);
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 11.2248px;
      padding: 10px;
    }

    .candidate_document_list h5 {
      color: #057170;
    }

    .candidate_document_list p {
      font-size: 12px;
    }

    .cdlist_item {
      background: #FFFFFF;
      border: 0.5px solid rgba(160, 163, 189, 0.5);
      box-shadow: 0px 16px 56px rgba(160, 163, 189, 0.2);
      border-radius: 8px;
      padding: 15px;
    }

    .cdlist_item h5 {
      color: #057170;
    }

    .cdlist_item p {
      margin-bottom: 5px !important;
    }

    .cc_view_btn {
      background: #117D7C;
      border-radius: 4.48991px;
      color: #fff;
    }

    .candidate_img p {
      margin-bottom: 6px;
      margin-top: 6px;
    }

    .cc_person_info p {
      font-size: 20px;
    }

    .approval_btn2 .rejects_btn {
      border: 1.5px solid #E71D36;
      border-radius: 10px;
      font-weight: 600;
      font-size: 24px;
      line-height: 23px;
      color: #E71D36;
      display: inline-block;
      padding: 20px 50px;
      text-decoration: none;
      width: 48%;
      text-align: center;
    }

    .approval_btn2 .rejects_btn:hover {
      background: #E71D36;
      color: #fff;
    }

    .approval_btn2 .readytofly_btn {
      border: 1.5px solid #117D7C;
      border-radius: 10px;
      font-weight: 600;
      font-size: 24px;
      line-height: 23px;
      color: #fff;
      background: #117D7C;
      display: inline-block;
      padding: 18px 0px;
      text-decoration: none;
      width: 48%;
      text-align: center;
      margin-right: 20px;
    }

    .approval_btn2 .finger_btn {
      border: 1.5px solid #428464;
      border-radius: 10px;
      font-weight: 600;
      font-size: 30px;
      line-height: 23px;
      color: #428464;
      display: inline-block;
      padding: 20px 50px;
      text-decoration: none;
      width: 48%;
      text-align: center;
    }

    .approval_btn2 .readytofly_btn:hover {
      background: transparent;
      color: #117D7C;
    }

    .passport_item {
      background: #FFFFFF;
      border: 0.5px solid rgba(160, 163, 189, 0.5);
      box-shadow: 0px 16px 56px rgba(160, 163, 189, 0.2);
      border-radius: 8px;
      padding: 15px;
    }

    .passport_item h5 {
      color: #117D7C;
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 15px;
    }

    p {
      font-size: 22px;
    }

    .content_tab p {
      font-size: 14px;
    }

    .tab_green_content p {
      margin-bottom: 10px;
      font-size: 16px;
    }

    .submit_btn {
      background: #117D7C;
      border-radius: 7px;
      color: #fff;
    }

    .clearance_candidate_photo {
      height: 100px;
      width: 100px;
    }

    .approval_text {
      font-size: 20px;
      margin-bottom: 5px
    }

    @media(max-width: 576px) {
      .clearance_candidate_photo {
        height: 50px;
        width: 50px;
      }

      .scanned_btn {
        padding: 2px 6px;
        font-size: 10px;
      }

      .candidate_info_area {
        padding: 10px;
      }

      .content_tab p {
        font-size: 7px;
      }

      .tab_green_content p {
        font-size: 10px;
      }

      .passport_item h5 {
        font-size: 16px;
        margin-bottom: 0;
      }

      .approval_btn2 .finger_btn {
        font-size: 16px;
        padding: 10px 0;
      }

      .approval_text {
        font-size: 16px;
      }

      .approval_btn2 .readytofly_btn {
        font-size: 12px;
      }

      .approval_btn2 .readytofly_btn img {
        height: 10px;
      }

      .approval_btn2 .rejects_btn {
        font-size: 12px;
      }

      .approval_btn2 .rejects_btn {
        padding: 3px 0s;
      }

      .body__p {
        font-size: 12px;
        margin-bottom: 5px;
      }
    }
  </style>
</head>

<body>
  <div class="container py-3">
    <div class="row">
      <div class="col-md-12">
        <div class="cc_card_body">
          <div class="row">
            <div class="col-md-12">
              <div class="candidate_profile_info">
                <div class="media candidate_info_area">
                  <div class="candidate_img border-right pr-3">
                    <img style="width: 70px; margin-right: 10px"
                    src="{{asset($identity->image)}}">
                    <div class="scanned-btn mt-2">
                      <span class="scanned_btn">Scanned</span>
                    </div>
                  </div>
                  <div class="media-body ml-3">
                    <div class="tab_green_content text-light">
                      <p style="word-break: break-all;"><b>{{$identity->name}}</b></p>
                      <p>Passport No: <b>{{$identity->passport_number}}</b></p>
                      <p>Clearance ID: <b>{{$identity->clearance}}</b></p>
                      <p>Visa No: <b>{{$identity->visa_number}}</b></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">

            <div class="col-12 mt-3 mb-4">
              <div style="background:#fff" class="passport_item">
                <div class="row align-items-center">
                  <div class="col-6">
                    <p style="font-size: 16px;"><img class="mr-2"
                        src="https://clearance.amiprobashi.com/img/tab_image/icon.png" alt=""> Mojumder Overseas
                      (RL1181)</p>
                  </div>
                  <div class="col-6">
                    <p style="font-size: 16px;"><img class="mr-2"
                        src="https://clearance.amiprobashi.com/img/tab_image/icon-1.png" alt=""> KHALED MOHAMMED IBRAHIM
                    </p>
                  </div>
                  <div class="col-6">
                    <p style="font-size: 16px;"><img class="mr-2"
                        src="https://clearance.amiprobashi.com/img/tab_image/icon-2.png" alt=""> Saudi Arabia</p>
                  </div>
                  <div class="col-6">
                    <p style="font-size: 16px;"><img class="mr-2"
                        src="https://clearance.amiprobashi.com/img/tab_image/icon-3.png" alt=""> </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 ">
              <div style="background: rgba(207, 210, 252, 0.3)" class="passport_item">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h5>Passport</h5>
                    <p class="body__p">Passport Number : <b>{{$identity->passport_number}}</b> </p>
                    <p class="body__p">P. Issue date : <b>{{$identity->passport_issue_date}}</b></p>
                    <p class="body__p">P. Expiry date : <b>{{$identity->passport_exp_date ?? ''}}</b></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-12">
              <div class="passport_item">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h5>Visa</h5>
                    <p class="body__p">Visa No.: <b>{{$identity->visa_number}}</b> </p>
                    <p class="body__p">Visa Issue date: <b>{{$identity->visa_issue_date}}</b></p>
                    <p class="body__p">Visa Expiry date: <b>{{$identity->visa_exp_date}}</b></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mt-4">
              <div class="passport_item">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h5>BMET Clearance</h5>
                    <p class="body__p">Registration ID: <b>{{$identity->registration_number}}</b></p>
                    <p class="body__p">Clearance ID: <b>{{$identity->clearance}}</b></p>
                    <p class="body__p">Clearance date: <b>{{$identity->clearance_date}}</b></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="rejectReason" tabindex="-1" aria-labelledby="rejectReasonLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="rejectReasonLabel">Reject Reason</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <textarea aria-label="" class="form-control" id="remark" rows="4"
                      placeholder="Type here reason"></textarea>
                  </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <button id="reject-btn" type="button" class="btn submit_btn">
                    Submit
                    <span class="spinner-border d-none" id="reject-spin" style="width: 1rem; height: 1rem"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->

          <!-- Passport Modal Start -->
          <div class="modal fade" id="passportModal" tabindex="-1" aria-labelledby="passportModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="rejectReasonLabel">Passport File</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                {{--  <div class="modal-body">
                  <div class="form-group">

                    <iframe
                      src="https://amiprobashis3.s3.ap-southeast-1.amazonaws.com/images/document_wallet/passport/834_cb75c63d7e23e0edca770d3f2a5b9ae1.pdf?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIARRB2LOLRBWLVRTMS%2F20230614%2Fap-southeast-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20230614T124106Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=1200&amp;X-Amz-Signature=37bcdbd50b72ddf7316e6ea1c98a906debc7e4ebb326c0650b42e27a3bea0735"></iframe>
                  </div>
                </div>  --}}
                <div class="modal-footer d-flex justify-content-center">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->

          <!-- Visa Modal Start -->
          <div class="modal fade" id="visaModal" tabindex="-1" aria-labelledby="visaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="rejectReasonLabel">Visa File</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                {{--  <div class="modal-body">
                  <div class="form-group">
                    <iframe
                      src="https://amiprobashis3.s3.ap-southeast-1.amazonaws.com/images/document_wallet/visa/834_4557c1643fb1a0d868b7e730bcdd2036.pdf?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIARRB2LOLRBWLVRTMS%2F20230614%2Fap-southeast-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20230614T124106Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=1200&amp;X-Amz-Signature=dc3fc24e02b36953e0212b78506ef45397c15b6add6cbdf340add91c13679426"></iframe>
                  </div>
                </div>  --}}

                <div class="modal-footer d-flex justify-content-center">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->
        </div>
      </div>
    </div>
  </div>

  <script src="https://clearance.amiprobashi.com/js/jquery-3.6.1.min.js"></script>
  <script src="https://clearance.amiprobashi.com/js/bootstrap.min.js"></script>

</body>