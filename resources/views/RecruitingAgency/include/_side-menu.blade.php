<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('RecruitingAgency.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Job Posts </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('RecruitingAgency.jobPost.all') }}"><i class="fa fa-arrow-circle-right"></i> All Job Posts</a></li>
                        <li><a href="{{ route('RecruitingAgency.jobPost.applied') }}"><i class="fa fa-arrow-circle-right"></i> Applied Job</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tachometer"></i> <span> Bangladesh Embassy </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('bangladeshEmbassy.request') }}"><i class="fa fa-arrow-circle-right"></i> New Requests</a></li>
                        <li><a href="{{ route('bangladeshEmbassy.approved') }}"><i class="fa fa-arrow-circle-right"></i> Approved Requests</a></li>
                        <li><a href="{{ route('bangladeshEmbassy.rejected') }}"><i class="fa fa-arrow-circle-right"></i> Rejected Requests</a></li>
                    </ul>
                </li>

                <!--<li class="has_sub">-->
                <!--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Menu </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                <!--<ul>-->
                <!--<li class="has_sub">-->
                <!--<a href="javascript:void(0);" class="waves-effect"><span>Menu Item 1.1</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                <!--<ul style="">-->
                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.1</span></a></li>-->
                <!--<li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li>-->
                <!--</ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="javascript:void(0);"><span>Menu Item 1.2</span></a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
