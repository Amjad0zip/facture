@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <h2 class="card-text">Users</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Orders</h5>
                        <h2 class="card-text">Orders</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Revenue</h5>
                        <h2 class="card-text">Revenue</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Latest Orders</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Order Date</th>
                                        <th>Order Total</th>
                                        <th>INVOICE/ESTIMATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>#234952</td>
                                            <td>sodexo</td>
                                            <td>date</td>
                                            <td>5hours</td>
                                            <td><div class="btn-group" role="group"><a href="{{ route('invoice.show') }}" type="button" class="btn btn-primary">Generate INVOICE</a>
                                                <button type="button" class="btn btn-secondary">Generate ESTIMATE</button></div>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
