@extends('Frontend.Layouts.app')
@section('content')

<style>
    .btn {
      background-color: #e53b3b;
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
      border-radius: 12px;
    }
    
    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }
</style>
            <div id="heading-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>Brosur</h1>
                        </div>
                        <div class="col-md-5">
                            <ul class="breadcrumb">
                                <li><a style="color: #ffffff;" href="./">Home</a>
                                </li>
                                <li>Brosur</li>
                            </ul>
    
                        </div>
                    </div>
                </div>
            </div>
    
              <div id="content">
                <div class="container">
    
                   <div class="row">
                        <div style="min-width: 50%;" class="col-md-8 col-sm-6 col-xs-12">
                        <h2>Brosur Institut Az Zuhra</h2>
                        <hr style="border: 1px solid #00000026; width: 15%; margin-left:0;"><br>
    
                      <div class="col-md-10 col-sm-6 col-xs-12">
                        <img width="100%" style="margin-right: 15px; border-radius: 10px;" src="/assets/brosur/">
                        
                        <p style="padding-top: 5px; font-size: 11px; color: #00000059;">Photo by <a style="color: #00000059; text-decoration: none;" href="">Institut Az Zuhra</a></p>
                      </div>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                        <button onclick="downloadAll(window.links)" class="btn"><i class="fa fa-download"></i> Download</button>
                        <p style="padding-top: 5px; font-size: 11px; color: #00000059;"><a style="color: #00000059; text-decoration: none;" href="">Format JPG</a></p>
                      </div>
                      <div class="col-md-10 col-sm-6 col-xs-12">
                        <img width="100%" style="margin-right: 15px; border-radius: 10px;" src="/assets/brosur/">
                        <p style="padding-top: 5px; font-size: 11px; color: #00000059;">Photo by <a style="color: #00000059; text-decoration: none;" href="">Institut Az Zuhra</a></p>
                      </div>
                </div>
                <!-- /.container -->
                </div>
            </div>
            
            
<script>
    var links = [
        'assets/brosur/'
    ];
    
    function downloadAll(urls) {
        var link = document.createElement('a');
    
        link.setAttribute('download', "Brosur Institut Az Zuhra" ,null);
        link.style.display = 'none';
    
        document.body.appendChild(link);
    
        for (let i = 0; i < urls.length; i++) {
        link.setAttribute('href', urls[i]);
        link.click();
        }
    
        document.body.removeChild(link);
    }
</script>

@endsection