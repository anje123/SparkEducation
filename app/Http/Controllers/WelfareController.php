<?php

namespace App\Http\Controllers;
// see https://getcomposer.org/doc/01-basic-usage.md
require_once  __DIR__.'/../../../vendor/autoload.php';

use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use Alert;
use Barryvdh\DomPDF\Facade as PDF;
use App\Attendance;
use App\Behave;
use App\Subject;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class WelfareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function student()
    {
        return view('admin.student')->with('students',User::all());
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function result()
    {
      $user_id =  Auth::user()->id;
      $sub = Subject::where('user_id',$user_id);

        return view('result',compact('sub'));
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.welfare.create')->with('student',User::find($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $this->validate($request,[

            'week_id' => 'required|string',
            'academic_maths' => 'required|string|max:255',
            'academic_english' => 'required|string|max:255',
            'academic_physics' => 'required|string|max:255',
            'academic_biology' => 'required|string|max:255',
            'academic_chemistry' => 'required|string|max:255',
            'attendance_maths' => 'required|string|max:255',
            'attendance_english' => 'required|string|max:255',
            'attendance_physics' => 'required|string|max:255',
            'attendance_biology' => 'required|string|max:255',
            'attendance_chemistry' => 'required|string|max:255'
        ]);


        $this->validate($request,[

            'week_id' => 'required|string',
            'academic_maths' => 'required|string|max:255',
            'academic_english' => 'required|string|max:255',
            'academic_physics' => 'required|string|max:255',
            'academic_biology' => 'required|string|max:255',
            'academic_chemistry' => 'required|string|max:255',
            'attendance_maths' => 'required|string|max:255',
            'attendance_english' => 'required|string|max:255',
            'attendance_physics' => 'required|string|max:255',
            'attendance_biology' => 'required|string|max:255',
            'attendance_chemistry' => 'required|string|max:255',
            'behave' => 'required|string'
        ]);

        Subject::create([
            'user_id' => $id,
            'week_id' => $request->week_id,
            'maths' => $request->academic_maths,
            'english' => $request->academic_english,
            'physics' => $request->academic_physics,
            'biology' => $request->academic_biology,
            'chemistry' => $request->academic_chemistry,
        ]);

        Attendance::create([
            'user_id' => $id,
            'week_id' => $request->week_id,
            'maths' => $request->attendance_maths,
            'english' => $request->attendance_english,
            'physics' => $request->attendance_physics,
            'biology' => $request->attendance_biology,
            'chemistry' => $request->attendance_chemistry,
        ]);

        Behave::create([
            'user_id' => $id,
            'week_id' => $request->week_id,
            'behave' => $request->behave
        ]);


        $user = User::find($id);
        $pdf = PDF::loadView('admin.pdf.result', compact('user','request'));

        $mail_student = ['name' => $user->firstName];

        Mail::send('admin.mail.view', $mail_student, function ($message) use($user,$pdf){
            $message->from('sparkEdu0@spark.com', 'Spark Edu');
            $message->to($user->email, $user->parent_name);
            $message->subject('From Spark Education');
            $message->attachData($pdf->output(), "$user->firstName.welfare.pdf");
        });


        $sid = env( 'TWILIO_SID' );
        $token = env( 'TWILIO_TOKEN' );
        $client = new Client( $sid, $token );

        $text = 'Name: '. $user->firstName.' ' .$user->lastName . ',  classwork/homework maxscore(40) -> ' . ',  maths : ' . $request->academic_maths . ',  english : ' . $request->academic_english
        . ',  attendance maxscore(5) -> ' .' math class: ' . $request->attendance_maths . ',  english class :  '. $request->attendance_english;

        $number = $user->parent_phone;


        $client->messages->create(
            $number,
            [
                'from' => env( 'TWILIO_FROM' ),
                'body' => $text,
            ]
        );

        Alert::message('Hello ','INFORMATION HAS BEEN SUCCESFUULY SENT')->autoclose(3000);

        return redirect()->route('student');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
