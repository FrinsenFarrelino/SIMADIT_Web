<div
    class="modal fade"
    id="pertanyaan"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Tambah Pertanyaan
                </h5>
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
                        <div class="d-flex">
                            <div class="col-7">
                                <div class="mb-2">Deskripsi Pertanyaan</div>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Masukkan deskripsi pertanyaan"
                                />
                            </div>
                            <div class="col-5">
                                <div class="mb-2">Jenis Jawaban</div>
                                <select
                                    class="form-select"
                                    aria-label="Default select example"
                                >
                                    <option selected>
                                        Pilih Jenis Jawaban
                                    </option>
                                    <option value="1">Jawaban Singkat</option>
                                    <option value="2">Jawaban Panjang</option>
                                    <option value="3">Pilihan Ganda</option>
                                    <option value="4">Dropdown</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-2">Jawaban</div>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Masukkan deskripsi pertanyaan"
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
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
