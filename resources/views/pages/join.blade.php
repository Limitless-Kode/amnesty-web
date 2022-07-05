@extends('layouts.page')
@section('title', 'Amnesty Ghana')
@section('styles')
<link rel="stylesheet" href={{asset("assets/css/index.css")}}>   
<link rel="stylesheet" href={{asset("assets/css/join.css")}}>   
@endsection
@section('scripts')
    <script src={{asset("assets/js/join.js")}}></script>
@endsection
@section('content')
    <div class="join-container">
        <div class="form-container">
            <div class="form">
                <h1>Join Us Today</h1>
                <form id="join">
                    <div class="form-group">
                        <input type="text" required id="name">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" required id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" required id="phone">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-group">
                        <input list="regions" type="text" id="region" required>
                        <label for="region">Region</label>
    
                        <datalist id="regions">
                            <option value="Ahafo Region"></option>
                            <option value="Ashanti Region"></option>
                            <option value="Bono Region"></option>
                            <option value="Bono East Region"></option>
                            <option value="Central Region"></option>
                            <option value="Eastern Region"></option>
                            <option value="Greater Accra Region"></option>
                            <option value="North East Region"></option>
                            <option value="Northern Region"></option>
                            <option value="Savannah Region"></option>
                            <option value="Upper East Region"></option>
                            <option value="Upper West Region"></option>
                            <option value="Volta Region"></option>
                            <option value="Oti Region"></option>
                            <option value="Western Region"></option>
                            <option value="Western North Region"></option>
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="text" required id="city">
                        <label for="city">City</label>
                    </div>
                    <div class="form-group">
                        <input type="text" required id="address">
                        <label for="address">Address</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary btn-fw">JOIN NOW</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
