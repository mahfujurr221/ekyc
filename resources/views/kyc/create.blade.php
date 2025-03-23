@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>e-KYC Registration</h3>
    <form method="POST" action="{{ url('/kyc') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NID Number</label>
            <input type="text" name="nid_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>NID Front Image</label>
            <input type="file" name="nid_front" class="form-control" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label>NID Back Image (optional)</label>
            <input type="file" name="nid_back" class="form-control" accept="image/*">
        </div>
        <div class="mb-3">
            <label>Selfie</label>
            <input type="file" name="selfie" class="form-control" accept="image/*" required>
        </div>
        <button class="btn btn-primary">Submit KYC</button>
    </form>
</div>
@endsection
