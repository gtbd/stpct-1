<table class="table-striped table-sm table">
    <thead>
        <th>Subject Code</th>
        <th>Subject Description</th>
        <th>Year Level</th>
        <th>Semester</th>
        <th>Available Slots</th>
    </thead>
    <tbody>
       
       

        <tr>
            @if($subject->semester == $latest->semester)
            {{--@if($subject->year_level == $user->year_level)--}}
            <td>BSIT-WMA-4B</td>
            <td>11</td>
            <td><a href="#"><i class="fas fa-caret-right"></i></a></td>
            {{--@endif--}}
           @endif
        </tr>
       
       
    </tbody>
</table>