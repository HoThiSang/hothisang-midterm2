@extends('layouts.master')

@section('content')
<style>
    .card {
        border: none;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .card-body {
        border: none;
        background-image: none;
    }

    .description {
        padding: 15px;
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
                        <img src="{{$imagePath}}" class="card-img-top" style="height: 250px; border-radius:25px" alt="...">
                        <div class="description">
                            <h6 class="card-title">How To Keep Your Furniture Clean</h6>
                            <p class="card-text">by <b>Robert Fox </b>on <b>Dec 15, 2021</b></p>
                        </div>
                    </div>
                </div>
                @endforeach
            <?php } ?>
        </div>
    </div>
</div>
@endsection