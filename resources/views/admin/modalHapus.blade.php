<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 text-capitalize" id="exampleModalLabel" style="text-align: center;">edit data guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/hapusguru" method="POST" id="identitas-akun">
                @csrf
                <div style="display: flex; margin-bottom: 4%;">
                    <span id="idenhapus" onclick="btnhapus1()" class="identitas active">Identitas</span>
                    <span id="akunhapus" onclick="btnhapus2()" class="akun">akun</span>
                </div>
                <div id="sliderhapus" style="display: flex;width: 225%;gap: 10%;transition: 0.7s;">
                    <div id="form-add" style="width: 100%;">
                        <div class="rec-input">
                            <label class="form-label">nama</label>
                            <input disabled name="nama" type="text" id="name" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label" style="text-transform: uppercase;">nip</label>
                            <input disabled name="nip" id="nipedit" type="number" min="0" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label">mata pelajaran</label>
                            <input style="display: none" type="text" name="id"  name="" id="id">
                            <input style="display: none" type="text" name="userid"  name="" id="userid">
                            <input disabled name="matpel" id="matpeledit" type="" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label">jenis kelamin</label>
                            <br>
                            <input disabled name="jenis_kelamin" id="gender" type="" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label">alamat</label>
                            <br>
                            <textarea disabled name="alamat" id="alamat" cols="56" rows="5" style="border-radius: 1rem;"></textarea>
                        </div>
                    </div>

                    <div id="from-add" style="width: 100%;margin-right: 1.5%;">
                       
                        <div class="rec-input">
                            <label class="form-label">username</label>
                            <input disabled name="username" type="text" id="username" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label">New password</label>
                            <input disabled name="password" type="text" id="password" class="inputan">
                            </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer d-flex flex-column justify-content-center">
            <button type="submit" class="btn-submit">Hapus</button>
        </div>
    </form>
    </div>
    </div>
</div>  