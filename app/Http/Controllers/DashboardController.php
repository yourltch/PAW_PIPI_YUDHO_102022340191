<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set the timezone to Asia/Jakarta
        // - Create variables: name, hour, time
        // - Determine $greeting based on the hour (morning, afternoon, evening, night)
        // - Call the getTanggal() function
        // - Send data to the 'dashboard' view
    }

    private function getDate()
    {
        // ==================3==================
        // - Return the current date in the format dd-mm-yyyy
    }
}
