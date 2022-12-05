<!-- <hr class="mt-12 text-separator"/> -->
<div class="w-6/12 ml-14 mb-5 flex flex-col items-center">
    <h2 class="Title font-black text-3xl py-2.5 text-orange mt-10">Agenda</h2>
    <hr class="w-28 shadow-lg border-secondaryText"/>
</div>
@foreach($agendas as $event)

    <div class="shadow w-full flex max-h-28 group mb-2.5 lg:w-10/12 lg:mx-auto">
        <div class="w-24 bg-white border-orange border-2 text-center group-hover:bg-orange lg:w-24 flex items-center lg:justify-center">
            <p class="w-24 text-3xl font-light text-orange group-hover:text-white">{{date('d', strtotime($event['begin_at']))}}
                <br><span
                    class="uppercase text-orange font-black group-hover:text-white">
                    {{Carbon\Carbon::parse($event['begin_at'])->translatedFormat('M')}}
{{--                    {{date('M', strtotime($event['begin_at']))}}--}}
                </span>
            </p>
        </div>
        <div class="p-2.5 bg-green w-full lg:w-5/12 group-hover:bg-white">
            <h2 class="w-64 md:w-96 lg:w-72 xl:w-96 2xl:w-full Title uppercase font-black text-xl lg:text-2xl text-white overflow-hidden overflow-ellipsis whitespace-nowrap group-hover:text-green">{{$event['title']}}</h2>
            <p class="text-sm font-normal leading-tight py-0.5 text-white group-hover:text-green">Projet de fresque avec La HELHA à La
                Louvière.</p>
        </div>
        <div class="hidden md:block w-6/12 overflow-hidden">
            <img class="md:h-full lg:h-auto lg:w-full" src="assets/agenda_test.png" alt="">
        </div>
        <div class="hidden md:block w-24">
            <p class="text-6xl font-black flex justify-center h-full h-full items-center group-hover:text-orange group-hover:translate-x-2">></p>
        </div>
    </div>
@endforeach


