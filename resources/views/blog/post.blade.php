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
      




         <div class="text-center" style="width:100%;">
            {{$posts->links('pagination::bootstrap-4')}}
        </div>
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