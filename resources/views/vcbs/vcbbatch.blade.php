@extends('layouts.main')


@section('contents')
    <style>
        input[type="time"] {
            border: 1px solid #9af490
        }
    </style>
<header>
    <div class="container pt-3" >
        <div class="row">
            <h1 class="text-center w-100 text-danger alert alert-primary" >Hệ thống VCB.Batch </h1>
            <div class="d-flex w-100">
                <p class="text-center w-100" >Nhóm trực hiện tại
                    <select name="option" id="UserIds">
                        <option value="">mời bạn chọn nhóm</option>
                        <option value="Nhóm trực 1">Nhóm 1</option>
                        <option value="Nhóm trực 2">Nhóm 2</option>
                        <option value="Nhóm trực 3">Nhóm 3</option>
                    </select>
                </p>
                <p class="w-100">Cán bộ đang trực :
                    <select name="option" id="UserNames">
                        <option value="">mời bạn chọn cán bộ</option>
                        <option value="Nguyễn Xuân Thảo">Nguyễn Xuân Thảo</option>
                        <option value="1 B">Nguyễn Đỗ Trường Giang</option>
                        <option value="1 B">Bùi Mạnh Hiêp</option>
                        <option value="2 A">Nguyễn Bảo Anh</option>
                        <option value="2 B">Nguyễn Huy Hào</option>
                        <option value="2 C">Phạm Anh Đức</option>
                        <option value="3 A">Đào Xuân Trường</option>
                        <option value="3 B">Nguyễn Văn Hùng</option>
                        <option value="3 C">Nguyễn Xuân Anh Tuấn</option>
                    </select>
                </p>
            </div>
        </div>
    </div>
</header>
<section class="container pb-3">
    <table class="table table-bordered text-center table-hover table-striped">
        <thead>
        <tr>
            <th scope="col" style="background-color: aquamarine">STT</th>
            <th scope="col" style="width: 20%;background-color: aquamarine">UserID</th>
            <th scope="col" style="background-color: aquamarine">Action</th>
            <th scope="col" class="w-50" style="background-color: aquamarine">Section</th>
            <th scope="col" style="background-color: aquamarine">Start</th>
            <th scope="col" style="background-color: aquamarine">End</th>
            <th scope="col" style="background-color: aquamarine"class="text-center w-10">Note</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td class="name"> </td>
            <td>CHECK</td>
            <td>Count</td>
            <td colspan="2"><input type="text" class="border-0 text-center" placeholder="12345678"></td>
            <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><p class="name w-100"></p></td>
            <td>RUN</td>
            <td><div class="alert-danger font-weight-bolder text-danger" style="font-size: 20px"> 1. Run Batch  daily  (INFO Only) </div></td>
            <td><input type="time"></td>
            <td><input type="time"></td>
            <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><p class="name w-100"></p></td>
            <td>RUN</td>
            <td>Process 1 (68)</td>
            <td><input type="time"></td>
            <td><input type="time"></td>
            <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><p class="name w-100"></p></td>
            <td>RUN</td>
            <td>Process 2 (68)</td>
            <td><input type="time"></td>
            <td><input type="time"></td>
            <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td><p class="name w-100"></p></td>
            <td>RUN</td>
            <td>Process 1 (CN)</td>
            <td><input type="time"></td>
            <td><input type="time"></td>
            <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td><p class="name w-100"></p></td>
            <td>RUN</td>
            <td>Process 2 (CN)</td>
            <td><input type="time"></td>
            <td><input type="time"></td>
            <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td><p class="name w-100"></p></td>
            <td>CHECK</td>
            <td>View Report</td>
            <td colspan="2"><input type="checkbox"></td>
            <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
        </tr>

        </tbody>
    </table>
</section>
@endsection

@section('inline-scripts')
    <script>
        $(document).ready(function() {
            $('#UserIds').change(function () {
                $('.name').html($(this).val());
            })
            $('#UserNames').change(function(){
                let UserID = $(this).val();
                // console.log(UserID);
                $('.name').html(UserID);
            })
        })
    </script>
@endsection
