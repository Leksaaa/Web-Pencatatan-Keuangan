<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
    <title>Edit Data Transaksi</title>
</head>
<style>
    /* Style untuk body */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

/* Style untuk judul */
h1 {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    color: #333;
}

/* Style untuk main container */
main {
    max-width: 300px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 8px;
    padding: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style untuk form-floating */
.form-floating {
    margin-bottom: 20px;
}

/* Style untuk label */
label {
    font-weight: bold;
    color: #333;
}

/* Style untuk input */
input[type="text"],
input[type="date"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Style untuk tombol */
button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: rgb(17, 184, 240);
    color: #fff;
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Style untuk feedback invalid */
.invalid-feedback {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
}

</style>
<body>

    <h1 class="d-flex justify-content-center w-80">Edit Data Transaksi</h1>
    <main class="d-flex justify-content-center w-80 m-3">
        <form action="/transaksi/admin/{{$transaksi->id}}" method="post">
        @csrf
        @method('PUT')
            <div class="form-floating">
                <input type="text" name="user_id" class="form-control" id="user_id" placeholder="User ID" required value="{{ $transaksi->user_id }}">
                <label for="user_id">User ID</label>
                @error('user_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-floating  mb-3">
                <input type="text" name="jenis_transaksi" class="form-control" id="jenis_transaksi" placeholder="jenis_transaksi" required value="{{ $transaksi->jenis_transaksi }}">
                <label for="jenis_transaksi">Jenis Transaksi</label>
                @error('jenis_transaksi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="kategori_id" class="form-control" id="kategori_id" required>
                    <option value="" selected disabled>Pilih Kategori</option>
                    @foreach($kategori as $item)
                        <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->tipe }}
                        </option>
                    @endforeach
                </select>
                <label for="kategori_id">Kategori</label>
                @error('kategori_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating  mb-3">
                <input type="text" name="total" class="form-control" id="total" placeholder="Total" required value="{{ $transaksi->total }}">
                <label for="total">Total</label>
                @error('total')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" required value="{{ $transaksi->tanggal }}">
                <label for="tanggal">Tanggal</label>
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <button class="btn btn-primary w-100 py-2" type="submit">Update</button>
        </form>
    </main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
