<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">Edit User - <?= esc($user['username']) ?></h2>

<form action="<?= base_url('users/update/' . esc($user['username'])) ?>" method="post">
    <div class="form-group">
        <label for="username">
            <i class="fas fa-user"></i> Username
        </label>
        <input type="text" class="form-control" id="username" name="username" value="<?= esc($user['username']) ?>" required>
    </div>

    <div class="form-group">
        <label for="password">
            <i class="fas fa-lock"></i> Password
        </label>
        <input type="password" class="form-control" id="password" name="password" value="<?= esc($user['password']) ?>" required>
    </div>

    <div class="form-group">
        <label for="role">
            <i class="fas fa-users-cog"></i> Role
        </label>
        <select class="form-control" id="role" name="role">
            <option value="user" <?= ($user['role'] == 'user') ? 'selected' : '' ?>>User</option>
            <option value="admin" <?= ($user['role'] == 'admin') ? 'selected' : '' ?>>Admin</option>
        </select>
    </div>

    <button type="submit" class="btn btn-lg btn-info w-100">Update User</button>
</form>

<!-- Add custom styles -->
<style>
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-control {
        border-radius: 0.5rem;
        box-shadow: none;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #17a2b8;
        box-shadow: 0 0 5px rgba(23, 162, 184, 0.5);
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
        color: white;
        font-size: 1.1rem;
    }

    .btn-info:hover {
        background-color: #138496;
        transform: translateY(-2px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    label {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
    }

    .form-group i {
        margin-right: 8px;
        color: #17a2b8;
    }
</style>

<?= $this->endSection() ?>
