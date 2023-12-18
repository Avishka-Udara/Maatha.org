@extends('mdss.layout')
@section('content')
<!--add back button-->

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>MDS Details</h2>
                    <a class="btn btn-primary" href="{{ route('mdss.index') }}">Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ $mds->District }}
                    </div>
                    <div class="card-body">
                        <p class="card-text">Divisional Secretariat: {{ $mds->Divisional_Secretariat }}</p>
                        <p class="card-text">Grama Niladhari Division: {{ $mds->Grama_Niladhari_Division }}</p>
                        <p class="card-text">Grama Niladhari Division Number: {{ $mds->Grama_Niladhari_Division_Number }}</p>
                        <p class="card-text">Village: {{ $mds->Village }}</p>
                        <p class="card-text">Office Address: {{ $mds->Office_Address }}</p>
                        <p class="card-text">Prioritized project proposal: {{ $mds->Prioritized_project_proposal }}</p>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Board Members
                    </div>
                    <div class="card-body">
                        <p class="card-text">President: {{ $mds->President }}</p>
                        <p class="card-text">Secretary: {{ $mds->Secretary }}</p>
                        <p class="card-text">Treasurer: {{ $mds->Treasurer }}</p>
                        <p class="card-text">Assistant Treasurer: {{ $mds->Assistant_treasurer }}</p>
                        <p class="card-text">Agriculture Coordinator: {{ $mds->Agriculture_Coordinator }}</p>
                        <p class="card-text">Vocational Training and Entrepreneurship Coordinator: {{ $mds->Vocational_Training_and_Entrepreneurship_Coordinator }}</p>
                        <p class="card-text">English Language and Education Coordinator: {{ $mds->English_language_and_Education_Coordinator }}</p>
                        <p class="card-text">Media & IT Coordinator: {{ $mds->mitcordinator }}</p>
                        <p class="card-text">Entertainment and Reconciliation Coordinator: {{ $mds->Entertainment_and_Reconciliation_Coordinator }}</p>
                        <p class="card-text">Health Promotion Coordinator: {{ $mds->Health_Promotion_Coordinator }}</p>
                        <p class="card-text">Women Affairs and Child Development Coordinator: {{ $mds->Women_affaires_and_child_development_Coordinator }}</p>
                        <!--p class="card-text">Coordinator: {{ $mds->Coordinator }}</p-->
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Images
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <img src="{{ asset('images/' . $mds->image) }}" alt="MDS Image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Religious Authority
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ asset('uploads/mdsra/' . $mds->Religious_Authority) }}" target="_blank" class="btn btn-primary">View File</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Grama Niladhari
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ asset('uploads/mdsgn/' . $mds->Grama_Niladhari) }}" target="_blank" class="btn btn-primary">View File</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Minutes with Members Signature List
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ asset('uploads/mdsmm/' . $mds->Minutes_with_members_signature_list) }}" target="_blank" class="btn btn-primary">View File</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Prioritized Project Proposal
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ asset('uploads/mdspp/' . $mds->Prioritized_project_proposal) }}" target="_blank" class="btn btn-primary">View File</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
