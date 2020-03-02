<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="/daftar-siswa/">
            <select name="class">
                <option value=""  selected >Semua</option>
                <option value="6A" >6A</option>
                <option value="6B" >6B</option>
                <option value="6C" >6C</option>
                <option value="6D" >6D</option>
            </select>
            <button>Cari</button>
        </form>

    <h2>Daftar Mahasiswa Kelas 6A</h1>
    <h3><a href="/">Beranda</a></h3>
    <select>
        <option>Pilih Kelas</option>
        <option value="apa kek" hreff='/daftar-siswa/6A'>6A</option>
        <option value="apa kek">6B</option>
        <option value="apa kek">6C</option>
    </select>
    <br>
    <br>
    <table border="1"> 
        <tr>
            <td><b>No.</td>
            <td><b>Kelas</td>
            <td><b>Nama</td>
        </tr>
        <tr>
            <td>1.</td>
            <td>6A</td>
            <td>Kartono</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>6A</td>
            <td>Annisa</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>6A</td>
            <td>Uli</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>6A</td>
            <td>Khairudin</td>
        </tr>
    </table>

   
    
</body>
</html>