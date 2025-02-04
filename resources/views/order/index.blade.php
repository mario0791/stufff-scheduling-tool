@extends('layouts.main')

@section('page-title')
    {{ __('Order') }}
@endsection

@section('content')
    <div class="dash-container">
        <div class="dash-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-header-title">
                                <h4 class="m-b-10">{{ __('Order') }}</h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">{{ __('Home') }}</a></li>
                                <li class="breadcrumb-item">{{ __('Order') }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end text-right">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header card-body table-border-style">
                          
                            <div class="table-responsive">
                                <table class="table pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name"> {{ __('Order Id') }}
                                            </th>
                                            <th scope="col" class="sort" data-sort="budget">{{ __('Date') }}
                                            </th>
                                            <th scope="col" class="sort" data-sort="status">{{ __('Name') }}
                                            </th>
                                            <th scope="col">{{ __('Plan Name') }}</th>
                                            <th scope="col" class="sort" data-sort="completion">
                                                {{ __('Price') }}</th>
                                            <th scope="col" class="sort" data-sort="completion">
                                                {{ __('Payment Type') }}</th>
                                            <th scope="col" class="sort" data-sort="completion">
                                                {{ __('Status') }}</th>
                                            <th scope="col" class="sort" data-sort="completion">
                                                {{ __('Coupon') }}</th>
                                            <th scope="col" class="sort" data-sort="completion">
                                                {{ __('Invoice') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->order_id }}</td>
                                                <td>{{ $order->created_at->format('d M Y') }}</td>
                                                <td>{{ $order->user_name }}</td>
                                                <td>{{ $order->plan_name }}</td>
                                                <td>{{ env('CURRENCY_SYMBOL') . $order->price }}</td>
                                                <td>{{ $order->payment_type }}</td>
                                                <td>
                                                    @if ($order->payment_status == 'succeeded')
                                                        <i class="mdi mdi-circle text-success"></i>
                                                        {{ ucfirst($order->payment_status) }}
                                                    @else
                                                        <i class="mdi mdi-circle text-danger"></i>
                                                        {{ ucfirst($order->payment_status) }}
                                                    @endif
                                                </td>

                                                <td>{{ !empty($order->total_coupon_used)? (!empty($order->total_coupon_used->coupon_detail)? $order->total_coupon_used->coupon_detail->code: '-'): '-' }}
                                                </td>

                                                <td class="text-center">
                                                    @if ($order->receipt != 'free coupon' && $order->payment_type == 'STRIPE')
                                                        <a href="{{ $order->receipt }}" class="btn  btn-outline-primary" target="_blank">
                                                            <i class="fas fa-file-invoice"></i> {{ __('Invoice') }}
                                                        </a>
                                                    @elseif($order->receipt == 'free coupon')
                                                        <p>{{ __('Used 100 % discount coupon code.') }}</p>
                                                    @elseif($order->payment_type == 'Manually')
                                                        <p>{{ __('Manually plan upgraded by super admin') }}</p>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
