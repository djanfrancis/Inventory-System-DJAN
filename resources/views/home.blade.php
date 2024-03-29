@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
<a href="/user" class="small-box-footer">
<div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ \App\User::count() }}</h3>

                <p>Users</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-secret"></i>
            </div>
            <i class="fa fa-arrow-circle-right"></i> </a>
        </div>
    </div>
    <!-- ./col -->
    <a href="{{ route('categories.index') }}" class="small-box-footer">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ \App\Category::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Warehouse</p>
            </div>
            <div class="icon">
                <i class="fa fa-list"></i>
            </div>
            <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <a href="{{ route('products.index') }}" class="small-box-footer">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ \App\Product::count() }}</h3>
                <p>Products</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <a href="{{ route('customers.index') }}" class="small-box-footer">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ \App\Customer::count() }}</h3>

                <p>Customers</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>


<div class="row">
    
    <!-- ./col -->
    <a href="{{ route('suppliers.index') }}" class="small-box-footer">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ \App\Supplier::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Suppliers</p>
            </div>
            <div class="icon">
                <i class="fa fa-signal"></i>
            </div>
            More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <a href="{{ route('productsIn.index') }}" class="small-box-footer">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3>{{ \App\Product_Masuk::count() }}</h3>

                <p>Total Purchases</p>
            </div>
            <div class="icon">
                <i class="fa fa-cart-plus"></i>
            </div>
          More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <a href="{{ route('productsOut.index') }}" class="small-box-footer">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ \App\Product_Keluar::count()  }}</h3>

                <p>Total Outgoing products</p>
            </div>
            <div class="icon">
                <i class="fa fa-minus"></i>
            </div>
            More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div id="container" class=" col-xs-6"></div>

@endsection

@section('top')
@endsection
