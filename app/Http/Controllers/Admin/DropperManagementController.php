<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class DropperManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function namagerList()
    {

        return view('admin.pages.dropper_management.manager.list');
    }

    public function dropperList()
    {

        return view('admin.pages.dropper_management.dropper.list');
    }

    public function dropperOnboardingList()
    {

        return view('admin.pages.dropper_management.dropper_onboarding.list');
    }

    public function flaggedList()
    {

        return view('admin.pages.home.flagged.list');
    }
}
