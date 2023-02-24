<form action="">
    <div class="row">
        <div class="col-6">
            <p>bambang</p>
        </div>
        <div class="col-6">
            <p>bambang</p>
        </div>
    </div>
</form>

<form action="/aspirasi" method="GET" class="d-flex" role="search">
    <div class="row justify">
        <div class="card col-6">
            <div class="card-body">
                <div class="">
                    <h4>No Pengaduan</h4>
                </div>
                <div class="">
                    <h4>kategori</h4>
                </div>
                <div class="">
                    <h4>Lokasi</h4>
                </div>
                <div class="">
                    <h4>Keterangan</h4>
                </div>
            </div>
        </div>
        <div class="card col-6">
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">No Pengaduan</label>
                        <input class="form-control me-2" name="search" type="search" placeholder="Nomor Aspirasi"
                            aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search </button>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" readonly>
                        <label for="floatingInput"> </label>
                    </div>
                    <div class="mb-2">
                        <label for="">Kategori</label>
                        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                    </div>
                    <div class="mb-2">
                        <label for="">Lokasi</label>
                        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                    </div>
                    <div class="mb-2">
                        <label for="">keterangan</label>
                        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                    </div>
                </div>
        </div>
    </div>
</form>
