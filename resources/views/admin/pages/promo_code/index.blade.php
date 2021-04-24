@extends('admin.layout')
@section('content')
<div id="main">

    <section class="section">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title">Promo Code List</h4>
              <a href="" class="mr">Add Service</a>
            </div>
            <div class="card-body pb-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PromoCode</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <div class="page-content">
        <section class="row">
            <div class="col-8 col-lg-8">
                <div class="card-header bg-info text-white">Service Fee List
                </div>
                <div class="card pd-20 pd-sm-40">

                    <div class="table-wrapper">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-15p">Sl</th>
                            <th class="wd-15p">Service Fee</th>
                            <th class="wd-20p">Status</th>
                            <th class="wd-15p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>salman</td>
                            <td>
                              Active
                            </td>
                            <td>
                             <a href="">edit</a>
                             <a href="">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- table-wrapper -->
                  </div><!-- card -->

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning text-white">Service Fee
                    </div>

                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Add Service </label>
                              <input type="number" name="" placeholder="Enter Service Amount">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Brand</button>
                          </form>
                    </div>
                </div>

            </div>

        </section>
    </div>
</div>


@endsection
