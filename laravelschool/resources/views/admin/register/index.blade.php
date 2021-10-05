@extends('admin.layout.app')

@section('content')
<!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Body-->

                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <!-- left column -->
                                            <div class="col-md-12">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Manage User</h3><a href="adduser.php"><button class="p-2 rounded btn-primary">Add User</button></a>
                                                    </div>
                                                    <?php
                                                    if (isset($_GET['msg'])) {
                                                        $msg = $_GET['msg'];
                                                        if ($msg == 'dsuccess') {
                                                    ?>
                                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <strong>User is deleted successfully.</strong>
                                                            </div>

                                                            <script>
                                                                $(".alert").alert();
                                                            </script>
                                                        <?php
                                                        } else if ($msg == 'derror') {
                                                        ?>
                                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <strong>User couldn't be deleted successfully.</strong>
                                                            </div>

                                                            <script>
                                                                $(".alert").alert();
                                                            </script>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <strong>User is created successfully.</strong>
                                                            </div>

                                                            <script>
                                                                $(".alert").alert();
                                                            </script>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>S.N.</th>
                                                                    <th>Action</th>
                                                                    <th>User Name</th>
                                                                    <th>User Email</th>
                                                                    <th>User Phone</th>
                                                                    <th>User Password</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $query = "SELECT * FROM users ORDER BY created_at DESC";
                                                                $result = mysqli_query($conn, $query);
                                                                $sn = 0;
                                                                while ($data = mysqli_fetch_array($result)) {
                                                                    $sn += 1; //$sn = $sn+1
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo ($sn); ?></td>
                                                                        <td>
                                                                            <a href="edituser.php?id=<?php echo $data['id']; ?>"><button class="p-2 rounded btn-primary">Edit</button></a>
                                                                            <a href="process/deleteuser.php?id=<?php echo $data['id']; ?>"> <button class="p-2 rounded btn-danger">Delete</button></a>
                                                                        </td>
                                                                        <td><?php echo ($data['name']); ?></td>
                                                                        <td><?php echo ($data['email']); ?></td>
                                                                        <td><?php echo ($data['phone']); ?></td>
                                                                        <td><?php echo ($data['password']); ?></td>
                                                                        <td><?php echo ($data['status']); ?></td>

                                                                    </tr>
                                                                <?php } ?>
                                                                </tfoot>
                                                        </table>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                            <!--/.col (left) -->
                                        </div>
                                        <!-- /.row -->
                                    </div><!-- /.container-fluid -->
                                </section>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
@endsection