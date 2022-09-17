<div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-secondary">
            <tr>
                <th>ID No</th>
                <th>Brand Name</th>
                <th>Version</th>
                <th>Model</th>
                <th>Price</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vapes as $vape)
                <tr>
                    <td>{{ $vape->id }}</td>
                    <td>{{ $vape->brand_name }}</td>
                    <td>{{ $vape->version }}</td>
                    <td>{{ $vape->model }}</td>
                    <td>{{ $vape->price }}</td>
                    <td>{{ $vape->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['vape' => $vape->id]) }}" class="btn btn-secondary" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['vape' => $vape->id]) }}" class="btn btn-secondary" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>

</style>
