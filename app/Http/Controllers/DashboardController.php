<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Flight;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(User $user)
    {
        $user = Auth::user();
        return view('dashboard.index', compact('user'));
    }

    public function getMyDetails()
    {
        $user = Auth::user();
        $roles = Role::all();
        return view('dashboard.myDetails', compact('user', 'roles'));
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

    public function getTrackPermissions(User $user)
    {

        $permissions = Permission::all();
        return view('dashboard.trackPermission', compact('permissions', 'user'));
    }


    public function getCompanyPermissions(User $user)
    {
        $company = $user->getCompany();
        $permissions = $company->permissions()->paginate(3);
        //dd($permissions);
        return view('dashboard.companyPermissions', compact('company', 'permissions'));
    }



    public function getCreateReport(User $user)
    {

        return view('dashboard.reports.customReport');
    }

    public function getReportResults(Request $request)
    {
        $request->validate([
            'start' => 'required',
            'end' => 'required'
        ]);

        $startDate = $request->input('start');
        $endDate = $request->input('end');
        $flights = Flight::whereBetween('origin_dof', [$startDate, $endDate])->get();
        return view('dashboard.reports.results', compact(['startDate', 'endDate', 'flights']));
    }
}
