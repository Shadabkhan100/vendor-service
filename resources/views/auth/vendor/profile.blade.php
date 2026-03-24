

<div class="container-fluid py-4">
    <div class="row">

        <!-- LEFT MENU -->
         <div class="col-lg-3">
            <div class="card shadow text-center p-4 square-4">

                <img src="https://media.istockphoto.com/id/1682296067/photo/happy-studio-portrait-or-professional-man-real-estate-agent-or-asian-businessman-smile-for.jpg?s=612x612&w=0&k=20&c=9zbG2-9fl741fbTWw5fNgcEEe4ll-JegrGlQQ6m54rg=" class="rounded-circle mb-3">

                <h5>John Doe</h5>
                <p class="text-muted">john@email.com</p>

                <p><i class="bi bi-telephone"></i> +123456789</p>
                <p><i class="bi bi-geo-alt"></i> Jeddah</p>

                <div>⭐⭐⭐⭐⭐</div>

                <p class="small text-muted">
                    Professional vendor profile description goes here.
                </p>

                <button class="btn btn-primary w-100">Edit Profile</button>

            </div>
        </div>
       

        <!-- CENTER CONTENT -->
        <div class="col-lg-6">

            <!-- CREATE SERVICE -->
            <div class="tab-content-box" id="create">
                <div class="card shadow p-3 rounded-4">
                    <h5>Create New Service</h5>

                    <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#serviceModal">
                        <i class="bi bi-plus-circle"></i> Open Form
                    </button>
                </div>
            </div>

            <!-- PENDING -->
            <div class="tab-content-box d-none" id="pending">
                <div class="card shadow p-3 rounded-4">
                    <h5>Pending Services</h5>
                    <p class="text-muted">No pending services</p>
                </div>
            </div>

            <!-- APPROVED -->
            <div class="tab-content-box d-none" id="approved">
                <div class="card shadow p-3 rounded-4">
                    <h5>Approved Services</h5>
                    <p class="text-muted">No approved services</p>
                </div>
            </div>

            <!-- ORDERS -->
            <div class="tab-content-box d-none" id="orders">
                <div class="card shadow p-3 rounded-4">

                    <h5>Orders</h5>

                    <select class="form-select mb-3" id="filterStatus">
                        <option value="all">All</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="canceled">Canceled</option>
                    </select>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody id="orderTable">
                            <tr data-status="completed">
                                <td>1</td>
                                <td>Website Design</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>$100</td>
                            </tr>

                            <tr data-status="pending">
                                <td>2</td>
                                <td>SEO Service</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>$50</td>
                            </tr>

                            <tr data-status="canceled">
                                <td>3</td>
                                <td>Logo Design</td>
                                <td><span class="badge bg-danger">Canceled</span></td>
                                <td>$30</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- STATS -->
            <div class="row mt-4 text-center">

                <div class="col-md-6 mb-3">
                    <div class="card p-3 shadow rounded-4">
                        <h6>Total Services</h6>
                        <h3 class="text-primary">10</h3>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card p-3 shadow rounded-4">
                        <h6>Total Earnings</h6>
                        <h3 class="text-success">$1200</h3>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card p-3 shadow rounded-4">
                        <h6>Pending Orders</h6>
                        <h3 class="text-warning">3</h3>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card p-3 shadow rounded-4">
                        <h6>Completed</h6>
                        <h3 class="text-info">7</h3>
                    </div>
                </div>

            </div>
  @include('auth.vendor.extra')
        </div>

        <!-- RIGHT PROFILE -->
         <div class="col-lg-3 mb-4">
            <div class="card shadow rounded-4 p-3">

                <h5 class="mb-3"><i class="bi bi-grid"></i> Menu</h5>

                <div class="list-group" id="menuTabs">
                    <button class="list-group-item list-group-item-action active" data-tab="create">
                        <i class="bi bi-plus-circle"></i> Create Service
                    </button>

                    <button class="list-group-item list-group-item-action" data-tab="pending">
                        <i class="bi bi-clock"></i> Pending Services
                    </button>

                    <button class="list-group-item list-group-item-action" data-tab="approved">
                        <i class="bi bi-check-circle"></i> Approved Services
                    </button>

                    <button class="list-group-item list-group-item-action" data-tab="orders">
                        <i class="bi bi-bag"></i> Orders
                    </button>
                </div>

            </div>
        </div>

    </div>
   
</div>

<!-- BIG MODAL -->
<div class="modal fade" id="serviceModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content p-4 rounded-4">

            <div class="d-flex justify-content-between">
                <h4>Create Service</h4>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form class="mt-3">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Service Name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Price</label>
                        <input type="number" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Discount</label>
                        <input type="number" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Validity</label>
                        <input type="number" class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label>Images</label>
                        <input type="file" class="form-control" multiple onchange="previewImages(event)">
                    </div>

                    <div class="col-12 mb-3 d-flex flex-wrap" id="preview"></div>

                    <div class="col-12 mb-3">
                        <label>Tags</label>
                        <input type="text" class="form-control">
                    </div>

                </div>

                <button class="btn btn-success w-100">Submit</button>

            </form>

        </div>
    </div>
     
 
</div>
@include('auth.vendor.service')
<!-- JS -->
<script>

document.querySelectorAll("#menuTabs button").forEach(btn=>{
    btn.addEventListener("click", function(){

        document.querySelectorAll("#menuTabs button").forEach(b=>b.classList.remove("active"));
        this.classList.add("active");

        let tab = this.getAttribute("data-tab");

        document.querySelectorAll(".tab-content-box").forEach(box=>box.classList.add("d-none"));
        document.getElementById(tab).classList.remove("d-none");

    });
});

document.getElementById("filterStatus").addEventListener("change", function(){

    let value = this.value;
    document.querySelectorAll("#orderTable tr").forEach(row=>{
        if(value === "all" || row.dataset.status === value){
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });

});

function previewImages(event){
    let preview = document.getElementById("preview");
    preview.innerHTML = "";

    Array.from(event.target.files).forEach(file=>{
        let reader = new FileReader();

        reader.onload = function(e){
            let img = document.createElement("img");
            img.src = e.target.result;
            img.style.width = "80px";
            img.classList.add("m-2","rounded");
            preview.appendChild(img);
        }

        reader.readAsDataURL(file);
    });
}

</script>

