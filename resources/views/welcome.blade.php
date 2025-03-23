<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <title>E-KYC Registration</title>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="container mt-5 col-md-12">
            <h3>e-KYC Registration</h3>
            <form method="POST" action="{{ url('/kyc') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-md-6">
                    <label>Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label>NID Number</label>
                    <input type="text" name="nid_number" class="form-control" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label>Address</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>
                <div class="mb-3 col-md-6">
                    <label>NID Front Image</label>
                    <input type="file" name="nid_front" class="form-control" accept="image/*" required>
                </div>
                <div class="mb-3 col-md-6">
                    <label>NID Back Image (optional)</label>
                    <input type="file" name="nid_back" class="form-control" accept="image/*">
                </div>
                <div class="mb-3 col-md-6">
                    <label>Selfie</label>
                    <input type="file" name="selfie" class="form-control" accept="image/*" required>
                </div>
                <button class="btn btn-primary mx-auto">Submit KYC</button>
            </form>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
