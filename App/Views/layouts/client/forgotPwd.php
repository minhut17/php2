<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Quên Mật Khẩu</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo ROOT_URL . '?url=LoginController/resetPwd'; ?>" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                       
                        <div class="d-grid gap-2">
                            <button type="submit" name="forgotPwd" class="btn btn-primary">Gửi</button>
   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>