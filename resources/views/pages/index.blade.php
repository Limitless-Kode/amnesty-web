@extends('layouts.page')
@section('title', 'Amnesty Ghana')
@section('styles')
<link rel="stylesheet" href={{asset("assets/css/index.css")}}>   
<link rel="stylesheet" href={{asset("assets/lib/owlcarousel/dist/assets/owl.carousel.min.css")}}>
<link rel="stylesheet" href={{asset("assets/lib/owlcarousel/dist/assets/owl.theme.default.min.css")}}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
@section('scripts')
    <script src="assets/js/_contact.js"></script>
    <script src="assets/js/player.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> --}}
    <script src={{asset("assets/lib/jquery/jquery.min.js")}}></script>
    <script src={{asset("assets/lib/owlcarousel/dist/owl.carousel.min.js")}}></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                autoplay: true,
                responsiveClass:true,
                autoWidth: true,
                animateOut: true,
                animateIn: true,
                dots: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                checkVisible: true,
                animateOut: 'animate__fadeOut',
                animateIn: 'animate__fadeIn',
                items:1,
                stagePadding:30,
                smartSpeed:450
                
            });
        });
    </script>
@endsection
@section('content')
    <div class="owl-carousel owl-theme">

        @foreach($slides as $slide)
        <div class="jumbotron" style="background: url('{{$slide->image}}') center center /cover;">
            <div class="content">
             <div class="header-text">
                 {{ $slide->name }}
             </div>
             <div class="button">
                 <a href="{{$slide->link}}" class="btn btn-primary"> {{ $slide->link_text }}</a>
             </div>
            </div>
         </div>
        @endforeach         
         
    </div>
    <div class="subscriptons">
        <div class="text">
            <h3>7 million activists and growing</h3>
            <p>People across Ghana are protecting human rights. Join us and build a world where human rights are enjoyed by all.</p>
        </div>
        <div class="form">
            <h3>Stay in touch</h3>
            <p>Get instant notifications on upcoming events.</p>
            <form class="subscribe">
                <input type="email" required placeholder="Enter Email" class="sub-email">
                <button class="md-btn-primary btn">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="about" id="about">
        <div class="row">
            <div class="video">
                <video src="assets/videos/video.mp4" poster="assets/images/poster.jpg">
                    Your Browser Doest Support HTML5 Videos
                </video>
                <div class="controls">
                    <div class="play_pause bar">
                        <ion-icon name="play"></ion-icon>
                    </div>
                    <div class="slider">
                        <div class="slider-fill">
                          <input type="range" value="0" min="0" max="100" step="0.1" id="slider"/>
                        </div>
                        <div class="slider-thumb"></div>
                      </div>
                    <div class="speaker bar">
                        <ion-icon name="volume-high-outline"></ion-icon>
                    </div>
                </div>
            </div>
    
            <div class="body">
                <div class="card">
                    <div class="icon">
                        <ion-icon name="people" size="large"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Who are we</h3>
                        <p>Since 1961, we have been working to support people to claim their rights all over the world. </p>
                    </div>
                </div>
    
                <div class="card">
                    <div class="icon">
                        <ion-icon name="shapes-outline" size="large"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>What are we doing</h3>
                        <p>We advocate human rights and campaign in many areas from the death penalty to freedom of expression. </p>
                    </div>
                </div>
    
                <div class="card">
                    <div class="icon">
                        <ion-icon name="person-add-outline" size="large"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Join us</h3>
                        <p> Sign, sign up, be our activist, be an activist, make a donation ... let's fight the injustices around the world.  </p>
                        <a href="/join" class="md-btn-primary btn">JOIN US</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="page align-left" id="work">
       <div class="text">
        <h2>A movement of millions fighting for human rights</h2>
        <p>All people have fundamental human rights. But those rights are abused or denied every single day. 
            When that happens, Amnesty International finds the facts, exposes what’s happening, and rallies people together 
            to force governments and others to respect everyone’s human rights.
        </p>
        <p>
            And we get results. Last year alone, Amnesty International helped free 153 people who were wrongfully imprisoned 
            because of who they are or what they believe – and we changed laws in dozens of countries on refugees, reproductive 
            rights, LGBT equality, free speech, the death penalty, and other critical human rights issues. 
        </p>
        <p>
            From start to finish, our work focuses on the individual – people whose human rights are abused, and people 
            who have the power to change the world. We received the Nobel Peace Prize for our life-saving work.
        </p>
        <a href="/join" class="btn btn-primary">Join us Fight Injustice</a>
       </div>
       <div class="image">
           <img src="assets/images/our_work.jpg" alt="Poster">
       </div>
    </div>

    <div class="page how-we-work align-left">
        <div class="container">
            <h2>How We Work</h2>
            <p>Amnesty International’s uniquely effective approach for protecting human rights uses a three-pronged approach:</p>
            <div class="row">
                <div class="work-card">
                   <div class="title">
                       <div class="icon">
                           <img src="assets/images/search.svg" alt="Research Image">
                       </div>
                       <h3>Research</h3>
                   </div>
                   <div class="text">
                       <p>Our crisis response teams and researchers travel to affected areas around the world to uncover individual 
                           human rights abuses and document patterns of abuse. 
                       </p>
                   </div>
                </div>
   
                <div class="work-card">
                   <div class="title">
                       <div class="icon">
                           <img src="assets/images/speaker.svg" alt="Mobilization Image">
                       </div>
                       <h3>Mobilization</h3>
                   </div>
                   <div class="text">
                       <p>Our campaign teams use this research to educate the public about human rights abuses – and they give 
                           members and grassroots activists the information and tools they need to demand that human rights be protected.
                       </p>
                   </div>
                </div>
   
                <div class="work-card">
                   <div class="title">
                       <div class="icon">
                           <img src="assets/images/castle.svg" alt="Advocacy Image">
                       </div>
                       <h3>Advocacy</h3>
                   </div>
                   <div class="text">
                       <p>
                           Our staff and volunteer leaders engage in direct advocacy with policymakers at the state level in Ghana 
                           while we rally grassroots activists to demand that policymakers protect human rights in Ghana and around 
                           the world.
                       </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page align-left">
        <div class="container">
            <h2>The Roles Of Board Members</h2>
            <p>Amnesty International’s uniquely effective approach for protecting human rights uses a three-pronged approach:</p>
            <div class="row">
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>George Benjamin Augustus Aggrey</h3>
                           <div class="tag">Chairperson</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Convenes meetings with the board and settles the agenda with the board secretary. Presides over meetings. Serves as AI's spokesperson. 
                           Provides policy and organizational leadership for AI Ghana in collaboration with other elected officers. Selects delegates for meetings.Oversees every Expenditure.
                           He also performs all duties incidental to the office of the Chairperson.
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Elizabeth Comfort Adomaku</h3>
                           <div class="tag">Vice Chair</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Presides, Assists and Represents the Chairperson in board meetings. Coordinates Membership activities. Oversees the growth in membership, activism and in diversity.
                           Signs with the Director on behalf of the Board Chair any or all certificates of membership of AIG. Performs any other duties that may be assigned to him/her by the Board or the
                           Chairperson.
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Cynthia Adu Darko</h3>
                           <div class="tag">Treasurer</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Receives all revenue on behalf of AI Ghana. Keeps all financial records. Provides a general supervision of the financial situation of AIG. Prepares and presents quarterly financial 
                           reports to the Board. Acts as a conduit between the Board and the members of AI Ghana on financial questions. Leads all fundraising activities on behalf of AI Ghana.
                           Performs any other duties that may be assigned to her by the Board or the Chairperson
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Maame Akosua Asare Addai</h3>
                           <div class="tag">Secretary</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Documents minutes of all meetings. Keeps all records of the Board. Verifies the records, keeps a register of the addresses of each member. 
                           Takes charge of the membership books unless otherwise stated by the board. Liaises with the Chairperson and circulates agendas, circulars and notices 
                           to Board Members.
                           Prepares and presents annual reports, annual/quarterly/monthly plans and programmes to the Board of Trustees.
                           Signs with the Chairperson any or all certificates of membership of AI Ghana.
                           Performs any other duties that may be assigned to her by the Board or by the Chairperson from time to time
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Gloria Chinaemerem Emeka</h3>
                           <div class="tag">Vice Secretary</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Assists the Board Secretary in the performance of her duties.
                           Performs the role of the Board Secretary in her absence.
                           Performs any other duties that may be assigned to her by the Board.
                       </p>
                   </div>
                </div>
                
                
  
            </div>
        </div>
    </div>
    
    
    
    
    
    <div class="page align-left">
        <div class="container">
            <h2>Staff Roles</h2>
            <p>Roles assigned to the current Amnesty Internatonal Ghana Staff:</p>
            <div class="row">
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Frank Kwaku Doyi</h3>
                           <div class="tag">Executive Director</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           The Director is be responsible for the direct line management of relevant jobs within the structure of Amnesty International Ghana 
                           and has overall accountability for effective line management of all posts within AI Ghana. 
                           Delivering on human rights change goals in and from Ghana, the Director is responsible for developing, 
                           coordinating and implementing strategies, operational plans and budgets for the work of the organization towards the establishment 
                           and development of an effective community at large.
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Hannah Osei</h3>
                           <div class="tag">Human Rights Education And Activism Coordinator</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Responsible for the design and implementation of Human rights Education, Activism and Youth programmes. 
                           Coordinates the daily activities related to human rights education, activism and youth participation.
                           Developing Human Rights Education strategy and activity plans within AI Ghana’s strategic framework and agreed priorities;
                           Writes reports on all HRE and Youth programmes and activities to the Director.
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Samuel Komla Agbotsey</h3>
                           <div class="tag">Campaign and Fundraising Coordinator</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                          He is responsible for organizing and coordinating the strategic campaign projects and activities with the purpose of 
                          raising funds. Developing fundraising Strategies for implementation, Writing proposals and develop materials to submit 
                          to granting or other funding organizations,  
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Mabel Hlordzi</h3>
                           <div class="tag">Accounts Officer</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Under the supervision of the Director, the Accounts Officer is responsible for the following duties: 
                           Financial Record Keeping, Financial Monitoring and Reporting, Payment for goods & Services, Budget Planning & Monitoring.
                           Keeping track of national and related international financial policies, obligations/requirements and advising the Director for appropriate action
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Juliet S. A . Kaingbanja</h3>
                           <div class="tag">Administrative Officer</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Providing administrative support to the office; Organising filing and retrieval systems, maintain records including electronic database of members, 
                           local groups, supporters, human rights defenders and partner organisations in the country, 
                           type and photocopy materials, organise and minute staff meetings, and provide other logistical support for the office;
                       </p>
                   </div>
                </div>
                
                <div class="work-card">
                   <div class="title">
                       <div class="text">
                           <h3>Richmond Afful</h3>
                           <div class="tag">Accounts and Administrative Assistant</div>
                       </div>
                   </div>
                   <div class="text">
                       <p>
                           Providing support to the Accounts and Administrative Officers;
                           Help to organise filing and retrieval systems, maintain records including electronic database of members, local groups, supporters, human rights 
                           defenders and partner organisations in the country, 
                           Support the Administrative Officer to train, allocate tasks to and supervise volunteers and interns within the office;
                       </p>
                   </div>
                </div>
  
            </div>
        </div>
    </div>
    
    
    
    

    <div class="page contact">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9201217388186!2d-0.21809868523399253!3d5.57882639595529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a19c2142ce9%3A0xc1b7975f11f043c6!2sAmnesty%20International%20Ghana%20Section!5e0!3m2!1sen!2sgh!4v1598375794285!5m2!1sen!2sgh" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="contact-form">
            <form id="contact" name="contact">
                <div class="form">
                    <h3>Send us a message</h3>
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <textarea name="" id="message" cols="20" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
