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
              <h1><a href="">MD IBRAHIM</a></h1>
              <ul>
                  <li><a href="{{ url('add') }}"><i class="fa fa-briefcase"></i> Add Post</a></li>
                  <li><a href="{{ url('/myPost') }}"><i class="fa fa-folder-open"></i> My Post</a></li>
                  <li><a href="{{ url('/message') }}"><i class="fa fa-comments"></i> Message</a></li>
                  <li><a href="{{ url('/') }}"><i class="fa fa-youtube"></i> Logout</a></li>

              </ul>
            </nav>
          </div>
          <div class="col-md-9 right">
            <div class="container">
                <div class="row">
                    <h1 class="py-3 m-4 text-center">Deshbord</h1>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">POST</h1>
                                <h3>32</h3>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">MESSAGE</h2>
                                <h3>5</h3>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">VISITOR</h2>
                                <h3>120</h3>
                            </div>
                          </div>
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
