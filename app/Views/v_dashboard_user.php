<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">Halo, <?= esc($username) ?></h2>
<p><strong>Role:</strong> <?= esc($role) ?></p>

<div class="container">
    <!-- Card Informasi Persewaan -->
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">🚗 Informasi Persewaan</h5>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mb-3">
                <li><strong>Model:</strong> Chiron</li>
                <li><strong>Durasi:</strong> 2 Hari</li>
                <li><strong>Biaya per hari:</strong> 300.000</li>
                <li><strong>Status:</strong> Berjalan</li>
                <li><strong>No Telepon:</strong> 081212341234</li>
                <li><strong>Total Biaya:</strong> 600.000</li>
            </ul>
            <a href="#" class="btn btn-outline-primary">Lihat Pembayaran</a>
        </div>
    </div>

    <!-- Card Informasi Tagihan -->
    <div class="card shadow mb-4">
        <div class="card-header bg-danger text-white">
            <h5 class="mb-0">💳 Tagihan</h5>
        </div>
        <div class="card-body">
            <p><strong>Total:</strong> 600.000</p>
            <p><strong>Terlambat:</strong> -</p>
            <p><strong>Denda:</strong> 0</p>
            <p class="text-muted">Silakan lakukan pembayaran secepatnya.</p>
            <button class="btn btn-danger">Bayar Sekarang</button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
