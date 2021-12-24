@extends('layout.wrapper')

@section('main')
<section class="ftco-section" style="min-height: 400px ; margin-top: 250px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Want an account?</h3>
                    <form action="#" class="signin-form">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="mobile number same as 0912..." pattern="[0]{1}[0-9]{10}" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                            <span id="toggle-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="confirm-password" required>
                            <span id="toggle-password-confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn special-background-color submit px-3">Sign Up</button>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; Or Sign Up With
                        <a href="#" class="px-2 py-2 mr-md-1 rounded special-text-color"><span class="ion-logo-google mr-2"></span> google</a>
                        &mdash;
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const togglePassword = document.querySelector('#toggle-password');
    const toggleConfirmPassword = document.querySelector('#toggle-password-confirm');
    const password = document.querySelector('#password');
    const confirmPassword = document.querySelector('#confirm-password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute

        const typePassword = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', typePassword);
        // toggle the eye slash icon

        this.classList.toggle('fa-eye-slash');
    });

    toggleConfirmPassword.addEventListener('click' , function(e){

        const typeConfirmPassword = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', typeConfirmPassword);
        // toggle the eye slash icon

        this.classList.toggle('fa-eye-slash');
    })

</script>
@endsection


