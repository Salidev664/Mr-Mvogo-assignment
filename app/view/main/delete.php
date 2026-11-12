<div class="row justify-content-center">
    <div class="card col-12 col-md-8 col-lg-6">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="text-primary mb-0">Delete Student</h3>
            <a href="?page=list" class="btn btn-success">List of Students</a>
        </div>

        <div class="card-body">
            <form action="?act=delete" method="post" onsubmit="return confirm('Are you sure you want to delete this student?');">
                <div class="form-group">
                    <label for="id">Student ID</label>
                    <input type="number" class="form-control" name="id" id="id" value="<?= htmlspecialchars($_GET['id'] ?? '') ?>" required>
                </div>

                <div class="text-center">
                    <button type="submit" name="delete" class="btn btn-danger mt-3">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
