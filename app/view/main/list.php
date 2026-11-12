<div class="row justify-content-center">
    <div class="card col-12 col-md-10 col-lg-10">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="text-primary mb-0">List of Students</h5>
            <a href="?page=register" class="btn btn-success">Registration</a>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Contact</th>
                        <th>Course</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($vale as $val) { ?>
                        <tr>
                            <td><?= htmlspecialchars($val['id']) ?></td>
                            <td><?= htmlspecialchars($val['name']) ?></td>
                            <td><?= htmlspecialchars($val['password']) ?></td>
                            <td><?= htmlspecialchars($val['contact']) ?></td>
                            <td><?= htmlspecialchars($val['course']) ?></td>
                            <td class="d-flex gap-2">
                                <!-- Edit Button -->
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#point<?= $val['id'] ?>">
                                    <i class="bi bi-pen"></i>
                                </button>

                                <!-- Delete Form (POST) -->
                                <form action="?act=delete" method="post" onsubmit="return confirm('Delete this student?');">
                                    <input type="hidden" name="id" value="<?= $val['id'] ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Update Modal for Each Student -->
                        <div class="modal fade" id="point<?= $val['id'] ?>" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Student</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="?act=update" method="post">
                                            <input type="hidden" name="id" value="<?= $val['id'] ?>">

                                            <div class="form-group mb-2">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" value="<?= htmlspecialchars($val['name']) ?>" required>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label>Contact</label>
                                                <input type="tel" class="form-control" name="contact" value="<?= htmlspecialchars($val['contact']) ?>" required>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label>Enrolled Course</label>
                                                <input type="text" class="form-control" name="course" value="<?= htmlspecialchars($val['course']) ?>" required>
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
