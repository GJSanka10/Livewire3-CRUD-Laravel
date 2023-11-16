<div class="card offset-3 col-6">
    <div class="card-header">
      Create Customer
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="name" aria-describedby="name">
                <div>
                    @error('name') 
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div>
                @error('email') 
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input wire:model="phone" type="text" class="form-control" id="phone" aria-describedby="phone">
                <div>
                    @error('phone') 
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <button wire:navigate href="/customers" class="btn btn-secondary btn-sm" type="submit" class="btn btn-primary">Back</button>
          </form>
    </div>
  </div>