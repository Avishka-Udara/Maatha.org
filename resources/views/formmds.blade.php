<!DOCTYPE html>
<html lang="en">

<head>
    <title>Maatha World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @livewire('headercss')
</head>

<body>

    @livewire('gestnav')
    <div class="site-wrap">


        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('assets/images/marshall-williams-E0HJTToJ--U-unsplash.jpg') }});" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <h1 data-aos="fade-up">Form the</h1>
                                <span class="typed-words h1"></span>
                                <br><br>
                                <p data-aos="fade-up" data-aos-delay="100"><a href="#"
                                    class="btn btn-primary btn-pill m-4">Fill the form</a></p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<!--form------------------------------>
<div class="container mt-5">
    <form action="{{ route('mdss.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- District -->
        <div class="mb-3">
            <label for="District" class="form-label">District *</label>
            <input type="text" class="form-control" id="District" name="District" required>
        </div>

        <!-- Divisional Secretariat -->
        <div class="mb-3">
            <label for="Divisional_Secretariat" class="form-label">Divisional Secretariat *</label>
            <input type="text" class="form-control" id="Divisional_Secretariat" name="Divisional_Secretariat" required>
        </div>

        <!-- Grama Niladhari Division -->
        <div class="mb-3">
            <label for="Grama_Niladhari_Division" class="form-label">Grama Niladhari Division *</label>
            <input type="text" class="form-control" id="Grama_Niladhari_Division" name="Grama_Niladhari_Division" required>
        </div>

        <!-- Grama Niladhari Division Number -->
        <div class="mb-3">
            <label for="Grama_Niladhari_Division_Number" class="form-label">Grama Niladhari Division Number *</label>
            <input type="text" class="form-control" id="Grama_Niladhari_Division_Number" name="Grama_Niladhari_Division_Number" required>
        </div>

        <!-- Village -->
        <div class="mb-3">
            <label for="Village" class="form-label">Village *</label>
            <input type="text" class="form-control" id="Village" name="Village" required>
        </div>

        <!-- Office Address -->
        <div class="mb-3">
            <label for="Office_Address" class="form-label">Office Address *</label>
            <input type="text" class="form-control" id="Office_Address" name="Office_Address" required>
        </div>

        <!-- Contact Person -->
        <div class="mb-3">
            <label for="Contact_person" class="form-label">Contact Person *</label>
            <input type="text" class="form-control" id="Contact_person" name="Contact_person" required>
        </div>

        <!-- Position -->
        <div class="mb-3">
            <label for="Position" class="form-label">Position *</label>
            <input type="text" class="form-control" id="Position" name="Position" required>
        </div>

        <!-- Contact Number -->
        <div class="mb-3">
            <label for="Contact_number" class="form-label">Contact Number *</label>
            <input type="tel" class="form-control" id="Contact_number" name="Contact_number" required>
        </div>

        <!-- WhatsApp Number -->
        <div class="mb-3">
            <label for="WhatsApp_number" class="form-label">WhatsApp Number *</label>
            <input type="tel" class="form-control" id="WhatsApp_number" name="WhatsApp_number" required>
        </div>

        <!-- Verification >
        <div class="mb-3">
            <label for="Verification" class="form-label">Verification *</label>
            <input type="text" class="form-control" id="Verification" name="Verification" required>
        </div -->

        <!-- Religious Authority (File Upload) -->
        <div class="mb-3">
            <label for="Religious_Authority" class="form-label">Religious Authority (PDF, JPG, XLSX, CSV) *</label>
            <input type="file" class="form-control" id="Religious_Authority" name="Religious_Authority" accept=".pdf,.xlsx,.csv" required>
        </div>

        <!-- Grama Niladhari (File Upload) -->
        <div class="mb-3">
            <label for="Grama_Niladhari" class="form-label">Grama Niladhari (PDF, JPG, XLSX, CSV) *</label>
            <input type="file" class="form-control" id="Grama_Niladhari" name="Grama_Niladhari" accept=".pdf,.xlsx,.csv" required>
        </div>

        <!-- Minutes with Members Signature List (File Upload) -->
        <div class="mb-3">
            <label for="Minutes_with_members_signature_list" class="form-label">Minutes with Members Signature List (PDF, JPG, XLSX, CSV) *</label>
            <input type="file" class="form-control" id="Minutes_with_members_signature_list" name="Minutes_with_members_signature_list" accept=".pdf,.xlsx,.csv" required>
        </div>

        <!-- Prioritized Project Proposal (File Upload) -->
        <div class="mb-3">
            <label for="Prioritized_project_proposal" class="form-label">Prioritized Project Proposal (PDF, JPG, XLSX, CSV) *</label>
            <input type="file" class="form-control" id="Prioritized_project_proposal" name="Prioritized_project_proposal" accept=".pdf,.xlsx,.csv" required>
        </div>

        <!-- President -->
        <div class="mb-3">
            <label for="President" class="form-label">President *</label>
            <input type="text" class="form-control" id="President" name="President" required>
        </div>

        <!-- Secretary -->
        <div class="mb-3">
            <label for="Secretary" class="form-label">Secretary *</label>
            <input type="text" class="form-control" id="Secretary" name="Secretary" required>
        </div>

        <!-- Treasurer -->
        <div class="mb-3">
            <label for="Treasurer" class="form-label">Treasurer *</label>
            <input type="text" class="form-control" id="Treasurer" name="Treasurer" required>
        </div>

        <!-- Assistant Treasurer -->
        <div class="mb-3">
            <label for="Assistant_treasurer" class="form-label">Assistant Treasurer *</label>
            <input type="text" class="form-control" id="Assistant_treasurer" name="Assistant_treasurer" required>
        </div>

        <!-- Agriculture Coordinator -->
        <div class="mb-3">
            <label for="Agriculture_Coordinator" class="form-label">Agriculture Coordinator *</label>
            <input type="text" class="form-control" id="Agriculture_Coordinator" name="Agriculture_Coordinator" required>
        </div>

        <!-- Vocational Training and Entrepreneurship Coordinator -->
        <div class="mb-3">
            <label for="Vocational_Training_and_Entrepreneurship_Coordinator" class="form-label">Vocational Training and Entrepreneurship Coordinator *</label>
            <input type="text" class="form-control" id="Vocational_Training_and_Entrepreneurship_Coordinator" name="Vocational_Training_and_Entrepreneurship_Coordinator" required>
        </div>

        <!-- English Language and Education Coordinator -->
        <div class="mb-3">
            <label for="English_language_and_Education_Coordinator" class="form-label">English Language and Education Coordinator *</label>
            <input type="text" class="form-control" id="English_language_and_Education_Coordinator" name="English_language_and_Education_Coordinator" required>
        </div>

        <!-- MIT Coordinator -->
        <div class="mb-3">
            <label for="mitcordinator" class="form-label">MIT Coordinator *</label>
            <input type="text" class="form-control" id="mitcordinator" name="mitcordinator" required>
        </div>

        <!-- Entertainment and Reconciliation Coordinator -->
        <div class="mb-3">
            <label for="Entertainment_and_Reconciliation_Coordinator" class="form-label">Entertainment and Reconciliation Coordinator *</label>
            <input type="text" class="form-control" id="Entertainment_and_Reconciliation_Coordinator" name="Entertainment_and_Reconciliation_Coordinator" required>
        </div>

        <!-- Health Promotion Coordinator -->
        <div class="mb-3">
            <label for="Health_Promotion_Coordinator" class="form-label">Health Promotion Coordinator *</label>
            <input type="text" class="form-control" id="Health_Promotion_Coordinator" name="Health_Promotion_Coordinator" required>
        </div>

        <!-- Women Affairs and Child Development Coordinator -->
        <div class="mb-3">
            <label for="Women_affaires_and_child_development_Coordinator" class="form-label">Women Affairs and Child Development Coordinator *</label>
            <input type="text" class="form-control" id="Women_affaires_and_child_development_Coordinator" name="Women_affaires_and_child_development_Coordinator" required>
        </div>

        <!-- Coordinator -->
        <div class="mb-3">
            <label for="Coordinator" class="form-label">Coordinator *</label>
            <input type="text" class="form-control" id="Coordinator" name="Coordinator" required>
        </div>

        <!-- Image (File Upload) -->
        <div class="mb-3">
            <label for="image" class="form-label">Image of the first meeting (JPEG, PNG, JPG, GIF, SVG) *</label>
            <input type="file" class="form-control" id="image" name="image" accept=".jpeg,.png,.jpg,.gif,.svg" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!--form------------------------------>
        @livewire('footer')
    </div>
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></button>

    @livewire('scripts')
    <script>
        var typed = new Typed('.typed-words', {
            strings: ["Maatha Developmetn Society",
            ],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
        });
    </script>

</body>

</html>
