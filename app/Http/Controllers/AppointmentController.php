<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Livewire\WithPagination;
use App\Services\CourseService;
use App\Utility\ProjectConstants;
use App\Repositories\UserRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\CaseHistoryRepository;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Http\Livewire\Traits\CommonListElements;
use App\Repositories\AppointmentRepository;

class AppointmentController extends Controller
{
    use WithPagination, CommonListElements;

    public $record;
    private AppointmentRepository $repo;

    public function __construct(

        AppointmentRepository $repo,
    ) {

        $this->repo = $repo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
        ];
         return view('student.Appointments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {
        $this->repo->store($request->validated());
        Session::flash('success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        $data = [
            'records' => $appointment,
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
        ];
         return view('student.Appointments.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $data = [
            'records' => $appointment,
            'gender' => ProjectConstants::$genders,
            'bloodGroups' => ProjectConstants::$bloodGroups,
        ];
         return view('student.Appointments.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
