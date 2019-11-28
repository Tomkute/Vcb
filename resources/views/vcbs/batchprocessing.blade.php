@extends('layouts.main')
@section('contents')
<div class="container text-center p-4">
    <h1> Chao mừng {{$username }} đến với hệ thống batch Processing daily</h1>
    <h2> Date : {{ date('d-m-Y H:i:s') }}</h2>
</div>
<section class="container">
    <div class="row">
        <h1 class="text-center w-100 text-danger alert alert-info">Hệ thống ASSEND - 10.1.1.5</h1>
        <table class="table table-bordered text-center table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">RUN</th>
                <th scope="col" class="w-25">Action</th>
                <th scope="col">Time Start</th>
                <th scope="col">User_ID</th>
                <th scope="col">Time End</th>
                <th scope="col">User_ID</th>
                <th scope="col">Them | Sua</th>
            </tr>
            </thead>
            <tbody>
            @foreach($jobs_card as $job)
                <from method="POST" action="">
                    @csrf
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <th scope="col">RUN</th>
                        <td>{{ $job->job_name }}</td>
                        @if($job->type == 'time_range')
                            <td><input type="time" name="start_{{ $job->id }}"></td>
                            <td class="name">{{$username}}</td>
                            <td><input type="time" name="end_{{ $job->id }}"></td>
                            <td class="name">{{$username}}</td>
                        @elseif($job->type == 'time')
                            <td colspan="2"><input type="time" name="res_{{ $job->id }}"></td>
                            <td class="name">{{$username}}</td>
                        @elseif($job->type == 'checkbox')
                            <td colspan="2"><input type="checkbox" name="res_{{ $job->id }}"></td>
                            <td class="name">{{$username}}</td>
                        @elseif($job->type == 'text')
                            <td colspan="3"><input type="text" name="res_{{ $job->id }}"></td>
                            <td class="name">{{$username}}</td>
                        @endif
                        <th colspan="2">
                            <button type="submit" class="btn btn-primary btn-sm">Them</button>
                        </th>
                    </tr>
                </from>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <h1 class="text-center w-100 text-danger alert alert-info">Hệ thống CoreBanking - 10.1.1.2</h1>
    </div>
    <table class="table table-bordered text-center table-hover table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">RUN</th>
            <th scope="col" class="w-25">Action</th>
            <th scope="col">Time Start</th>
            <th scope="col">User_ID</th>
            <th scope="col">Time End</th>
            <th scope="col">User_ID</th>
            <th scope="col">Them | Sua</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs_core as $job)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <th scope="col">RUN</th>
                <td>{{ $job->job_name }}</td>
                @if($job->type == 'time_range')
                    <td><input type="time" name="start_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                    <td><input type="time" name="end_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @elseif($job->type == 'time')
                    <td colspan="2"><input type="time" name="res_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @elseif($job->type == 'checkbox')
                    <td colspan="2"><input type="checkbox" name="res_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @elseif($job->type == 'text')
                    <td colspan="3"><input type="text" name="res_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @endif
                <th colspan="2">Them | Sua</th>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <h1 class="text-center w-100 text-danger alert alert-info">Hệ thống Treasury 10.1.1.130</h1>
    </div>
    <table class="table table-bordered text-center table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">RUN</th>
                <th scope="col" class="w-25">Action</th>
                <th scope="col">Time Start</th>
                <th scope="col">User_ID</th>
                <th scope="col">Time End</th>
                <th scope="col">User_ID</th>
                <th scope="col">Them | Sua</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jobs_treasury as $job)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <th scope="col">RUN</th>
                <td>{{ $job->job_name }}</td>
                @if($job->type == 'time_range')
                    <td><input type="time" name="start_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                    <td><input type="time" name="end_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @elseif($job->type == 'time')
                    <td colspan="2"><input type="time" name="res_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @elseif($job->type == 'checkbox')
                    <td colspan="2"><input type="checkbox" name="res_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @elseif($job->type == 'text')
                    <td colspan="3"><input type="text" name="res_{{ $job->id }}"></td>
                    <td class="name">{{$username}}</td>
                @endif
                <th colspan="2">Them | Sua</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>

    @endsection
