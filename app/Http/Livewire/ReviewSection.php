<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Submission;
use App\Models\Flight;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReviewSection extends Component
{
    public $airline;
    public $aircraft;
    public $leg1;
    public $leg2;
    public $user;
    public $submission;

    public function mount()
    {
        $this->user = Auth::user();
        $this->airline  = session('airline');
        $this->aircraft = session('aircraft');
        $this->leg1     = session('leg1')->toArray();

        if (session('leg2')) {
            $this->leg2 = session('leg2')->toArray();
        }
    }

    public function handleLeg1($submissionId)
    {

        $this->leg1 = new Flight($this->leg1);
        $this->leg1->save();

        //dd($this->leg1);
        $this->leg1->update([
            "airline_id" => $this->airline->id,
            "aircraft_id" => $this->aircraft->id,
            "agent_id" => $this->user->agent_id,
            "leg_id" => null,
            "submission_id" => $submissionId,
            "info" => null,
        ]);
        $this->leg1->purposes()->attach(session('purpose'));
    }

    public function handleLeg2($submissionId)
    {

        if ($this->leg2) {
            $this->leg2 = new Flight($this->leg2);
            $this->leg2->save();
            $this->leg2->update([
                "airline_id" => $this->airline->id,
                "aircraft_id" => $this->aircraft->id,
                "agent_id" => $this->user->agent_id,
                "leg_id" => $this->leg1->id,
                "submission_id" => $submissionId,
                "info" => null,
            ]);
            $this->leg1->update([
                "leg_id" => $this->leg2->id,
            ]);

            $this->leg2->purposes()->attach(session('purpose'));
        } else {
            return $this->leg2;
        }
    }

    public function handleNewSubmission()
    {

        $newSubmission = new Submission([
            'requester_id' => $this->user->id,
            'approver_id' => null,
            'state_id' => 2,
            'info' => null,
        ]);
        $newSubmission->ref = $newSubmission->getRef();
        $newSubmission->save();
        return $newSubmission;
    }

    public function submit()
    {
        $submission = $this->handleNewSubmission();
        //dd($submission->id);
        $this->handleLeg1($submission->id);
        $this->handleLeg2($submission->id);
        return redirect()->back()->with('success', 'Your submission is successfully stored in the system');
    }


    public function render()
    {
        return view('livewire.requests.review-section');
    }
}
