@extends('layouts.app')

@section('content')

<!-- Menu Section -->
<section class="food_section layout_padding">
    <div class="container">

        <!-- Heading -->
        <div class="heading_container heading_center">
            <h2>
                Our Menu
            </h2>
            <p>
                Fresh Food Every Day
            </p>
        </div>

        <!-- Menu Filter -->
        <ul class="filters_menu">
            <li class="active" data-filter="*">All</li>
            <li data-filter=".short-eats">Short Eats</li>
            <li data-filter=".noodles">Noodles</li>
            <li data-filter=".rice">Rice</li>
            <li data-filter=".naan">Naan</li>
            <li data-filter=".beverages">Beverages</li>
        </ul>


        <!-- Menu Items -->
        <div class="filters-content">

            <div class="row grid">

                <!-- ===================================== -->
                <!-- SHORT EATS -->
                <!-- ===================================== -->

                <div class="col-sm-6 col-lg-4 all short-eats">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/egg-bun.png') }}"
                                     alt="Egg Bun">
                            </div>

                            <div class="detail-box">
                                <h5>Egg Bun</h5>

                                <p>
                                    Freshly prepared delicious egg bun.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all short-eats">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/fish-bun.png') }}"
                                     alt="Fish Bun">
                            </div>

                            <div class="detail-box">
                                <h5>Fish Bun</h5>

                                <p>
                                    Soft bun filled with a delicious fish filling.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all short-eats">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/sausage-bun.png') }}"
                                     alt="Sausage Bun">
                            </div>

                            <div class="detail-box">
                                <h5>Sausage Bun</h5>

                                <p>
                                    Freshly baked bun with a tasty sausage filling.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all short-eats">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/roll.png') }}"
                                     alt="Roll">
                            </div>

                            <div class="detail-box">
                                <h5>Roll</h5>

                                <p>
                                    Crispy and delicious freshly prepared roll.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all short-eats">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/chicken-pastry.png') }}"
                                     alt="Chicken Pastry">
                            </div>

                            <div class="detail-box">
                                <h5>Chicken Pastry</h5>

                                <p>
                                    Crispy pastry filled with seasoned chicken.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all short-eats">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/curry-pastry.png') }}"
                                     alt="Curry Pastry">
                            </div>

                            <div class="detail-box">
                                <h5>Curry Pastry</h5>

                                <p>
                                    Fresh pastry with a flavourful curry filling.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ===================================== -->
                <!-- NOODLES -->
                <!-- ===================================== -->

                <div class="col-sm-6 col-lg-4 all noodles">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/vegetable-noodles.png') }}"
                                     alt="Vegetable Noodles">
                            </div>

                            <div class="detail-box">
                                <h5>Vegetable Noodles</h5>

                                <p>
                                    Delicious noodles prepared with fresh vegetables.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all noodles">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/egg-noodles.png') }}"
                                     alt="Egg Noodles">
                            </div>

                            <div class="detail-box">
                                <h5>Egg Noodles</h5>

                                <p>
                                    Freshly cooked noodles prepared with egg.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ===================================== -->
                <!-- RICE -->
                <!-- ===================================== -->

                <div class="col-sm-6 col-lg-4 all rice">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/vegetable-rice.png') }}"
                                     alt="Vegetable Rice">
                            </div>

                            <div class="detail-box">
                                <h5>Vegetable Rice</h5>

                                <p>
                                    Delicious rice prepared with fresh vegetables.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all rice">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/chicken-rice.png') }}"
                                     alt="Chicken Rice">
                            </div>

                            <div class="detail-box">
                                <h5>Chicken Rice</h5>

                                <p>
                                    Flavourful rice served with delicious chicken.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all rice">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/egg-rice.png') }}"
                                     alt="Egg Rice">
                            </div>

                            <div class="detail-box">
                                <h5>Egg Rice</h5>

                                <p>
                                    Tasty fried rice freshly prepared with egg.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all rice">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/nasi-goreng.png') }}"
                                     alt="Nasi Goreng">
                            </div>

                            <div class="detail-box">
                                <h5>Nasi Goreng</h5>

                                <p>
                                    A delicious and flavourful Nasi Goreng dish.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ===================================== -->
                <!-- NAAN -->
                <!-- ===================================== -->

                <div class="col-sm-6 col-lg-4 all naan">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/butter-naan.png') }}"
                                     alt="Butter Naan">
                            </div>

                            <div class="detail-box">
                                <h5>Butter Naan</h5>

                                <p>
                                    Soft and freshly prepared naan with butter.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4 all naan">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/garlic-naan.png') }}"
                                     alt="Garlic Naan">
                            </div>

                            <div class="detail-box">
                                <h5>Garlic Naan</h5>

                                <p>
                                    Fresh naan bread with delicious garlic flavour.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ===================================== -->
                <!-- BEVERAGES -->
                <!-- ===================================== -->

                <div class="col-sm-6 col-lg-4 all beverages">
                    <div class="box">
                        <div>
                            <div class="img-box">
                                <img src="{{ asset('images/menu/beverages.png') }}"
                                     alt="Beverages">
                            </div>

                            <div class="detail-box">
                                <h5>Cold Beverages</h5>

                                <p>
                                    Refreshing cold beverages to enjoy with your meal.
                                </p>

                                <div class="options">
                                    <h6>Rs. 0.00</h6>

                                    <a href="#" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- End Menu Section -->

@endsection