<?php include("header.php"); ?>

<div class="container py-5">

    <div class="col-sm-8 mb-5">
        <div class="bg-white rounded-lg p-3 shadow">
            <h3>Admin Login</h3>
        </div>
    </div>

    <div class="col-xl-12 mb-3">
        <div class="bg-white rounded-lg p-4 shadow">
                <div class="rounded-lg mx-auto p-2" style = "background-color: #014421">
                    <div class="rounded-lg mx-auto p-2 bg-warning">
                        <div class="rounded-lg mx-auto shadow p-4 bg-light">
                            <form class="bg-light col-xl-6 mx-auto py-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>

                                <button class="btn btn-outline-warning" style="color:#014421;" type="submit" name="adminLoginBtn"><strong>Login</strong></button>

                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div>



<?php include("footer.php"); ?>