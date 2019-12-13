@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Avaliable Students</div>
    <div class="card-body">
            <table class="table table-hover">
                    @include('sweet::alert')
                <thead>
                    <th>
                    STUDENT ID
                    </th>

                    <th>
                   STUDENT NAME
                    </th>

                    <th>
                     INPUT WELFARE
                    </th>

                    <th>
                    SCHOOL
                    </th>

                    <th>
                    TRASH
                    </th>

                </thead>

                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>
                                {{ $student->id }}
                            </td>

                            <td>
                                {{ $student->title }}   {{ $student->firstName }}  {{ $student->lastName }}
                            </td>

                            <td>
                                <a href="{{route('welfare.input',['id' => $student->id])}}"  class="btn btn-xs btn-success">
                                Input Welfare
                                </a>
                            </td>


                            <td>
                                <a href=""  class="btn btn-xs btn-info">
                               {{ $student->school }}
                                </a>
                            </td>

                            <td>
                                <a  href=""  class="btn btn-xs btn-danger">
                                Trash
                                </a>
                            </td>
                        </tr>



                    @endforeach

                </tbody>
            </table>
    </div>
</div>
@endsection
