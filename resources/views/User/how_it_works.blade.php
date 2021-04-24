@extends('User.Asset')
@section('user_content')

<section class="work_home py-5 mt-5" id='how_works'>
    <div class="work_home_content">
        <h2>How it works</h2>
    </div>
    <div class="container">

        <div class="row mt-4">


            <div class="col-md-4 text-center">
                <div class="card work_card">
                    <img class="card-img-top"
                        src="http://localhost:8000/frontend/assets/images/Illustrations/image1.svg"
                        alt="Card image cap">
                    <div class="card-body work_card_content">
                        <h5 class="card-title">Lorem ipsum dolor</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>


                    </div>
                </div>

            </div>

            <div class="col-md-4 text-center">
                <div class="card work_card">
                    <img class="card-img-top"
                        src="http://localhost:8000/frontend/assets/images/Illustrations/image2.svg"
                        alt="Card image cap">
                    <div class="card-body work_card_content">
                        <h5 class="card-title">Lorem ipsum dolor</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>


                    </div>
                </div>

            </div>

            <div class="col-md-4 text-center">
                <div class="card work_card">
                    <img class="card-img-top"
                        src="http://localhost:8000/frontend/assets/images/Illustrations/image3.svg"
                        alt="Card image cap">
                    <div class="card-body work_card_content">
                        <h5 class="card-title">Lorem ipsum dolor</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>


                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection