@extends('layouts.master')

@section('content')
<style>
    .card {
        border: none;
        /* Loại bỏ đường viền của card */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        /* Thêm shadow cho card nếu cần */
    }

    .card-body {
        border: none;
        background-image: none;
    }
</style>

<div class="product-section">
    <div class="container mt-lg-4">
        <div class="row row-cols-12 mt-4">
            <?php
            for ($i = 0; $i < 2; $i++) {

                $imagePaths = [
                    asset('images/img-grid-1.jpg'),
                    asset('images/img-grid-2.jpg'),
                    asset('images/img-grid-3.jpg'),
                ];

            ?>

                @foreach ($imagePaths as $imagePath)
                <div class="col-md-4" style="margin-top:20px">
                    <div class="" style="border: none">
                        <img src="{{$imagePath}}" class="card-img-top" alt="...">
                        <div class="text-centerpt-2">
                            <h6 class="card-title">How To Keep Your Furniture Clean</h6>
                            <p class="card-text">by Robert Fox on Dec 15, 2021</p>
                        </div>
                    </div>
                </div>
                @endforeach
            <?php } ?>
        </div>
    </div>
</div>
@endsection