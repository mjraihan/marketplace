<section style="margin: 40px 0 150px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center font-size-20 background-black color-white">KONFIRMASI PEMBAYARAN</div>
            <div class="col-12 offset-sm-3 col-sm-6 text-center mt-3">Terima kasih telah berbelanja di Ori.id! Bila anda telah melakukan pembayaran secara BANK TRANSFER, konfirmasikan pembayaran Anda disini agar dapat kami proses segera</div>
            <form class="col-12 offset-sm-3 col-sm-6">
                <div class="form-group mt-5">
                    <label for="_nomorOrder" class="font-bold">Nomor Order</label>
                    <input type="text" class="form-control font-size-9" id="_nomorOrder" name="nomorOrder" placeholder="Nomor Order">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="_noRekeningAnda" class="font-bold">No Rekening Anda</label>
                        <input type="text" class="form-control font-size-9" id="_noRekeningAnda" placeholder="Nomor Rekening Anda">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="_atasNama" class="font-bold">Rekening Atas Nama</label>
                        <input type="text" class="form-control font-size-9" id="_atasNama" placeholder="Atas Nama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="_rekeningTujuan" class="font-bold">Rekening Tujuan</label>
                    <select name="rekeningTujuan" id="_rekeningTujuan" class="form-control font-size-9">
                        <option value="BRI">BCA - 987654321</option>
                        <option value="BRI">BRI - 123456789</option>
                        <option value="Mandiri">Mandiri - 123459876</option>
                        <option value="BNI">BNI - 5432167890</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="_metodeTransfer" class="font-bold">Metode Transfer</label>
                    <select name="metodeTrnasfer" id="_metodeTransfer" class="form-control font-size-9">
                        <option value="transferBCA">Transfer BCA</option>
                        <option value="transferBRI">Transfer BRI</option>
                        <option value="transferMandiri">Transfer Mandiri</option>
                        <option value="transferBNI">Transfer BNI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="_nominal" class="font-bold">Nominal</label>
                    <input type="text" class="form-control font-size-9" id="_nominal" name="nominal" placeholder="Nominal">
                </div>
                <div class="form-group">
                    <label for="_tanggalTransfer" class="font-bold">Tanggal Transfer</label>
                    <input type="date" class="form-control font-size-9" id="_tanggalTransfer" name="tanggalTransfer">
                </div>
                <div class="form-group">
                    <label for="_buktiTransaksi" class="font-bold">Bukti Transaksi</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input font-size-9" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Ukuran maksimal 5mb...</label>
                    </div>
                    <small id="_buktiTransaksiHelp" class="form-text text-muted">Gunakan format file .jpg atau .png</small>
                </div>
                <div class="text-center">
                    <button class="btn btn-dark rounded-0 font-size-9">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</section>