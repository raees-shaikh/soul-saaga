<div class="content-wrapper">
    <nav class="navbar  fixed-top transparent absolute nav-wrapper-dark text-uppercase inverse-text navbar-expand-lg">
      <div class="container">
        <div class="navbar-header">
          <div class="navbar-brand d-lg-none d-block"><a href="{{url('/')}}" ><img src="#" srcset="frontend/images/soul-saaga.png" alt="" class="pb-sm-2 pb-3"></a></div>
          <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
        </div>
        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse align-items-lg-center text-lg-center">
          <ul class="nav navbar-nav  align-items-lg-center text-lg-center  justify-content-lg-center">
            <li class="nav-item"><a class="nav-link {{URL::current() == url('/') ? 'active' : ''}}" href="{{url('/')}}">Home</a>

              <!--/.dropdown-menu -->
            </li>
            <li class="nav-item dropdown px-lg-4"><a class="nav-link dropdown-toggle {{URL::current()== url('/about')? 'active ' : ''}}" href="{{url('/about')}}">About</a>
            </li>


            <li class="d-lg-block d-none">
                <div class="navbar-brand "><a href="{{url('/')}}" class="nav-link pt-0 pb-0"><img src="#" srcset="frontend/images/soul-saaga.png" alt="" id="Logo"></a></div>
            </li>
            <li class="nav-item dropdown px-lg-4"><a class="nav-link dropdown-toggle {{URL::current() == url('/films')? 'active' : ''}}" href="{{url('/films')}}">Films</a>
            </li>
            <li class="nav-item dropdown "><a class="b-bottom nav-link dropdown-toggle {{URL::current()== url('/work')? 'active' : ''}}" href="{{url('/work')}}">Work</a>
            </li>
          </ul>
          <!-- /.navbar-nav -->

        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.navbar -->
