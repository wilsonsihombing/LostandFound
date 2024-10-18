@include('includes.style')

<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">

            <!-- Section Left -->
            <div class="section-left col-lg-6 d-none d-lg-block">
                <h1 class="mb-4">TEMUKAN KEMBALI<br> BARANG YANG HILANG</h1>
                <img src="frontend/images/loginimg.png" alt="" class="w-100">
            </div>

            <!-- Section Right (Login Form) -->
            <div class="section-right col-lg-4 col-md-8 col-sm-10 offset-lg-1 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h2>Lost and Found</h2>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email" aria-describedby="emailHelp" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>

                            <button type="submit" class="btn btn-login btn-block">{{ __('Login') }}</button>
                            
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
