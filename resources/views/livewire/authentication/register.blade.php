<div>
    <div class="container-fluid p-5 d-flex justify-content-center align-items-center " style="height: 500px">
        <div class="container rounded bg-primary" style="max-width: 500px; margin-top: 5em">
            <h1 class="text-center text-white p-3">REGISTER</h1>

            <div class="container mt-5 ">
                <form >
                    <div class="form-floating mt-2">
                        <input type="text"  id="name" placeholder="Name" wire:model='name' class="form-control form-control-sm">
                        <label for="name">Name</label>
                    </div>

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-floating mt-2">
                        <input type="text" id="email" placeholder="Name" wire:model='email' class="form-control form-control-sm">
                        <label for="email">Email</label>
                    </div>

                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                    <div class="form-floating mt-2">
                        <input type="password" id="password" placeholder="Name" wire:model='password' class="form-control form-control-sm">
                        <label for="password">Password</label>
                    </div>

                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-floating mt-2">
                        <input type="password" id="confirm_pass" placeholder="Name" wire:model='password_confirmation' class="form-control form-control-sm">
                        <label for="confirm_pass">Confirm Password</label>
                    </div>

                    @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="form-group mt-3 d-flex   align-items-center" style="justify-content: space-between">
                        <button wire:click.prevent='registerUser' class="btn btn-success">Register</button>
                        
                        <p>Have an account? <a href="{{route('login')}}" class="nav-link text-white" wire:navigate>Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
