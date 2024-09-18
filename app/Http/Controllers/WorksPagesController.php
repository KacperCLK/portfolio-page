<?php

namespace App\Http\Controllers;

use App\Models\VP_HomeSliderImg;
use App\Models\VP_Member;
use App\Models\VP_Offer;
use App\Models\VP_OurWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Schema;

class WorksPagesController extends Controller
{
    public function show($project_name)
    {
        $viewPath = 'works.' . $project_name . '.index';
        
        // Check if view exist
        if (View::exists($viewPath)) {
            // Widok w przypadku mojej pracy - v-project
            if ($viewPath == 'works.v-project.index') {
                $offerColumns = Schema::getColumnListing((new VP_Offer())->getTable());
                $filteredColumns = array_diff($offerColumns, ['created_at', 'updated_at', 'id']);

                return view($viewPath,
                    ['homeSliderImages' => VP_HomeSliderImg::select('home_slider_imgs')->get(),
                    'members' => VP_Member::select('member_name', 'member_image_url', 'vector_image_url', 'member_git_link', 'displaying', 'member_color', 'member_short_desc')->get(),
                    'offers' => VP_Offer::select('description', 'time', 'cost')->get(),
                    'offerColumns' => $filteredColumns,
                    'ourWorks' => VP_OurWork::select('title', 'displaying','description','bg_color')->get(),
                ]);

            } else {
                return view($viewPath);
            }
        } else {
            abort(404, 'Project not found');
        }
    }
}