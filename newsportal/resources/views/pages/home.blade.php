@extends('layout.topnav')


@section('content')

    <div class="col-xl-12 stretch-card grid-margin">
    
        <div class="col-xl-8 stretch-card grid-margin">
              <a href="{{route('details',['id'=>$topnews->id])}}">
                <div class="position-relative">
                    <img
                    src="{{asset('uploads/image/'.$topnews->image)}}"
                    alt="banner"
                    class="img-fluid"
                    />
                  
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      top news
                    </div>
                    <!--<h1 class="mb-0">GLOBAL PANDEMIC</h1>-->
                    <h1 class="text-info bg-dark" >
                      {{$topnews->heading}}
                    </h1>
                    <div class="fs-12">
                      <span class="mr-2"> <i class="bi-clock"></i></span>
                      <!--10 Minutes ago-->
                      <?php
                        date_default_timezone_set('Asia/Dhaka');
                        $seconds=strtotime(date('Y-m-d H:i:s'))-strtotime($topnews->created_at);
                        $days=floor($seconds/86400);
                        $hours=floor(($seconds-($days*86400))/3600);
                        $minutes=floor(($seconds-($days*86400)-($hours*3600))/60);
                        $seconds=floor(($seconds-($days*86400)-($hours*3600)-($minutes*60)));

                        if($days>0){echo $days.' Days ago';}
                        elseif($hours>0){echo $hours.' Hours ago';}
                        elseif($minutes>0){echo $minutes.' Minutes ago';}
                        else{echo $seconds.' Seconds ago';}
                      ?>
                    </div>
                  </div>
                </div>
              
            
              </a>
              </div>
            
              <div class="col-xl-4 stretch-card grid-margin">
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
                      ?>
                        </div>
                      </div>
                      <div class="rotate-img">
                        @if($news->image!='')
                        <img
                          src="{{ asset('uploads/image/'.$news->image)}}"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
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
</div>

@endsection