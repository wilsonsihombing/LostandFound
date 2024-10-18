@include('includes.style')

<main class="login-container">
    <div class="container ">
        <div class="row page-login d-flex align-items-center">

            <div class="section-left col-md-6">
                <h1 class="mb-4">TEMUKAN KEMBALI<br> BARANG YANG HILANG</h1>
                <img src="frontend/images/loginimg.png" alt="" class="w-100 d-none d-sm-flex">
            </div>

            <div class="section-right col-md-4 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            {{-- <img src="frontend/images/logo.png" alt="Logo" class="w-50 mb-4"> --}}
                            <h2>Register to Lost and Found</h2>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name Field -->
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Username Field -->
                            <div class="form-group">
                                <label for="username">{{ __('Username') }}</label>
                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" id="username"
                                    value="{{ old('username') }}" required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password-confirm" required>
                            </div>

                            <!-- Register Button -->
                            <button type="submit" class="btn btn-login btn-block">{{ __('Register') }}</button>
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
