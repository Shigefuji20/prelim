<div>

    <div class="card shadow border border-light">
        <div class="card-header bg-secondary">
            <h5 class="text-white text-center mt-2">Delete Brand?</h5>
        </div>
        <div class="card-body">
            <div class="col-md-4 offset-md-4">
                <img src="{{ asset('images/ing.jpg.jpg') }}" alt="logo" class="img-fluid mb-3 rounded-circle mt-3 img-responsive center-block d-block mx-auto" style="width: 90px;">
            </div>
            <table class="table">
                <tr>
                    <th >
                        Brand Name
                    </th>
                    <td>
                        {{ $this->vape->brand_name }}
                    </td>
                </tr>
                <tr>
                <tr>
                    <th >
                        Version
                    </th>
                    <td>
                        {{ $this->vape->version }}
                    </td>
                </tr>
                    <th >
                        Model
                    </th>
                    <td>
                        {{ $this->vape->model }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Color
                    </th>
                    <td>
                        {{ $this->vape->color }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Price
                    </th>
                    <td>
                        {{ $this->vape->price }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-secondary" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-secondary mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>

