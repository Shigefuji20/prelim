<div>
    <div class="card border border-light">
        <div class="card-header bg-secondary">
            <h3 class="mt-2">Add Vape</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="brand_name">
                <label for="brand_name">Brand Name</label>
                @error('brand_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="model">
                <label for="model">Model</label>
                @error('model')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="version">
                <label for="version">Version</label>
                @error('version')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="price">
                <label for="price">Price</label>
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
</div>
                <div class="form-floating mb-3">
                    <select name="color" class="form-select" wire:model.defer="color">
                        <option hidden="true">Select Color</option>
                        <option selected disabled>Select Color</option>
                        <option value="black">Black</option>
                        <option value="rainbow">Rainbow</option>
                        <option value="silver">Silver</option>
                        <option value="gold">Gold</option>
                        <option value="flag">Flag</option>
                        <option value="pink">Pink</option>
                        <option value="white">White</option>
                    </select>
                    <label for="color">Color</label>
                    @error('color')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-secondary" wire:click="addVape()">
                    Add Vape
                </button>
            </div>
        </div>
    </div>
</div>
