
@section('title')
    {{ $subpost->title }}
@endsection

@extends('layouts.mainlayout')

@section('content')

<body class="archive tax-portfolio-category term-authentic term-99 theme-etchy qode-framework-1.1.2 woocommerce-no-js qodef-age-verification--opened qodef-back-to-top--enabled  qodef-content-grid-1400 qodef-header--standard qodef-header-appearance--none qodef-mobile-header--standard qodef-drop-down-second--full-width qodef-drop-down-second--animate-height etchy-core-1.0 etchy-1.0 qodef-header-standard--left qodef-search--covers-header elementor-default" itemscope itemtype="https://schema.org/WebPage">
        <div id="qodef-page-outer">
            <div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
                <div class="qodef-m-inner">
                    <div class="qodef-m-content qodef-content-grid ">
                        <h5 class="qodef-m-title entry-title">
                            {{$subpost->title}}
                        </h5>
                        <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="../../index.html"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><a itemprop="url" class="qodef-breadcrumbs-link" href="../custom/index.html"><span itemprop="title">Custom</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">Authentic</span></div>
                    </div>
                </div>
            </div>
            <div id="qodef-page-inner" class="qodef-content-grid">
                <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
                    <div class="qodef-grid-inner clear">
                        <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                            <div class="qodef-shortcode qodef-m  qodef-portfolio-list qodef-item-layout--info-below qodef-grid qodef-layout--columns  qodef-gutter--normal qodef-col-num--3 qodef-item-layout--info-below   qodef--no-bottom-space qodef-pagination--off qodef-responsive--predefined qodef-hover-animation--" data-options="{&quot;plugin&quot;:&quot;etchy_core&quot;,&quot;module&quot;:&quot;post-types\/portfolio\/shortcodes&quot;,&quot;shortcode&quot;:&quot;portfolio-list&quot;,&quot;post_type&quot;:&quot;portfolio-item&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;3&quot;,&quot;columns_responsive&quot;:&quot;predefined&quot;,&quot;columns_1440&quot;:&quot;3&quot;,&quot;columns_1366&quot;:&quot;3&quot;,&quot;columns_1024&quot;:&quot;3&quot;,&quot;columns_768&quot;:&quot;3&quot;,&quot;columns_680&quot;:&quot;3&quot;,&quot;columns_480&quot;:&quot;3&quot;,&quot;space&quot;:&quot;normal&quot;,&quot;posts_per_page&quot;:&quot;-1&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;portfolio-category&quot;,&quot;tax_slug&quot;:&quot;authentic&quot;,&quot;layout&quot;:&quot;info-below&quot;,&quot;hover_animation_info-on-hover&quot;:&quot;fade-in&quot;,&quot;title_tag&quot;:&quot;H5&quot;,&quot;custom_padding&quot;:&quot;no&quot;,&quot;featured_images_only&quot;:&quot;yes&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;object_class_name&quot;:&quot;EtchyCorePortfolioListShortcode&quot;,&quot;taxonomy_filter&quot;:&quot;portfolio-category&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;portfolio-category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;authentic&quot;}]},&quot;space_value&quot;:15}">
                                <div class="qodef-grid-inner clear">
                                    
                                    @foreach ($subposts as $subpost)


                                    <!-- Product -->
                                    <article class="qodef-e qodef-grid-item qodef-item--full post-2199 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-authentic portfolio-category-custom portfolio-tag-advertising portfolio-tag-business">
                                        <div class="qodef-e-inner">
                                            <div class="qodef-e-image">
                                                <div class="qodef-e-media-image"> <a itemprop="url" href="{{ route('single_post.single', $subpost->id) }}"> 
                                                    <img width="800" height="750" src="{{asset('storage/'.$subpost->image)}}" class="attachment-full size-full wp-post-image" alt="a"   /> </a> </div>
                                            </div>
                                            <div class="qodef-e-content">
                                                <div class="qodef-e-info-category"> <a itemprop="url" class="qodef-e-category" href="index.html"> {{$subpost->title}}</a>, <a itemprop="url" class="qodef-e-category" href="../custom/index.html"> Custom</a></div>
                                                <H5 itemprop="name" class="qodef-e-title entry-title"> <a itemprop="url" class="qodef-e-title-link" href="../../portfolio-item/custom-design/index.html"> {{ $subpost->title }}	</a></H5>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Product End -->

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


@endsection



