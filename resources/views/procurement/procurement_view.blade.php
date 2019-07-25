@extends('layouts.master')

@section('content')



<div class="panel with-nav-tabs panel-default">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1default" data-toggle="tab">Pending</a></li>
            <li><a href="#tab2default" data-toggle="tab">Approved</a></li>
            <li><a href="#tab3default" data-toggle="tab">All</a></li>

        </ul>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1default">
                <div class="page-content container-fluid">

                    <h3 >Finance Approvals</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <div class="table-responsive  col-md-12">

                                        <table  class=" table table-condensed  table-hover table-bordered requisition" style="width:100%">

                                            <thead>
                                            <tr>
                                                <th>Request Date </th>
                                                <th>Activity Code</th>
                                                <th>Activity Description</th>
                                                <th>Donor name</th>
                                                <th>Program</th>
                                                <th>Budget Code</th>
                                                <th>Budget holder</th>
                                                <th>Budget holder approval date</th>
                                                <th>Responsible Officer</th>
                                                <th>Attached Docs</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($procurements as $request)
                                            <tr>

                                                <td>{{$request->created_at}}</td>
                                                <td>{{$request->activity_code}}</td>
                                                <td>{{$request->desription}}</td>
                                                <td>{{$request->donor}}</td>
                                                <td>{{$request->programme}}</td>
                                                <td>{{$request->budget_code}}</td>
                                                <td>{{$request->budget_holder}}</td>
                                                <td>{{$request->created_at}}</td>
                                                <td>{{$request->requester}}</td>
                                                <td></td>



                                                <td>
                                                    <form method="post" action="{{route('financeApproval')}}" onsubmit="return confirm('Do you want to approve?');">


                                                        {{ csrf_field() }}

                                                        <input type="hidden" name="id" value="{{$request->id}}">

                                                        <button type="submit" class="btn btn-xs btn-success">Approve</button>
                                                    </form>


                                                    <button class="btn btn-xs btn-danger">Decline</button>

                                                </td>


                                            </tr>

                                            @endforeach
                                            </tbody>
                                        </table>


                                        <div class="text-center">


                                        </div>
                                    </div>






                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab2default">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <div class="table-responsive  col-md-12">

                                    <table  class=" table table-condensed  table-hover table-bordered requisition" style="width:100%">

                                        <thead>
                                        <tr>
                                            <th>Request Date </th>
                                            <th>Activity Code</th>
                                            <th>Activity Description</th>
                                            <th>Donor name</th>
                                            <th>Program</th>
                                            <th>Budget Code</th>
                                            <th>Budget holder</th>
                                            <th>Budget holder approval date</th>
                                            <th>Responsible Officer</th>
                                            <th>Attached Docs</th>


                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($procurements as $request)
                                        <tr>

                                            <td>{{$request->created_at}}</td>
                                            <td>{{$request->activity_code}}</td>
                                            <td><a href="{{route('viewMore',['id' => $request->id])}}" >{{$request->desription}}</a></td>
                                            <td>{{$request->donor}}</td>
                                            <td>{{$request->programme}}</td>
                                            <td>{{$request->budget_code}}</td>
                                            <td>{{$request->budget_holder}}</td>
                                            <td>{{$request->created_at}}</td>
                                            <td>{{$request->requester}}</td>
                                            <td></td>


                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>


                                    <div class="text-center">


                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab3default">

                <div class="page-content container-fluid">

                    <h3 >All Requests</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <div class="table-responsive  col-md-12">

                                        <table  class=" table table-condensed  table-hover table-bordered requisition" style="width:100%">

                                            <thead>
                                            <tr>
                                                <th>Request Date </th>
                                                <th>Activity Code</th>
                                                <th>Activity Description</th>
                                                <th>Donor name</th>
                                                <th>Program</th>
                                                <th>Budget Code</th>
                                                <th>Budget holder</th>
                                                <th>Budget holder approval date</th>
                                                <th>Responsible Officer</th>
                                                <th>Attached Docs</th>


                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($procurements as $request)
                                            <tr>

                                                <td>{{$request->created_at}}</td>
                                                <td>{{$request->activity_code}}</td>
                                                <td><a href="{{route('viewMore',['id' => $request->id,'current'=>URL::current()])}}" >{{$request->desription}}</a></td>
                                                <td>{{$request->donor}}</td>
                                                <td>{{$request->programme}}</td>
                                                <td>{{$request->budget_code}}</td>
                                                <td>{{$request->budget_holder}}</td>
                                                <td>{{$request->created_at}}</td>
                                                <td>{{$request->requester}}</td>
                                                <th></th>



                                            </tr>

                                            @endforeach
                                            </tbody>
                                        </table>


                                        <div class="text-center">


                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
