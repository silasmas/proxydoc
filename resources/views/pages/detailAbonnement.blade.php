@extends('templates.template')
@section("title","Nos services")
@section("page2","Details de nos services")
@section("parent")
<li>
    <a href="{{ route('services') }}">Services</a>
</li> 
@endsection

@section('autreStyle')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
@endsection
@section('content')
   
@include("parties.banner")
    <!-- Single Department Start Here -->
    <section class="single-department-wrap-layout1 bg-light-primary100">
        <div class="container">
            <div class="row" id="no-equal-gallery">
                <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12 no-equal-item">
                    <div class="widget widget-department-info">
                        <h3 class="section-title title-bar-primary">Liste des services</h3>
                        <ul class="nav nav-tabs tab-nav-list">
                            <li class="nav-item">
                                <a class="active" href="#department1" data-toggle="tab"
                                    aria-expanded="false">ProxyChat</a>
                            </li>
                            <li class="nav-item">
                                <a href="#department2" data-toggle="tab" aria-expanded="false">ProxySchem</a>
                            </li>
                            <li class="nav-item">
                                <a href="#department3" data-toggle="tab" aria-expanded="false">ProxyFamily</a>
                            </li>
                            <li class="nav-item">
                                <a href="#department4" data-toggle="tab" aria-expanded="false">ProxyGency</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-12 no-equal-item">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="department1">
                            <div class="single-departments-box-layout1">
                                <div class="single-departments-img">
                                    {{-- <img alt="single" src="{{ asset('assets/img/slider/department28.jpg') }}"> --}}
                                </div>
                                <div class="item-content">
                                    <div class="item-content-wrap">
                                        <h3 class="item-title title-bar-primary5">ProxyChat</h3>
                                        <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh erty cidunt utter laoreet dolore magna
                                            aliquam erat volutpanostrud exercier.</span>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                            fusceut perspiciatis undeuisque. </p>
                                        <h3 class="item-title">Advantage:</h3>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.</p>
                                        <ul class="department-info">
                                            <li>Keep Patients First Nulla lobortis.</li>
                                            <li>Keep Everyone Safe.</li>
                                            <li>Work Together Quisque pretium quam.</li>
                                            <li>Curabitur semper enim id accumsan.</li>
                                        </ul>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                            fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                            mauris et adipisc.</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="department2">
                            <div class="single-departments-box-layout1">
                                <div class="single-departments-img">
                                    {{-- <img alt="single" src="img/department/department22.jpg"> --}}
                                </div>
                                <div class="item-content">
                                    <div class="item-content-wrap">
                                        <h3 class="item-title title-bar-primary5">ProxySchem</h3>
                                        <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh
                                            erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                            exercier.</span>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                            fusceut perspiciatis undeuisque. </p>
                                        <h3 class="item-title">Advantage:</h3>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.
                                        </p>
                                        <ul class="department-info">
                                            <li>Keep Patients First Nulla lobortis.</li>
                                            <li>Keep Everyone Safe.</li>
                                            <li>Work Together Quisque pretium quam.</li>
                                            <li>Curabitur semper enim id accumsan.</li>
                                        </ul>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                            fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                            mauris et adipisc.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="department3">
                            <div class="single-departments-box-layout1">
                                <div class="single-departments-img">
                                    {{-- <img alt="single" src="img/department/department23.jpg"> --}}
                                </div>
                                <div class="item-content">
                                    <div class="item-content-wrap">
                                        <h3 class="item-title title-bar-primary5">ProxyFamily</h3>
                                        <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh erty cidunt utter laoreet dolore magna
                                            aliquam erat volutpanostrud exercier.</span>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                            fusceut perspiciatis undeuisque. </p>
                                        <h3 class="item-title">Advantage:</h3>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.
                                        </p>
                                        <ul class="department-info">
                                            <li>Keep Patients First Nulla lobortis.</li>
                                            <li>Keep Everyone Safe.</li>
                                            <li>Work Together Quisque pretium quam.</li>
                                            <li>Curabitur semper enim id accumsan.</li>
                                        </ul>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                            fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                            mauris et adipisc.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="department4">
                            <div class="single-departments-box-layout1">
                                <div class="single-departments-img">
                                    {{-- <img alt="single" src="img/department/department24.jpg"> --}}
                                </div>
                                <div class="item-content">
                                    <div class="item-content-wrap">
                                        <h3 class="item-title title-bar-primary5">ProxyGency</h3>
                                        <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit, sed diam nonummy nibh
                                            erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                            exercier.</span>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                            fusceut perspiciatis undeuisque. </p>
                                        <h3 class="item-title">Advantage:</h3>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.
                                        </p>
                                        <ul class="department-info">
                                            <li>Keep Patients First Nulla lobortis.</li>
                                            <li>Keep Everyone Safe.</li>
                                            <li>Work Together Quisque pretium quam.</li>
                                            <li>Curabitur semper enim id accumsan.</li>
                                        </ul>
                                        <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                            iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                            Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                            class
                                            bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                            Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                            fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                            mauris et adipisc.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12 no-equal-item">
                    <div class="widget widget-call-to-action-light">
                        <div class="media">
                            <img src="{{ asset('assets/img/slider/figure6.png') }}" alt="figure">
                            <div class="media-body space-sm">
                                <h4>Emergency Cases</h4>
                                <span>2-800-700-6200</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-schedule">
                        <h3 class="section-title title-bar-primary">Opening Hours</h3>
                        <ul>
                            <li>Saturday - Monday: <span>09:00 am - 10.00 pm</span></li>
                            <li>Tuesday - Thursday: <span>09:00 am - 10.00 pm</span></li>
                            <li>Friday - Saturday: <span>09:00 am - 10.00 pm</span></li>
                            <li>Sunday: <span class="bold">Will Be Closed</span></li>
                        </ul>
                    </div>
                    <div class="widget widget-appointment">
                        <h3 class="section-title-light title-bar-light">Book Appointment</h3>
                        <form>
                            <div class="form-group">
                                <select class="select2" data-error="Phone field is required" required>
                                    <option value="">Select Department *</option>
                                    <option value="1">Gynaecology</option>
                                    <option value="2">Cardiology</option>
                                    <option value="3">Orthopaedics</option>
                                    <option value="4">Medicine</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select class="select2" data-error="Phone field is required" required>
                                    <option value="">Choose Doctor by Name *</option>
                                    <option value="1">Dr. Mou</option>
                                    <option value="2">Dr. Kalvin</option>
                                    <option value="3">Dr. Mark Willy</option>
                                    <option value="4">Dr. Zinia Zara</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Patient Name *" class="form-control" name="name"
                                    id="form-name" data-error="Name field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Phone *" class="form-control" name="Phone"
                                    id="form-phone" data-error="Phone field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                    id="form-email" data-error="E-mail field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <i class="far fa-calendar-alt"></i>
                                <input type="text" class="form-control rt-date" placeholder="Appointment Date *"
                                    name="date" id="form-date" data-error="Subject field is required" required />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <i class="far fa-clock"></i>
                                <input type="text" class="form-control rt-time" placeholder="Time *" name="time"
                                    id="form-time" data-error="Subject field is required" required />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Type Appintment Note" class="textarea form-control" name="message" id="form-message" rows="5"
                                    cols="20" data-error="Message field is required" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="text-center form-group">
                                <button class="item-btn">BOOK NOW<i class="fas fa-chevron-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Single Department End Here -->
@endsection

@section('autreScript')
    <!-- Select2 Js -->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <!-- Datetimepicker Js -->
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
@endsection
