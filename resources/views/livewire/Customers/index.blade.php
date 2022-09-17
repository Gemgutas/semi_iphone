<div>
    <table class="table table-strip">
        <thead>
            <tr>
                <th>Cust No.</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Model</th>
                <th>Gigabyte</th>
                <th>Price</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->contact_number}}</td>
                    <td>{{$customer->model}}</td>
                    <td>{{$customer->gigabyte}}</td>
                    <td>{{$customer->price}}</td>
                    <td >
                        <a href="{{url('edit', ['customer' => $customer->id])}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td >
                        <a href="{{url('delete', ['customer' => $customer->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    body {
  background-size: cover;
  background-image:url('{{asset('/images/bc.jpeg')}}');
}
</style>
