<!-- <hr class="mt-12 text-separator"/> -->
<div class="w-6/12 ml-14 mb-5 flex flex-col items-center">
    <h2 class="Title font-black text-3xl py-2.5 text-orange mt-10">Agenda</h2>
    <hr class="w-28 shadow-lg border-secondaryText"/>
</div>
@foreach($agendas as $event)

    <div class="card shadow w-6/12 flex max-h-28 group">
        <div class="bg-white border-orange border-2 text-center group-hover:bg-orange xl:w-24 flex justify-center">
            <p class="text-3xl font-light text-orange py-5 px-1.5 w-32 group-hover:text-white">{{date('d', strtotime($event['begin_at']))}}
                <span
                    class="uppercase text-orange font-black group-hover:text-white">
                    {{Carbon\Carbon::parse($event['begin_at'])->translatedFormat('M')}}
{{--                    {{date('M', strtotime($event['begin_at']))}}--}}
                </span>
            </p>
        </div>
        <div class="pt-2.5 pl-2.5 bg-green xl:w-5/12 group-hover:bg-white">
            <h2 class="Title uppercase font-black text-2xl leading-7 text-white group-hover:text-green">{{$event['title']}}</h2>
            <p class="text-sm font-normal leading-tight py-0.5 text-white group-hover:text-green">Projet de fresque avec La HELHA à La
                Louvière.</p>
        </div>
        <div class="hidden xl:block w-6/12 overflow-hidden">
            <img class="h-full" src="assets/agenda_test.png" alt="">
        </div>
        <div class="hidden xl:block w-24">
            <p class="text-6xl font-black flex justify-center h-full h-full items-center group-hover:text-orange group-hover:translate-x-2">></p>
        </div>
    </div>
@endforeach


