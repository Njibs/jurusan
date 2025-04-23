<div class="card">
    <div class="card-body row">
        <div class="card-title h3 col-8">Tambah Data Jurusan</div>
        <div class="col-4 mb-2">
                    <a href="?m=jurusan&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
        </div>

        <form action="?m=jurusan&s=simpan" method="post">
            <div class="mb-2">
                    <input type="text" class="form-control" name="jurusan" placeholder="Nama Jurusan" autofocus required>
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas">
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="terisi" placeholder="Terisi">
            </div>
            <div class="mb-2">
                <input type="reset" class="btn btn-sm btn-danger">
                <input type="submit" class="btn btn-sm btn-primary" name="simpan" value="Simpan">
            </div>
        </form>
    </div>
</div>