<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Villa; // <-- Tambahkan baris ini untuk memanggil tabel Villa

class AdminController extends Controller
{
    public function index()
    {
        $villas = Villa::all(); 
        
        return view('admin.dashboard', compact('villas'));
    }
}