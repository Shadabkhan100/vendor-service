<div class="container-fluid py-4">

    <h4 class="mb-4"><i class="bi bi-collection"></i> My Services</h4>

    <div class="row">

        @foreach($services as $index => $service)

        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card shadow rounded-4">

                <!-- CAROUSEL -->
                <div id="serviceCarousel{{ $service['id'] }}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-top-4">

                        @foreach($service['images'] as $key => $image)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ $image }}" class="d-block w-100">
                        </div>
                        @endforeach

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel{{ $service['id'] }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel{{ $service['id'] }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

                <div class="card-body">

                    <h5>{{ $service['title'] }}</h5>

                    <!-- STATUS BADGE -->
                    @if($service['status'] == 'approved')
                        <span class="badge bg-success mb-2">Approved</span>
                    @elseif($service['status'] == 'pending')
                        <span class="badge bg-warning mb-2">Pending</span>
                    @else
                        <span class="badge bg-danger mb-2">Rejected</span>
                    @endif

                    <p class="small text-muted">
                        {{ $service['description'] }}
                    </p>

                    <div class="mb-2">
                        ⭐⭐⭐⭐☆ ({{ rand(3,5) }}.0)
                    </div>

                    <!-- ACTIONS -->
                    <div class="d-flex justify-content-between mt-2">

                        <i class="bi bi-eye text-primary fs-5"></i>
                        <i class="bi bi-pencil-square text-warning fs-5"></i>
                        <i class="bi bi-trash text-danger fs-5"></i>
                        <i class="bi bi-star text-warning fs-5"></i>

                    </div>

                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>