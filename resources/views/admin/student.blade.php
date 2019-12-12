@extends('layouts.app')

@section('content')
<table class="table table-hover">
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
        EDIT
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
                    Edit
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
@endsection
