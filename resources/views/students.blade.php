<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>Ogrenci Adı</th>
        <th>Ogrenci Numarası</th>
        <th>Departmanı</th>
        <th>Durumu</th>
        <th>Güncelle</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->student_fullname}}</td>
            <td>{{$student->student_number}}</td>
            <td>{{$student->student_department}}</td>
            <td>@if($student->student_status == 1)
                    Eğitim Devamke
                @else
                    Eğitim İptalke
                @endif
            </td>

            <td>@if($student->student_status == 1)
                    <a href="{{ route('updateStatus', $student->id) }}"> <button>Eğitimi İptal Et</button> </a>
                @else
                    <a href="{{ route('updateStatus', $student->id) }}">  <button>Eğitimi Devam Ettir</button> </a>
                @endif
            </td>
        </tr>
    @endforeach


</table>

</body>
</html>

