@extends('layouts.client')

@section('title')
    <h2 class="content-header-title float-left mb-0">Productos</h2>
@endsection

@section('content')
    <!-- Wishlist Starts -->
    <section id="wishlist" class="grid-view wishlist-items">
        @foreach ($products as $product)
            <div class="card ecommerce-card">
                <div class="item-img text-center">
                    <a href="app-ecommerce-details.html">
                        <img src="./app-assets/images/elements/{{ $product->image }}" class="img-fluid" alt="img-placeholder" />
                    </a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <p>Disponible</p>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">{{ $product->price }}</h6>
                        </div>
                    </div>
                    <div class="item-name">
                        <a href="app-ecommerce-details.html">{{ $product->name }}</a>
                    </div>
                    <p class="card-text item-description">
                       {{ $product->description }}
                    </p>
                </div>
                @if (Route::has('login'))
                    @auth
                        <div class="item-options text-center">
                            <!-- <button type="button" class="btn btn-light btn-wishlist remove-wishlist">
                                                                                    <i data-feather="x"></i>
                                                                                    <span>Remove</span>
                                                                                </button> -->
                            <button type="button" class="btn btn-primary btn-cart move-cart">
                                <i data-feather="shopping-cart"></i>
                                <span class="add-to-cart">Agregar al carrito</span>
                            </button>
                        </div>
                    @endauth
                @endif
            </div>
        @endforeach
    </section>
@endsection
