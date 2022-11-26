<?PHP include("header.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-5">Create Your Account</h4>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label>First Name<span class="text-danger">*</span></label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="Lname" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label >Birthday</label>
	                            <input type="date" name="birthday" class="form-control"> 
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Gender:</label>
                                    <div class="row row-cols-3 ms-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" >
                                                male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label">
                                                female
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            <div  class="mb-3 col-md-6">
                                <label>PSU email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div  class="mb-3 col-md-6">
                                <label>ID number<span class="text-danger">*</span></label>
                                <input type="text" name="idnum" class="form-control" placeholder="Enter id number">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12">
                            <button class="btn btn-primary float-end">Signup Now</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">If you have account, Please <a href="login.php">Login Now</a></p>
                </div>
            </div>
        </div>
    </div>

<?PHP include("footer.php"); ?>