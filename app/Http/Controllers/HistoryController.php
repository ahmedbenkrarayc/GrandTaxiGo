<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class HistoryController extends Controller
{
    public function driverHistory(){
        return view('driver.history');
    }

    public function acceptReservation(Request $request, $id){
        $this->updateStatus($id, 'accepted');
        return back()->with('success', 'Reservation accepted successfully !');
    }

    public function rejectReservation(Request $request, $id){
        $this->updateStatus($id, 'rejected');
        return back()->with('success', 'Reservation rejected successfully !');
    }

    public function cancelReservation(Request $request, $id){
        $this->updateStatus($id, 'canceled');
        return back()->with('success', 'Reservation canceled successfully !');
    }

    private function updateStatus($id, $status){
        $reservation = Reservation::find($id);
        if($reservation){
            $reservation->status = $status;
            $reservation->save();
            return true;
        }

        return false;
    }

    public function passengerHistory(){
        return view('passenger.reservations');
    }

    public function findReservation(Request $request, $id){
        $reservation = Reservation::with('trajet', 'driver')->where('id', $id)->first();
        if(!$reservation)
            abort(404);
        return view('passenger.details', compact('reservation'));
    }
}
