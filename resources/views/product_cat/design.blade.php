
<head>
<title>{{ $category->name }}</title>
</head>

@extends('layouts.mainlayout')

@section('content')

        <div id="qodef-page-outer">
            <div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
                <div class="qodef-m-inner">
                    <div class="qodef-m-content qodef-content-grid ">
                        <h5 class="qodef-m-title entry-title">

                            {{$category->name}}



                            {{-- @section('title')
                            {{ $category->name }}
                            @endsection --}}
                        </h5>
                        <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="../../index.php"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">Print Digital</span></div>
                    </div>
                </div>
            </div>
            <div id="qodef-page-inner" class="qodef-content-grid">
                <main id="qodef-page-content" class="qodef-grid qodef-layout--template qodef--no-bottom-space qodef-gutter--large">
                    <div class="qodef-grid-inner clear">
                        <div id="qodef-woo-page" class="qodef-grid-item qodef-page-content-section qodef-col--9 ">
                            <header class="woocommerce-products-header"></header>
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="qodef-woo-product-list qodef-item-layout--info-below qodef-gutter--medium">
                                <ul class="products columns-3">
                                    {{-- Post --}}
                                    @foreach ($posts as $post)
                                        <li class="new product type-product post-24 status-publish first instock product_cat-sticky-label product_tag-digital_print has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="qodef-woo-product-inner">
                                                <div class="qodef-woo-product-image">
                                                <img width="600" height="563" src="{{ asset('storage/'.$post->image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="a"
                                                        sizes="(max-width: 600px) 100vw, 600px" /><span class="qodef-woo-product-mark qodef-new">New</span>
                                                    <div class="qodef-woo-product-image-inner">
                                                        <div class="qodef-woo-product-image-inner-2">
                                                        <div class="qodef-woo-product-button-holder"><a href="{{ route('posts_cat.show', $post->id) }}"  class="button product_type_simple  ajax_add_to_cart qodef-btn-wave-hover" data-product_id="24" data-product_sku="002"
                                                                    rel="nofollow">Më Shumë<span class="qodef-btn-masked"><span class="qodef-m-text">Më Shumë</span></span></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="qodef-woo-product-content">
                                                    <div class="qodef-woo-product-content-top">
                                                        <h6 class="qodef-woo-product-title woocommerce-loop-product__title">{{ $post->title }}</h6>
                                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>7.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="qodef-woo-product-categories"><a href="{{ route('posts_cat.show', $post->id) }}" rel="tag">{{ $post->category->name }}</a></div>
                                                </div>
                                                <a href="{{ route('posts_cat.show', $post->id) }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                            </div>
                                        </li>
                                    @endforeach
                                    {{-- Post End --}}
                                    {{-- <li class="product type-product post-48 status-publish instock product_cat-paper-bag product_tag-digital_print has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="qodef-woo-product-inner">
                                            <div class="qodef-woo-product-image">
                                                <img width="600" height="563" src="../../wp-content/uploads/2020/05/shop-image5-600x563.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="a"
                                                    sizes="(max-width: 600px) 100vw, 600px" />
                                                <div class="qodef-woo-product-image-inner">
                                                    <div class="qodef-woo-product-image-inner-2">
                                                        <div class="qodef-woo-product-button-holder"><a href="index4684.html?add-to-cart=48" data-quantity="1" class="button product_type_simple  ajax_add_to_cart qodef-btn-wave-hover" data-product_id="48" data-product_sku="005"
                                                                rel="nofollow">Më Shumë<span class="qodef-btn-masked"><span class="qodef-m-text">Më Shumë</span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qodef-woo-product-content">
                                                <div class="qodef-woo-product-content-top">
                                                    <h6 class="qodef-woo-product-title woocommerce-loop-product__title">Fletëpalosje</h6>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>6.00</span>
                                                    </span>
                                                </div>
                                                <div class="qodef-woo-product-categories"><a href="../../product-category/paper-bag/index.php" rel="tag">Broshura</a></div>
                                            </div>
                                            <a href="../../product/bags/index.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                        </div>
                                    </li>
                                    <li class="product type-product post-139 status-publish last instock product_cat-mugscups product_cat-packaging product_tag-design product_tag-digital_print has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="qodef-woo-product-inner">
                                            <div class="qodef-woo-product-image">
                                                <img width="600" height="563" src="../../wp-content/uploads/2020/05/shop-image9-600x563.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="a" srcset="https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image9-600x563.jpg 600w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image9-300x281.jpg 300w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image9-768x720.jpg 768w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image9.jpg 800w"
                                                    sizes="(max-width: 600px) 100vw, 600px" />
                                                <div class="qodef-woo-product-image-inner">
                                                    <div class="qodef-woo-product-image-inner-2">
                                                        <div class="qodef-woo-product-button-holder"><a href="indexe93a.html?add-to-cart=139" data-quantity="1" class="button product_type_simple  ajax_add_to_cart qodef-btn-wave-hover" data-product_id="139" data-product_sku="009"
                                                                aria-label="Add &ldquo;Broshura&rdquo; to your cart" rel="nofollow">Më Shumë<span class="qodef-btn-masked"><span class="qodef-m-text">Më Shumë</span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qodef-woo-product-content">
                                                <div class="qodef-woo-product-content-top">
                                                    <h6 class="qodef-woo-product-title woocommerce-loop-product__title">Broshura</h6>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>5.00</span>
                                                    </span>
                                                </div>
                                                <div class="qodef-woo-product-categories"><a href="../../product-category/mugscups/index.php" rel="tag">Mugs &amp; cups</a>, <a href="../../product-category/packaging/index.php" rel="tag">Packaging</a></div>
                                            </div>
                                            <a href="../../product/paper-cup/index.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                        </div>
                                    </li>
                                    <li class="product type-product post-287 status-publish first instock product_cat-sticky-label product_tag-digital_print has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="qodef-woo-product-inner">
                                            <div class="qodef-woo-product-image">
                                                <img width="600" height="563" src="../../wp-content/uploads/2020/05/shop-image3-600x563.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="a" srcset="https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image3-600x563.jpg 600w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image3-300x281.jpg 300w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image3-768x720.jpg 768w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/05/shop-image3.jpg 800w"
                                                    sizes="(max-width: 600px) 100vw, 600px" />
                                                <div class="qodef-woo-product-image-inner">
                                                    <div class="qodef-woo-product-image-inner-2">
                                                        <div class="qodef-woo-product-button-holder"><a href="index564a.html?add-to-cart=287" data-quantity="1" class="button product_type_simple  ajax_add_to_cart qodef-btn-wave-hover" data-product_id="287" data-product_sku="014"
                                                                aria-label="Add &ldquo;Etiquette&rdquo; to your cart" rel="nofollow">Më Shumë<span class="qodef-btn-masked"><span class="qodef-m-text">Më Shumë</span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qodef-woo-product-content">
                                                <div class="qodef-woo-product-content-top">
                                                    <h6 class="qodef-woo-product-title woocommerce-loop-product__title">Katalog</h6>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>7.00</span>
                                                    </span>
                                                </div>
                                                <div class="qodef-woo-product-categories"><a href="../../product-category/sticky-label/index.php" rel="tag">Kartvizita</a></div>
                                            </div>
                                            <a href="../../product/etiquette/index.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                        </div>
                                    </li>
                                    <li class="product type-product post-1351 status-publish outofstock product_cat-catalogs product_cat-notebooks product_tag-design product_tag-digital_print has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="qodef-woo-product-inner">
                                            <div class="qodef-woo-product-image">
                                                <img width="600" height="563" src="../../wp-content/uploads/2020/06/shop-img-h2-1-600x563.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="a" srcset="https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-1-600x563.jpg 600w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-1-300x281.jpg 300w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-1-768x720.jpg 768w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-1.jpg 800w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /><span class="qodef-woo-product-mark qodef-out-of-stock">Sold</span>
                                                <div class="qodef-woo-product-image-inner">
                                                    <div class="qodef-woo-product-image-inner-2">
                                                        <div class="qodef-woo-product-button-holder"><a href="../../product/industrial/index.php" data-quantity="1" class="button product_type_simple qodef-btn-wave-hover" data-product_id="1351" data-product_sku="029" aria-label="Read more about &ldquo;Industrial&rdquo;"
                                                                rel="nofollow">Më Shumë<span class="qodef-btn-masked"><span class="qodef-m-text">Më Shumë</span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qodef-woo-product-content">
                                                <div class="qodef-woo-product-content-top">
                                                    <h6 class="qodef-woo-product-title woocommerce-loop-product__title">Menu</h6>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                    </span>
                                                </div>
                                                <div class="qodef-woo-product-categories"><a href="../../product-category/catalogs/index.php" rel="tag">Catalogs</a>, <a href="../../product-category/notebooks/index.php" rel="tag">Notebooks</a></div>
                                            </div>
                                            <a href="../../product/industrial/index.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                        </div>
                                    </li>
                                    <li class="product type-product post-1369 status-publish last instock product_cat-catalogs product_cat-notebooks product_tag-digital_print product_tag-screen_printing has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="qodef-woo-product-inner">
                                            <div class="qodef-woo-product-image">
                                                <img width="600" height="563" src="../../wp-content/uploads/2020/06/shop-img-h2-4-600x563.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="a" srcset="https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-4-600x563.jpg 600w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-4-300x281.jpg 300w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-4-768x720.jpg 768w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-img-h2-4.jpg 800w"
                                                    sizes="(max-width: 600px) 100vw, 600px" />
                                                <div class="qodef-woo-product-image-inner">
                                                    <div class="qodef-woo-product-image-inner-2">
                                                        <div class="qodef-woo-product-button-holder"><a href="indexb6f5.html?add-to-cart=1369" data-quantity="1" class="button product_type_simple  ajax_add_to_cart qodef-btn-wave-hover" data-product_id="1369" data-product_sku="032"
                                                                aria-label="Add &ldquo;Flag print&rdquo; to your cart" rel="nofollow">Më Shumë<span class="qodef-btn-masked"><span class="qodef-m-text">Më Shumë</span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="qodef-woo-product-content">
                                                <div class="qodef-woo-product-content-top">
                                                    <h6 class="qodef-woo-product-title woocommerce-loop-product__title">Blloqe</h6>
                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                                                    </span>
                                                </div>
                                                <div class="qodef-woo-product-categories"><a href="../../product-category/catalogs/index.php" rel="tag">Catalogs</a>, <a href="../../product-category/notebooks/index.php" rel="tag">Notebooks</a></div>
                                            </div>
                                            <a href="../../product/flag-print/index.php" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="qodef-grid-item qodef-page-sidebar-section qodef-col--3">
                            <aside id="qodef-page-sidebar">
                                <div class="widget widget_etchy_core_separator" data-area="shop-sidebar">
                                    <div class="qodef-shortcode qodef-m  qodef-separator clear ">
                                        <div class="qodef-m-line" style="border-color: #ffffff;border-style: dotted;margin-bottom: -2px"></div>
                                    </div>
                                </div>
                                <div class="widget widget_etchy_core_woo_taxonomy_items" data-area="shop-sidebar">
                                    <h5 class="qodef-widget-title">Produket e Fundit</h5>
                                    <div class="qodef-woo-taxonomy-items qodef-m">
                                        <ul>
                                            <li>
                                                <a href="../../product-category/acreditation/index.php">
                                                    <span class="qodef-svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20.998px" height="14.661px" viewBox="0 0 20.998 14.661" enable-background="new 0 0 20.998 14.661" xml:space="preserve">
                                                    <g>
                                                    <g>
                                                        <rect x="0.5" y="2.176" fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="18.16" height="11.985" />
                                                        <line fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9.535" y1="5.443" x2="16.531" y2="5.443" />
                                                        <line fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9.535" y1="7.252" x2="16.531" y2="7.252" />
                                                        <line fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9.535" y1="9.063" x2="16.531" y2="9.063" />
                                                        <path fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15.846,10.872
                                                            c0.229,0,0.457,0,0.686,0" />
                                                        <path fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M11.857,10.872
                                                            c0.794,0,1.588,0,2.383,0" />
                                                        <path fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M9.535,10.872
                                                            c0.246,0,0.492,0,0.738,0" />
                                                        <g>
                                                            <path fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M1.684,10.936
                                                                l0.354-1.438c0.061-0.246,0.252-0.439,0.498-0.502c0.354-0.09,0.84-0.186,1.156-0.277c0.17-0.049,0.285-0.205,0.285-0.381V7.973
                                                                L3.928,7.918c-0.129-0.145-0.213-0.324-0.24-0.517c0,0-0.129,0.001-0.148-0.116c-0.059-0.36-0.1-0.376-0.1-0.534
                                                                c0-0.157,0.059-0.194,0.129-0.155C3.557,6.557,3.535,6.473,3.531,6.354c-0.023-0.85,0.537-1.406,1.191-1.406
                                                                c0.656,0,1.216,0.557,1.191,1.406C5.911,6.473,5.891,6.557,5.879,6.596c0.07-0.039,0.129-0.002,0.129,0.155
                                                                c0,0.158-0.043,0.174-0.1,0.534C5.889,7.402,5.76,7.401,5.76,7.401C5.73,7.594,5.646,7.773,5.518,7.918L5.469,7.973v0.365
                                                                c0,0.176,0.116,0.332,0.285,0.381c0.318,0.092,0.803,0.188,1.157,0.277C7.158,9.059,7.35,9.252,7.41,9.498l0.352,1.438" />
                                                        </g>
                                                    </g>
                                                    <polygon fill="none" stroke="#A3A3A3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="2.338,0.5
                                                        2.338,2.176 18.66,2.176 18.66,12.484 20.498,12.484 20.498,0.5 	" />
                                                    </g>
                                                    </svg>
                                                    </span> Acreditation
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/billboard/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19.998px" height="19.996px" viewBox="0 0 19.998 19.996" enable-background="new 0 0 19.998 19.996" xml:space="preserve">
                                                <g id="billboards-vinyl">
                                                   <g>
                                                      <polyline fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         11.531,14.899 11.531,18.271 12.45,18.271 12.45,19.496 		" />
                                                      <polyline fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         9.08,14.899 9.08,18.271 8.16,18.271 8.16,19.496 		" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" x1="11.838" y1="18.271" x2="10.918" y2="18.271" />
                                                   </g>
                                                   <rect x="0.5" y="2.336" fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" width="18.998" height="11.031" />
                                                   <g>
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="4.79" y1="0.498" x2="4.79" y2="2.336" />
                                                      <path fill="#A2A2A2" d="M4.79,0.191c-0.508,0-0.919,0.412-0.919,0.919h1.838C5.709,0.603,5.298,0.191,4.79,0.191z" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9.999" y1="0.498" x2="9.999" y2="2.336" />
                                                      <path fill="#A2A2A2" d="M15.208,0.191c-0.508,0-0.919,0.412-0.919,0.919h1.839C16.128,0.603,15.716,0.191,15.208,0.191z" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15.208" y1="0.498" x2="15.208" y2="2.336" />
                                                      <path fill="#A2A2A2" d="M9.999,0.191c-0.508,0-0.919,0.412-0.919,0.919h1.838C10.918,0.603,10.507,0.191,9.999,0.191z" />
                                                   </g>
                                                   <g>
                                                      <g>
                                                         <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                            9.386,9.997 7.548,5.707 5.709,9.997 			" />
                                                         <line fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" x1="6.322" y1="8.465" x2="8.773" y2="8.465" />
                                                      </g>
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M12.144,9.997
                                                         h-1.226v-4.29h1.226c1.186,0,2.146,0.96,2.146,2.145l0,0C14.289,9.037,13.329,9.997,12.144,9.997z" />
                                                   </g>
                                                </g>
                                                <text transform="matrix(1 0 0 1 -518.501 -214.1563)" font-family="'MyriadPro-Regular'" font-size="12">18.998 px</text>
                                                <text transform="matrix(1 0 0 1 -518.501 -214.1563)" font-family="'MyriadPro-Regular'" font-size="12">18.998 px</text>
                                             </svg>
                                          </span> Billboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/car-branding/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.998px" height="17.998px" viewBox="0 0 17.998 17.998" enable-background="new 0 0 17.998 17.998" xml:space="preserve">
                                                <g id="vehicles_branding-vinyl_film-auto_wrap_1_">
                                                   <g id="van_1_">
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M6.258,2.419V3.79
                                                         c0,0.454-0.368,0.822-0.823,0.822h-1.37" />
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2.419,9.547H1.597
                                                         C0.991,9.547,0.5,9.057,0.5,8.45V7.799c0-0.645,0.207-1.273,0.591-1.792l3.248-4.395C4.855,0.913,5.674,0.5,6.544,0.5h9.857l0,0
                                                         c0.605,0,1.097,0.491,1.097,1.097v6.58" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.531" y1="6.806" x2="12.015" y2="6.806" />
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M12.015,6.806
                                                         c0.274-2.741-2.467-3.564-2.467-3.564s4.386-0.273,6.854-2.467L12.015,6.806z" />
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2.968,10.457
                                                         c-0.174-0.261-0.274-0.573-0.274-0.91c0-0.908,0.736-1.645,1.645-1.645c0.609,0,1.141,0.331,1.425,0.822" />
                                                   </g>
                                                   <g id="car_1_">
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10.096" y1="15.854" x2="5.983" y2="15.854" />
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15.579,15.854
                                                         h0.822c0.605,0,1.097-0.491,1.097-1.097V12.65c0-0.576-0.259-1.121-0.704-1.485l-1.781-1.458c-0.343-0.28-0.772-0.434-1.216-0.434
                                                         H8.639c-0.474,0-0.932,0.175-1.284,0.492l-2.077,1.87c-0.076,0.068-0.17,0.114-0.271,0.132l-3.6,0.636
                                                         C0.882,12.496,0.5,12.951,0.5,13.483v1.273c0,0.605,0.491,1.097,1.097,1.097h1.097" />
                                                      <circle fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="4.338" cy="15.854" r="1.645" />
                                                      <circle fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="13.934" cy="15.854" r="1.645" />
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M10.096,15.854
                                                         c0.274-2.742-2.468-3.839-2.468-3.839s4.387-0.274,6.854-2.468L10.096,15.854z" />
                                                   </g>
                                                </g>
                                             </svg>
                                          </span> Car branding
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/catalogs/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.998px" height="16.498px" viewBox="0 0 15.998 16.498" enable-background="new 0 0 15.998 16.498" xml:space="preserve">
                                                <g id="brochures">
                                                   <polyline fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                      4.25,13.998 0.5,13.998 0.5,0.5 9.749,0.5 9.749,2.5 	" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.249" y1="2.5" x2="9.749" y2="0.5" />
                                                   <g>
                                                      <rect x="6.249" y="2.5" fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="9.249" height="13.498" />
                                                      <g>
                                                         <rect x="8.499" y="4.499" fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" width="4.75" height="4.5" />
                                                         <line fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" x1="8.499" y1="10.999" x2="13.249" y2="10.999" />
                                                         <line fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" x1="8.499" y1="12.498" x2="13.249" y2="12.498" />
                                                         <line fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" x1="8.499" y1="13.998" x2="13.249" y2="13.998" />
                                                      </g>
                                                   </g>
                                                </g>
                                             </svg>
                                          </span> Catalogs
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/magazine/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16.999px" height="16.482px" viewBox="0 0 16.999 16.482" enable-background="new 0 0 16.999 16.482" xml:space="preserve">
                                                <g id="newspaper_2_">
                                                   <g>
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M13.2,11.53
                                                         l2.971-5.217c0.76-1.335,0.141-2.902-1.289-3.385L7.086,0.5L0.725,8.607l9.345,3.007c1.303,0.419,1.94,1.854,1.362,3.069l0,0.002
                                                         c-0.489,1.03-1.69,1.539-2.795,1.185L1.24,13.495c-0.413-0.134-0.705-0.512-0.737-0.956l0,0c-0.056-0.759,0.645-1.341,1.355-1.125
                                                         l5.802,2.003l0.581-0.976" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="0.72" y1="11.793" x2="1.854" y2="10.306" />
                                                   </g>
                                                   <g>
                                                      <polygon fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         3.872,7.68 5.557,5.443 8.167,6.294 6.632,8.633 		" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.61" y1="4.303" x2="8.329" y2="2.011" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8.518" y1="5.136" x2="10.199" y2="2.805" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8.366" y1="9.289" x2="12.158" y2="3.416" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10.52" y1="9.974" x2="14.128" y2="4.162" />
                                                   </g>
                                                </g>
                                             </svg>
                                          </span> Magazine
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/menus/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12.998px" height="17.298px" viewBox="0 0 12.998 17.298" enable-background="new 0 0 12.998 17.298" xml:space="preserve">
                                                <g>
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="7.978" y1="6.512" x2="11.244" y2="5.23" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="7.978" y1="8.259" x2="11.244" y2="6.977" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="7.978" y1="14.457" x2="11.244" y2="13.175" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1.821" y1="8.259" x2="5.254" y2="9.338" />
                                                   <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                      12.447,14.389 6.493,16.798 0.5,14.378 0.5,1.107 6.536,2.742 12.447,0.5 	" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.536" y1="2.742" x2="6.493" y2="16.798" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="12.498" y1="0.572" x2="12.454" y2="14.418" />
                                                </g>
                                             </svg>
                                          </span> Menus
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/mugscups/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.998px" height="14.781px" viewBox="0 0 15.998 14.781" enable-background="new 0 0 15.998 14.781" xml:space="preserve">
                                                <g id="merchandising_2_">
                                                   <g>
                                                      <path fill="none" stroke="#A1A0A0" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" d="M11.444,3.337
                                                         c2.238,0,4.054,1.815,4.054,4.054s-1.815,4.054-4.054,4.054v0.405c0,1.343-1.089,2.432-2.432,2.432h-6.08
                                                         c-1.344,0-2.433-1.089-2.433-2.432V1.311C0.5,0.862,0.863,0.5,1.311,0.5h9.323c0.447,0,0.811,0.362,0.811,0.811V3.337z" />
                                                      <path fill="none" stroke="#A1A0A0" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" d="M11.85,5.404
                                                         c-0.131-0.026-0.267-0.04-0.405-0.04v4.053c0.139,0,0.274-0.014,0.405-0.04c0.926-0.188,1.622-1.006,1.622-1.986
                                                         S12.775,5.592,11.85,5.404z" />
                                                      <polyline fill="none" stroke="#A1A0A0" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         2.933,4.147 6.58,4.147 6.58,10.634 2.933,10.634 		" />
                                                   </g>
                                                </g>
                                             </svg>
                                          </span> Mugs &amp; cups
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/notebooks/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11.998px" height="17.793px" viewBox="0 0 11.998 17.793" enable-background="new 0 0 11.998 17.793" xml:space="preserve">
                                                <g>
                                                   <rect x="0.5" y="2.677" fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10.998" height="14.616" />
                                                   <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                      4.086,1.864 4.086,0.5 0.5,2.677 9.948,0.537 9.948,2.677 	" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.189" y1="9.753" x2="9.742" y2="9.753" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.762" y1="12.594" x2="9.17" y2="12.594" />
                                                   <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.762" y1="6.892" x2="9.17" y2="6.892" />
                                                </g>
                                             </svg>
                                          </span> Notebooks
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/packaging/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.998px" height="18.998px" viewBox="0 0 18.998 18.998" enable-background="new 0 0 18.998 18.998" xml:space="preserve">
                                                <g id="boxes-package">
                                                   <g>
                                                      <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         17.627,10.08 17.627,14.724 7.177,18.498 7.177,15.015 		" />
                                                      <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         1.081,12.112 1.081,15.015 7.177,18.498 		" />
                                                      <polygon fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         17.917,6.016 7.177,7.757 8.338,12.112 18.498,9.789 		" />
                                                      <polygon fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         1.081,6.016 7.177,7.757 6.016,12.112 0.5,9.789 		" />
                                                   </g>
                                                   <g>
                                                      <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                         1.661,4.564 1.661,0.5 17.337,0.5 17.337,6.016 		" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" x1="7.177" y1="3.693" x2="7.177" y2="7.757" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" x1="7.177" y1="0.5" x2="7.177" y2="1.661" />
                                                   </g>
                                                   <g>
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="14.144" y1="0.5" x2="17.337" y2="3.403" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="11.531" y1="0.5" x2="17.337" y2="5.725" />
                                                   </g>
                                                </g>
                                             </svg>
                                          </span> Packaging
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/paper-bag/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.998px" height="19.598px" viewBox="0 0 15.998 19.598" enable-background="new 0 0 15.998 19.598" xml:space="preserve">
                                                <g id="shopping_bags">
                                                   <g>
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.699,6.199V3.8
                                                         c0-1.823,1.477-3.3,3.3-3.3c1.822,0,3.3,1.477,3.3,3.3v2.399" />
                                                      <line fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" x1="6.499" y1="4.399" x2="9.499" y2="4.399" />
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.699,4.399H1.1
                                                         L0.5,17.898c0,0.663,0.537,1.2,1.2,1.2h12.598c0.663,0,1.2-0.537,1.2-1.2l-0.6-13.499h-3.6" />
                                                      <circle fill="#464646" stroke="#A2A2A2" stroke-miterlimit="10" cx="4.699" cy="6.499" r="0.6" />
                                                      <circle fill="#464646" stroke="#A2A2A2" stroke-miterlimit="10" cx="11.298" cy="6.499" r="0.6" />
                                                   </g>
                                                   <g>
                                                      <g>
                                                         <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                            7.399,14.298 5.6,10.099 3.8,14.298 			" />
                                                         <line fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" x1="4.399" y1="12.798" x2="6.799" y2="12.798" />
                                                      </g>
                                                      <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M10.099,14.298
                                                         h-1.2v-4.2h1.2c1.16,0,2.1,0.94,2.1,2.1l0,0C12.198,13.358,11.259,14.298,10.099,14.298z" />
                                                   </g>
                                                </g>
                                             </svg>
                                          </span> Paper bag
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../../product-category/kartvizita/index.php">
                                                    <span class="qodef-svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19.998px" height="20.059px" viewBox="0 0 19.998 20.059" enable-background="new 0 0 19.998 20.059" xml:space="preserve">
                                                <g>
                                                   <path fill="none" stroke="#A2A2A2" stroke-miterlimit="10" d="M11.969,19.29c-1.242-2.275-0.953-5.965,1.757-8.284
                                                      c1.567-1.341,4.095-1.762,5.761-1.821" />
                                                   <path fill="none" stroke="#A2A2A2" stroke-miterlimit="10" d="M19.333,9.506l-7.13,9.583c-0.129,0.173-0.318,0.289-0.53,0.326
                                                      c-0.974,0.17-1.992,0.194-3.032,0.041c-4.781-0.701-8.313-4.941-8.134-9.77c0.202-5.444,4.884-9.576,10.262-9.158
                                                      c4.612,0.359,8.2,3.945,8.724,8.372C19.518,9.116,19.462,9.333,19.333,9.506z" />
                                                   <path fill="#A2A2A2" d="M7.666,6.913v1.608h0.51l0.312-0.957C8.488,7.56,8.489,7.557,8.49,7.554h1.016v4.24
                                                      c0,0.016-0.004,0.024-0.011,0.032c-0.01,0.012-0.016,0.014-0.021,0.015L8.773,11.97v0.505h2.506V11.97l-0.699-0.128
                                                      c-0.01-0.002-0.018-0.006-0.028-0.019c-0.003-0.004-0.009-0.009-0.009-0.029v-4.24l1.027,0c0,0.002,0.002,0.005,0.002,0.008
                                                      l0.313,0.958h0.509V6.913H7.666z" />
                                                </g>
                                             </svg>
                                          </span> Kartvizita
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget widget_etchy_core_woo_taxonomy_items" data-area="shop-sidebar">
                                    <h5 class="qodef-widget-title">Kategoritë</h5>
                                    <div class="qodef-woo-taxonomy-items qodef-m">
                                        <ul>
                                            <li>
                                                <a href="index.php">
                                                    <span class="qodef-svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21.997px" height="15.95px" viewBox="0 0 21.997 15.95" enable-background="new 0 0 21.997 15.95" xml:space="preserve">
                                                            <g>
                                                            <g>
                                                                <rect x="5.324" y="10.835" fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" width="11.349" height="4.615" />
                                                                <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.508" y1="12.333" x2="15.378" y2="12.333" />
                                                                <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="6.508" y1="13.864" x2="15.378" y2="13.864" />
                                                            </g>
                                                            <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3.43" y1="11.372" x2="3.797" y2="11.372" />
                                                            <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.03" y1="11.372" x2="2.397" y2="11.372" />
                                                            <g>
                                                                <rect x="5.625" y="0.5" fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" width="10.747" height="5.62" />
                                                            </g>
                                                            <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M20.74,6.12H1.257
                                                                C0.839,6.12,0.5,6.459,0.5,6.876v5.149c0,0.418,0.339,0.757,0.757,0.757h4.067v-1.947h11.349v1.947h4.067
                                                                c0.418,0,0.757-0.339,0.757-0.757V6.876C21.497,6.459,21.158,6.12,20.74,6.12z" />
                                                            <g>
                                                                <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.82,4.252
                                                                    h-1.448V6.12h1.729V4.532C18.101,4.378,17.975,4.252,17.82,4.252z" />
                                                                <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.066,4.252
                                                                    c-0.155,0-0.28,0.126-0.28,0.28V6.12h1.839V4.252H4.066z" />
                                                            </g>
                                                            </g>
                                                        </svg>
                                                    </span> Print Digital
                                                </a>
                                            </li>

                                            <li>
                                                <a href="../large_prints/index.php">
                                                    <span class="qodef-svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20.996px" height="15.582px" viewBox="0 0 20.996 15.582" enable-background="new 0 0 20.996 15.582" xml:space="preserve">
                                                            <g>
                                                            <path fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" d="M4.444,6.325v8.757h9.135
                                                                c2.429,0,4.397-1.969,4.397-4.397V6.325" />
                                                            <path fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" d="M13.408,15.082
                                                                c1.332-0.533,1.58-2.894,1.58-2.894s2.094,0.152,2.988-1.504" />
                                                            <polygon fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" points="13.514,11.132 11.47,9.354
                                                                10.825,9.89 9.4,8.466 6.967,11.132 	" />
                                                            <path fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" d="M19.725,3.325
                                                                c0-1.561,0.346-2.825,0.771-2.825H1.271C0.846,0.5,0.5,1.765,0.5,3.325S0.846,6.15,1.271,6.15h19.225
                                                                C20.07,6.15,19.725,4.886,19.725,3.325z" />
                                                            <path fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" d="M20.496,6.156V6.15H1.271
                                                                C0.846,6.15,0.5,7.421,0.5,8.981c0,1.56,0.346,2.818,0.771,2.818h3.173V6.325h13.532v4.359c0,0.386-0.05,0.76-0.143,1.115h2.615
                                                                c-0.404-0.091-0.725-1.317-0.725-2.818C19.725,7.421,20.07,6.156,20.496,6.156z" />
                                                            </g>
                                                        </svg>
                                                    </span> Printime në Formate të Mëdha
                                                </a>
                                            </li>

                                            <li>
                                                <a href="../promotions_print/index.php">
                                                    <span class="qodef-svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.998px" height="17.998px" viewBox="0 0 17.998 17.998" enable-background="new 0 0 17.998 17.998" xml:space="preserve">
                                                            <g id="screen_printing">
                                                            <g>
                                                                <path fill="none" stroke="#A2A2A2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" d="M3.241,12.837
                                                                    V5.709H0.5V1.871L6.258,0.5l0,0c0,1.508,1.233,2.741,2.741,2.741l0,0c1.508,0,2.741-1.233,2.741-2.741l0,0l5.758,1.371v3.838
                                                                    h-2.741v0.549" />
                                                            </g>
                                                            <g>
                                                                <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M10.644,13.386
                                                                    V8.45h1.371c0.151,0,0.274-0.122,0.274-0.273l0,0c0-0.151,0.122-0.274,0.274-0.274h0.595c0.146,0,0.285,0.058,0.388,0.161
                                                                    l0.228,0.227c0.103,0.103,0.242,0.16,0.388,0.16h0.368c0.146,0,0.285-0.058,0.388-0.16l0.066-0.066
                                                                    c0.206-0.206,0.484-0.321,0.775-0.321h0.643c0.605,0,1.097,0.491,1.097,1.097v7.402c0,0.605-0.491,1.097-1.097,1.097h-0.869
                                                                    c-0.146,0-0.285-0.058-0.388-0.161l-0.228-0.227c-0.103-0.103-0.242-0.16-0.388-0.16h-0.368c-0.146,0-0.285,0.058-0.388,0.16
                                                                    l-0.228,0.227c-0.103,0.104-0.242,0.161-0.388,0.161h-0.595c-0.152,0-0.274-0.123-0.274-0.274l0,0
                                                                    c0-0.151-0.123-0.273-0.274-0.273h-1.371V13.386" />
                                                                <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="12.289" y1="8.177" x2="12.289" y2="17.224" />
                                                                <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="14.757" y1="8.45" x2="14.757" y2="12.015" />
                                                                <line fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="14.757" y1="15.854" x2="14.757" y2="16.95" />
                                                            </g>
                                                                <path fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M8.999,16.95H4.338
                                                                c-0.605,0-1.097-0.491-1.097-1.097l0,0c0-0.606,0.491-1.097,1.097-1.097h3.017c0.454,0,0.822-0.368,0.822-0.823l0,0
                                                                c0-0.454-0.368-0.822-0.822-0.822h-0.96c-0.53,0-0.96-0.43-0.96-0.96l0,0c0-0.529,0.43-0.959,0.96-0.959H7.08
                                                                c0.605,0,1.097-0.491,1.097-1.097l0,0c0-0.514,0.257-0.994,0.684-1.278l0.139-0.093" />
                                                            </g>
                                                        </svg>
                                                    </span> Materiale Promocioni
                                                </a>
                                            </li>

                                            <li>
                                                <a href="../design/index.php">
                                                    <span class="qodef-svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.998px" height="18.998px" viewBox="0 0 18.998 18.998" enable-background="new 0 0 18.998 18.998" xml:space="preserve">
                                                            <g id="fonts-typographies">
                                                            <path fill="none" stroke="#A2A2A2" stroke-linejoin="round" stroke-miterlimit="10" d="M17.65,11.821h-4.494l-1.393-1.161H9.476
                                                                c-0.468,0-0.848,0.379-0.848,0.847v6.144c0,0.468,0.38,0.847,0.848,0.847h8.175c0.469,0,0.848-0.379,0.848-0.847v-4.982
                                                                C18.498,12.201,18.119,11.821,17.65,11.821z" />
                                                            <g>
                                                                <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                                    14.387,11.821 10.37,0.5 6.887,0.5 0.5,18.498 4.405,18.498 6.095,13.854 6.887,13.854 		" />
                                                                <polyline fill="none" stroke="#A2A2A2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                                                    10.42,10.663 8.628,5.518 6.914,10.66 		" />
                                                            </g>
                                                            </g>
                                                        </svg>
                                                    </span> Design
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget_etchy_core_separator" data-area="shop-sidebar">
                                    <div class="qodef-shortcode qodef-m  qodef-separator clear ">
                                        <div class="qodef-m-line" style="border-color: #ffffff;margin-top: 4px;margin-bottom: -2px"></div>
                                    </div>
                                </div>

                                <!-- <div class="widget widget_media_image" data-area="shop-sidebar">
                                    <a href="../../right-sidebar/index.php"><img width="313" height="256" src="../../wp-content/uploads/2020/06/shop-sidebar-banner-img-1.jpg" class="image wp-image-2871  attachment-full size-full" alt="a" style="max-width: 100%; height: auto;" srcset="https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-sidebar-banner-img-1.jpg 313w, https://etchy.qodeinteractive.com/wp-content/uploads/2020/06/shop-sidebar-banner-img-1-300x245.jpg 300w"
                                            sizes="(max-width: 313px) 100vw, 313px" /></a>
                                </div> -->
                            </aside>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection

</html>
