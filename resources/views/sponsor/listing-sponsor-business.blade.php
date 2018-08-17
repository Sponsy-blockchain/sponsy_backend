@extends('layouts.html')
@section('header_sidebar')
    @include('layouts.header')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
@section('title','Sponsor')
@section('content')
    <main class="dashboard">
        <div class="dashboard__container dashboard__container_without-sidebar listing-sponsor">
            <form id="listing-sponsor-business">
                <div class="dashboard__row">
                    <h2 class="dashboard__section-header">Listing sponsor business</h2>
                    <div class="dashboard__item">
                        <label class="label-unify">Enter the title to be seen as sponsor</label>
                        <input class="input-unify" type="text" value="Adidas"/>
                        <label class="label-unify">Enter the brief company’s quote</label>
                        <input class="input-unify" type="text" value="International sportswear brand. largest sportswear manufacturer in Europe"/>
                    </div>
                    <div class="dashboard__item sponsor-buisness">
                        <div class="sponsor-buisness__logo">
                            <p class="sponsors-buisness__hint label-unify">Chose a sponsor’s logo</p><img class="sponsor-buisness__image" src="/images/photo-empty.png" alt="Logo"/>
                        </div>
                        <div class="sponsor-buisness__content">
                            <h3 class="sponsor-buisness__title">Adidas</h3>
                            <p class="sponsor-buisness__description">International sportswear brand. largest sportswear manufacturer in Europe</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard__row">
                    <h2 class="dashboard__section-header">Details</h2>
                    <div class="dashboard__item sponsor-detail">
                        <label class="label-unify" for="details-1-textarea">Description shall tell more about your company, its history and development.</label>
                        <textarea class="textarea-unify" id="details-1-textarea" name="details-1" cols="10" rows="5" placeholder="">Adidas is a multinational corporation, founded and headquartered in Herzogenaurach, Germany, that designs and manufactures shoes, clothing and accessories. It is the largest sportswear manufacturer in Europe, and the second largest in the world, after Nike. It is the holding company for the Adidas Group.</textarea>
                    </div>
                    <div class="dashboard__item sponsor-detail">
                        <label class="label-unify" for="details-2-textarea">Tell us more about the way you approach sponsorship business.</label>
                        <textarea class="textarea-unify" id="details-2-textarea" name="details-2" cols="10" rows="5" placeholder="">Adidas has numerous major kit deals with football clubs worldwide, including their main sponsor Bayern Munich. Other clubs include Real Madrid, Manchester United, River Plate, Milan and Juventus. Adidas has sponsored numerous players, including Lionel Messi, Zinedine Zidane, Kaká, David Beckham, Steven Gerrard.</textarea>
                    </div>
                    <div class="dashboard__item sponsor-category">
                        <p class="label-unify">Specify the industries with which you’d love to work more</p>
                        <div class="sponsor-category__tag added">Individuals in sports</div>
                        <div class="sponsor-category__tag added">Sport events</div>
                        <div class="sponsor-category__tag">Add another category…</div>
                    </div>
                    <div class="dashboard__item sponsor-select">
                        <p class="label-unify">Select your business indusrty from the list below</p>
                    </div>
                </div>
                <div class="dashboard__row">
                    <div class="list-new-asset__direct">
                        <a class="list-new-asset__button list-new-asset__button_cancel" style="text-decoration: none;" href="/sponsor">Cancel</a>
                        <input class="list-new-asset__button list-new-asset__button_confirm" type="submit" value="Confirm"/>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection