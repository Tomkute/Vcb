@extends('layouts.main')

@section('contents')

    <section class="container text-center">
        <h2 class="text-center text-danger">Giới thiệu về chúng tôi</h2>
        <div class="alert alert-success">
            <h3>Danh sách cán bộ trực vận hành</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-primary mb-3" style="width: 22rem;">
                    <div class="card-body">
                        <h5> The A Team </h5>
                    </div>
                    <ul class="list-group text-primary">
                        <li class="list-group-item">Nguyễn Xuân Thảo</li>
                        <li class="list-group-item">Nguyễn Đỗ Trường Giang</li>
                        <li class="list-group-item">Bùi Mạnh Hiệp</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-primary mb-3" style="width: 22rem;">
                    <div class="card-body">
                        <h5> The B Team </h5>
                    </div>
                    <ul class="list-group text-primary">
                        <li class="list-group-item">Nguyễn Bảo Anh</li>
                        <li class="list-group-item">Nguyễn Huy Hào</li>
                        <li class="list-group-item">Phạm Anh Đức</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-primary mb-3" style="width: 22rem;">
                    <div class="card-body">
                        <h5> The C Team </h5>
                    </div>
                    <ul class="list-group text-primary">
                        <li class="list-group-item">Đào Xuân Trường</li>
                        <li class="list-group-item">Nguyễn Văn Hùng</li>
                        <li class="list-group-item">Nguyễn Xuân Anh Tuấn</li>
                    </ul>
                </div>
            </div>
        </div>
        <h5>Liên hệ</h5>
        <hr class="light">
    </section>

@endsection
