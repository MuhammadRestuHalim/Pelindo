<?= $this->extend('layouts\app.php') ?>
<?= $this->section('content') ?>


    <div class="container bg-light p-4 rounded shadow-sm">
        <h1 class="text-center mb-4">Profil User</h1>
        <div class="profile">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label profile-label">Nama Lengkap:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext"><?= session()->get('username') ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label profile-label">Alamat Email:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext"><?= session()->get('email') ?></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label profile-label">Nomor Telepon:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">081234567890</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label profile-label">Alamat:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">Jl. Mawar No. 123, Jakarta</p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label profile-label">Tanggal Lahir:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext">1 Januari 1990</p>
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary back-button">Kembali</a>
    </div>

    <?= $this->endSection() ?>