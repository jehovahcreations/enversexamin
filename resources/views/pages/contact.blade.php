@extends('layouts.xamin')

@section('content')
      <!-- Breadcrumb End -->
      <!-- Main Content -->
      <div class="main-content">
         <!-- Address -->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="consult-services wow fadeInUp contact-detail text-center">
                        <div class="circle-effect"> <i aria-hidden="true" class="fa fa-map-marker"></i> </div>
                        <h4 class="mb-2">USA Office</h4>
                        <p class="mb-0">Michael I. Days 3756 Preston Street Wichita, KS 67213 Phone:857-778-1265</p>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="consult">
                        <div class="consult-services wow fadeInUp contact-detail text-center">
                           <div class="circle-effect"> <i aria-hidden="true" class="fa fa-map-marker"></i> </div>
                           <h4 class="mb-2">Australia Office</h4>
                           <p class="mb-0">Michael I. Days 3756 Preston Street Wichita, KS 67213 Phone:857-778-1265</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="consult">
                        <div class="consult-services wow fadeInUp contact-detail text-center">
                           <div class="circle-effect"> <i aria-hidden="true" class="fa fa-map-marker"></i> </div>
                           <h4 class="mb-2">New zealand Office</h4>
                           <p class="mb-0">Michael I. Days 3756 Preston Street Wichita, KS 67213 Phone:857-778-1265</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Address -End -->
         <!-- Contact us page -->
         <section class="pt-0">
            <div class="container">
               <div class="row  align-items-center ">
                  <div class="col-sm-6">
                     <h2 class="text-left mb-4">Let's talk about for your<br> business.</h2>
                     <div class="response-output "></div>
                     <form action="contact-us.html#" method="post" class="">
                        <div class="contact-form">
                           <div class=""> <input type="text" name="your-name" class="form-control text " placeholder="Your Name"> </div>
                           <div class=""> <input type="text" name="your-email" class="form-control text " placeholder="Your Email"> </div>
                           <div class=""> <input type="text" name="your-subject" class="form-control text " placeholder="Subject"> </div>
                           <div class=""> <textarea name="your-message" cols="40" rows="10" class="form-control textarea " placeholder="Your Message"></textarea> </div>
                           <div> <button id="submit-4" name="submit" type="submit" value="Send" class="button d-block w-100">Send Message</button> </div>
                        </div>
                     </form>
                  </div>
                  <div class="mt-5 col-sm-6 offset-lg-1 col-lg-5 offset-md-1 col-md-5">
                     <div class="wrapper">
                        <div class="contact-box d-flex">
                           <i aria-hidden="true" class="ion ion-android-call"></i>
                           <div class="service-detail">
                              <h4 class="mb-2">Phone support</h4>
                              <ul class="list-inline mb-0">
                                 <li> <a href="tel:+0123456789"> +0123456789</a> </li>
                                 <li> <a href="tel:+0123456789"> +0123456789</a> </li>
                              </ul>
                           </div>
                        </div>
                        <div class="contact-box d-flex   ">
                           <i aria-hidden="true" class="fa fa-envelope-o"></i>
                           <div class="service-detail">
                              <h4 class="mb-2">Email us</h4>
                              <ul class="list-inline mb-0">
                                 <li><a href="mailto:support@iqnonicthemes.com"> support@iqnonicthemes.com</a></li>
                                 <li><a href="mailto:support@iqnonicthemes.com"> support@iqnonicthemes.com</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="contact-box d-flex   ">
                           <i aria-hidden="true" class="ion ion-android-share-alt"></i>
                           <div class="service-detail">
                              <h4 class="mb-2">Social media</h4>
                              <ul>
                                 <li class="d-inline"><a href="contact-us.html#"><i class="fa fa-facebook-f"></i></a></li>
                                 <li class="d-inline"><a href="contact-us.html#"><i class="fa fa-twitter"></i></a></li>
                                 <li class="d-inline"><a href="contact-us.html#"><i class="fa fa-instagram"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Contact us page End-->
      </div>
         <!-- Footer -->
   @endsection
