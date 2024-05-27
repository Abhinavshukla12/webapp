<?php

namespace App\Controllers\AbhinavControllers;

use App\Controllers\BaseController;

class Dashboard_controller extends BaseController
{
    public function index()
    {
        $data = [];
        return view('AbhinavViews/dashboard/index', $data);
    }
    public function all_files()
    {
        $data = [];
        return view('AbhinavViews/dashboard/all_files', $data);
    }
    public function inbox()
    {
        $data = [];
        return view('AbhinavViews/dashboard/inbox', $data);
    }
    public function sent()
    {
        $data = [];
        return view('AbhinavViews/dashboard/sent', $data);
    }
    public function office_detail()
    {
        $data = [];
        return view('AbhinavViews/dashboard/office_detail', $data);
    }


    //code for department button 
    public function department()
    {
        $data['css'] = [
            'node_modules/jquery-ui/dist/themes/base/jquery-ui.min.css',
            'node_modules/free-jqgrid/dist/css/ui.jqgrid.min.css',
            'node_modules/free-jqgrid/dist/plugins/css/ui.multiselect.min.css'
        ];
        $data['js'] = [
            'node_modules/free-jqgrid/dist/jquery.jqgrid.min.js',
            'assets/js/project/designation/jqgrid/main.js'
        ];
        return view('AbhinavViews/dashboard/department', $data);
    }
    //data code goes here
    public function user_data()
    {
    // Establish a database connection
    $db = \Config\Database::connect();

    // Query to retrieve data from the 'departments' table
    $query = $db->table('departments')->get();

    // Check if data is fetched successfully
    if ($query->getResult()) {
        $data = $query->getResultArray();

        // Return JSON encoded data in the expected format
        return json_encode(array(
            'status' => "success",
            'message' => '',
            'rows' =>  $data
        ));
    } 
    else {
        // Return JSON encoded error message if data retrieval fails
        return json_encode(array(
            'status' => "error",
            'message' => 'Failed to fetch data from the database.',
            'rows' =>  []
            ));
        }
    }
    public function employee()
    {
        $data = [];
        return view('AbhinavViews/dashboard/employee', $data);
    }
    public function profile()
    {
        $data = [];
        return view('AbhinavViews/dashboard/profile', $data);
    }
    public function change_password()
    {
        $data = [];
        return view('AbhinavViews/dashboard/change_password', $data);
    }
    public function logout()
    {
        $data = [];
        return view('AbhinavViews/dashboard/logout', $data);
    }
}
