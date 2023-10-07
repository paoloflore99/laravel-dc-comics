@php
$primiservizzi = ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"];

$secondoservizzi =["Terms Of Use", "Privacy policy(New)", "Ad Choices", "Advertsing","Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates","Ratings", "Shop Help", "Contact Us"];

$terzoservizzi = ["DC","MAD Magazine","DC kids","DC Universe","DC Power Visa"];
@endphp


<footer>

    <div class="container">
        <div class="row d-flex">
            <div class="col-2 rientro ">
                
                <ul  class="lista text-white " >
                    <li><h3>DC COMICS</h3></li>
                    @foreach ($primiservizzi as $primi)
                    <li><a href="#">{{$primi}}</a></li>
                    @endforeach
                </ul>
                

                <ul  class="lista text-white">
                    <li><h3>SHOP</h3></li>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">shop DC Collectibles</a></li>
                </ul>
            </div>

            <div class="col-2">
                <ul  class="lista text-white">
                    <li><h3>DC</h3></li>
                    @foreach ($secondoservizzi as $secondo)
                    <li><a href="#">{{$secondo}}</a></li>
                    @endforeach
                </ul>
            </div>
            
            <div class="col-2">
                <ul  class="lista text-white">
                    <li><h3>SITES</h3></li>
                    @foreach ($terzoservizzi as $terzo)
                    <li><a href="#">{{$terzo}}</a></li>
                    @endforeach
                </ul>
            </div>

            
            <div class="colore-grizzio">
                <p>All Stile Content TM and <i class="fa-regular fa-registered"></i> 2020 DC Entertinment, unless otherwise <a class="colore-blu" href="#">noted here</a>. All rights reserved.</p>
                <a class="colore-blu" href="#">Cookies Settings</a>
            </div>
        </div>

    </div>
</footer>

    <div class="bg-dark">
        <div class="container p-2 d-flex" >
            <div class="row  justify-content-between align-items-center">


                <div class="p-2">
                    <button class="btn text-white border border-primary border-5 rounded-0">SING-UP NOW!</button>
                </div>
                
        
                <div class="p-2">
                    <h3 class="colore-blu">FOLLOW US</h3>
                    <img class="p-2" src="/images/footer-facebook.png" alt="">
                    <img class="p-2" src="/images/footer-twitter.png" alt="">
                    <img class="p-2" src="/images/footer-youtube.png" alt="">
                    <img class="p-2" src="/images/footer-periscope.png" alt="">
                    <img class="p-2" src="/images/footer-pinterest.png" alt="">
                </div>
                
            </div>
        </div>
    </div>
