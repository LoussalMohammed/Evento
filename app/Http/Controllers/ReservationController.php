<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index() {
        $reservedEvents = DB::table('events')
            ->join('events', 'events.id', '=',  'reservations.event_id');

        dd($reservedEvents);
    }
}
