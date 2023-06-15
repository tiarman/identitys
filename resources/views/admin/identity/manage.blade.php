@extends('layouts.admin')

@section('stylesheet')
@endsection

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <section class="panel">
            <header class="panel-heading">
              <h2 class="panel-title">Manage Identity</h2>
            </header>
            <div class="panel-body">
              @if(\App\Helper\CustomHelper::canView('List Of User', 'Super Admin'))
              <div class="row">
                <div class="mb-3 text-right col-lg-12 col-md-12 col-xl-12">
                  <a href="{{ route('identity.list') }}" class="brn btn-success btn-sm">List of Identity</a>
                </div>
              </div>
              @endif
              @if(session()->has('status'))
                {!! session()->get('status') !!}
              @endif

              <form action="{{ route('identity.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <input type="hidden" name="id" value="{{ $identity->id }}">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Name<span class="text-danger">*</span></label>
                      <input type="text" name="name" placeholder="Name" required value="{{ $identity->name }}"
                             class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                      <strong class="text-danger">{{ $errors->first('name') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Visa ID<span class="text-danger">*</span></label>
                      <input type="text" name="visa_number" placeholder="Email" required value="{{ $identity->visa_number }}"
                             class="form-control @error('visa_number') is-invalid @enderror">
                      @error('visa_number')
                      <strong class="text-danger">{{ $errors->first('visa_number') }}</strong>
                      @enderror
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Visa Issue Date<span class="text-danger">*</span></label>
                      <input type="text" name="visa_issue_date" placeholder="Name" required value="{{ $identity->visa_issue_date }}"
                             class="form-control @error('visa_issue_date') is-invalid @enderror">
                      @error('visa_issue_date')
                      <strong class="text-danger">{{ $errors->first('visa_issue_date') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Visa Exp Date<span class="text-danger">*</span></label>
                      <input type="text" name="visa_exp_date" placeholder="Email" required value="{{ $identity->visa_exp_date }}"
                             class="form-control @error('visa_exp_date') is-invalid @enderror">
                      @error('visa_exp_date')
                      <strong class="text-danger">{{ $errors->first('visa_exp_date') }}</strong>
                      @enderror
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Passport Number<span class="text-danger">*</span></label>
                      <input type="text" name="passport_number" placeholder="Name" required value="{{ $identity->passport_number }}"
                             class="form-control @error('passport_number') is-invalid @enderror">
                      @error('passport_number')
                      <strong class="text-danger">{{ $errors->first('passport_number') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Passport Issue Date<span class="text-danger">*</span></label>
                      <input type="text" name="passport_issue_date" placeholder="Email" required value="{{ $identity->passport_issue_date }}"
                             class="form-control @error('passport_issue_date') is-invalid @enderror">
                      @error('passport_issue_date')
                      <strong class="text-danger">{{ $errors->first('passport_issue_date') }}</strong>
                      @enderror
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Passport Exp Date<span class="text-danger">*</span></label>
                      <input type="text" name="passport_exp_date" placeholder="Name" required value="{{ $identity->passport_exp_date }}"
                             class="form-control @error('passport_exp_date') is-invalid @enderror">
                      @error('passport_exp_date')
                      <strong class="text-danger">{{ $errors->first('passport_exp_date') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Father Name<span class="text-danger">*</span></label>
                      <input type="text" name="father" placeholder="Email" required value="{{ $identity->father }}"
                             class="form-control @error('father') is-invalid @enderror">
                      @error('father')
                      <strong class="text-danger">{{ $errors->first('father') }}</strong>
                      @enderror
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Spouse<span class="text-danger">*</span></label>
                      <input type="text" name="spouse" placeholder="Name" required value="{{ $identity->spouse }}"
                             class="form-control @error('spouse') is-invalid @enderror">
                      @error('spouse')
                      <strong class="text-danger">{{ $errors->first('spouse') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">BRA ID<span class="text-danger">*</span></label>
                      <input type="text" name="bra" placeholder="Email" required value="{{ $identity->bra }}"
                             class="form-control @error('bra') is-invalid @enderror">
                      @error('bra')
                      <strong class="text-danger">{{ $errors->first('bra') }}</strong>
                      @enderror
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Clearance<span class="text-danger">*</span></label>
                      <input type="text" name="clearance" placeholder="Name" required value="{{ $identity->clearance }}"
                             class="form-control @error('clearance') is-invalid @enderror">
                      @error('clearance')
                      <strong class="text-danger">{{ $errors->first('clearance') }}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label">Clearance Date<span class="text-danger">*</span></label>
                      <input type="text" name="clearance_date" placeholder="Email" required value="{{ $identity->clearance_date }}"
                             class="form-control @error('clearance_date') is-invalid @enderror">
                      @error('clearance_date')
                      <strong class="text-danger">{{ $errors->first('clearance_date') }}</strong>
                      @enderror
                    </div>
                  </div>

                </div>

          <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="control-label">Clearance Date<span class="text-danger">*</span></label>
                    <input type="text" name="clearance_date" placeholder="Email" required value="{{ $identity->clearance_date }}"
                           class="form-control @error('clearance_date') is-invalid @enderror">
                    @error('clearance_date')
                    <strong class="text-danger">{{ $errors->first('clearance_date') }}</strong>
                    @enderror
                  </div>
                </div>

              </div>
                

               

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Image <label
                                class="text-danger">*</label></label>
                        <input type="file" name="image" placeholder="Slider image"
                               value="{{ old('image', $identity->image) }}"
                               class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <strong class="text-danger">{{ $errors->first('image') }}</strong>
                        @enderror
                    </div>
                </div>
                  <div class="col-sm-6 mt-2">
                    <div class="form-group">
                      <label class="control-label">Status<span class="text-danger">*</span></label>
                      <select name="status" required class="form-control @error('status') is-invalid @enderror">
                        <option value="">Choose a status</option>
                        @foreach(\App\Models\Identity::$statusArrays as $status)
                          <option value="{{ $status }}"
                                  @if(old('status', $identity->status) == $status) selected @endif>{{ ucfirst($status) }}</option>
                        @endforeach
                      </select>
                      @error('status')
                      <strong class="text-danger">{{ $errors->first('status') }}</strong>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="mt-4 row">
                  <div class="text-right col-sm-12">
                    <button class="btn btn-danger btn-sm" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
@endsection
