@extends('master')
@section('style')
@endsection
@section('main')
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>تماس با ما</h2>
                    <p>صفحه ارتباط با حوزه علمیه حضرت قائم (عج) </p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="contact-inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="contact-features-list">
                                <h3>حوزه علمیه حضرت قائم (عج) </h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>

                                <ul>
                                    <li><i class='bx bx-badge-check'></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</li>
                                    <li><i class='bx bx-badge-check'></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</li>
                                    <li><i class='bx bx-badge-check'></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</li>
                                    <li><i class='bx bx-badge-check'></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="contact-form">
                                <h3> ارسال سوال و نظرات با ما در ارتباط باشد</h3>

                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" required data-error="نام خود را بنویسید" placeholder="نام شما">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" required data-error="ایمیل خود را بنویسید" placeholder="ایمیل شما">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="phone_number" id="phone_number" required data-error="شماره تلفن خود را وارد کنید" class="form-control" placeholder="تلفن شما">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="موضوع خود را وارد کنید" placeholder="موضوع شما">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="پیام خود را بنویسید" placeholder="پیام شما"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn"><i class='bx bxs-paper-plane'></i>ارسال پیام<span></span></button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h3>با شماره تلفن یا آدرس ایمیل با ما تماس بگیرید</h3>
                            <h2>
                                <p><a href="tel:02122203301">021-22203301</a></p>
                                <p><a href="tel:02122211382">021-22211382</a></p>
                                <p><a href="mailto:info@hozehqaem.ir">info@hozehqaem.ir</a></p>
                            </h2>

                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-youtube"></i></a></li>
                                <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
@endsection
@section('script')
@endsection
