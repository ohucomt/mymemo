    <div class="container">
    <div class="card hoverable">
    <div class="card-block">

        <!--Header-->
        <div class="text-xs-center">
            <h3><i class="fa fa-pencil"></i> Sign up</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        <br>
        <form method="post" action="<?= ROOT_PATH.'user/register'?>">
        <!--Body-->
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form3" name="first_name" class="form-control validate" required>
                        <label for="form3">First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="text" id="form4" name="last_name" class="form-control validate" required>
                        <label for="form4">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                <input type="email" name="email" id="form2" class="form-control validate" required>
                <label for="form2">Your email</label>
            </div>
            
            <div class="md-form">
                <i class="fa fa-user prefix"></i>
                <input type="text" name="username" id="form2" class="form-control validate" required>
                <label for="form2">Username</label>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="password" id="form1" name="password" class="form-control validate" required>
                        <label for="form3">Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input type="password" id="form0" name="re-password" class="form-control validate" required>
                        <label for="form4">Re-password</label>
                    </div>
                </div>
            </div>
            
            

        <div class="text-xs-center">
            <button class="btn btn-deep-orange" type="submit" name="submit" value="submit">Send</button>
        </div>
            
            <div class="modal-footer">
                <p>Already registered? <a href="<?=ROOT_PATH.'user/login'?>">Login</a></p>
            </div>
        </form>
    </div>
</div>
</div>