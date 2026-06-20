<?php
$_SESSION['user'] = 1;
unset($_SESSION['user']);
?>
<div class="container-fluid contact py-5">
        <div class="container py-5">
            <div>
                <div class="row g-4">
                    <div class="col-lg-6 p-5 bg-light rounded mx-auto">
                        <h5 class="text-primary wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Let’s Connect</h5>
                        <h1 class="display-5 mb-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Login</h1>
                        <p class="mb-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                             <a href="register">Register</a> if you dont' have an account.</p>
                        <form>
                            <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                               <div class="col-lg-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Your Password</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>