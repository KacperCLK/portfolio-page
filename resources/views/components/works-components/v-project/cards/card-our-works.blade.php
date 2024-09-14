@props(['id' => '', 'ourWorks' => []])

<div id="{{ $id }}" class="our-works u-margin-bottom-huge">
    <div class="our-works__title  u-margin-bottom-small"> {{__('Our Works:')}} </div>

    @foreach ($ourWorks as $work)
        <div class="our-works__iframe-container">
            <iframe class="our-works__iframe" src="{{route('our-works.show', $work->title)}}" frameborder="0"></iframe>
            <a class="our-works__btn" href="{{route('our-works.show', $work->title)}}">{{__('Show')}}</a>
        </div>
    @endforeach
</div>

