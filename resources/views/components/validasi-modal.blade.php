<!-- Validasi Modal -->
<div
    class="modal fade"
    id="validasi"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Validasi</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="btn-close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="col-12 text-start text-black">
                    <div class="p-3 h-100">
                        <div class="d-flex justify-content-between">
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="mb-2">Nama Pendanda Tangan</div>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan nama..."
                                    />
                                </div>
                                <div class="mb-3">
                                    <div class="mb-2">Nomor Dokumen</div>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan nomor dokumen..."
                                    />
                                </div>
                                <div>
                                    <div class="mb-2">Tanda Tangan</div>
                                    <textarea
                                        class="form-control"
                                        placeholder="Bubuhkan tanda tangan anda disini.."
                                    ></textarea>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="mb-2">Hasil QR Code</div>
                                <div
                                    class="border rounded-2 border-1 border-primary h-100"
                                ></div>
                            </div>
                        </div>
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
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Validasi Modal -->
