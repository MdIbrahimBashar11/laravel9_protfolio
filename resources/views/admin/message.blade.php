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
                <li><a href="{{ url('/admin') }}"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="{{ url('/add') }}"><i class="fa fa-briefcase"></i> Add Post</a></li>
                  <li><a href="{{ url('/myPost') }}"><i class="fa fa-folder-open"></i> My Post</a></li>
                  <li><a href="{{ url('/') }}"><i class="fa fa-youtube"></i> Logout</a></li>

              </ul>
            </nav>
          </div>
          <div class="col-md-9 right">
            <div class="container">
              @if (session()->has('message'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert"
                  aria-hidden="true" class="btn btn-outline-info" >X</button>
                  {{session()->get('message')}}
              </div>
                  
              @endif
                <div class="row">
                  <div class="col-md-12">
                    <table>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Send Time</th>
                        <th>Delete</th>
                        <th>Replay</th>
                      </tr>
                     @foreach ($mesg as $mesg)
                     <tr>
                      <td>{{$mesg->name}}</td>
                      <td>{{$mesg->email}}</td>
                      <td>{{$mesg->subject}}</td>
                      <td>{{$mesg->message}}</td>
                      <td>{{$mesg->created_at}}</td>
                      <td><a href="{{url('/delete_mesg',$mesg->id)}}"
                        onclick="return confirm('Are You sure to delete this Message')"
                         class="btn btn-outline-success" >Delete</a></td>
                    </tr>
                    <td><a href="" class="btn btn-outline-primary">Replay</a></td>
                     @endforeach
                  </table>
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

<style>
   table{
      border: 3px solid cornflowerblue;
      margin: 30px 0;
    }
    th, tr, td{
      border: 1px solid cornflowerblue;
      padding: 5px;
    }
</style>