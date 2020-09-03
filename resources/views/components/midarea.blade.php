<div>
    <!-- row -->
    <div class="row row-sm ">
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
            <div class="card overflow-hidden">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10">Referral Link</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-2">This is your <strong>Referral link</strong> So if you don't buy our membership you can't make any referrals and earn <strong> 1.5$ </strong> on each referral.
                        If you buy our membership so make your referral and make your future with own hands and share with friends and social media LIKE <strong>facebook , instagram and other media</strong>
                    </p>								</div>
                <div class="wrapper">
                    <div class="content u-flexCenter u-sizeViewHeightMin100">
                        <div class="shareUrl u-verticalGrid u-marginAuto u-size1040">

                            <div class="shareUrl-body">
                                <div class="container">
                                    <!-- COPY INPUT -->
                                    @if(Auth::user()->buymembership == 0)
                                    <i class="fas fa-lock"></i>
                                    <center><p class="shareUrl-subtext">If you want unlock.Buy membership.</p></center>
                                    @else
                                        <input class="shareUrl-input js-shareUrl" type="text" readonly="readonly" value="hgvghvf" />
                                        <center><p class="shareUrl-subtext">Click above to copy the link.</p></center>
                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function() {

                // Create reusable copy fn
                function copy(element) {

                    return function() {
                        document.execCommand('copy', false, element.select());
                    }
                }

                // Grab shareUrl element
                var shareUrl = document.querySelector('.js-shareUrl');

                // Create new instance of copy, passing in shareUrl element
                var copyShareUrl = copy(shareUrl);

                // Set value via markup or JS
                shareUrl.value = "{!! route('user.create',['ref' =>md5(Auth::user()->id )]) !!}";

                // Click listener with copyShareUrl handler
                shareUrl.addEventListener('click', copyShareUrl, false);

            }());
        </script>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-body pb-3">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10">Recent Buy &amp; Membership</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <div class="table-responsive mb-0 projects-stat tx-14">
                        <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap  ">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="project-names">
                                        <h6 class="bg-primary-transparent text-primary d-inline-block mr-2 text-center">U</h6>
                                        <p class="d-inline-block font-weight-semibold mb-0">UI Design</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-success">Completed</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-names">
                                        <h6 class="bg-pink-transparent text-pink d-inline-block text-center mr-2">R</h6>
                                        <p class="d-inline-block font-weight-semibold mb-0">Landing Page</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-names">
                                        <h6 class="bg-primary-transparent text-primary d-inline-block mr-2 text-center">U</h6>
                                        <p class="d-inline-block font-weight-semibold mb-0">UI Design</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-success">Completed</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-names">
                                        <h6 class="bg-pink-transparent text-pink d-inline-block text-center mr-2">R</h6>
                                        <p class="d-inline-block font-weight-semibold mb-0">Landing Page</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-names">
                                        <h6 class="bg-primary-transparent text-primary d-inline-block mr-2 text-center">U</h6>
                                        <p class="d-inline-block font-weight-semibold mb-0">UI Design</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-success">Completed</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="project-names">
                                        <h6 class="bg-pink-transparent text-pink d-inline-block text-center mr-2">R</h6>
                                        <p class="d-inline-block font-weight-semibold mb-0">Landing Page</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-warning">Pending</div>
                                </td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
