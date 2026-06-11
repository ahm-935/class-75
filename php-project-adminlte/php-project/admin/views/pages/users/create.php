<div class="col-md-6">
                            <div class="card card-primary card-outline mb-4">
                                <div class="card-header">
                                    <div class="card-title">Create User</div>
                                </div>
                                <form>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="Name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" aria-describedby="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">
                                                We'll never share your email with anyone else.
                                            </div>
                                        </div>
                                        <div class="form-group"> 
                                            <label for="exampleInputEmail1" class="form-label">Role</label>
                                            <select class="form-control" name="role" name="role_id" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1">
                                        </div>
                        
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>