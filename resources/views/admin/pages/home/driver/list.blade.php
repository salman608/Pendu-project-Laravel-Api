@extends('admin.layout')
@section('content')
<div id="main">

    <section class="section">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title">Driver List</h4>
            </div>
            <div class="card-body pb-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Drivers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table class="table">
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100">SL#</th>
                                    <th class="cell100">Order ID</th>
                                    <th class="cell100">Service</th>
                                    <th class="cell100">User</th>
                                    <th class="cell100">Rating</th>
                                    <th class="cell100">Comment</th>
                                    <th class="cell100">Created</th>
                                    <th class="cell100">Status</th>
                                    <th class="cell100">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
            
                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Like a butterfly</td>
                                    <td class="cell100 column2">Boxing</td>
                                    <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                    <td class="cell100 column4">Aaron Chapman</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Mind & Body</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Adam Stewart</td>
                                    <td class="cell100 column5">15</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Crit Cardio</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                                    <td class="cell100 column4">Aaron Chapman</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Wheel Pose Full Posture</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">15</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Playful Dancer's Flow</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Zumba Dance</td>
                                    <td class="cell100 column2">Dance</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">20</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Cardio Blast</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Pilates Reformer</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Supple Spine and Shoulders</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">15</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Yoga for Divas</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">20</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Virtual Cycle</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">20</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Like a butterfly</td>
                                    <td class="cell100 column2">Boxing</td>
                                    <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                    <td class="cell100 column4">Aaron Chapman</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Mind & Body</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Adam Stewart</td>
                                    <td class="cell100 column5">15</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Crit Cardio</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">9:00 AM - 10:00 AM</td>
                                    <td class="cell100 column4">Aaron Chapman</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Wheel Pose Full Posture</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">7:00 AM - 8:30 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">15</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Playful Dancer's Flow</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Zumba Dance</td>
                                    <td class="cell100 column2">Dance</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">20</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Cardio Blast</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">5:00 PM - 7:00 PM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Pilates Reformer</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">10</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Supple Spine and Shoulders</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">6:30 AM - 8:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">15</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Yoga for Divas</td>
                                    <td class="cell100 column2">Yoga</td>
                                    <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                                    <td class="cell100 column4">Donna Wilson</td>
                                    <td class="cell100 column5">20</td>
                                </tr>
            
                                <tr class="row100 body">
                                    <td>1</td>
                                    <td class="cell100 column1">Virtual Cycle</td>
                                    <td class="cell100 column2">Gym</td>
                                    <td class="cell100 column3">8:00 AM - 9:00 AM</td>
                                    <td class="cell100 column4">Randy Porter</td>
                                    <td class="cell100 column5">20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


    
@endsection