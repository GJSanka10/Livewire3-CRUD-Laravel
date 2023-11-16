<div class="card offset-3 col-6">
    <h5 class="card-header">View Customer</h5>
    <div class="card-body">
      <h5 class="card-title">{{$customer->name}}</h5>
      <p class="card-text">{{$customer->email}}</p>
      <p class="card-text">{{$customer->phone}}</p>
      <a wire:navigate href="/customers" class="btn btn-primary">Back</a>
    </div>
  </div>