<?php

namespace App\Controllers\AbhinavControllers;

use App\Controllers\BaseController;
use Config\Database;

class DesignationController extends BaseController
{
    public function jqgrid()
    {
        $data['css'] = [
            'node_modules/jquery-ui/dist/themes/base/jquery-ui.min.css',
            'node_modules/free-jqgrid/dist/css/ui.jqgrid.min.css',
            'node_modules/free-jqgrid/dist/plugins/css/ui.multiselect.min.css'
        ];
        $data['js'] = [
            'node_modules/free-jqgrid/dist/jquery.jqgrid.min.js',
            'assets/js/abhinav/designation/main.js'
        ];
        return view('AbhinavViews/designation/jqgrid', $data);
    }

    public function jqgrid_edit_function()
    {
        switch (6) {
            case 'add':
                break;
            case 'edit':
                break;
            case 'del':
                break;
        }

        echo "hi";
        /*echo json_encode(array(
            'status' => "success",
            "hi" => 'hello'
        ));*/
    }

    public function designation_data()
    {
        // Establish a database connection (assuming you're using CodeIgniter)
        $db = Database::connect();

        // Query to retrieve data from the database table
        $query = $db->table('designation')->get();

        // Check if data is fetched successfully
        if ($query->getResult()) {
            $data = $query->getResultArray();

            // Return JSON encoded data in the expected format
            return json_encode(array(
                'status' => "success",
                'message' => '',
                'rows' => $data
            ));
        } else {
            // Return JSON encoded error message if data retrieval fails
            return json_encode(array(
                'status' => "error",
                'message' => 'Failed to fetch data from the database.',
                'rows' => []
            ));
        }
    }
}
