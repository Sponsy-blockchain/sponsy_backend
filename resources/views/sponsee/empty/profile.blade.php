@extends('layouts.header_sidebar')
@section('title','Sponsee')
@section('content')
    <main class="dashboard">
        <div class="dashboard__container">
            <div class="dashboard__header">
                <h1 class="dashboard__title">My business</h1><a class="dashboard__edit" href="/sponsee/edit">edit</a>
            </div>
            <div class="dashboard__row dashboard__row_first">
                <div class="dashboard__item dashboard-brand">
                    <div class="dashboard-brand__image">	<img width="200 200" src="/uploads/{{$info->logo}}" alt="Brand"/></div>
                    <div class="dashboard-brand__content">
                        <h2 class="dashboard-brand__header">{{$info->title}}</h2>
                        <div class="dashboard-brand__text">
                            <p>{{$info->oneLiner}}</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard__item dashboard-rating">
                    <p class="dashboard-rating__header">Rating</p>
                    <p class="dashboard-rating__text">{{$info->rating}}</p>
                </div>
                <div class="dashboard__item dashboard-arrangements">
                    <p class="dashboard-arrangements__header">0</p>
                    <p class="dashboard-arrangements__text">Total number of my arrangements</p>
                </div>
                <div class="dashboard__item dashboard-foundation">
                    <p class="dashboard-foundation__header">2</p>
                    <p class="dashboard-foundation__text">Number of sponsorship assets</p>
                </div>
            </div>
            <div class="dashboard__row">
                <div class="dashboard__column">
                    <div class="dashboard__item dashboard-financials">
                        <h2 class="dashboard-financials__header">Financials</h2>
                        <div class="dashboard-financials__chart"><img src="images/sponsee/graph1.png"/></div>
                        <div class="dashboard-financials__values">
                            <div class="dashboard-financials__item">
                                <div class="dashboard-financials__spend">Total spend</div>
                                <div class="dashboard-financials__value">YTD</div>
                                <div class="dashboard-financials__spons">SPONS 4k</div>
                            </div>
                            <div class="dashboard-financials__item">
                                <div class="dashboard-financials__spend">Total spend</div>
                                <div class="dashboard-financials__value">Last 12 month</div>
                                <div class="dashboard-financials__spons">SPONS 400k</div>
                            </div>
                            <div class="dashboard-financials__item">
                                <div class="dashboard-financials__spend">Total spend</div>
                                <div class="dashboard-financials__value">Last month</div>
                                <div class="dashboard-financials__spons">SPONS 20k</div>
                            </div>
                        </div>
                        <div class="dashboard-financials__chart-point hidden"></div>
                        <div class="dashboard-financials__chart-description hidden">
                            <p><span class="dashboard-financials__chart-value-1">5240</span><span class="dashboard-financials__chart-value-2">-3.24%</span></p>
                            <p class="dashboard-financials__chart-value-3">SPONS</p>
                        </div>
                    </div>
                    <div class="dashboard__item dashboard-textbox">
                        <h2 class="dashboard-textbox__header">What should sponsors expect</h2>
                        <div class="dashboard-textbox__content">
                            <p>{{$info->what_should_sponsors_expect}}</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard__column">
                    <div class="dashboard__item dashboard-textbox">
                        <h2 class="dashboard-textbox__header">Description</h2>
                        <div class="dashboard-textbox__content">
                            <p>{{$info->description}}</p>
                        </div>
                    </div>
                    <div class="dashboard__item dashboard-textbox">
                        <h2 class="dashboard-textbox__header">What we offer</h2>
                        <div class="dashboard-textbox__content">
                            <p>{{$info->what_we_offer}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard__row">
                <div class="dashboard__item dashboard-statistic">
                    <h2 class="dashboard-statistic__header">Sponsorship statistics</h2>
                    <div class="dashboard-statistic__container">
                        <div class="dashboard-statistic__item">
                            <div class="dashboard-statistic__chart"><img class="dashboard-statistic__image" src="images/ellipse-1.png" alt="Chart1"/></div>
                            <div class="dashboard-statistic__info">
                                <h3 class="dashboard-statistic__title">Industry distribution</h3>
                                <ul class="dashboard-statistic__list">
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_curious-blue">Food&amp;Beverage</li>
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_sunset-orange">Lifestyle</li>
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_heliotrope">Luxury travel</li>
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_aquamarine">Coach, Dior, fashion, other…</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dashboard-statistic__item">
                            <div class="dashboard-statistic__chart"><img class="dashboard-statistic__image" src="images/ellipse-2.png" alt="Chart2"/></div>
                            <div class="dashboard-statistic__info">
                                <h3 class="dashboard-statistic__title">Funding distribution</h3>
                                <ul class="dashboard-statistic__list">
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_curious-blue">&lt; $50k</li>
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_sunset-orange">$50k - $150k</li>
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_heliotrope ">$150k - $500k</li>
                                    <li class="dashboard-statistic__list-item dashboard-statistic__list-item_aquamarine">&gt; $500k</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard__row justify">
                <h2 class="dashboard__section-header">My Sponsorship Assets</h2>
                <div class="dashboard__item dashboard-assets">
                    <div class="dashboard-assets__title">No assets have been listed yet</div><img class="dashboard-assets__image" src="images/blank.png" alt="Blank"/>
                    <div class="dashboard-assets__text">You won’t appear in Sponsees tab before you list at least 1 asset</div>
                    <a href="/sponsee/create"><div class="dashboard-assets__button">List new asset</div></a>
                </div>
            </div>
            <div class="dashboard__row">
                <h2 class="dashboard__section-header">Return On Investment</h2>
                <div class="dashboard__item return-on">
                    <h3 class="return-on__title">Average 6 months ROI delivered</h3>
                    <div class="return-on__content"><img class="return-on__image" src="images/sponsee/graph.png" alt="Graph">
                        <div class="return-on__info">
                            <p class="return-on__description">Average ROI</p>
                            <p class="return-on__time">6 month</p>
                            <p class="return-on__value">46%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard__row dashboard-platform-section">
                <h2 class="dashboard__section-header">Platform statistics</h2>
                <div class="dashboard__item dashboard-platform">
                    <div class="dashboard-platform__content">
                        <p class="dashboard-platform__value">40</p>
                        <p class="dashboard-platform__text">Number of sponsors on the platform</p>
                    </div>
                    <div class="dashboard-platform__image"><img src="images/sponsor_platform.png"/></div>
                </div>
                <div class="dashboard__item dashboard-platform">
                    <div class="dashboard-platform__content">
                        <p class="dashboard-platform__value">33</p>
                        <p class="dashboard-platform__text">Number of sponsees on the platform</p>
                    </div>
                    <div class="dashboard-platform__image"><img src="images/handshake_platform.png"/></div>
                </div>
                <div class="dashboard__item dashboard-platform">
                    <div class="dashboard-platform__content">
                        <p class="dashboard-platform__value">100</p>
                        <p class="dashboard-platform__text">Number of assets on the platform</p>
                    </div>
                    <div class="dashboard-platform__image"><img src="images/network_platform.png"/></div>
                </div>
            </div>
        </div>
    </main>
@endsection