<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8  mt-5">
                <div class="card">
                    <div class="card-header">Form</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('orders.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="inputField" class="form-label">Input Field</label>
                                <input type="text" class="form-control" id="inputField" name="inputField" placeholder="Enter something">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
