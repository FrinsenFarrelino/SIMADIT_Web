<div
    class="modal fade"
    id="auditorEdit"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Auditor</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="btn-close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="col-12 text-start text-black">
                    <div class="mb-3">
                        <div class="mb-2">Nama Auditor</div>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Masukkan nama auditor"
                            value="Adelia"
                        />
                    </div>
                    <div class="mb-3">
                        <div class="mb-2">Telepon</div>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Masukkan telepon auditor"
                            value="081234567890"
                        />
                    </div>
                    <div class="mb-3">
                        <div class="mb-2">Email</div>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Masukkan email auditor"
                            value="adelia@gmail.com"
                        />
                    </div>
                    <div class="mb-3">
                        <div class="mb-2">Peran</div>
                        <select
                            class="form-select"
                            aria-label="Default select example"
                        >
                            <option value="0">Ketua</option>
                            <option selected>Pilih Peran</option>
                            <option value="2">Wakil</option>
                            <option value="3">Koordinator</option>
                            <option value="4">Anggota</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="mb-2">Batas Penunjukkan</div>
                        <input
                            type="date"
                            class="form-control"
                            value="2022-09-22"
                        />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Tutup
                </button>
                <button type="button" class="btn btn-primary">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </div>
</div>
