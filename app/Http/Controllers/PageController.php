<?php

namespace App\Http\Controllers;

use App\LinkService;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class PageController extends Controller
{
    protected $linkService;

    public function __construct(LinkService $linkService){
        // Metoda służąca do generowania linków - logika w Service - "LinkService.php"
        $this->linkService  = $linkService;
    }

    public function mobile()
    {
        $skills = Skill::all();
        $works = Work::all();
        $sections = Skill::pluck('section')->unique()->filter();

        return view('pages.mobile', ['links' => $this->linkService->getLinks('mobile'), 'works' => $works, 'skills' => $skills, 'sections' => $sections]);
    }

    public function contact()
    {
        return view('pages.contact', ['links' => $this->linkService->getLinks('contact')]);
    }
    public function home()
    {
        return view('pages.home', ['links' => $this->linkService->getLinks('home')]);
    }
    public function skills()
    {
        $skills = Skill::all();
        $sections = Skill::pluck('section')->unique()->filter();

        return view('pages.skills', ['links' => $this->linkService->getLinks('skills'), 'skills' => $skills, 'sections' => $sections]);
    }
    public function works()
    {
        $works = Work::all();
        $sections = Work::pluck('section')->unique()->filter();

        return view('pages.works', ['links' => $this->linkService->getLinks('works'), 'works' => $works, 'sections' => $sections]);
    }
}
