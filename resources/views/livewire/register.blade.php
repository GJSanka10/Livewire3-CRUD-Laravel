<div class="card offset-3 col-6">
    <div class="card-header">
        Register Customer
    </div>
    <div class="card-body">
        <form wire:submit="storeUser">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="name">
                <div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

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
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="mb-3">
            Already have an acoount? <button wire:navigate href="/login" class="btn btn-success">Login</button>
        </div>
        <div>
        </div>
