<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Services\ImageService;
use App\Models\User;

class ComapaniesController extends Controller
{
    protected $ImageService;

    public function __construct(ImageService $ImageService) {
        $this->ImageService = $ImageService;
    }

    public function index(Request $request){
        if(Auth::user()->isType(['ADMIN'])){
            
        $companies = Company::paginate();
        return view('company.index',['models' => $companies]);
        }else{
            return redirect()->route('admin')->with('error', 'You are not authorized to access this page.');
        }
    }

    public function create(){
        return view('company.create');
    }

    public function store(CompanyRequest $request){
        // try {
            $logoPath = null;
            if($request->hasFile('logo')) {
                $logoPath = $this->ImageService->imageUploadServices($request, 'logo');
            }

            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->email.'@'.$request->mobile),
                'user_type' => 'COMPANY',
            ];

            $user_id = User::insertGetId($user_data);

            $data = [
                'name' => $request->name,
                'user_id' => $user_id,
                'code' => $request->code,
                'address_1' => $request->address_1,
                'address_2' => $request->address_2,
                'city' => $request->city,
                'state' => $request->state,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'website' => $request->website,
                'gstin' => $request->gstin,
                'pan' => $request->pan,
                'cin' => $request->cin,
                'logo' => $logoPath,
                'toggle' => 1, // Assuming toggle is a boolean field
                'admin_id' => Auth::user()->id, // Assuming admin_id is the ID of the authenticated user,
                'admin_user' => Auth::user()->name, // Assuming admin_user is the name of the authenticated user
            ];
            $company_id = Company::insertGetId($data);
            
            return redirect()->route('company.index')->with('status', 'Company created successfully With ID: ' . $company_id);


        // } catch (\Throwable $th) {
        //     return redirect()->route('companies.index')->with('error', 'Something went wrong. Please try again.');
        // }
    }

    public function edit($id){
        $company = Company::findOrFail($id);
        return view('company.edit', ['model' => $company]);
    }

    public function update(CompanyRequest $request, $id){
        $company = Company::findOrFail($id);
        $company->update($request->validated());
        return redirect()->route('company.index')->with('status', 'Company updated successfully.');
    }

    public function destroy($id){
        $company = Company::find($id);
        if (!$company) {
            return redirect()->route('company.index')->with('error', 'Company not found.');
        }
        $company->delete();

        $user = User::where('id', $company->user_id)->first();
        if ($user) {
            $user->delete();
        }
        return redirect()->route('company.index')->with('status', 'Company deleted successfully.');
    }

}
