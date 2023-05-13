@props(['project'])
<div id="{{ $project->id }}"
    class="ModalCarousel fixed z-50 top-0 left-0 flex align-center w-full h-full bg-white pt-20 lg:p-20"
    style="display: none">
    <div class="fixed z-50 top-5 right-10">
        <img class="closeCarousel w-16 opacity-30 hover:cursor-pointer hover:opacity-100"
            src="{{ asset('assets/icons/close.svg') }}" alt="">
    </div>
    <div class="mx-auto">
        <x-carousel :project="$project" />
    </div>
</div>
