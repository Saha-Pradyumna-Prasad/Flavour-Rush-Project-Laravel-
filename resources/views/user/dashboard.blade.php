@extends('layouts.app')

@section('content')
<style>
    .welcome-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
    }
    
    .order-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        transition: all 0.3s;
        position: relative;
    }
    
    .order-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }
    
    .order-status {
        position: absolute;
        top: 20px;
        right: 20px;
    }
    
    .order-details {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #eee;
    }
    
    .btn-light {
        background: white;
        color: #667eea;
        border: none;
    }
    
    .btn-light:hover {
        background: #f0f0f0;
        color: #764ba2;
    }
</style>

<div class="container my-5">
    <!-- ওয়েলকাম কার্ড -->
    <div class="welcome-card">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2><i class="fas fa-user-circle"></i> স্বাগতম, {{ auth()->user()->name }}!</h2>
                <p class="lead mb-0">আপনার অর্ডার ট্র্যাক করুন এবং নতুন খাবার অর্ডার করুন</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="{{ route('home') }}" class="btn btn-light">
                    <i class="fas fa-shopping-cart"></i> নতুন অর্ডার করুন
                </a>
            </div>
        </div>
    </div>
    
    <!-- আমার অর্ডার সেকশন -->
    <h3 class="mb-4"><i class="fas fa-history"></i> আমার অর্ডার সমূহ</h3>
    
    @if($orders->count() > 0)
        <div class="row">
            @foreach($orders as $order)
                <div class="col-md-6">
                    <div class="order-card">
                        <div class="order-status">
                            <span class="badge bg-success">কনফার্মড</span>
                        </div>
                        
                        <h4><i class="fas fa-hamburger"></i> {{ $order->food_name }}</h4>
                        
                        <div class="row order-details">
                            <div class="col-6">
                                <small class="text-muted">অর্ডার আইডি</small>
                                <p><strong>#{{ $order->id }}</strong></p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">অর্ডারের তারিখ</small>
                                <p><strong>{{ $order->created_at->format('d/m/Y h:i A') }}</strong></p>
                            </div>
                            <div class="col-12">
                                <small class="text-muted">ডেলিভারি ঠিকানা</small>
                                <p>{{ $order->address }}</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">ফোন নম্বর</small>
                                <p>{{ $order->phone }}</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">পেমেন্ট মেথড</small>
                                <p>{{ $order->payment_method }} ({{ $order->transaction_id }})</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-5 bg-light rounded">
            <i class="fas fa-shopping-bag fa-4x text-muted"></i>
            <h4 class="mt-3">কোন অর্ডার নেই</h4>
            <p>আপনি এখনো কোন অর্ডার করেননি।</p>
            <a href="{{ route('home') }}" class="btn btn-primary">
                <i class="fas fa-utensils"></i> খাবার অর্ডার করুন
            </a>
        </div>
    @endif
</div>
@endsection