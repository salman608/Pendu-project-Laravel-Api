@extends('admin.layout')
@section('content')
<div id="main">
    <section class="section">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title">Order List</h4>
            </div>
            <div class="card-body pb-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
</div>
@endsection