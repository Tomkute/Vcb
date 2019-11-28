@extends('layouts.main')


@section('contents')
    <style>
        input[type="time"] {
            border: 1px solid #9af490
        }
    </style>
    <section>
        <div class="container pt-4" >
            <div class="row">
                <h1 class="text-center w-100 text-danger alert alert-info p-0" >Hệ thống ASSEND - 10.1.1.5</h1>
                <p class="text-center w-100" >Nhóm trực hiện tại
                    <select name="option" id="UserIds">
                        <option value="">mời bạn chọn nhóm</option>
                        <option value="Team A1">Nhóm 1</option>
                        <option value="Team B2">Nhóm 2</option>
                        <option value="Team C3">Nhóm 3</option>
                    </select>
                </p>
            </div>
            <div class="row">
                <table class="table table-bordered text-center table-hover table-striped">
                    <thead>
                    <tr>
                        <th scope="col" style="background-color: aquamarine">STT</th>
                        <th scope="col" style="background-color: aquamarine;width: 10%">UserID</th>
                        <th scope="col" style="background-color: aquamarine">Action</th>
                        <th scope="col" style="background-color: aquamarine"class="w-50">Section</th>
                        <th scope="col" style="background-color: aquamarine">Start</th>
                        <th scope="col" style="background-color: aquamarine">End</th>
                        <th scope="col" style="background-color: aquamarine" class="text-center w-10">Note</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="col">1</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        </td>
                        <td> File SCAEXTFV</td>
                        <td><input type="text" class="border-0" style="text-align: center; background-color: inherit; color: forestgreen" placeholder="Number of Record"></td>
                        <td>Record</td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">2</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td> File SCTBDTLVP</td>
                        <td><input type="text" class="border-0" style="text-align: center; background-color: inherit; color: forestgreen" placeholder="Number of Record"></td>
                        <td>Record</td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">3</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td> File SCMMEXTTP</td>
                        <td><input type="text" class="border-0" style="text-align: center; background-color: inherit; color: forestgreen" placeholder="Number of Record"></td>
                        <td>Record</td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">4</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td> % System</td>
                        <td><input type="text" class="border-0" style="text-align: center; background-color: inherit; color: forestgreen" placeholder="Percent of System"></td>
                        <td>%</td>
                        <td><input type="text" class="border-0 text-danger " style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">5</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td> % Card</td>
                        <td><input type="text" class="border-0" style="text-align: center; background-color: inherit; color: forestgreen" placeholder="Percent of Card"></td>
                        <td>%</td>
                        <td><input type="text" class="border-0 text-danger " style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">7</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td>  FILE(SCATXLGP) - Job CUT </td>
                        <td><input type="checkbox" class="text-center"></td>
                        <td colspan="2"><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">8</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td><div class="alert-primary text-success" style="font-size: 20px"> Send Message – Before Batch </div></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td colspan="2"><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">9</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td>  User Signon - SCMBANKP - SCMFEMBP </td>
                        <td><input type="checkbox" class="text-center"></td>
                        <td colspan="2"><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">10</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td>  Job Customize - (VCBCZB4C)  </td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">11</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td class="text-danger">  Save To Tape  -Before Batch  </td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">12</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td class="text-danger">  <span class="badge badge-secondary mr-2 font-weight-bolder" style="font-size: 16px"> Save BFR </span>  -   CARD FL  </td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">13</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td class="text-danger">  <span class="badge badge-secondary mr-2 font-weight-bolder" style="font-size: 16px"> Save BFR </span>  - CARD FLDR  </td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">14</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td><div class="alert-danger text-success" style="font-size: 20px"> Batch Processing - ASSEND </div></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">15</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td><div class="alert-info" style="font-size: 20px"> VCMRUNC  </div></td>
                        <td colspan="2"><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">16</th>
                        <td class="name"></td>
                        <td style="color:tomato"> Checked </td>
                        <td><div style="font-size: 18px"> VCMTRGRP  </div></td>
                        <td colspan="2"><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">17</th>
                        <td class="name"></td>
                        <td style="color:tomato"> Checked </td>
                        <td><div style="font-size: 18px"> VCMBRGRP  </div></td>
                        <td colspan="2"><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">18</th>
                        <td class="name"></td>
                        <td style="color:tomato"> Checked </td>
                        <td><div style="font-size: 18px"> VCNBIDTP   </div></td>
                        <td colspan="2"><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">19</th>
                        <td class="name"></td>
                        <td style="color:tomato"> Checked </td>
                        <td><div style="font-size: 18px"> VCMRUNC   </div></td>
                        <td colspan="2"><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">20</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td><div style="font-size: 18px" class="alert-info"> Send Message – After Batch   </div></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">21</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td>Update PLN</td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">22</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td class="text-danger">  <span class="badge badge-secondary mr-2 font-weight-bolder" style="font-size: 16px"> Save to tape </span>  - AFT  </td>

                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">23</th>
                        <td class="name"></td>
                        <td style="color:tomato"> RUN </td>
                        <td class="text-danger">  <span class="badge badge-secondary mr-2 font-weight-bolder" style="font-size: 16px"> Save AFT </span>  - CARD FL  </td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="time"  style="text-align: center; background-color: inherit; color: forestgreen" ></td>
                        <td><input type="text" class="border-0 text-danger" style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">24</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td> % System</td>
                        <td><input type="text" class="border-0" style="text-align: center; background-color: inherit; color: forestgreen" placeholder="Percent of System"></td>
                        <td>%</td>
                        <td><input type="text" class="border-0 text-danger " style="background-color: inherit"></td>
                    </tr>
                    <tr>
                        <th scope="col">25</th>
                        <td class="name"></td>
                        <td style="color:tomato">Checked</td>
                        <td> % Card</td>
                        <td><input type="text" class="border-0" style="text-align: center; background-color: inherit; color: forestgreen" placeholder="Percent of Card"></td>
                        <td>%</td>
                        <td><input type="text" class="border-0 text-danger " style="background-color: inherit"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('inline-scripts')
    <script>
        $(document).ready(function() {
            $('#UserIds').change(function () {
                $('.name').html($(this).val());
            })
        })
    </script>
@endsection
