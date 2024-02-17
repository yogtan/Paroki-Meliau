@extends('layouts.admin')

@section('adminContent')
    <section class="admin-dashboard mt-5">
        <div class="container">
            <h1>Admin Paroki Meliau</h1>
            <p>Dashboard</p>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Posts</h5>
                            <p class="card-text">100</p>
                        </div>
                        <div class="card-footer">
                            <a class="card-text text-white" href="">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Kategorial</h5>
                            <p class="card-text">50</p>
                        </div>
                        <div class="card-footer">
                            <a class="card-text text-white" href="">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Dokumen</h5>
                            <p class="card-text">25</p>
                        </div>
                        <div class="card-footer">
                            <a class="card-text text-white" href="">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
