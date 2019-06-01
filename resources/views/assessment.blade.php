{{--@foreach($user as $u)
Name: {{ $u->firstname }} {{ str }} {{ $u->lastname }}
Email: {{ $u->email }}
Account Type: {{ $u->account_type }}
@endforeach--}}
@section('title', 'Assessment')
<link rel="stylesheet" href="{{ public_path('css/app.css') }}">
<style>
td.data{
    border-bottom: 1px dashed black;
    text-align: center;
    font-size: 20px;
}
tr.label{
    text-align: center;
    font-size: 12px;
}
th.title{
    column-span: 4;
    text-align: left;
}
.w-5{
    width: 5%;
}
.w-10{
    width: 10%;
}
.w-15{
    width: 15%;
}
.w-20{
    width: 20%;
}
.w-30{
    width: 30%;
}
.w-40{
    width: 40%;
}
tbody{
    counter-reset: section;
}
table[name=schedule] tbody tr td:first-child::before{
    counter-increment: section;
    content: counter(section) ".";
}
table[name=schedule] tbody tr td+td{
    text-align: center;
}
table[name=schedule] tbody tr tr+tr{
    border: 1px dashed black;
}
</style>
<div class="container-fluid">
    <div class="text-center">
        <img src="{{ public_path('images/logo-bw-text-lowres.jpg') }}" alt="" height="110" width="700">
    </div>
    <hr>
    <table class="table table-borderless table-sm">
        <thead>
            <th class="title">No. 1 - Registration Card</th>
        </thead>
    </table>
    <table class="table table-borderless table-sm">
        <tbody>
            <tr>
                <td class="w-10">Name: </td>
                <td class="data w-30">{{ $user->student->lastname }}</td>
                <td class="data w-30">{{ $user->student->firstname }}</td>
                <td class="data w-30">{{ $user->student->middlename }}</td>
            </tr>
            <tr class="label">
                <td></td>
                <td>Last Name</td>
                <td>First Name</td>
                <td>Middle Name</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-borderless table-sm ">
        <tbody>
            <tr>
                <td class="field">Course: </td>
                <td class="data w-75">{{ $user->student->course }}</td>
                <td class="field">Sum. Yr.</td>
                <td class="data">{{ ('2019') }}</td>
            </tr>
        </tbody>
    </table>    
    <table class="table table-borderless table-sm ">
        <tbody>
            <tr>
                <td class="data w-50">{{ $enrollment->semester }}</td>
                <td>Sem./Sum.</td>
                <td>School Year</td>
                <td class="data">2019</td>
                <td class="separator">-</td>
                <td class="data">2020</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <table class="table table-bordered table-sm table-striped" name="schedule">
        <thead>
            <tr>
                <th class="w-40">Subjects</th>
                <th class="w-10">Unit</th>
                <th class="w-15">Days</th>
                <th class="w-15">Time</th>
                <th class="w-20">Room</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Language Arts
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Mathematics
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Science & Health
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Physical Education (P.E.)
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Instrumental Music - specific instrument
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Movement or Eurythmy
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Handwork or handcrafts
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Life Lab or gardening
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Dramatics
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
            <tr>
                <td>
                    Honors Math in Algebra or Geometry
                </td>
                <td>3.0</td>
                <td>M-Th</td>
                <td>8:00am-6:00pm</td>
                <td>Room 302</td>
            </tr>
        </tbody>
    </table>
    <table class="w-50">
        <tbody>
            <tr>
                <td>Date of Registration</td>
                <td class="data">{{ now() }}</td>
            </tr>
        </tbody>
    </table>
    <table class="table-sm table-striped float-right">
        <thead>
            <tr>
                <th>Student No.</th>
            </tr>
            <tr>
                <th>OR. No.</th>
            </tr>
            <tr>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Honors Math in Algebra or Geometry
                </td>
                <td>3.0</td>
            </tr>
        </tbody>
    </table>
</div>
