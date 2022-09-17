<div>
    <div class="card">
        <div class="card-header">
            <h3>Add customer</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                   <label for="name">Name</label>
                   @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="address">
                   <label for="address">Address</label>
                   @error('address')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" wire:model.debounce.500ms="email">
                   <label for="email">Email</label>
                   @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="contact_number">
                   <label for="contact_number">Contact Number</label>
                   @error('contact_number')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="model" class="form-select" wire:model.defer="model">
                    <option hidden="true">Select Model</option>
                    <option selected disabled>Select Model</option>
                    <option value="iPhone 14">iPhone 14</option>
                    <option value="iPhone 14 plus">iPhone 14 plus</option>
                    <option value="iPhone 14 pro">iPhone 14 pro</option>
                    <option value="iPhone 14 pro max">iPhone 14 pro max </option>
                </select>
                <label for="model">Model</label>
                @error('model')
                    <p class="text-danger">{{$message}}</p>
                 @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="gigabyte" class="form-select" wire:model.defer="gigabyte">
                    <option hidden="true">Select Gigabyte</option>
                    <option selected disabled>Select Gigabyte</option>
                    <option value="128GB">128GB</option>
                    <option value="256GB">256GB</option>
                    <option value="512GB">512GB</option>
                </select>
                <label for="gigabyte">Gigabyte</label>
                @error('gigabyte')
                    <p class="text-danger">{{$message}}</p>
                @enderror

            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="price">
                   <label for="price">Price</label>
                   @error('price')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" wire:click="addCustomer()">
                    Add Customer
                </button>
            </div>
        </div>
    </div>
</div>
<style>
    .backg{
        background-image:url('{{asset('/images/bg.png')}}');
    }
    .card-header{
        background-image:url('{{asset('/images/bc.jpeg')}}');
    }
    </style>
