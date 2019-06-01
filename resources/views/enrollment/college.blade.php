<table class="table table-bordered table-sm table-striped mb-5 stpct">
    <thead>
        <tr>
            <th>Subject Code</th>
            <th>Subject Description</th>
            <th>Year Level</th>
            <th>Semester</th>
            <th>Available Slots</th>
        </tr>
    </thead>
    <tbody>


        @foreach($subjects as $subject)
        <tr>
            @if($subject->semester == $enrollment->semester)
            {{--@if($subject->year_level == $user->year_level)--}}
            <td>{{ $subject->subject_code }}</td>
            <td>{{ $subject->description }}</td>
            <td>{{ $subject->year_level }}</td>
            <td>{{ $subject->semester }}</td>
            <td>11</td>
            <td><a href="#"><i class="fas fa-caret-right"></i></a></td>
            {{--@endif--}}
            @endif
        </tr>
        @endforeach  

    </tbody>
</table>