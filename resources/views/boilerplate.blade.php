<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    </head>
    <style>
        @media screen and (min-height: 500px;){}

        </style>
    <body>
        <header style="background-color: #224C83;, height: 20px;">
            <p style="color: white; padding: 10px;">This is a header</p>
        </header>
        @include('navbar')
        @yield('page')
    </body>
    <footer class="footer vesitfooter" style="padding-top: 2%; padding-bottom: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{asset('logo.png')}}" style="max-height: 70px;" alt="VESIT">
                        </div>
                        <div class="col-md-10">
                            <span class="font-weight-bold">Vivekanand Society's Instituet Of Technology</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <span class="font-weight-bold">
                                    Hashu Adwani Memorial Complex, Collector's Colony, Chembur, Mumbai, Maharashtra 400074
                            </span>
                            <br>
                            <span>VESIT Directory</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Online Payments</a></li>
                        <li><a href="#">Current Opening</a></li>
                        <li><a href="#">NIRF</a></li>
                        <li><a href="#">IQAC</a></li>
                        <li><a href="#">PRME</a></li>
                        <li><a href="#">Swamyam</a></li>
                        <li><a href="#">NDL</a></li>
                        <li><a href="#">Nptel</a></li>
                        <li><a href="#">Feedback Process</a></li>
                        <li><a href="#">Student Handbook</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Audit Reports</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Other Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">DTE Maharashtra</a></li>
                        <li><a href="#">ATMA AIMS</a></li>
                        <li><a href="#">CMAT</a></li>
                        <li><a href="#">GMAT</a></li>
                        <li><a href="#">CAT</a></li>
                        <li><a href="#">MAT</a></li>
                        <li><a href="#">XAT</a></li>
                        <li><a href="#">Caste-based Discrimination</a></li>
                        <li><a href="#">Complaints</a></li>
                        <li><a href="#">Edugrievance</a></li>
                        <li><a href="#">Students and Faculty</a></li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5>Social Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="vesitcopyright text-center">
        <span class="font-weight-bold">&copy;2019 Vivekanand Education Society. All Rights Reserved</span>
    </div>
    
    
</html> 