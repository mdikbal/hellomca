@extends('frontend.frontapp')
@section('content')

            <section class="b-infoblock">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ">
                        <div class="b-sort-panel">
                            <div class="b-sort-panel__inner">
                                <form action="#">
                                    <div class="b-select b-left">
                                        <select class="j-select" name="productAtPage" id="productAtPage">
                                            <option>1 products/page</option>
                                            <option>6 products/page</option>
                                            <option selected="selected">9 products/page</option>
                                        </select>
                                    </div>

                                    <div class="b-select b-left">
                                        <select class="j-select" name="productAtPage" id="productAtPage">
                                            <option>Order by price</option>
                                            <option selected="selected">Order by name</option>
                                        </select>
                                    </div>
                                    <div class="b-sort-panel__inner_icon-sort f-sort-panel__inner_icon-sort fa fa-sort-amount-desc"></div>

                                    <div class="b-view-switcher f-view-switcher b-right">
                                        <div class="b-view-switcher_column is-view-switcher__item-active fa fa-th-list"></div>
                                        <div class="b-view-switcher_table fa fa-th"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="b-col-default-indent">
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-xs"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-xs"></div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6 col-mini-12">
                                    <div class="b-product-preview">
                                        <div class="b-product-preview__img view view-sixth">
                                            {!! Html::image('assets/frontend/img/shop/shop_1.png','',array('data-retina' => 'data-retina')) !!}
                                                                                        
                                            <div class="b-item-hover-action f-center mask">
                                                <div class="b-item-hover-action__inner">
                                                    <div class="b-item-hover-action__inner-btn_group">
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="shop_detail.html" class="b-btn f-btn b-btn-light f-btn-light info"><i class="fa fa-link"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-product-preview__content">
                                            <div class="b-product-preview__content_col">
                                                <span class="b-product-preview__content_price f-product-preview__content_price f-primary-b">35$</span>
                                            </div>
                                            <div class="b-product-preview__content_col">
                                                <a href="shop_detail.html" class="f-product-preview__content_title">Skater Dress In Leaf</a>
                                                <div class="f-product-preview__content_category f-primary-b"><a href="">Women</a> / <a href="">Clothe</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix hidden-xs"></div>
                            </div>

                            <div class="container">
                                <div class="b-pagination f-pagination">
                                    <ul>
                                        <li><a href="#">First</a></li>
                                        <li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="is-active-pagination"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                                        <li><a href="#">Last</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('frontend.block.sidebar')

                </div>
            </div>
        </section>

@stop

@section('customscript')


@stop
