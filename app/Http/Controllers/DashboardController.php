<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(User $user)
    {
        $user = Auth::user();
        return view('dashboard.index', compact('user'));
    }

    public function getCompanySubmissions(User $user)
    {
        $company = $user->getCompany();
        $submissions = $company->submissions()->paginate(4);
        return view('dashboard.companySubmissions', compact('company', 'submissions'));
    }

    public function getUserSubmissions(User $user)
    {


        $submissions = $user->submissions()->paginate(3);
        return view('dashboard.userSubmissions', compact('submissions', 'user'));
    }


    public function getCompanyPermissions(User $user)
    {
        $company = $user->getCompany();
        $permissions = $company->permissions()->paginate(3);
        //dd($permissions);
        return view('dashboard.companyPermissions', compact('company', 'permissions'));
    }
}
