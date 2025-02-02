@extends('layouts.site-layout')
@push('styles')
    <!-- Font Awesome for Camera Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/toastify.min.css">
    <style>
        .dropzone {
            border: 2px dashed #007bff !important;
            background: #f8f9fa;
            text-align: center;
            padding: 30px;
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            cursor: pointer;
        }

        .dropzone i {
            font-size: 30px;
            display: block;
            margin-bottom: 10px;
        }

        .image-upload-container {
            background-color: #f0f0f0;
            padding: 20px;
        }
    </style>
@endpush
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <img src="{{ asset('dist/img/hero-bg-abstract.jpg') }}" alt="{{ config('app.name') }}" data-aos="fade-in"
            class="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-out">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>{{ 'Ultimate Image Compression Solution' }}</h1>
                    <p>{{ 'We are a team of passionate developers crafting powerful image compression tools using the latest web technologies.' }}
                    </p>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="zoom-out" data-aos-delay="100">
                <form action="{{ route('site.upload') }}" class="dropzone" id="uimgCdropzone">
                    @csrf
                    <div class="dz-message">
                        <span><i class="fas fa-camera"></i> Click or Drag images here (Max: 5, 50MB each)</span>
                    </div>
                </form>
            </div>
            <div id="uploadedImagesContainer" class="mt-4 d-none table-responsive">
                <h6>{{ 'Compressed Images:' }}</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{'Image Name'}}</th>
                            <th>{{'Original Size'}}</th>
                            <th>{{'Compressed Siz'}}e</th>
                            <th>{{'Link'}}</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="row gy-4 mt-5">
                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-laptop"></i></div>
                        <h4 class="title"><a href="javascript:void(0)">{{ 'Laravel Development' }}</a></h4>
                        <p class="description">
                            {{ 'Building scalable and secure applications using Laravel for robust web solutions.' }}
                        </p>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-code-slash"></i></div>
                        <h4 class="title"><a href="javascript:void(0)">{{ 'Node.js Development' }}</a></h4>
                        <p class="description">
                            {{ 'Creating real-time applications with efficient, event-driven architecture using Node.js.' }}
                        </p>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-braces"></i></div>
                        <h4 class="title"><a href="javascript:void(0)">{{ 'WordPress Development' }}</a></h4>
                        <p class="description">
                            {{ 'Customizing and optimizing WordPress themes and plugins for enhanced user experience.' }}
                        </p>
                    </div>
                </div><!--End Icon Box -->

                <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-gear"></i></div>
                        <h4 class="title"><a href="javascript:void(0)">{{ 'Image Compression' }}</a></h4>
                        <p class="description">
                            {{ 'Reducing image sizes without compromising quality for faster website performance.' }}
                        </p>
                    </div>
                </div><!--End Icon Box -->

            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ 'About Us' }}<br></h2>
            <p>{{ 'Delivering scalable, secure, and efficient web solutions with expertise in PHP, Node.js, and modern web technologies.' }}
            </p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        {{ 'With extensive experience in PHP (Laravel, CodeIgniter, WordPress) and Node.js, we specialize in building dynamic and high-performance web applications. We are committed to delivering robust backend solutions and creating seamless user experiences.' }}
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i>
                            <span>{{ 'Expertise in backend development using PHP and Node.js.' }}</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i>
                            <span>{{ 'Integration of real-time applications with WebSocket and event-driven architecture.' }}</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i>
                            <span>{{ 'Building secure and optimized RESTful APIs using Laravel and Node.js.' }}</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i>
                            <span>{{ 'Custom WordPress development, including theme and plugin customization.' }}</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i>
                            <span>{{ 'Experience in integrating payment gateways like Stripe and PayPal.' }}</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i>
                            <span>{{ 'Building efficient image compression tools for optimized website performance.' }}</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ 'Clients' }}</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ 'Projects' }}</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ 'Hours Of Support' }}</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>{{ 'Workers' }}</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/toastify.min.js"></script>
    <script>
        Dropzone.options.uimgCdropzone = {
            maxFiles: 5, // Maximum number of files
            maxFilesize: 50, // 50 MB
            acceptedFiles: 'image/*',
            dictDefaultMessage: '<i class="fas fa-camera"></i> Click or Drag images here (Max: 5, 50MB each)',

            init: function() {
                let dropzoneInstance = this;
                let toastDisplayed = false; // Prevent multiple toasts

                this.on("addedfile", function(file) {
                    // Remove extra files if more than maxFiles
                    if (dropzoneInstance.files.length > this.options.maxFiles) {
                        let excessFiles = dropzoneInstance.files.slice(this.options.maxFiles);
                        excessFiles.forEach(file => dropzoneInstance.removeFile(file));

                        if (!toastDisplayed) {
                            showToast(`You can only upload up to ${this.options.maxFiles} images.`);
                            toastDisplayed = true;
                            setTimeout(() => (toastDisplayed = false), 3000);
                        }
                    }
                });

                this.on("error", function(file, message) {
                    this.removeFile(file);
                    if (!toastDisplayed) {
                        showToast(message);
                        toastDisplayed = true;
                        setTimeout(() => (toastDisplayed = false), 3000);
                    }
                });

                // On successful upload and compression, handle the response
                this.on("success", function(file, response) {

                    if (response.status) {
                        if(response.status=="success")
                        {
                            // Extract response data
                            const data = response.data;
                            const originalSize = data.original_size;
                            const compressedSize = data.compressed_size;
                            const imageUrl = data.destination_url;
                            const imageName = imageUrl.split('/').pop(); // Get file name from the URL


                            // Create HTML for the table row
                            const imageRow = `
                                <tr>
                                    <td><a href="${imageUrl}" target="_blank">${imageName}</a></td>
                                    <td>${originalSize}</td>
                                    <td>${compressedSize}</td>
                                    <td>
                                        <a href="${imageUrl}" download>
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            `;

                            // Find the table and tbody, then append the new row
                            const tbody = document.querySelector('#uploadedImagesContainer table tbody');
                            tbody.innerHTML += imageRow;

                            // Make the container visible after adding images
                            document.getElementById('uploadedImagesContainer').classList.remove('d-none');
                        }
                        else{
                            this.removeFile(file);
                            showToast(response.message || "Something went wrong!");
                        }
                    } else {
                        this.removeFile(file);
                        showToast(response.message || "Something went wrong!");
                    }
                });
            }
        };

        // Toast function using Toastify.js
        function showToast(message) {
            Toastify({
                text: message,
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#f44336", // Red color for errors
                stopOnFocus: true,
            }).showToast();
        }
    </script>
@endpush
