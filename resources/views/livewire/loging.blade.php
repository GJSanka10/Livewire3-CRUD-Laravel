<div class="card offset-3 col-6">
    <div class="card-header">
        Login Customer
    </div>
    <div class="card-body">
        <form wire:submit="loginUser">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control" id="password"
                    aria-describedby="password">
                <div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="mb-3">
            Don't have an acoount? <button wire:navigate href="/register" class="btn btn-success">Register</button>
        </div>
        <div>
        </div>
