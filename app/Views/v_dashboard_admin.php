<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">Welcome, <?= esc($username) ?></h2>
<p><strong>Role:</strong> <?= esc($role) ?></p>

<div class="container">
    <!-- Card displaying the total user count -->
    <div class="row">
        <!-- Total Users Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-left-primary hover-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Users
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= esc($userCount) ?>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-users fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Users Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-left-success hover-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Admin Users
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= esc($adminCount) ?>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-user-shield fa-3x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Regular Users Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-left-warning hover-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Regular Users
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= esc($userRoleCount) ?>
                            </div>
                        </div>
                        <div>
                            <i class="fas fa-users fa-3x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add custom styles for hover effect and shadow -->
<style>
    .hover-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-body i {
        transition: transform 0.3s ease;
    }

    .card-body i:hover {
        transform: rotate(15deg);
    }
</style>

<?= $this->endSection() ?>
