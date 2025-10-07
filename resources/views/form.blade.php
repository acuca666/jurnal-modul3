<!DOCTYPE html>
<html>
    <head>
        <title>Form Daftar Tamu</title>
</head>
    <body> 
        <h2>input Data Tamu
        </h2>
        <form action="/proses" method="post">
            @csrf
            <label>nama:</label>
            <input type="text" name="nama"><br></br>

            <label>alamat:</label>
            <textarea name="alamat"></textarea><br></br>
            <button type="submit">kirim</button>
</form>
</body>
<html>
