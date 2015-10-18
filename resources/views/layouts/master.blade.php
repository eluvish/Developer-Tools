<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developers Best Friend' --}}
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

  <header>
    <section id="menu" class="menu bg-primary">
           <div class="container">
               <div class="row text-center">
                   <div class="col-md-12">
                       <h2>Developer's Best Friend</h2>
                       <hr class="small">
                       <div class="row">

                         <div class="col-md-4">
                           <a href="/lorem">
                             <button type="button" class="btn btn-default btn-lg">
                               <span class="glyphicon glyphicon-align-left"></span>
                             </button>
                           </a>
                           <h4><strong>Lorem Ipsum Generator</strong><br>
                             <ul class="pagination">
                               <li><a href="/lorem?numParagraphs=1">1</a></li>
                               <li><a href="/lorem?numParagraphs=2">2</a></li>
                               <li><a href="/lorem?numParagraphs=3">3</a></li>
                               <li><a href="/lorem?numParagraphs=4">4</a></li>
                             </ul>
                           </h4>
                         </div>

                         <div class="col-md-4">
                           <a href="/createuser">
                             <button type="button" class="btn btn-default btn-lg">
                               <span class="glyphicon glyphicon-user"></span>
                             </button>
                           </a>
                                 <h4><strong>Random User Generator</strong>
                                   <ul class="pagination">
                                     <li><a href="/createuser?numUsers=1">1</a></li>
                                     <li><a href="/createuser?numUsers=2">2</a></li>
                                     <li><a href="/createuser?numUsers=3">3</a></li>
                                     <li><a href="/createuser?numUsers=4">4</a></li>
                                     <li><a href="/createuser?numUsers=5">5</a></li>
                                     <li><a href="/createuser?numUsers=6">6</a></li>
                                   </ul>
                                 </h4>
                          </div>

                          <div class="col-md-4">
                            <a href="/password">
                              <button type="button" class="btn btn-default btn-lg">
                                <span class="glyphicon glyphicon-random"></span>
                              </button>
                            </a>
                              <h4><strong>xkcd Password Generator</strong>
                                <ul class="pagination">
                                  <li><a href="/password?number_of_words=4">4</a></li>
                                  <li><a href="/password?number_of_words=5">5</a></li>
                                  <li><a href="/password?number_of_words=6">6</a></li>
                                  <li><a href="/password?number_of_words=7">7</a></li>
                                </ul>
                              </h4>
                          </div>

                      </div>
                  </div>
            </div>
        </div>
  </section>
  </header>

    <section style="padding:20px;">
        {{-- Main page content will be yielded here --}}
        <div class="container">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

              @yield('content')

            </div>
            <div class="col-md-1"></div>
        </div>
      </div>
    </section>

    <footer class="menu bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center" style="padding:20px;">
            <a href="http://www.github.com/eluvish">
              <button type="button" class="btn btn-default btn-lg">Github</button>
            </a>
            <a href="http://p1.eliluvish.com">
              <button type="button" class="btn btn-default btn-lg">P1</button>
            </a>
            <a href="http://p2.eliluvish.com/">
              <button type="button" class="btn btn-default btn-lg">P2</button>
            </a>
            <a href="/">
              <button type="button" class="btn btn-default btn-lg">P3</button>
            </a>
            <hr class="small">
            <p>Copyright &copy; http://www.eliluvish.com 2015</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
