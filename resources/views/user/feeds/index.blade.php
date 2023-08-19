@extends('user.layouts.feed_layout')


@section('content')
    <div class="container bootdey">
        <div class="col-md-12 bootstrap snippets">
            <div class="panel">
                <div class="panel-body">
                    <textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
                    <div class="mar-top clearfix p-2">
                        <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i>
                            Share</button>
                        <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                        <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                        <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <!-- Newsfeed Content -->
                    <!--===================================================-->
                    <div class="media-block">
                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture"
                                src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                        <div class="media-body">
                            <div class="mar-btm">
                                <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>
                                <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago
                                </p>
                            </div>
                            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <hr>


                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Newsfeed Content -->


                    <!-- Newsfeed Content -->
                    <!--===================================================-->
                    <div class="media-block pad-all">
                        <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture"
                                src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                        <div class="media-body">
                            <div class="mar-btm">
                                <a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a>
                                <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago
                                </p>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <img class="img-responsive thumbnail" src="https://www.bootdey.com/image/400x300"
                                alt="Image">
                            
                            </div>
                            <hr>


                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Newsfeed Content -->
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    body {
        margin-top: 20px;
        background: #ebeef0;
    }

    .img-sm {
        width: 46px;
        height: 46px;
    }

    .panel {
        box-shadow: 0 2px 0 rgba(0, 0, 0, 0.075);
        border-radius: 0;
        border: 0;
        margin-bottom: 15px;
    }

    .panel .panel-footer,
    .panel>:last-child {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .panel .panel-heading,
    .panel>:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .panel-body {
        padding: 25px 20px;
    }
</style>
