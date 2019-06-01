@extends('layouts.app')

@section('content')
<div class="container">
    {{--
    <li><a href="#" class="">{{ $subject->subject_code }}</a></li>
    <li><a href="#" class="">{{ $subject->description }}</a></li>
    <li><a href="#" class="">{{ $subject->year_level }}</a></li>
    <li><a href="#" class="">{{ $subject->semester }}</a></li> 
    --}}
    

    @if(Auth::user()->student->isCollege)
        @include('enrollment.college')
    @else
        @include('enrollment.shs')
    @endif
    <hr>
    <h3 class="h3 mt-5">Enrolled Subjects</h3>
    <table class="table-striped table-sm table">
        <thead>
            <th>Subject Code</th>
            <th>Subject Description</th>
            <th>Year Level</th>
            <th>Semester</th>
        </thead>
        <tbody>
            @foreach($subjects as $subject)

            <tr>
                @if($subject->semester == '2nd')
                <td>{{ $subject->subject_code }}</td>
                <td>{{ $subject->description }}</td>
                <td>{{ $subject->year_level }}</td>
                <td>{{ $subject->semester }}</td>
                <td><a href="#"><i class="fas fa-caret-right"></i></a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
