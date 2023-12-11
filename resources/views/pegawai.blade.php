<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <style>
        table {
        width: 100%; 
        border-collapse: collapse;
        }
        
        th, td {
        padding: 8px;
        border: 1px solid black; 
        text-align: left;
        }
    </style>
</head>

<body>

    <h2>Data Pegawai</h2>  

    <table>
    <thead>
        <tr>
        <th>Nama</th>  
        <th>Posisi</th>
        <th>Gaji</th>
        <th></th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($pegawais as $p)
        <tr>
        <td>{{ $p->name }}</td>
        <td>{{ $p->posisi }}</td>
        <td>{{ $p->gaji }}</td>
        <td>
            <a href="/update/{{ $p->id }}">Update</a> 
          </td>
        </tr>
        @endforeach
    </tbody>

    </table>

</body>
</html>