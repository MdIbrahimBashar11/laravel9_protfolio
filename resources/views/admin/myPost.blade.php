<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="./assets/fonts/FN Farid Tangail Unicode & BE.ttf"
    />
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}" />
    <title>Admin</title>
  </head>
  <style></style>
  <body>
    <section class="home">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 left">
            <nav>
              <h1><a href="{{ url('/admin') }}">MD IBRAHIM</a></h1>
              <ul>
                <li><a href="{{ url('/admin') }}"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="{{ url('/add') }}"><i class="fa fa-briefcase"></i> Add Post</a></li>
                  <li><a href="{{ url('/myPost') }}"><i class="fa fa-folder-open"></i> My Post</a></li>
                  <li><a href="{{ url('/message') }}"><i class="fa fa-comments"></i> Message</a></li>

              </ul>
            </nav>
          </div>
          <div class="col-md-9 right">
            <div class="container">
                <div class="row">
                   <div class="col-md-12">
                      <table>
                          <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Image</th>
                            <th>Delete</th>
                            <th>Edit</th>
                          </tr>
                         @foreach ($post as $post)
                         <tr>
                          <td>{{$post->title}}</td>
                          <td>{{$post->descriptions}}</td>
                          <td>{{$post->created_at}}</td>
                          <td>
                             <img src="/post/img/{{$post->image}}" alt="IMG">
                          </td>
                          <td><a href="{{url('/delete_post',$post->id)}}"
                            onclick="return confirm('Are You sure to delete this post')"
                             class="btn btn-outline-success" >Delete</a></td>
                          <td><a href="{{url('/update_post',$post->id)}}"
                            class="btn btn-outline-info" >Update</a></td>
                        </tr>
                         @endforeach
                      </table>
                   </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
  </body>
</html>

<style>
    table{
      border: 3px solid cornflowerblue;
      margin: 30px 0;
    }
    th, tr, td{
      border: 1px solid cornflowerblue;
      padding: 5px;
    }
    img{
      width: 100px;
    }
</style>
