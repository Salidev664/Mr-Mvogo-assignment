<div class="row justify-content-center">
    <div class="card col-12 col-md-8 col-lg-6">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="text-primary mb-0">Register</h5>
            <a href="?page=list" class="btn btn-secondary text-white">List of Students</a>
        </div>

        <div class="card-body">
            <form action="?act=register" method="post">
                <div class="form-group mb-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>

                <div class="form-group mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="form-group mb-2">
                    <label for="contact">Contact</label>
                    <input type="tel" class="form-control" name="contact" id="contact" required>
                </div>

                <div class="form-group mb-2">
                    <label for="course">Enrolled Course</label>
                    <input type="text" class="form-control" name="course" id="course" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success mt-3" name="register">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
