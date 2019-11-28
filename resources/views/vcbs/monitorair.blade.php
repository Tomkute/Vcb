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
            <h1 class="text-center w-100 text-danger alert alert-primary m-0" > Monitor air conditioner </h1>
            <div class="d-flex w-100 p-3">
                <p class="text-center w-100" >Nhóm trực hiện tại
                    <select name="option" id="UserIds">
                        <option value="">mời bạn chọn nhóm</option>
                        <option value="Nhóm 1">Nhóm 1</option>
                        <option value="Nhóm 2">Nhóm 2</option>
                        <option value="Nhóm 3">Nhóm 3</option>
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
<section class="container">
<div class="row pb-3">
    <table class="table table-bordered text-center table-hover table-striped align-content-between">
        <thead>
        <tr>
            <th scope="col" style="background-color: aquamarine;width: 10%">UserID</th>
            <th scope="col" style="background-color: aquamarine;width: 9%">Unnit</th>
            <th scope="col" style="background-color: aquamarine;width: 9%">Time</th>
            <th scope="col" style="background-color: aquamarine;width: 10%">WIB 8000</th>
            <th scope="col" style="background-color: aquamarine;width: 12%">Control panel</th>
            <th scope="col" style="background-color: aquamarine;width: 10%">UserID</th>
            <th scope="col" style="background-color: aquamarine;width: 9%">Unnit</th>
            <th scope="col" style="background-color: aquamarine;width: 9%">Time</th>
            <th scope="col" style="background-color: aquamarine;width: 10%">WIB 8000</th>
            <th scope="col" style="background-color: aquamarine;width: 12%">Control panel</th>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td > 10:00 AM </td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td>22:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>10:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>22:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>10:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>22:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>10:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>22:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>10:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>22:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row" colspan="10"><p class="alert alert-success m-0 p-0"> Monitoring ... </p></th>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td>12:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td>02:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>12:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>02:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>12:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>02:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>12:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>02:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>12:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>02:00 AM </td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row" colspan="10"><p class="alert alert-success m-0 p-0"> Monitoring ... </p></th>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td>14:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td>04:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>14:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>04:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>14:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>04:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>14:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>04:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>14:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>04:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row" colspan="10"><p class="alert alert-success m-0 p-0"> Monitoring ... </p></th>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td>16:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-1</td>
            <td>06:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>16:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-2</td>
            <td>06:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>16:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-3</td>
            <td>06:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>16:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-4</td>
            <td>06:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>16:00 PM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <th scope="row"><p class="name "></p></th>
            <td>Unit 1-5</td>
            <td>06:00 AM</td>
            <td><input type="text" style="width: 70%!important"  ></td>
            <td><input type="text" style="width: 70%!important"  ></td>
        </tr>
        <tr>
            <th scope="row" colspan="10"><p class="alert alert-success m-0 p-0"> Monitoring ... </p></th>
        </tr>
        </tbody>
    </table>
</div>

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
