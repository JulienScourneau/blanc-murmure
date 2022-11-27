<!-- <hr class="mt-12 text-separator"/> -->
<h2 class="Title font-black text-3xl py-2.5 text-orange mt-10">Agenda</h2>
<hr class="mb-6 w-28 shadow text-separator"/>
@foreach($agendas as $event)

    <div class="card shadow w-11/12 flex">
        <div class="bg-white border-orange border-2 text-center xl:w-24 flex justify-center">
            <p class="text-3xl font-light text-orange py-5 px-1.5 w-20">{{date('d', strtotime($event['begin_at']))}}
                <span
                    class="uppercase text-orange font-black">
                    {{Carbon\Carbon::parse($event['begin_at'])->translatedFormat('M')}}
{{--                    {{date('M', strtotime($event['begin_at']))}}--}}
                </span>
            </p>
        </div>
        <div class="pt-2.5 pl-2.5 bg-green xl:w-6/12">
            <h2 class="Title uppercase font-black text-2xl leading-7 text-white">{{$event['title']}}</h2>
            <p class="text-sm font-normal leading-tight py-0.5 text-white">Projet de fresque avec La HELHA à La
                Louvière.</p>
        </div>
        <div class="hidden xl:block w-6/12 bg-orange">
            <img src="" alt="">
        </div>
        <div class="hidden xl:block w-24">
            <p class="text-6xl font-black flex justify-center h-full h-full items-center">></p>
        </div>
    </div>
@endforeach


