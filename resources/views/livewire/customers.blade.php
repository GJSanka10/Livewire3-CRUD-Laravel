<div>
    <div class="row">
        <div class="col-auto">
            <button wire:navigate href="/customer/create" class="btn btn-success btn-sm">Create</button>
        
        </div>
        <div class="col-auto">
            <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="Search Customers"> 
        </div>
    </div>
    <livewire:flash-message />
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <button wire:navigate href="/customers/{{ $customer->id }}"
                            class="btn btn-primary">View</button>
                        <button wire:navigate href="/customers/{{ $customer->id }}/edit"
                            class="btn btn-warning">Edit</button>
                        <button wire:click="deletecustomer({{ $customer->id }})" class="btn btn-info">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- Pagination --}}
    {{$customers->links()}}
</div>
