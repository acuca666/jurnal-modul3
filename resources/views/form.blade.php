<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata</title>
</head>
    <body> 
        <h2>input biodata</h2>
        <form action="/proses" method="post">
            @csrf
            <label>nama:</label>
            <input type="text" name="nama"><br></br>

              <label>umur:</label>
            <input type="number" name="umur"><br></br>

            <label>alamat:</label>
            <textarea name="alamat"></textarea><br></br>
            <button type="submit">kirim</button>
</form>
</body>
<html>
