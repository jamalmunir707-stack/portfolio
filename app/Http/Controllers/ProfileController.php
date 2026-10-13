<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Contact;

class ProfileController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $projects = Project::all();
        $contacts = contact::all();
        
        return view('welcome', compact(
            'skills',
            'projects',
            'contacts'
        ));
    }
}