@extends('layouts.app')

@section('content')
<section class="shadow p-2.5 lg:p-0 lg:w-7/12 2xl:w-4/12 lg:flex lg:flex-col lg:mx-auto">
    <x-details :video="$video" />
</section>
@endsection
