@extends('client.layout.master')
@section('content')
    @push('css')
        <style>
            .full-width-image {
                height: 300px;
                background: url("your-image.jpg") no-repeat center center fixed;
                background-size: cover;
            }
        </style>
    @endpush
    <div class="container">
        <div class="full-width-image">
            <div class="m-5 p-5 text-center">
                <h3 id="countdown"></h3>
            </div>
        </div>

    </div>
    @push('scripts')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Oct 17, 2020 06:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
        
    @endpush
@endsection
