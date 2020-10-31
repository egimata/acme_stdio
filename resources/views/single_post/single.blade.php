<title>
    {{$single->title}}
</title>

@extends('layouts.mainlayout')

@section('content')


<div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--left qodef-vertical-alignment--header-bottom">
    <div class="qodef-m-inner">
        <div class="qodef-m-content qodef-content-grid ">
            <h5 class="qodef-m-title entry-title">
                Catalogs
            </h5>
            <div itemprop="breadcrumb" class="qodef-breadcrumbs"><a itemprop="url" class="qodef-breadcrumbs-link" href="../../index.html"><span itemprop="title">Home</span></a><span class="qodef-breadcrumbs-separator"></span><a itemprop="url" class="qodef-breadcrumbs-link" href="../../portfolio-category/design/index.html"><span itemprop="title">Design</span></a><span class="qodef-breadcrumbs-separator"></span><span itemprop="title" class="qodef-breadcrumbs-current">Catalogs</span></div>
        </div>
    </div>
</div>
<div id="qodef-page-inner" class="qodef-content-grid">
    <main id="qodef-page-content" class="qodef-grid qodef-layout--template ">
        <div class="qodef-grid-inner clear">
            <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
                <div class="qodef-portfolio qodef-m qodef-portfolio-single qodef-layout--gallery-small">
                    <article class="qodef-portfolio-single-item qodef-e post-2286 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-design portfolio-category-digital-print portfolio-category-unique portfolio-tag-gifts portfolio-tag-logo portfolio-tag-popular">
                        <div class="qodef-e-inner">
                            <div class="qodef-e-content qodef-grid qodef-layout--template ">
                                <div class="qodef-grid-inner clear">
                                    <div class="qodef-grid-item qodef-col--8">
                                        <div class="qodef-media">
                                            <div class="qodef-e qodef-magnific-popup qodef-popup-gallery qodef-grid qodef-layout--columns qodef-responsive--predefined qodef--no-bottom-space  qodef-col-num--3 qodef-gutter--small">
                                                <div class="qodef-grid-inner clear qodef-magnific-popup qodef-popup-gallery">

                                                    @foreach ($single as $item)
                                                        <a itemprop="image" class="qodef-popup-item qodef-grid-item" href="{{asset('storage/'.$item->image)}}" data-type="image" title="portfolio-img2">
                                                        <img width="800" height="750" src="{{asset('storage/'.$item->image)}}" class="attachment-full size-full" alt="a" sizes="(max-width: 800px) 100vw, 800px" />
                                                        </a>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qodef-grid-item qodef-col--4">
                                        <div class="qodef-e qodef-portfolio-content">
                                            <div data-elementor-type="wp-post" data-elementor-id="2286" class="elementor elementor-2286" data-elementor-settings="[]">
                                                <div class="elementor-inner">
                                                    <div class="elementor-section-wrap">
                                                        <section class="elementor-element elementor-element-477a96a elementor-section-boxed elementor-section-height-default elementor-section-height-default qodef-elementor-content-no elementor-section elementor-top-section" data-id="477a96a" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-196dfd7 elementor-column elementor-col-100 elementor-top-column" data-id="196dfd7" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-d2a7871 elementor-widget elementor-widget-etchy_core_section_title" data-id="d2a7871" data-element_type="widget" data-widget_type="etchy_core_section_title.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left  qodef--icon-pack qodef--has-appear">
                                                                                            <h2 class="qodef-m-title">
                                                                                                <span class="qodef-m-title-line">paper <span class="qodef-last-word">cups<span class="qodef-m-icon-wrapper"><span class="qodef-shortcode qodef-m  qodef-icon-holder qodef-size--default qodef-layout--normal"> </span></span></span></span>
                                                                                            </h2>
                                                                                            <p class="qodef-m-text" style="margin-top: 15px">Te dicant atomorum est, eus pri nostro malorum feugiat. Vel solum putent et, tota minim choro eos ex. An epicurei salutandi constituto e qui, possim ocurreret complectitur usu at, cum natum dolorem cum minimum ei. Quo at numquam contentiones.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="qodef-portfolio-info">
                                            <div class="qodef-e qodef-info--info-items">
                                                <h6 class="qodef-e-title">Client: </h6>
                                                <a class="qodef-e-info-item qodef--link" href="https://qodeinteractive.com/" target="_blank">
                                                Qode Interactive </a>
                                            </div>
                                            <div class="qodef-e qodef-info--date">
                                                <h6 class="qodef-e-title">Date: </h6>
                                                <p itemprop="dateCreated" class="entry-date updated">June 5, 2020</p>
                                                <meta itemprop="interactionCount" content="UserComments: 0" />
                                            </div>
                                            <div class="qodef-e qodef-info--category">
                                                <h6 class="qodef-e-title">Category: </h6>
                                                <div class="qodef-e-categories">
                                                    <a itemprop="url" class="qodef-e-category" href="../../portfolio-category/design/index.html">
                                                    Design</a>, <a itemprop="url" class="qodef-e-category" href="../../portfolio-category/digital-print/index.html">
                                                    Digital print</a>, <a itemprop="url" class="qodef-e-category" href="../../portfolio-category/unique/index.html">
                                                    Unique</a>
                                                </div>
                                            </div>
                                            <div class="qodef-e qodef-inof--social-share">
                                                <div class="qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--text ">
                                                    <span class="qodef-social-title">Share:</span>
                                                    <ul class="qodef-shortcode-list">
                                                        <li class="qodef-facebook-share"> <a itemprop="url" class="qodef-share-link" href="#" onclick="window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fetchy.qodeinteractive.com%2Fportfolio-item%2Fcatalogs%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);"> <span class="qodef-social-network-text">fb</span> </a></li>
                                                        <li class="qodef-twitter-share"> <a itemprop="url" class="qodef-share-link" href="#" onclick="window.open(&#039;https://twitter.com/intent/tweet?text=paper+cups+Te+dicant+atomorum+est%2C+eus+pri+nostro+malorum+feugiat.+Vel+solum+putent+et%2C+tota++via+%40QodeInteractivehttps://etchy.qodeinteractive.com/portfolio-item/catalogs/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);"> <span class="qodef-social-network-text">tw</span> </a></li>
                                                        <li class="qodef-pinterest-share"> <a itemprop="url" class="qodef-share-link" href="#" onclick="popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fetchy.qodeinteractive.com%2Fportfolio-item%2Fcatalogs%2F&amp;description=Catalogs&amp;media=https%3A%2F%2Fetchy.qodeinteractive.com%2Fwp-content%2Fuploads%2F2020%2F06%2Fport-featured-img-6.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;"> <span class="qodef-social-network-text">pin</span> </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div id="qodef-single-portfolio-navigation" class="qodef-m">
                        <div class="qodef-m-inner">
                            <a itemprop="url" class="qodef-m-nav qodef--prev" href="../logo/index.html">
                            <span class="qodef-icon-linea-icons icon-arrows-left qodef-m-nav-icon"></span> </a>
                            <a itemprop="url" class="qodef-m-nav qodef--next" href="../business-cards/index.html">
                            <span class="qodef-icon-linea-icons icon-arrows-right qodef-m-nav-icon"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
@endsection
