<?php

namespace App;

class LinkService
{
    public function getLinks($activePage)
    {
        $pages = [
            'home' => 'Home',
            'skills' => 'Skills',
            'works' => 'Works',
            'contact' => 'Contact',
        ];

        $links = [];

        if ($activePage === 'mobile') {
            foreach ($pages as $slug => $name) {
                $links[] = [
                    'name' => $name,
                    'url' => '#' . $slug,
                    'active' => "",
                ];
            }
        }else{
            foreach ($pages as $slug => $name) {
                $links[] = [
                    'name' => $name,
                    'url' => route($slug),
                    'active' => $slug === $activePage,
                ];
            }
        }

        return $links;
    }
}
