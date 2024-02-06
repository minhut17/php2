<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Đăng nhập</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo ROOT_URL . '?url=LoginController/LoginUser'; ?>" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">email đăng nhập</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="submitLogin" class="btn btn-primary">Đăng nhập</button>
                            <a href="<?php echo ROOT_URL . '?url=ReristerController/createUser'; ?>" class="btn btn-success">Đăng ký</a>
                            <a href="<?php echo ROOT_URL . '?url=LoginController/forgotPwd'; ?>">Quên mật khẩu</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>