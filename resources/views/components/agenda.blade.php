<!-- <hr class="mt-12 text-separator"/> -->
<h2 class="Title font-black text-3xl py-2.5 text-orange mt-10">Agenda</h2>
<hr class="mb-6 w-28 shadow text-separator"/>
@foreach($agendas as $event)

    <div class="card shadow w-11/12 flex">
        <div class="bg-white border-orange border-2 text-center">
            <p class="text-3xl font-light text-orange py-5 px-1.5 w-20">{{date('d', strtotime($event['begin_at']))}}
                <span
                    class="uppercase text-orange font-black">
                    {{Carbon\Carbon::parse($event['begin_at'])->translatedFormat('M')}}
{{--                    {{date('M', strtotime($event['begin_at']))}}--}}
                </span>
            </p>
        </div>
        <div class="pt-2.5 pl-2.5 bg-green">
            <h2 class="Title uppercase font-black text-2xl leading-7 text-white">{{$event['title']}}</h2>
            <p class="text-sm font-normal leading-tight py-0.5 text-white">Projet de fresque avec La HELHA à La
                Louvière.</p>
        </div>
    </div>
@endforeach


