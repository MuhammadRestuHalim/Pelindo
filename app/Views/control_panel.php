<?= $this->extend('layouts\app.php') ?>
<?= $this->section('content') ?>
            <div class="container">
                <h2 class="welcome">Selamat datang di Control Panel</h2>

                <div class="user-info">
                    <p><strong>Nama Pengguna:</strong> <?= session()->get('username') ?></p>
                    <p><strong>Email:</strong> <?= session()->get('email') ?></p>
                </div>

                <!-- Isi dengan konten dashboard yang sesuai dengan kebutuhan aplikasi Anda -->
                <p>Ini adalah halaman control panel Anda. Tambahkan konten sesuai kebutuhan aplikasi Anda.</p>
            </div>
<?= $this->endSection() ?>