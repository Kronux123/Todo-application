<div wire:poll>
    <div class="container-fluid p-5 d-flex justify-content-center align-items-center " style="height: 500px">
        <div class="container rounded bg-primary" style="max-width: 500px; margin-top: 5em">
            <h1 class="text-center text-white p-3">LOGIN</h1>

            <div class="container mt-5 ">
                <form action="">


                    <div class="form-floating mt-2">
                        <input type="text" id="email" placeholder="Name" wire:model='email'
                            class="form-control form-control-sm">
                        <label for="email">Email</label>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <div class="form-floating mt-2">
                        <input type="password" id="password" placeholder="Name" wire:model='password'
                            class="form-control form-control-sm">
                        <label for="password">Password</label>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group mt-3 d-flex   align-items-center" style="justify-content: space-between">
                        <button class="btn btn-success" wire:click.prevent='authenticate'>Login</button>

                        <p>Doesn't have an account? <a href="{{ route('register') }}" class="nav-link text-white"
                                wire:navigate>Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
