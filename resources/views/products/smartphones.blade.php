@extends('layouts.layout')

@section('content')
<x-header />
@foreach ($products as $product)
    <div class="product-list-item">
        <div class="product-img">
            <img src="{{ "../" . $product['src'] }}" alt="product-image">
        </div>
        <div class="product-details">
           <div class="title">{{ $product['title'] }}</div>
           <div class="specs">({{ $product['specs'] }})</div>
           <div class="rating">
                   <span>{{ $product['rating'] }} <i class="fas fa-star"></i></span>
            </div>
            <div class="reviews">{{ $product['reviews'] }} Reviews</div>
            <div class="new-price">&#8377; {{ $product['new_price'] }} <span class="old-price">&#8377; {{ $product['old_price'] }}
            </span>  <span class="discount">{{ $product['discount'] }} off</span></div>
            <div class="emi">No cost EMI starting from &#8377;{{ $product['emi'] }}/month</div>
            <div class="bank-options">
                <div>
                    <i class="fas fa-tag"></i> Bank Offer 5% Unlimited Cashback on Flipkart Axis Bank Credit Card <span>T&C</span>  
                </div>
                <div>
                     <i class="fas fa-tag"></i> Bank Offer Flat ₹75 discount on UPI transaction above ₹10,000 in a single cart value <span>T&C</span>
                </div>
                <div>
                    <i class="fas fa-tag"></i> Bank Offer 10% Off on HDFC Bank Mastercard Credit card first time transaction, Terms and Conditions Apply <span>T&C</span>
                </div>
                <div>
                    <input type="hidden" name="hidden-input" value="{{ $product['id'] }}">
                </div>
            </div>
            <div class="buy-buttons">
                <button class="add-to-wishlist">add to wishlist <i class="fas fa-heart"></i></button>
                <button class="add-to-cart">add to cart <i class="fas fa-shopping-cart"></i></button>
            </div>
        </div>
    </div>
@endforeach

@endsection

@section('pagelinks')
    <div class="page-links">{{ $products->links() }}</div>    
@endsection

 
