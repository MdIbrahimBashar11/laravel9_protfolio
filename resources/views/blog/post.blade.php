<!-- Main Content Starts -->

<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <!-- Articles Starts -->
        <div class="row">
            <!-- Article Starts -->
         @foreach ($posts as $post)
         <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
            <article class="post-container">
                <div class="post-thumb">
                    <a href="{{url('post_details', $post->id)}}" class="d-block position-relative overflow-hidden">
                        <img
                         src="/post/img/{{$post->image}}"
                          class="img-fluid" alt="Blog Post">
                    </a>
                </div>
                <div class="post-content">
                    <div class="entry-header">
                        <h3><a href="{{url('post_details', $post->id)}}">{{$post->title}}</a></h3>
                    </div> 
                    <div class="entry-content open-sans-font">
                        {{-- <p>{{$post->description}}
                        </p> --}}
                    </div>
                </div>
            </article>
        </div>
         @endforeach
      




         <ul class="pagination">
            <!-- Previous Page Link -->
            @if ($posts->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                <li><a class="prev" href="{{ $posts->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif
        
            <!-- Next Page Link -->
            @if ($posts->hasMorePages())
                <li><a class="next" href="{{ $posts->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>
        </div>
        <!-- Articles Ends -->
    </div>   
    </div>

</section>

<style>
    .prev{
       font-size: 70px;
    }
    .next{
        font-size: 70px;
    }
 .pagination{
    margin-bottom: 0;
 }
</style>