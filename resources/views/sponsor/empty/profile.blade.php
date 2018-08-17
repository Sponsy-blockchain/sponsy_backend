@extends('layouts.header_sidebar')
@section('title','Sponsor')
@section('content')
    <main class="dashboard">
        <div class="dashboard__container">
            <div class="dashboard__row">
                <h2 class="dashboard__section-header">Dashboard</h2>
                <div class="dashboard__item dashboard-welcome">
                    <div class="dashboard-welcome__title">Welcome Bob Cowe!</div>
                    <div class="dashboard-welcome__text">Thank you for your registration. Please consider <br>
                        listing your business on the platform.
                    </div>
                </div>
                <div class="dashboard__item dashboard-arrangements">
                    <p class="dashboard-arrangements__header">0</p>
                    <p class="dashboard-arrangements__text">Total number of my arrangements</p>
                </div>
                <div class="dashboard__item dashboard-foundation">
                    <p class="dashboard-foundation__header">0</p>
                    <p class="dashboard-foundation__text">Total funded</p>
                </div>
            </div>
            <div class="dashboard__row">
                <h2 class="dashboard__section-header">My business</h2>
                <div class="dashboard__item dashboard-assets">
                    <div class="dashboard-assets__title">No assets have been listed yet</div><img class="dashboard-assets__image" src="images/blank.png" alt="Blank"/>
                    <div class="dashboard-assets__text">List your business using button below</div>
                    <a href="/sponsor/create"><div class="dashboard-assets__button">List my business</div></a>
                </div>
            </div>
            <div class="dashboard__row dashboard__row_platform">
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