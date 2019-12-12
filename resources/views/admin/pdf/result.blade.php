<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>
                    <table class="table">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col">Student ID No</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Mathematics Score(40)</th>
                                    <th scope="col">English Language Score(40)</th>
                                    <th scope="col">Physics Score(40)</th>
                                    <th scope="col">Chemistry Score (40)</th>
                                    <th scope="col">Biology Score (40)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-warning">
                                <td scope="row">{{$user->id}}</td>
                                <td scope="row">{{$user->title}} {{$user->firstName}} {{$user->lastName}}</td>
                                <td scope="row">{{$request->academic_maths}}</td>
                                <td scope="row">{{$request->academic_english}}</td>
                                <td scope="row">{{$request->academic_physics}}</td>
                                <td scope="row">{{$request->academic_chemistry}}</td>
                                <td scope="row">{{$request->academic_biology}}</td>
                                </tr>
                            </tbody>
                    </table>

                    <table class="table">
                            <thead>
                              <tr class="table-info">
                                    <th scope="col">Mathematics Attendance(5)</th>
                                    <th scope="col">English Language Attendance(5)</th>
                                    <th scope="col">Physics Attendance(5)</th>
                                    <th scope="col">Chemistry Attendance(5)</th>
                                    <th scope="col">Biology Attendance(5)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="table-warning">
                                <td scope="row">{{$request->attendance_maths}}</td>
                                <td scope="row">{{$request->attendance_english}}</td>
                                <td scope="row">{{$request->attendance_physics}}</td>
                                <td scope="row">{{$request->attendance_chemistry}}</td>
                                <td scope="row">{{$request->attendance_biology}}</td>

                              </tr>
                            </tbody>
                    </table>


                    <table class="table">
                            <thead>
                              <tr class="table-info">
                                    <th scope="col">Activeness / Recent Behaivour / improvement</th>
                              </tr>
                            </thead>
                            <tbody>

                                <tr class="table-warning">
                                    <td scope="row">{{$request->behave}}</td>
                                </tr>

                              </tr>
                            </tbody>
                    </table>
                </body>
</html>
