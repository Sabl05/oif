@extends('layout.app')

@section('content')

    <!-- sidebar + content -->
    <section class="">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <div class="col-lg-3">
                    <!-- Toggle button -->
                    <button
                        class="btn btn-outline-secondary mb-3 w-100 d-lg-none"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span>Показать фильтры</span>
                    </button>
                    <!-- Collapsible wrapper -->
                    <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
{{--                            <div class="accordion-item">--}}
{{--                                <h2 class="accordion-header" id="headingOne">--}}
{{--                                    <button--}}
{{--                                        class="accordion-button text-dark bg-light"--}}
{{--                                        type="button"--}}
{{--                                        data-mdb-toggle="collapse"--}}
{{--                                        data-mdb-target="#panelsStayOpen-collapseOne"--}}
{{--                                        aria-expanded="true"--}}
{{--                                        aria-controls="panelsStayOpen-collapseOne"--}}
{{--                                    >--}}
{{--                                        Related items--}}
{{--                                    </button>--}}
{{--                                </h2>--}}
{{--                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">--}}
{{--                                    <div class="accordion-body">--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li><a href="#" class="text-dark">Electronics </a></li>--}}
{{--                                            <li><a href="#" class="text-dark">Home items </a></li>--}}
{{--                                            <li><a href="#" class="text-dark">Books, Magazines </a></li>--}}
{{--                                            <li><a href="#" class="text-dark">Men's clothing </a></li>--}}
{{--                                            <li><a href="#" class="text-dark">Interiors items </a></li>--}}
{{--                                            <li><a href="#" class="text-dark">Underwears </a></li>--}}
{{--                                            <li><a href="#" class="text-dark">Shoes for men </a></li>--}}
{{--                                            <li><a href="#" class="text-dark">Accessories </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button text-dark bg-light"
                                        type="button"
                                        data-mdb-toggle="collapse"
                                        data-mdb-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseTwo"
                                    >
                                        Brands
                                    </button>
                                </h2>

                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                                    <div class="accordion-body">

                                        <ul class="categories list-group">
                                            <!-- Category: Cars -->
                                            <li class="category list-group-item">
                                                <input class="category-checkbox form-check-input" type="checkbox" checked>
                                                Cars
                                                <ul class="subcategories list-group">
                                                    <!-- Subcategory: Sedan -->
                                                    <li class="subcategory list-group-item">
                                                        <input class="subcategory-checkbox form-check-input" type="checkbox" checked>
                                                        Sedan
                                                    </li>
                                                    <!-- Subcategory: SUV -->
                                                    <li class="subcategory list-group-item">
                                                        <input class="subcategory-checkbox form-check-input" type="checkbox" checked>
                                                        SUV
                                                    </li>
                                                    <!-- Subcategory: Sports -->
                                                    <li class="subcategory list-group-item">
                                                        <input class="subcategory-checkbox form-check-input" type="checkbox" checked>
                                                        Sports
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Category: Electronics -->
                                            <li class="category list-group-item">
                                                <input class="category-checkbox form-check-input" type="checkbox" checked>
                                                Electronics
                                                <ul class="subcategories list-group">
                                                    <!-- Subcategory: Phones -->
                                                    <li class="subcategory list-group-item">
                                                        <input class="subcategory-checkbox form-check-input" type="checkbox" checked>
                                                        Phones
                                                    </li>
                                                    <!-- Subcategory: Laptops -->
                                                    <li class="subcategory list-group-item">
                                                        <input class="subcategory-checkbox form-check-input" type="checkbox" checked>
                                                        Laptops
                                                    </li>
                                                    <!-- Subcategory: TVs -->
                                                    <li class="subcategory list-group-item">
                                                        <input class="subcategory-checkbox form-check-input" type="checkbox" checked>
                                                        TVs
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                </div>


                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button text-dark bg-light"
                                        type="button"
                                        data-mdb-toggle="collapse"
                                        data-mdb-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree"
                                    >
                                        Price
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                    <div class="accordion-body">


                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="price_min">Min Price</label>
                                                <input type="number" class="form-control" id="price_min" name="price_min" placeholder="Min Price">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="price_max">Max Price</label>
                                                <input type="number" class="form-control" id="price_max" name="price_max" placeholder="Max Price">
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
{{--                            <div class="accordion-item">--}}
{{--                                <h2 class="accordion-header" id="headingThree">--}}
{{--                                    <button--}}
{{--                                        class="accordion-button text-dark bg-light"--}}
{{--                                        type="button"--}}
{{--                                        data-mdb-toggle="collapse"--}}
{{--                                        data-mdb-target="#panelsStayOpen-collapseFour"--}}
{{--                                        aria-expanded="false"--}}
{{--                                        aria-controls="panelsStayOpen-collapseFour"--}}
{{--                                    >--}}
{{--                                        Size--}}
{{--                                    </button>--}}
{{--                                </h2>--}}
{{--                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingThree">--}}
{{--                                    <div class="accordion-body">--}}
{{--                                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check1" checked autocomplete="off" />--}}
{{--                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check1">XS</label>--}}
{{--                                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check2" checked autocomplete="off" />--}}
{{--                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check2">SM</label>--}}
{{--                                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check3" checked autocomplete="off" />--}}
{{--                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check3">LG</label>--}}
{{--                                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check4" checked autocomplete="off" />--}}
{{--                                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check4">XXL</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="accordion-item">
                                <div class="accordion-body">
                                    <button type="button" class="btn btn-white w-100 border border-secondary">Поиск</button>
                                </div>
                            </div>
{{--                            <div class="accordion-item">--}}
{{--                                <h2 class="accordion-header" id="headingThree">--}}
{{--                                    <button--}}
{{--                                        class="accordion-button text-dark bg-light"--}}
{{--                                        type="button"--}}
{{--                                        data-mdb-toggle="collapse"--}}
{{--                                        data-mdb-target="#panelsStayOpen-collapseFive"--}}
{{--                                        aria-expanded="false"--}}
{{--                                        aria-controls="panelsStayOpen-collapseFive"--}}
{{--                                    >--}}
{{--                                        Ratings--}}
{{--                                    </button>--}}
{{--                                </h2>--}}
{{--                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingThree">--}}
{{--                                    <div class="accordion-body">--}}
{{--                                        <!-- Default checkbox -->--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />--}}
{{--                                            <label class="form-check-label" for="flexCheckDefault">--}}
{{--                                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>--}}
{{--                                                <i class="fas fa-star text-warning"></i>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <!-- Default checkbox -->--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />--}}
{{--                                            <label class="form-check-label" for="flexCheckDefault">--}}
{{--                                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>--}}
{{--                                                <i class="fas fa-star text-secondary"></i>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <!-- Default checkbox -->--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />--}}
{{--                                            <label class="form-check-label" for="flexCheckDefault">--}}
{{--                                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i>--}}
{{--                                                <i class="fas fa-star text-secondary"></i>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        <!-- Default checkbox -->--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />--}}
{{--                                            <label class="form-check-label" for="flexCheckDefault">--}}
{{--                                                <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i>--}}
{{--                                                <i class="fas fa-star text-secondary"></i>--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <!-- content -->
                <div class="col-lg-9">
                    <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                        <strong class="d-block py-2">32 позиций найдено</strong>
                        <div class="ms-auto">
{{--                            <select class="form-select d-inline-block w-auto border pt-1">--}}
{{--                                <option value="0">Best match</option>--}}
{{--                                <option value="1">Recommended</option>--}}
{{--                                <option value="2">High rated</option>--}}
{{--                                <option value="3">Randomly</option>--}}
{{--                            </select>--}}
                            <div class="btn-group shadow-0 border">
                                <a href="#" class="btn btn-light product-type-selector" title="List view">
                                    <i class="fa fa-bars fa-lg"></i>
                                </a>
                                <a href="#" class="btn btn-light product-type-selector active" title="Grid view">
                                    <i class="fa fa-th fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </header>

                    <div class="row">
{{--                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">--}}
{{--                            <div class="card w-100 my-2 shadow-2-strong">--}}
{{--                                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" class="card-img-top" />--}}
{{--                                <div class="card-body d-flex flex-column">--}}
{{--                                    <div class="d-flex flex-row">--}}
{{--                                        <h5 class="mb-1 me-1">$34,50</h5>--}}
{{--                                        <span class="text-danger"><s>$49.99</s></span>--}}
{{--                                    </div>--}}
{{--                                    <p class="card-text">T-shirts with multiple colors, for men and lady</p>--}}
{{--                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">--}}
{{--                                        <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>--}}
{{--                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                            <div class="card w-100 my-2 shadow-2-strong">
                                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" class="card-img-top" />
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">$120.00</h5>
                                    <p class="card-text">Winter Jacket for Men and Women, All sizes</p>
                                    <span>#200</span>
                                    <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                        <a href="{{ route('products.show', $id = 1) }}" class="btn btn-primary shadow-0 me-1">Buy</a>
{{--                                        <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <!-- Pagination -->
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar + content -->

@endsection
