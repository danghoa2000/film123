@extends('admin.Master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/user/myCss/film_detail.css ')}}">

    <style>
        .trailer {
            top: 0;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 1040;
        }

        .trailer video{
            width: 70%;
        }
    </style>
@endsection
@section('content')
<div class="card">
    <div class="trailer">
        <video playsinline controls data-poster="./videos/anime-watch.jpg" id="video-trailer">
            <source src="{{$film->link_trailer}}" type="video/mp4" />
            <!-- Captions are optional -->
            <track kind="captions" label="English captions" src="#" srclang="en" default />
        </video>
    </div>
    <div class="card-header">
      <h3 class="card-title">Film Detail</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
          <div class="row">
            <div class="col-12 col-sm-4">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted">{{ __('Rate') }}</span>
                  <span class="info-box-number text-center text-muted mb-0">{{ $film->IMDb }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted">{{ __('Comments') }}</span>
                  <span class="info-box-number text-center text-muted mb-0">{{ $film->comments->count() }}</span>
                </div>
              </div>
            </div>
            <div class="col-4 col-sm-4">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted">{{ __('View') }}</span>
                  <span class="info-box-number text-center text-muted mb-0">{{ $film->luot_xem }} <span>
                </span></span></div>
              </div>
            </div>
          </div>
          <div class="row" style="padding-bottom: 15px">
            <div class="col-12">
                <img src="{{ $film->img }}" style="max-height: 250px" alt="">
            </div>
          </div>
            <div class="row" style="border-bottom: 1px solid #adb5bd;">
                <div class="col-6">
                    <div class="post">
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <p class="text-muted">{{ $film->name }}</p>
                        </div>
                    </div>
                    <div class="post">
                        <div class="form-group">
                            <label for="inputName">Year Of Manufacture</label>
                            <p class="text-muted">{{ $film->name }}</p>
                        </div>
                    </div>
                    <div class="post">
                        <div class="form-group">
                            <label for="inputName">Country</label>
                            <p class="text-muted">{{ $film->quoc_gia }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="post">
                        <div class="form-group">
                            <label for="inputName">IMDb</label>
                            <p class="text-muted">{{ $film->IMDb }}</p>
                        </div>
                    </div>
                    <div class="post">
                        <div class="form-group">
                            <label for="inputName">Reviews</label>
                            <p class="text-muted">{{ $film->so_danh_gia }}</p>
                        </div>
                    </div>
                    <div class="post">
                        <div class="form-group">
                            <label for="inputName">Link</label>
                            <p class="text-muted follow-btn popup-link" style="cursor: pointer" id="trailler">{{ $film->link_trailer }}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="border-bottom: 1px solid #adb5bd; padding-top: 15px">
                <div class="col-12">
                    <div class="post">
                        <div class="form-group">
                            <label for="inputName">Description</label>
                            <p class="text-muted">{{ $film->mota }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" style="max-height: 500px; overflow: scroll; margin-top: 15px">
                <thead>                  
                <tr>
                    <th style="width: 50px">#</th>
                    <th style="width: 100px">Name</th>
                    <th>Content</th>
                    <th style="width: 200px">Time</th>
                </tr>
                </thead>
                <tbody>
                    @if ($film->comments)
                        <?php
                            $index = 1;
                        ?>
                        @foreach ($film->comments as $item)
                            <tr>
                                <td>{{ $index }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->noi_dung }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                            <?php
                                $index++;
                            ?>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(".trailer").click(function(e) {
    if (e.target["id"] != "video-trailer") {
        $(".trailer").css('display', 'none');
        $("#video-trailer").get(0).pause();
    }
});

$("#trailler").click(function(e) {
    $(".trailer").css('display', 'flex');
});

</script>
@endsection