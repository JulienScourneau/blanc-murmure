<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\HomePhoto;
use App\Models\Internship;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('home', [
            "internship" => $this->getNearestUpcomingInternship(Internship::all()),
            "photos" => HomePhoto::all(),
            "agendas" => $this->getAgendaList(),
        ]);
    }

    protected function getAgendaList()
    {
        $stages = Internship::all()->toArray();
        $events = Event::all()->toArray();

        $result = array_merge($stages, $events);

        usort($result, function ($a, $b) {
            return $a['begin_at'] > $b['begin_at'];
        });
        return $result;

    }

    public function getNearestUpcomingInternship($internships)
    {
        $nextInternship = null;
        foreach ($internships as $internship) {
            if ($internship->begin_at < Carbon::now()) {
                continue;
            }
            if (!$nextInternship || $internship->begin_at < $nextInternship->begin_at) {
                $nextInternship = $internship;
            }
        }
        return $nextInternship;
    }
}
