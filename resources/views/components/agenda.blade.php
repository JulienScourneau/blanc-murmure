<!-- <hr class="mt-12 text-separator"/> -->
<div class="w-6/12 ml-14 mb-5 flex flex-col items-center">
    <h2 class="Title font-black text-3xl py-2.5 text-orange mt-10">Agenda</h2>
    <hr class="w-28 shadow-lg border-secondaryText"/>
</div>
@foreach($agendas as $event)

    <div class="shadow w-full flex max-h-28 group mb-2.5 mx-auto sm:w-11/12 lg:w-8/12 xl:w-6/12 lg:mx-auto">
        <div class="w-24 bg-white border-orange border-2 text-center group-hover:bg-orange lg:w-44 flex items-center lg:justify-center">
            @if ($event['end_at'])
                <p class="w-40 text-sm lg:text-2xl font-light text-orange group-hover:text-white">
                    {{date('d', strtotime($event['begin_at']))}}
                    <br><span
                        class="uppercase text-orange font-black group-hover:text-white">
                        {{Carbon\Carbon::parse($event['begin_at'])->translatedFormat('M')}}
{{--                    {{date('M', strtotime($event['begin_at']))}}--}}
                    </span>
                </p>
                    <p>-</p>
                <p class="w-40 text-sm lg:text-2xl font-light text-orange group-hover:text-white">
                    {{date('d', strtotime($event['end_at']))}}
                    <br><span
                        class="uppercase text-orange font-black group-hover:text-white">
                        {{Carbon\Carbon::parse($event['begin_at'])->translatedFormat('M')}}
{{--                    {{date('M', strtotime($event['begin_at']))}}--}}
                    </span>
                </p>
            @else
                <p class="w-44 text-sm lg:text-2xl font-light text-orange group-hover:text-white">{{date('d', strtotime($event['begin_at']))}}
                    <br><span
                        class="uppercase text-orange font-black group-hover:text-white">
                        {{Carbon\Carbon::parse($event['begin_at'])->translatedFormat('F')}}
{{--                    {{date('M', strtotime($event['begin_at']))}}--}}
                    </span>
                </p>
            @endif
        </div>
        <div class="p-2.5 bg-green w-full lg:w-8/12 group-hover:bg-white">
            <h2 class="w-64 md:w-96 lg:w-72 xl:w-86 2xl:w-96 Title uppercase font-black text-xl lg:text-2xl text-white overflow-hidden overflow-ellipsis 2xl:overflow-none whitespace-nowrap group-hover:text-green">{{$event['title']}}</h2>
            <p class="text-sm font-normal leading-tight py-0.5 text-white group-hover:text-green">Projet de fresque avec La HELHA à La Louvière.</p>
        </div>
        <div class="hidden sm:block w-6/12 h-20 overflow-hidden">
            <img class="h-full lg:w-full object-cover" src="{{asset('storage/'. $event['thumbnail'])}}" alt="">
        </div>
    </div>
@endforeach
