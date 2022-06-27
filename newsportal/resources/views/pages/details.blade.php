@extends('layout.topnav')
@section('content')


<div class="col-xl-12 stretch-card grid-margin">
    
    <div class="col-xl-8 stretch-card grid-margin">
    <div class="col-sm-12">    
    <h1> {{$details->heading}} </h1>

        <div style="color:blue;" class="row">
            <hr>
        </div>

        <div class="row">
            <h5><b>নিজস্ব প্রতিবেদক</b></h5><br>
            <p><i class="bi-clock"></i>Published at: {{$details->created_at}}</p>
            <h5><i class="bi bi-eye"></i> {{$details->view}} views</h5>
        </div>

        <div class="row">
                        <div class="zoomin-img">
                            <img
                              src="{{asset('uploads/image/'.$details->image)}}"
                              width="700px;" height="400px;"
                            />
                        </div>
            <h5><br><br>{{$details->details}}</h5>
        </div>
</div>
    </div>
        
          <div class="col-xl-4 stretch-card grid-margin">
          <div class="col-sm-12">
              <div class="row">
            <div class="card bg-white text-dark">
              <div class="card-body">
                <h2>Latest news</h2>
                @foreach($latestNews as $news)
                <a href="{{route('details',['id'=>$news->id])}}">
                <div
                  class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                >
                  <div class="pr-3">
                    <h5 style="color:black;">{{$news->heading}}</h5>
                    <div class="fs-12" style="color:black;">
                      <span class="mr-2"><i class="bi-clock"></i></span>
                      <!--10 Minutes ago-->
                      <?php
                      date_default_timezone_set('Asia/Dhaka');
                        $seconds=strtotime(date('Y-m-d H:i:s'))-strtotime($news->created_at);
                        $days=floor($seconds/86400);
                        $hours=floor(($seconds-($days*86400))/3600);
                        $minutes=floor(($seconds-($days*86400)-($hours*3600))/60);
                        $seconds=floor(($seconds-($days*86400)-($hours*3600)-($minutes*60)));

                        if($days>0){echo $days.' Days ago';}
                        elseif($hours>0){echo $hours.' Hours ago';}
                        elseif($minutes>0){echo $minutes.' Minutes ago';}
                        else{echo $seconds.' Seconds ago';}

                        
                        //echo $days.'days '.$hours.' hours '.$minutes.'minutes ago'.$seconds.' seconds ago';
                      ?>
                    </div>
                  </div>
                  <div class="rotate-img">
                    @if($news->image!='')
                      <img src="{{ asset('uploads/image/'.$news->image)}}"
                      alt="thumb"
                      class="img-fluid img-lg"/>
                    @else
                        <img
                          src="{{ url('assets/images/magazine/Magzine_8.jpg')}}"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                    @endif
                    
                  </div>
                  
                </div>
                </a>
                @endforeach

                
              </div>
            </div>
</div>
<div class="row"><br></div>
<div class="row">
    <!--trending start-->
    <div class="card bg-white text-dark">
    <div class="card-body">
        
        <h2>
          Trending
        </h2>
        <div class="mb-4">
          <div class="rotate-img">
            <img
              src="{{url('assets/images/business/business_4.png')}}"
              alt="banner"
              class="img-fluid"
            />
          </div>
          <h3 class="mt-3 font-weight-600">
            Virus Kills Member Of Advising Iran’s Supreme
          </h3>
          <p class="fs-13 text-muted mb-0">
            <span class="mr-2">Photo </span>10 Minutes ago
          </p>
        </div>
        <div class="mb-4">
          <div class="rotate-img">
            <img
              src="{{url('assets/images/business/business_5.png')}}"
              alt="banner"
              class="img-fluid"
            />
          </div>
          <h3 class="mt-3 font-weight-600">
            Virus Kills Member Of Advising Iran’s Supreme
          </h3>
          <p class="fs-13 text-muted mb-0">
            <span class="mr-2">Photo </span>10 Minutes ago
          </p>
        </div>
        <div class="mb-4">
          <div class="rotate-img">
            <img
              src="{{url('assets/images/business/business_6.png')}}"
              alt="banner"
              class="img-fluid"
            />
          </div>
          <h3 class="mt-3 font-weight-600">
            Virus Kills Member Of Advising Iran’s Supreme
          </h3>
          <p class="fs-13 text-muted mb-0">
            <span class="mr-2">Photo </span>10 Minutes ago
          </p>
        </div>
      
</div>

</div>
    <!--trending end-->
</div>
</div>
          </div>
</div>

                    
@endsection