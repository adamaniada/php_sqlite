<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Grid Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/grid/">

    

    

    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/assets/grid.css" rel="stylesheet">
    </head>
    <body class="py-4">
        
        <main>
        <div class="container">

            <h1>Bootstrap grid examples</h1>
            <p class="lead">Basic grid layouts to get you familiar with building within the Bootstrap grid system.</p>
            <p>In these examples the <code>.themed-grid-col</code> class is added to the columns to add some theming. This is not a class that is available in Bootstrap by default.</p>

            <h2 class="mt-4">Five grid tiers</h2>
            <p>There are five tiers to the Bootstrap grid system, one for each range of devices we support. Each tier starts at a minimum viewport size and automatically applies to the larger devices unless overridden.</p>

            <div class="row mb-3 text-center">
                <div class="col-4 themed-grid-col">.col-4</div>
                <div class="col-4 themed-grid-col">.col-4</div>
                <div class="col-4 themed-grid-col">.col-4</div>
            </div>

            <div class="row mb-3 text-center">
                <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
                <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
                <div class="col-sm-4 themed-grid-col">.col-sm-4</div>
            </div>

            <div class="row mb-3 text-center">
                <div class="col-md-4 themed-grid-col">.col-md-4</div>
                <div class="col-md-4 themed-grid-col">.col-md-4</div>
                <div class="col-md-4 themed-grid-col">.col-md-4</div>
            </div>
        </main>
    </body>
</html>
