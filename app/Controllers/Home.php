<?php

namespace App\Controllers;
use App\Models\Education;
use App\Models\Experiences;
use App\Models\Skills;
class Home extends BaseController
{
    public function index(): string
    {
        $edu = new Education();
        $exp = new Experiences();
        $skill = new Skills();

        $data1 = $edu->getProjects();
        $data2 = $exp->getProjects();
        $data3 = $skill->getProjects();
        return view('index', compact('data1','data2','data3'));
    }
}
