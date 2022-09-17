<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card" >
            <div class="card-header">
                <h3 class="text-danger">Delete Student?</h3>
          </div>
          <div class="card-body">
              <table class="table">
                  <tr>
                      <th>Name</th>
                      <td>{{ $this->customer->name }}</td>
                  </tr>
                  <tr>
                      <th>Address</th>
                      <td>{{ $this->customer->address}}</td>
                  </tr>
                  <tr>
                      <th>Model</th>
                      <td>{{ $this->customer->model }}</td>
                  </tr>
              </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger"wire:click="delete()">Delete</button>
                    <button class="btn btn-secondary mx-2" wire:click="back()">Back</button>

                </div>
           </div>
        </div>
    </div>
</div>
<style>
    body{
background-size: cover;
background-image:url('{{asset('/images/bg.png')}}');
}
.card{
    background-image:url('{{asset('/images/bc.jpeg')}}');
}
</style>
