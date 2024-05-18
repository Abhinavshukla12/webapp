<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Validation extends Controller
{
    public function index()
    {
        helper('form'); // Load the Form Helper
        // Retrieve old input data from session, if available
        $old = session()->getFlashdata('old') ?? [];
        // Retrieve validation errors, if available
        $validation = session()->getFlashdata('validation') ?? null;
        return view('form', ['old' => $old, 'validation' => $validation]);
    }

    public function submit()
    {
        helper('form'); // Load the Form Helper
        $validation = \Config\Services::validation();
        $userModel = new UserModel();

        // Set validation rules (you can also use rules from UserModel)
        $rules = $userModel->getValidationRules();

        if ($this->validate($rules)) {
            // Validation passed
            // Save the data to the database
            $userModel->save($this->request->getPost());
            // echo 'Data saved successfully!';
            return view('layout/default');
        } else {
            // Store old input data in session
            session()->setFlashdata('old', $this->request->getPost());
            // Store validation errors in session
            session()->setFlashdata('validation', $validation);
            // Redirect back to the form page
            return redirect()->back()->withInput();
        }
    }
}
