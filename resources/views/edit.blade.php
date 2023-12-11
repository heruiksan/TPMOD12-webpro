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

    <h2>Edit Data Pegawai</h2>  

    <form action="/update" method="POST">

        @csrf
    
        <input type="hidden" name="id" value="{{ $pegawai->id }}">
    
        <div>
        <label>Nama</label>   
        <input type="text" name="name" value="{{ $pegawai->name }}">
        </div>
    
        <div>
        <label>Posisi</label>        
        <input type="text" name="posisi" value="{{ $pegawai->posisi }}">
        </div>
        
        <div>
        <label>Gaji</label>    
        <input type="number" name="gaji" value="{{ $pegawai->gaji }}"> 
        </div>
    
        <button type="submit">Update Pegawai</button>
    
    </form>

</body>
</html>