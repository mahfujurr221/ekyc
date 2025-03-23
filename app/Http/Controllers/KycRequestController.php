<?php

namespace App\Http\Controllers;

use App\Models\KycRequest;
use Illuminate\Http\Request;

class KycRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string',
            'nid_number' => 'required|string|unique:kyc_requests',
            'dob' => 'required|date',
            'address' => 'nullable|string',
            'nid_front' => 'required|image',
            'nid_back' => 'nullable|image',
            'selfie' => 'required|image',
        ]);

        $validated['nid_front'] = $request->file('nid_front')->store('kyc_docs', 'public');
        $validated['nid_back'] = $request->file('nid_back') ? $request->file('nid_back')->store('kyc_docs', 'public') : null;
        $validated['selfie'] = $request->file('selfie')->store('kyc_docs', 'public');

        KycRequest::create($validated);

        return back()->with('success', 'KYC submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KycRequest $kycRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KycRequest $kycRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KycRequest $kycRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KycRequest $kycRequest)
    {
        //
    }
}
