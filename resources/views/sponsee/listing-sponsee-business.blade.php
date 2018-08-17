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
            <form method="POST" id="listing-sponsor-business" enctype="multipart/form-data">
                @csrf()
                <div class="dashboard__row">
                    <h2 class="dashboard__section-header">Listing sponsee business</h2>
                    <div class="dashboard__item">
                        <label class="label-unify">Enter the title to be seen as sponsee</label>
                        <input class="input-unify" type="text" name="title" value="Nice Jazz Festival"/>
                        <label class="label-unify">Enter the brief company’s quote</label>
                        <input class="input-unify" type="text" name="oneLiner" value="The first jazz festival of international significance"/>
                    </div>
                    <div class="dashboard__item sponsor-buisness">
                        <div class="sponsor-buisness__logo">
                            <p class="sponsors-buisness__hint label-unify">Chose a sponsee logo</p>
                            <a href="javascript:showFrm()">
                                <img id="imgLogo" class="sponsor-buisness__image" src="/images/photo-empty.png" alt="Logo"/>
                            </a>
                            <input id="fLogo" type="file" name="logo_upload" hidden multiple accept="image/png,image/jpeg">
                            <script>
                                function showFrm() {
                                    document.getElementById("fLogo").click();
                                    //document.getElementById("imgLogo").src = document.getElementById("fLogo").value;
                                }
                            </script>
                        </div>
                        <div class="sponsor-buisness__content">
                            <h3 class="sponsor-buisness__title">Nice Jazz Festival</h3>
                            <p class="sponsor-buisness__description">The first jazz festival of international significance</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard__row">
                    <h2 class="dashboard__section-header">Details</h2>
                    <div class="dashboard__item sponsor-detail">
                        <label class="label-unify" for="details-1-textarea">Description shall tell more about your company, its history and development.</label>
                        <textarea class="textarea-unify" id="details-1-textarea" name="description" cols="10" rows="5" placeholder="">The Nice Jazz Festival, held annually since 1948 in Nice, on the French Riviera, is “the first jazz festival of international significance.” At the inaugural festival, Louis Armstrong and his All Stars were the headliners. Frommer’s calls it “the biggest, flashiest, and most prestigious jazz festival in Europe.”</textarea>
                    </div>
                    <div class="dashboard__item sponsor-detail">
                        <label class="label-unify" for="details-2-textarea">Tell us more about how sponsors take advantage of your audience</label>
                        <textarea class="textarea-unify" id="details-2-textarea" name="what_we_offer" cols="10" rows="5" placeholder="">Sponsors are free to put their unique branding and advertising on custom stand or counter throughout the event territory. The size of branding can vary and will influence the price of it. Premium sponsors can enjoy event organizers expressly mentioning their brand during one of the speeches. Please refer to…</textarea>
                    </div>
                    <div class="dashboard__item sponsor-detail">
                        <label class="label-unify" for="details-3-textarea">How do you handle sponsors’ brands?</label>
                        <textarea class="textarea-unify" id="details-3-textarea" name="what_should_sponsors_expect" cols="10" rows="5" placeholder="">We’ve created a so-called Partners Village. We will be happy to see your brand or company joining the Village. This is a great opportunity for you to position your company as a key player in economic and social life, promote your dynamism, and strengthen business contacts.</textarea>
                    </div>
                    <div class="dashboard__item sponsor-select">
                        <p class="label-unify">Select your business indusrty from the list below</p>
                    </div>
                </div>
                <div class="dashboard__row">
                    <div class="list-new-asset__direct">
                        <a href="/sponsee" style="text-decoration: none;"><div class="list-new-asset__button list-new-asset__button_cancel">Cancel</div></a>
                        <input class="list-new-asset__button list-new-asset__button_confirm" type="submit" value="Confirm"/>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection