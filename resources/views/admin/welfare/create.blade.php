@extends('layouts.app')

@section('content')
@include('include.error')
  <div class="card">
      <div class="card-header">Input</div>
      <div class="card-body">
                    <form action="{{route('welfare.store',['id' => $student->id])}}"  method="post" enctype="multipart/form-data"   >
                                {{ csrf_field()  }}


                                <div class="container">
                                        <u><h4>Academic Performance (40)</h4></u>
                                </div>

                        <div class="form-group">
                                <label for="maths">Week Number</label>
                                <input type="text" id="form1" name="week_id" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="maths">Mathematics</label>
                            <input type="text" name="academic_maths" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="english">English</label>
                                <input type="text" name="academic_english" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="physics">Physics</label>
                                <input type="text" name="academic_physics" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="chemistry">Chemistry</label>
                                <input type="text" name="academic_chemistry" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="biology">Biology</label>
                                <input type="text" name="academic_biology" class="form-control">
                        </div>

                        <div class="container">
                                <u><h4>Attendance Performance (5)</h4></u>
                        </div>

                        <div class="form-group">
                            <label for="maths">Mathematics</label>
                            <input type="text" name="attendance_maths" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="english">English</label>
                                <input type="text" name="attendance_english" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="physics">Physics</label>
                                <input type="text" name="attendance_physics" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="chemistry">Chemistry</label>
                                <input type="text" name="attendance_chemistry" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="biology">Biology</label>
                                <input type="text" name="attendance_biology" class="form-control">
                        </div>


                        <div class="form-group">
                                <label for="behave">Activiness/recent passion /change in behaivour</label>
                                <textarea  id="behave" cols="20" srows="10" name="behave" class="form-control"></textarea>
                        </div>
                        @include('sweet::alert')


                        <div class="form-group">
                                <div class="text-center">
                                <button type="submit" class="btn ">
                                SAVE AND SEND WELFARE ..
                                </button>
                                </div>
                        </div>

                        </form>

  </div>
@endsection
