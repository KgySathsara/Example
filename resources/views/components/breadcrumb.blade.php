<!-- Page header -->
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                {{$title}} - <span class="fw-normal">{{$subtitle}}</span>
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

    <div class="page-header-content d-lg-flex border-top">
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
<!-- /page header -->
