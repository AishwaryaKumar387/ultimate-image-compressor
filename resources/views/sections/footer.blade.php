<footer id="footer" class="footer light-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="{{ route('site.index') }}" class="logo d-flex align-items-center">
                    <span class="sitename">{{ 'Ultimate Image Compressor' }}</span>
                </a>
                <p>{{ 'We provide a seamless image compression solution to reduce image sizes without compromising quality,
                                                                                                    ensuring faster website performance and smoother user experiences.' }}
                </p>
                <div class="social-links d-flex mt-4">
                    <a href="https://www.linkedin.com/in/aishwarya-kumar-48872a15b"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>{{ 'Useful Links' }}</h4>
                <ul>
                    <li><a href="#hero">{{ 'Home' }}</a></li>
                    <li><a href="#about">{{ 'About us' }}</a></li>
                    <li><a href="#">{{ 'Terms of service' }}</a></li>
                    <li><a href="#">{{ 'Privacy policy' }}</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="javascript:void(0)">{{ 'Web Design' }}</a></li>
                    <li><a href="javascript:void(0)">{{ 'Web Development' }}</a></li>
                    <li><a href="javascript:void(0)">{{ 'Product Management' }}</a></li>
                    <li><a href="javascript:void(0)">{{ 'Marketing' }}</a></li>
                    <li><a href="javascript:void(0)">{{ 'Graphic Design' }}</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>{{ 'Contact Us' }}</h4>
                <p>{{ 'Mohali (Chandigarh TriCity), Punjab' }}</p>
                <p>{{ 'India - 160071' }}</p>
                <p class="mt-4">
                    <strong>{{ 'Phone:' }}</strong> 
                    <span><a href="tel:+919123131970">{{ '+91 9123131970' }}</a></span>
                </p>
                <p>
                    <strong>{{ 'Email:' }}</strong> 
                    <span><a href="mailto:thakuraish387@gmail.com">{{ 'thakuraish387@gmail.com' }}</a></span>
                </p>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>{{ 'Copyright' }}</span> <strong class="px-1 sitename">{{ config('app.name') }}</strong>
            <span>{{ 'All Rights Reserved' }}</span>
        </p>
        <div class="credits">
            {{ 'Designed by' }}
            <a target="_blank"
                href="https://www.linkedin.com/in/aishwarya-kumar-48872a15b">{{ 'Ignited Developer' }}</a>
        </div>
    </div>
</footer>
