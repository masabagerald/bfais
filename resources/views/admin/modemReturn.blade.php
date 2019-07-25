@extends('voyager::master')

@section('content')


    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body table-responsive">

                        <table id="dataTable" class="row table table-hover">


                            <thead>
                            <tr>
                                <th>Custodian</th>
                                <th>Email </th>
                                <th>Msidn</th>
                                <th>Serial</th>
                                <th>Isp </th>
                                <th>Status</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($items as $item)
                                <tr>

                                    <td>{{$item->Requester}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->msidn}}</td>
                                    <td>{{$item->serial}}</td>
                                    <td>{{$item->isp}}</td>
                                    <td>
                                    <form method="post" action="{{route('modem-returns')}}">
                                        {{ csrf_field() }}


                                        <select id="text" class="form-control" name="status">


                                            <option value="good">good condition</option>
                                            <option value="faulty">faulty condition</option>


                                            </optgroup>
                                        </select>



                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <input type="hidden" name="serial" value="{{$item->serial}}">
                                        <input type="hidden" name="msidn" value="{{$item->msidn}}">


                                        <td>
                                        <button type="submit" class="btn btn-success">confirm </button>

                                    </td>



                                    </form>












                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                        <div class="text-center">








                        </div>
                    </div>


                    @endsection



                </div>
            </div>
        </div>
    </div>
