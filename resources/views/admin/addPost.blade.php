

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
              <h1><a href="./index.html">MD IBRAHIM</a></h1>
              <ul>
                  <li><a href="{{ url('/redirect') }}"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="{{ url('/myPost') }}"><i class="fa fa-folder-open"></i> My Post</a></li>
                  <li><a href="./message.html"><i class="fa fa-comments"></i> Message</a></li>

              </ul>
            </nav>
          </div>
          <div class="col-md-9 right add">
            <div class="container">
                <div class="row">
                    <h1 class="py-3 m-4 text-center">Add Post</h1>
                    <div class="col-md-9 mx-auto">
                        <form action="{{url('/addPost')}}" method="POST" enctype="multipart/form-data"> 
                          @csrf
                             <input type="text" name="name" placeholder="Title" > <br>
                             <input type="file" name="image" id=""> <br>
                             <textarea name="description" id="" cols="30" rows="10"></textarea>
                             <input class="btn btn-outline-info" type="submit" value="Add Post">
                        </form>
                    </div>
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
