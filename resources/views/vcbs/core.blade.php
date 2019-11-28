@extends('layouts.main')


@section('contents')
    <style>
        input[type="time"] {
            border: 1px solid #9af490
        }
    </style>
    <form action="" method="POST">
        <section>
            <div class="container p-3">
                <div class="row">
                    <h1 class="text-center w-100 text-danger alert alert-info">Hệ thống CoreBanking - 10.1.1.2</h1>
                    <p class="text-center w-100">Nhóm trực hiện tại

                        <select name="group" id="UserIds">


                            <option value="">mời bạn chọn nhóm</option>
                            @foreach($groups as $group)
                                <option value="{{ $group->description }}">{{$group->fullname}}</option>
                            @endforeach
                        </select>
                    </p>
                    <input type="submit" name="submit" value="Submit">
                </div>
            </div>
        </section>
        <section class="container">

            <table class="table table-bordered text-center table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col" style="width: 10%">UserID</th>
                    <th scope="col">Action</th>
                    <th scope="col" class="w-50">Section</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col" class="text-center w-10">Note</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="name"></td>
                        <td>RUN</td>
                        <td>{{ $job->job_name }}</td>

                        @if($job->type == 'time_range')
                            <td><input type="time" name="start_{{ $job->id }}"></td>
                            <td><input type="time" name="end_{{ $job->id }}"></td>
                        @elseif($job->type == 'time')
                            <td colspan="2"><input type="time" name="res_{{ $job->id }}"></td>
                        @elseif($job->type == 'checkbox')
                            <td colspan="2"><input type="checkbox" name="res_{{ $job->id }}"></td>
                        @elseif($job->type == 'text')
                            <td colspan="2"><input type="text" name="res_{{ $job->id }}"></td>
                        @endif
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </form>
@endsection

@section('inline-scripts')
    <script>
        $(document).ready(function () {
            $('#UserIds').change(function () {
                $('.name').html($(this).val());
            })
        })
    </script>
@endsection
