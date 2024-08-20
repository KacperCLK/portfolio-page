<?php

namespace App;

class LinkService
{
    /**
     * Funkcja tworząca linki - używana w kontrolerach
     */
    public function getLinks($activePage)
    {
        $pages = [
            'home' => 'Home',
            'skills' => 'Skills',
            'works' => 'Works',
            'contact' => 'Contact',
        ];

        $links = [];

        foreach ($pages as $slug => $name) {
            $links[] = [
                'name' => $name,
                'url' => route($slug),
                'active' => $slug === $activePage,
            ];
        }

        return $links;
    }
}
