<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use App\Helper\CustomHelper;
use App\Helper\RedirectHelper;
use App\Models\Identity;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class IdentityController extends Controller
{
    public function index(){
        $data['data'] = Identity::orderby('created_at', 'desc')->paginate(20);
        return view('admin.identity.list', $data);
    }


    public function manage($id = null) {
        if ($data['identity'] = Identity::find($id)) {
         
          return view('admin.identity.manage', $data);
        }
        return RedirectHelper::routeWarning('identity.list', '<strong>Sorry!!!</strong> Identity not found');
      }

      


      public function view($id = null) {
        if ($data['identity'] = Identity::find($id)) {         
          return view('admin.identity.view', $data);
        }
        return RedirectHelper::routeWarning('identity.list', '<strong>Sorry!!!</strong> Identity not found');
      }





      public function createPDF($id = null)
      {
        if ($data = Identity::find($id)) {
        view()->share('identity', $data);
        $pdf = PDF::loadView('admin.identity.view', $data);
        return $pdf->download('pdf_file.pdf');
        }
        

      }


      public function manage2($id = null) {
        if ($data['identity'] = Identity::find($id)) {
          return view('admin.identity.manage2', $data);
        }
        return RedirectHelper::routeWarning('identity.list', '<strong>Sorry!!!</strong> Identity not found');
      }





    public function create($id = null){
        return view('admin.identity.create');
    }

    public function store(Request $request){
        // return $request;
        $message = '<strong>Congratulations!!!</strong> Identity successfully';
        $rules = [
            'name' => 'required|string',
            'visa_number' => 'required|string',
            'visa_issue_date' => 'nullable|string',
            'visa_exp_date' => 'nullable|string',
            'passport_number' => 'nullable|string',
            'passport_issue_date' => 'nullable|string',
            'passport_exp_date' => 'nullable|string',
            'father' => 'nullable|string',
            'spouse' => 'nullable|string',
            'bra' => 'nullable|string',
            'clearance' => 'nullable|string',
            'clearance_date' => 'nullable|string',
            'registration_number' => 'nullable|string',
            'image' => 'nullable|file|mimes:png,jpg,jpeg,svg|dimensions:width=98,height=132',
            'status' => ['required', Rule::in(\App\Models\Identity::$statusArrays)],
            // 'status' = ['required|string', Rule::in(\App\Models\Identity::$statusArrays)],
        ];

        if ($request->has('id')) {
            $identity = Identity::find($request->id);
            $message = $message . ' updated';
          } else {
            $identity = new Identity();
            $message = $message . ' created';
          }
          $request->validate($rules);

          try{
            $identity->name = $request->name;
            $identity->visa_number = $request->visa_number;
            $identity->visa_issue_date = $request->visa_issue_date;
            $identity->visa_exp_date = $request->visa_exp_date;
            $identity->passport_number = $request->passport_number;
            $identity->passport_issue_date = $request->passport_issue_date;
            $identity->passport_exp_date = $request->passport_exp_date;
            $identity->father = $request->father;
            $identity->spouse = $request->spouse;
            $identity->bra = $request->bra;
            $identity->clearance = $request->clearance;
            $identity->clearance_date = $request->clearance_date;
            $identity->registration_number = $request->registration_number;
            $identity->status = $request->status;
            $oldImage = $identity->image;
            if ($request->hasFile('image')) {
                $logo = CustomHelper::storeImage($request->file('image'), '/identity/');
                if ($logo != false) {
                    $identity->image = $logo;
                }
            }

            if ($identity->save()) {
                if ($oldImage !== null && isset($logo)) {
                    CustomHelper::deleteFile($oldImage);
                }
                return RedirectHelper::routeSuccessWithParams('identity.list', $message);
              }
            return RedirectHelper::backWithInput();

          }catch(QueryException $e){
            return $e;
            return RedirectHelper::backWithInputFromException();

          }

    }


    public function destroy(Request $request) {
        $id = $request->post('id');
        try {
          $user = Identity::find($id);
          if ($user->delete()) {
            return 'success';
          }
        } catch (\Exception $e) {
        }
      }


  /**
   * @param Request $request
   * @return string|void
   */
  public function ajaxUpdateStatus(Request $request) {
    if ($request->isMethod("POST")) {
      $id = $request->post('id');
      $postStatus = $request->post('status');
      $status = strtolower($postStatus);
      $user = Identity::find($id);
      if ($user->update(['status' => $status])) {
        return "success";
      }
    }
  }
}
