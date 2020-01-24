@extends('adminlte::page')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Prestanet.
                </div>

              <div class="row">
              
              


    <!-- <div class="form-group ff-item ff-list " id="ff-id-841531153">
  
    <label for="Widget841531153">
      
        ¿Que monto necesitas?
        <span class="ff-required">*</span> 
        <i class="ff-edit material-icons float-right" onclick="editFacade.showItem('841531153')">edit</i>
        <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('841531153')">settings</i>
        
      
    </label>
  
  
    
    
      <select class="form-control" id="Widget841531153" name="entry.47544924" required="">
      <option value="">- Choose -</option>
      
        <option value="$ 100.000">$ 100.000</option>
      
        <option value="$ 150.000">$ 150.000</option>
      
        <option value="$ 200.000">$ 200.000</option>
      
        <option value="$ 250.000">$ 250.000</option>
      
        <option value="$ 300.000">$ 300.000</option>
      
        <option value="$ 350.000">$ 350.000</option>
      
        <option value="$ 400.000">$ 400.000</option>
      
        <option value="$ 450.000">$ 450.000</option>
      
        <option value="$ 500.000">$ 500.000</option>
      
        <option value="$ 550.000">$ 550.000</option>
      
        <option value="$ 600.000">$ 600.000</option>
      
        <option value="$ 650.000">$ 650.000</option>
      
        <option value="$ 700.000">$ 700.000</option>
      
      </select>
    
  
</div>

<div class="form-group ff-item ff-list " id="ff-id-2129376168">
  
    <label for="Widget2129376168">
      
        ¿A que tiempo te sirve?
        <span class="ff-required">*</span> 
        <i class="ff-edit material-icons float-right" onclick="editFacade.showItem('2129376168')">edit</i>
        <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('2129376168')">settings</i>
        
      
    </label>
  
  
    
    
      <select class="form-control" id="Widget2129376168" name="entry.1113375218" required="">
      <option value="">- Choose -</option>
      
        <option value="30 días">30 días</option>
      
        <option value="60 días">60 días</option>
      
        <option value="90 días">90 días</option>
      
      </select>
    
  
</div>

<div class="form-group ff-item ff-list " id="ff-id-1655577095">
  
    <label for="Widget1655577095">
      
        ¿Cómo te enteraste de nosotros?
        <span class="ff-required">*</span> 
        <i class="ff-edit material-icons float-right" onclick="editFacade.showItem('1655577095')">edit</i>
        <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('1655577095')">settings</i>
        
      
    </label>
  
  
    
    
      <select class="form-control" id="Widget1655577095" name="entry.135169723" required="">
      <option value="">- Choose -</option>
      
        <option value="Radio">Radio</option>
      
        <option value="Amigo">Amigo</option>
      
        <option value="Google">Google</option>
      
        <option value="Facebook">Facebook</option>
      
        <option value="Instagram">Instagram</option>
      
      </select>
    
  
</div>

</div> -->




                    <div class="col-md">

                    <h3 class="">Préstamos de emergencia</h3>

                    <h4 class="">POLÍTICAS Y TRATAMIENTO DE DATOS PERSONALES</h4>
                    
                    <p>Lea las condiciones para acceder a los préstamos en este enlace:<br
                    ><a href="https://www.prestanet.com.co/terminos_y_condiciones_prestanet_col.html" target="_blank">https://www.prestanet.com.co/terminos_y_condiciones_prestanet_col.html</a>
                    </p>

                    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Paso 1</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                    
                    </div>
              
              </div>  

                
            </div>
        </div>
    </body>
</html>
