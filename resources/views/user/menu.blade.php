@extends('user-app.app')

@section('content')

    <style>
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-15px);
        }
    </style>
    <section class="pt-3">
        <div class="container-fluid" style= "background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
            <p class="text-light text-center"
                style="padding-top: 70px; font-size: 50px; font-family: Poetsen One, sans-serif;">Dashboard</p>
        </div>
    </section>

    <section class="container d-flex justify-content-center pt-5 mt-3">
        <div class="row gap-5">
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="detail" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                    </li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                </div>
            </div>
        </div>
    </section>
    @include('user-app.footer')
@endsection
