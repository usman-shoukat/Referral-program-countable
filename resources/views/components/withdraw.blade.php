<div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Apply For Withdraw Details
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto d-block">
                        <div class="card card-body pd-20 pd-md-40 border shadow-none">
                            <h5 class="card-title mg-b-20">Your Withdraw Details</h5>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Name on Id Card</label> <input class="form-control" required="" type="text">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Id Card Number</label>
                                <div class="pos-relative">
                                    <input class="form-control pd-r-80" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Username</label> <input class="form-control" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Email</label> <input class="form-control" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Payment Method</label> <input class="form-control" required="" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Paypal Username & Btc Address</label> <input class="form-control" required="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row row-sm">
                                    <div class="col-sm-9">
                                        <label class="main-content-label tx-11 tx-medium tx-gray-600">Wthdraw Amount</label>
                                        <div class="row row-sm">
                                            <div class="col-sm-7">
                                                <input class="form-control" required="" type="text">
                                            </div>


                                        </div>
                                    </div>

                                    <button class="btn btn-main-primary btn-block" style="margin-top: 20px;">	<p id="demo" ></p></button>

                                </div>
                                <script>
                                    // Set the date we're counting down to
                                    var countDownDate = new Date("aug 16, 2020 15:37:25").getTime();

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
                                        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                                            + minutes + "m " + seconds + "s ";

                                        // If the count down is over, write some text
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById("demo").innerHTML = "EXPIRED";
                                        }
                                    }, 1000);
                                </script>


                            </div>
                        </div>
                    </div>
</div>
