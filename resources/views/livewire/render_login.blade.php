<div>
    <div class="container container-login container-transparent animated fadeIn" style="display: block;">


        <form wire:submit.prevent="actionprocess">
            <div class="login-form">
                <div class="form-group">
                    <label for="username" class="placeholder"><b>Username</b></label>
                    <input id="username" name="username" type="text"
                        class="form-control @error('username') is-invalid @enderror" wire:model="username">
                    @error('username') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="placeholder"><b>Password</b></label>
                    <a href="/forget-pass" class="link float-right">Lupa Password ?</a>
                    <div class="position-relative">
                        <input id="password" name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" wire:model="password">
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group form-action-d-flex mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
                    </div>
                    {{-- <a href="#" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</a> --}}
                    <button type="submit" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">
                        <i class="icon-user"></i>
                        Login</button>
                </div>

            </div>
        </form>
        @if (Session::has('message'))
            {!! session('message') !!}
        @endif
    </div>

</div>
