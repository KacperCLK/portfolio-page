<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V-Project</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/530790a84d.js" crossorigin="anonymous"></script>
    
    @livewireStyles
    @vite(['resources/css/worksPagesCSS/app.css', 'resources/scss/worksPagesSCSS/v-project/app.scss', 'resources/js/works/v-project/main.js'])

</head>
<body> 
    <x-works-components.v-project.layouts.header :links="[
        __('Home') => url()->current() . '#home',
        __('About us') => url()->current() . '#aboutUs',
        __('Offers') => url()->current() . '#offers',
        __('Contact') => url()->current() . '#contact',
        __('Our Works') => url()->current() . '#ourWorks',
    ]"/>

    <x-works-components.v-project.cards.card-home id="home" :homeSliderImages="$homeSliderImages"/>
    <x-works-components.v-project.cards.card-about-us id="aboutUs" :members="$members"/>
    <x-works-components.v-project.cards.card-offers id="offers" :offerColumns="$offerColumns" :offers="$offers"/>
    <x-works-components.v-project.cards.card-contact id="contact"/>
    <x-works-components.v-project.cards.card-our-works id="ourWorks" :ourWorks="$ourWorks"/>

    <x-works-components.v-project.layouts.footer :links="[
        __('Home') => url()->current() . '#home',
        __('About us') => url()->current() . '#aboutUs',
        __('Offers') => url()->current() . '#offers',
        __('Contact') => url()->current() . '#contact',
        __('Our Works') => url()->current() . '#ourWorks',
    ]"/>
</body>
</html>