<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function getSubmittedRequests()
    {
        $permissions = Permission::submitted()->get();
        return view('permissions.submitted', compact('permissions'));
    }


    public function newRequestStep1()
    {
        return view('requests.airlineSection');
    }
}
