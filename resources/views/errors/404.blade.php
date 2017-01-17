<!DOCTYPE html>
<html>
    <head>
        <title>404 Error</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
        body{
          background:#ccc;
          box-sizing: border-box;
          margin:0;
          padding:0;
        }

        #container{
          display:flex;
          flex-direction: column;
          justify-content: center;
          text-align: center;
          margin-top: 20px;
          margin-bottom: 50px;

          max-width:780px;
        }

        #message{
          text-align: center;
        }

        #Box{
          background-color:#eee;
          width:50%;
          margin:0 auto;
          padding:12px;
          padding-bottom: 24px;
          border:solid 1px black;
        }

        #image{
          margin:0 auto;
        }

        #image img{
          border:solid 3px black;
          border-bottom:solid 16px black;
          width:98%;
        }
        #image p{
          text-align: center;
        }


        footer p{
          opacity:.6;
          margin-left: 20px;
          text-align: center;
        }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="content">

            <div id="message">
              <h1><i>Somethings Up!</i></h1>

                <h2>Error 404: Page Not Found!</h2>
                <h2>{{$_SERVER['REQUEST_URI']}}</h2>

                <h3>
                  <a href="/">Return Home</a>
                </h3>
            </div>

            <div id="Box">
              <div id="image">
                  <img src="/linkImages/spider_sense.jpeg">
                  <p><i>"With great power comes great responsibility."</i></p>
              </div>
            </div>

          </div>

        <footer>
          <p> Matthew Thompson | 3WireBuild | {{date('Y')}} </p>
        </footer>
      </div>
    </body>
</html>
