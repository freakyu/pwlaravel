@extends ('layout.main')

@section ('konten')

<div class="container">
        <div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)
                <article class="post-item">
                    <div class="post-item-image">
                        <a href="{{route('tampil', $post->id)}}">
                            <img src="img/{{$post->image}}" alt="">
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="padding-10">
                            <h2><a href="{{route('tampil', $post->id)}}">{{$post->title}}</a></h2>
                            <p>{{$post->excerpt}}</p>
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> {{$post->author->name}}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <a href="{{route('tampil', $post->id)}}">Continue Reading &raquo;</a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach

                <nav>
                  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>
                </nav>
            </div>
           
           @include ('layout.sidebar')
    </div>

@endsection