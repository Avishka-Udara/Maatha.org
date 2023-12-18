<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create New MDS Entry') }}
        </h2>
    </x-slot>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="container">
                <h2 class="mb-4 text-2xl font-semibold">Create New MDS Entry</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops! There were some problems with your input.</strong><br>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <form action="{{ route('mdss.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <!-- Section 1 -->
                            <div class="shadow card">
                                <div class="m-4">
                                    <label for="District" class="block mb-1 font-semibold">District:</label>
                                    <input type="text" name="District" class="form-control" placeholder="District">
                                    <br>
                                    <label for="Divisional_Secretariat" class="block mb-1 font-semibold">Divisional
                                        Secretariat:</label>
                                    <input type="text" name="Divisional_Secretariat" class="form-control"
                                        placeholder="Divisional Secretariat">
                                    <br>
                                    <strong>Grama Niladhari Division:</strong>
                                    <input type="text" name="Grama_Niladhari_Division" class="form-control"
                                        placeholder="Grama_Niladhari_Division">
                                    <br>
                                    <strong>Grama Niladhari Division Number:</strong>
                                    <input type="text" name="Grama_Niladhari_Division_Number" class="form-control"
                                        placeholder="Grama_Niladhari_Division_Number">
                                    <br>
                                    <strong>Village:</strong>
                                    <input type="text" name="Village" class="form-control" placeholder="Village">
                                    <br>
                                    <strong>Office Address:</strong>
                                    <input type="text" name="Office_Address" class="form-control"
                                        placeholder="Office_Address">
                                    <br>
                                    <hr>
                                    <br>
                                    <strong>Contact person:</strong>
                                    <input type="text" name="Contact_person" class="form-control"
                                        placeholder="Contact_person">
                                    <br>
                                    <strong>Position:</strong>
                                    <input type="text" name="Position" class="form-control" placeholder="Position">
                                    <br>
                                    <strong>Contact number:</strong>
                                    <input type="text" name="Contact_number" class="form-control"
                                        placeholder="Contact_number">
                                    <br>
                                    <strong>WhatsApp number:</strong>
                                    <input type="text" name="WhatsApp_number" class="form-control"
                                        placeholder="WhatsApp_number">
                                    <br>
                                    <!--add image-->
                                    <strong>Group image of MDS Staff :</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                            </div>
                            <!-- Section 2 -->
                            <div>
                                <div class="shadow card">
                                    <div class="m-4">
                                        <strong>Religious Authority:</strong>
                                        <input type="file" name="Religious_Authority" class="mt-2 form-control"
                                            placeholder="Religious_Authority">
                                        <hr>
                                        <br>
                                        <strong>Grama Niladhari:</strong>
                                        <input type="file" name="Grama_Niladhari" class="mt-2 form-control"
                                            placeholder="Grama_Niladhari">
                                        <hr>
                                        <br>
                                        <strong>Minutes with members signature list:</strong>
                                        <input type="file" name="Minutes_with_members_signature_list"
                                            class="mt-2 form-control" placeholder="Minutes_with_members_signature_list">
                                        <hr>
                                        <br>
                                        <strong>Prioritized project proposal:</strong>
                                        <input type="file" name="Prioritized_project_proposal"
                                            class="mt-2 form-control" placeholder="Prioritized_project_proposal">
                                        <!-- ... Other fields in section 2 ... -->
                                    </div>
                                </div>
                                <div class="mt-4 shadow card">
                                    <div class="m-4">
                                        <strong>President:</strong>
                                        <input type="text" name="President" class="form-control"
                                            placeholder="President">


                                        <strong>Secretory:</strong>
                                        <input type="text" name="Secretory" class="form-control"
                                            placeholder="Secretory">


                                        <strong>Treasurer:</strong>
                                        <input type="text" name="Treasurer" class="form-control"
                                            placeholder="Treasurer">


                                        <strong>Assistant treasurer:</strong>
                                        <input type="text" name="Assistant_treasurer" class="form-control"
                                            placeholder="Assistant_treasurer">


                                    </div>
                                </div>
                                <div class="mt-4 shadow card">
                                    <div class="m-4">
                                        <h3 class="mb-2 text-xl font-semibold">Coordinators</h3>
                                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Agriculture Coordinator:</strong>
                                                    <input type="text" name="Agriculture_Coordinator" class="form-control"
                                                        placeholder="Agriculture_Coordinator">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Vocational Training and Entrepreneurship Coordinator:</strong>
                                                    <input type="text" name="Vocational_Training_and_Entrepreneurship_Coordinator"
                                                        class="form-control" placeholder="Vocational_Training_and_Entrepreneurship_Coordinator">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>English language and Education Coordinator:</strong>
                                                    <input type="text" name="English_language_and_Education_Coordinator" class="form-control"
                                                        placeholder="English_language_and_Education_Coordinator">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Media and IT Coordinator:</strong>
                                                    <input type="text" name="mitcordinator" class="form-control"
                                                        placeholder="Media_and_IT_Coordinator">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Entertainment and Reconciliation Coordinator:</strong>
                                                    <input type="text" name="Entertainment_and_Reconciliation_Coordinator" class="form-control"
                                                        placeholder="Entertainment_and_Reconciliation_Coordinator">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Health Promotion Coordinator:</strong>
                                                    <input type="text" name="Health_Promotion_Coordinator" class="form-control"
                                                        placeholder="Health_Promotion_Coordinator">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Women affaires and child development Coordinator:</strong>
                                                    <input type="text" name="Women_affaires_and_child_development_Coordinator" class="form-control"
                                                        placeholder="Women_affaires_and_child_development_Coordinator">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <hr class="my-4">
                        <div class="grid grid-cols-1 gap-4 ">
                            <div class="gap-2 py-2 d-grid">
                                    <button type="submit" class="btn btn-outline-primary">Create MDS</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

