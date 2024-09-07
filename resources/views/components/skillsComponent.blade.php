{{-- <div class="skills-page-bg-img"></div> --}}
<div id="skills" class="skills-page">
    <h1 class="skills-page__title main-title thickness-400">
        My <span class="font-colot-main-blue ">Skills</span>
    </h1>
    @foreach ($sections as $section)
        <div class="skills-page__section">
            @foreach ($skills as $skill)
                @if ($skill->section == $section)
                    <div class="skills-page__skill">
                        <span class="skills-page__skill-title">{{ $skill->name }}</span>
                        <span class="skills-page__skill-description">{{ $skill->description }}</span>
            
                        <div class="skills-page__progress-bar" pregress="{{ $skill->progres }}">
                            <div class="skills-page__progress" style="background-color: {{ $skill->color }}"></div>
                            <div class="skills-page__progress"></div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach

</div>