<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Themesbrand</title>

    <!-- Global stylesheets -->
    <link href="{{URL::asset('assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{URL::asset('assets/demo/demo_configurator.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{URL::asset('assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>

    <script src="{{URL::asset('assets/js/app.js')}}"></script>
    <script src="{{URL::asset('assets/demo/pages/dashboard.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/streamgraph.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/sparklines.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/lines.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/areas.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/donuts.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/bars.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/progress.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/heatmaps.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/pies.js')}}"></script>
    <script src="{{URL::asset('assets/demo/charts/pages/dashboard/bullets.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    @include('layouts.navbar')


    <!-- Page content -->
    <div class="page-content">

        @include('layouts.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Page header -->
                <div class="page-header page-header-light shadow">
                    <div class="page-header-content d-lg-flex container">
                        <div class="d-flex">
                            <h4 class="page-title mb-0">
                                Seed - <span class="fw-normal">Boxed Content</span>
                            </h4>

                            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>

                        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                            <div class="hstack gap-3 mb-3 mb-lg-0">
                                <button type="button" class="btn btn-primary">
                                    <i class="ph-gear me-2"></i>
                                    Button
                                </button>

                                <div class="dropdown">
                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                                        Dropdown
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <button type="button" class="dropdown-item">Menu item 1</button>
                                        <button type="button" class="dropdown-item">Menu item 2</button>
                                        <button type="button" class="dropdown-item">Menu item 3</button>
                                        <div class="dropdown-divider"></div>
                                        <button type="button" class="dropdown-item">Menu item 4</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="page-header-content d-lg-flex container">
                            <div class="d-flex">
                                <div class="breadcrumb py-2">
                                    <a href="index" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <a href="#" class="breadcrumb-item">Home</a>
                                    <a href="#" class="breadcrumb-item">Link</a>
                                    <span class="breadcrumb-item active">Current</span>
                                </div>

                                <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                </a>
                            </div>

                            <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                                <div class="d-lg-flex mb-2 mb-lg-0">
                                    <a href="#" class="d-flex align-items-center text-body py-2">
                                        Link
                                    </a>

                                    <div class="dropdown ms-lg-3">
                                        <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                            <span class="flex-1">Dropdown</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                            <a href="#" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                One more action
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                Separate action
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content container">

                    <!-- Basic card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Basic card</h5>
                        </div>

                        <div class="card-body">
                            <h6>Start your development with no hassle!</h6>
                            <p class="mb-3">Common problem of templates is that all code is deeply integrated into the core. This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra code easily just by disabling styling of certain components in <code>_config.scss</code>. Styling of all 3rd party components are stored in separate SCSS files that begin with <code>$enable-[component]</code> condition, which checks if this component is enabled in SCSS configuration and either includes or excludes it from bundled CSS file. Use only components you actually need!</p>

                            <h6>What is this?</h6>
                            <p class="mb-3">Starter kit is a set of pages, useful for developers to start development process from scratch. Each layout includes base components only: layout, page kits, color system which is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup. CSS files are compiled without any plugins or components. Starter kit is moved to a separate folder for better accessibility.</p>

                            <h6>How does it work?</h6>
                            <p>You open one of the starter pages, add necessary plugins, enable components in <code>_config.scss</code> file, compile new CSS. That's it. It's also recommended to open one of main pages with functionality you need and copy all paths/JS code from there to your new page, if you don't need to change file structure.</p>
                        </div>
                    </div>
                    <!-- /basic card -->


                    <!-- Basic table -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Basic table</h5>
                        </div>

                        <div class="card-body">
                            Seed project includes the most basic components that can help you in development process - basic grid example, card, table and form layouts with standard components. Nothing extra. Easily turn on and off styles of different components to keep your CSS as clean as possible. Bootstrap components are always enabled.
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Eugene</td>
                                        <td>Kopyov</td>
                                        <td>@Kopyov</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Victoria</td>
                                        <td>Baker</td>
                                        <td>@Vicky</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>James</td>
                                        <td>Alexander</td>
                                        <td>@Alex</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Franklin</td>
                                        <td>Morrison</td>
                                        <td>@Frank</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /basic table -->


                    <!-- Form layouts -->
                    <div class="row">
                        <div class="col-lg-6">

                            <!-- Horizontal form -->
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h5 class="mb-0">Horizontal form</h5>
                                    <div class="hstack gap-2 ms-auto">
                                        <a class="text-body" data-card-action="collapse">
                                            <i class="ph-caret-down"></i>
                                        </a>
                                        <a class="text-body" data-card-action="reload">
                                            <i class="ph-arrows-clockwise"></i>
                                        </a>
                                        <a class="text-body" data-card-action="remove">
                                            <i class="ph-x"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse show">
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="row mb-3">
                                                <label class="col-lg-3 col-form-label">Text input</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" placeholder="Text input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-lg-3 col-form-label">Password</label>
                                                <div class="col-lg-9">
                                                    <input type="password" class="form-control" placeholder="Password input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-lg-3 col-form-label">Select</label>
                                                <div class="col-lg-9">
                                                    <select name="select" class="form-select">
                                                        <option value="opt1">Basic select</option>
                                                        <option value="opt2">Option 2</option>
                                                        <option value="opt3">Option 3</option>
                                                        <option value="opt4">Option 4</option>
                                                        <option value="opt5">Option 5</option>
                                                        <option value="opt6">Option 6</option>
                                                        <option value="opt7">Option 7</option>
                                                        <option value="opt8">Option 8</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-lg-3 col-form-label">Textarea</label>
                                                <div class="col-lg-9">
                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                                </div>
                                            </div>

                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /horizotal form -->

                        </div>

                        <div class="col-lg-6">

                            <!-- Vertical form -->
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h5 class="mb-0">Vertical form</h5>
                                    <div class="hstack gap-2 ms-auto">
                                        <a class="text-body" data-card-action="collapse">
                                            <i class="ph-caret-down"></i>
                                        </a>
                                        <a class="text-body" data-card-action="reload">
                                            <i class="ph-arrows-clockwise"></i>
                                        </a>
                                        <a class="text-body" data-card-action="remove">
                                            <i class="ph-x"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse show">
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="mb-3">
                                                <label class="form-label">Text input</label>
                                                <input type="text" class="form-control" placeholder="Text input">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Select</label>
                                                <select name="select" class="form-select">
                                                    <option value="opt1">Basic select</option>
                                                    <option value="opt2">Option 2</option>
                                                    <option value="opt3">Option 3</option>
                                                    <option value="opt4">Option 4</option>
                                                    <option value="opt5">Option 5</option>
                                                    <option value="opt6">Option 6</option>
                                                    <option value="opt7">Option 7</option>
                                                    <option value="opt8">Option 8</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Textarea</label>
                                                <textarea rows="4" cols="4" class="form-control" placeholder="Default textarea"></textarea>
                                            </div>

                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /vertical form -->

                        </div>
                    </div>
                    <!-- /form layouts -->

                </div>
                <!-- /content area -->


                @include('layouts.footer')

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


    @include('layouts.notification')

    @include('layouts.right-sidebar')

</body>
</html>