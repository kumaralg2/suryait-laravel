@extends('base') @section('content')
<!-- WRAPPER-->
<div id="wrapper-content">
    <!-- PAGE WRAPPER-->
    <div id="page-wrapper">
        <!-- MAIN CONTENT-->
        <div class="main-content">
            <!-- CONTENT-->
            <div class="content">
                <!-- SLIDER BANNER-->
                <div class="section">
                    <div class="search-input">
                        <div class="container">
                            <div class="search-input-wrapper">
                                <h2 class="captions white">Contact SURYA ITTECH</h2>
                                <ol class="breadcrumb white">
                                    <li><a href="index" class="white">Home</a>
                                    </li>
                                    <li><a href="contact-suryaittech" class="white">Contact SURYA ITTECH</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
            <div class="container" style="padding:5px">
                <br>
                  <div class="col-md-6 col-md-offset-3">
                @if(session()->has('message.level'))
                                    <div class="alert alert-{{ session('message.level') }}"> 
                                    {!! session('message.content') !!}
                                    </div>
              @endif   
               </div>
                 <br>
                <div class="row">
                    <div class="col-md-12">
                    <form role="form" method ="POST" action="/contact-suryaittech" id="contact-form" class="contact-form">
                          {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name">
                                    </div>
                                   </div>
                                   <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                                    </div>
                                    </div>
                                     </div>
                                     <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                    <div class="form-group">
                                        <textarea type="text" class="form-control textarea" rows="3" name="message" id="Message" placeholder="Message"></textarea>
                                    </div>
                                    </div>
                                    </div> 
                                <div class="row">
                                <div class="col-md-3 col-md-offset-3">
                                 <button type="submit" class="btn main-btn" style="background-color:green">Send a message</button>
                              </div>
                              </div>
                      </form>
                    </div>
                    
                </div>
                <br>
          
            </div>
             
            
            <!-- Map & Contact -->
            <div class="container">
                <div style="margin:20px 0">
                    <div class="floated_img" style="display: block;margin: auto;width: 70%;">
                        <img src="assets/images/map.png" alt="Some image">
                    </div>
                    <!--    <iframe src="https/wwwgooglecom/maps/MS_71.html" width="100%" height="350" frameborder="0" style="border:0"></iframe><br /><small style="color:#1B5596; text-align:center; display:block;"><a href="https://maps.google.com/maps?f=q&source=embed&hl=en&geocode=&q=WEB+TECHIES%2C+Hyderabad%2C+Andhra+Pradesh%2C+India&aq=0&oq=Web+Techies&sll=37.0625%2C-95.677068&sspn=60.028724%2C135.263672&ie=UTF8&hq=WEBTECHIES%2C&hnear=Hyderabad%2C+Ranga+Reddy%2C+Andhra+Pradesh%2C+India&t=m&z=12&iwloc=A&cid=4953449795632385905&ll=17.485529%2C78.388288" target="_blank" style="color:#1B5596;">&nbsp;Web&nbsp;Techies&nbsp;Training Institute, Hyderabad - INDIA | SEE IN LARGER MAP</a>&nbsp;</small>-->
                </div>
                

                <div class="container">
                    <div class="contact-main-wrapper">
                        <div class="contact-method">
                            <div class="col-md-4">
                                <div class="method-item"><i class="fa fa-map-marker"></i>

                                    <p class="sub">ADDRESS</p>

                                    <div class="detail">
                                        <p>
                                            #63, 9thPhase, KPHB
                                            <br>Behind Sujana Forum Mall
                                            <br>Hyderabad - 500072</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="method-item"><i class="fa fa-phone"></i>

                                    <p class="sub">CALL US</p>

                                    <div class="detail">
                                        <p>Hyderabad: +91-99127 12909</p>
                                        <p>Vizag: +91-99127 12909</p>
                                        <p>Vijayawada: +91-99127 12909</p>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="method-item"><i class="fa fa-envelope"></i>

                                    <p class="sub">SEND EMAIL</p>

                                    <div class="detail">
                                        <p>training@suryaittech.com</p>
                                        <p>www.suryaittech.com</p>
                                        <p>www.web-grafix.in</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <br>

            </div>

        </div>
    </div>
    @endsection