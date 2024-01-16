<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>To Do List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa Nhiệm Vụ</h3>
                           
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                           
                        </div>
                        <div  class="mt-3 ms-2" > <input class="btn btn-primary" type="submit" value="sửa"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Tên Nhiệm Vụ</label>
                                <input type="text" id="inputName" class="form-control" value="Nhiệm vụ1">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Mô Tả<label>
                                    <textarea id="inputDescription" value="Nhiệm vụ vô cùng ưu tiên" class="form-control"cols="150" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Loại Nhiệm Vụ</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected disabled>Công việc</option>
                                    <option>Công Việc</option>
                                    <option>Cuộc Sống</option>
                                    <option>Học Tập</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Ngày Hoàn Thành</label>
                                <input type="Date" id="inputClientCompany" class="form-control" value="17/5/2024">
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                
                </form>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->




    </section>
    <!-- /.content -->
</div>