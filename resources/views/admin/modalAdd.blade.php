<div class="modal fade" id="addguru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 text-capitalize" id="exampleModalLabel" style="text-align: center;">tambah data guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/tambahguru/store" id="identitas-akun">
                @csrf
                <div style="display: flex; margin-bottom: 4%;">
                    <span id="idenAdd" onclick="btn1()" class="identitas active">Identitas</span>
                    <span id="akunAdd" onclick="btn2()" class="akun">akun</span>
                </div>
                <div id="slider" style="display: flex;width: 225%;gap: 10%;">
                    <div id="form-add" style="width: 100%;">
                        <div class="rec-input">
                            <label class="form-label">nama</label>
                            <input type="text" id="name" name="name" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label" style="text-transform: uppercase;">nip</label>
                            <input name="nip" type="number" min="0" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label">mata pelajaran</label>
                            
                            <input name="matpel" type="" class="inputan">
                            <input type="text" name="level" value="user" style="display: none" id="">
                        </div>
                        <div class="rec-input">
                            <label class="form-label">jenis kelamin</label>
                            <br>
                            <input type="radio" id="" value="Laki-laki" name="jenis_kelamin"><label for=""> Laki-laki</label><br>
                            <input type="radio" id="" value="Prempuan" name="jenis_kelamin"><label for="">Perempuan</label>
                        </div>
                        <div class="rec-input">
                            <label class="form-label">alamat</label>
                            <br>
                            <textarea name="alamat" name="" id="alamat"></textarea>
                        </div>
                    </div>

                    <div id="from-add" style="width: 100%;margin-right: 1.5%;">
                        <div class="rec-input">
                            <label class="form-label">username</label>
                            <input name="username" type="text" id="username" class="inputan">
                        </div>
                        <div class="rec-input">
                            <label class="form-label">password</label>
                            <input name="password" type="password" id="password" class="inputan">
                        </div>
                        <div class="rec-input">
                            <div class="draganddrop">
                                <iconify-icon icon="mdi:image-multiple" style="color: #2C3E50;" width="73" height="73"></iconify-icon>
                                <span class="text-drop">Drop and Drag your image here</span>
                                <span class="text-drop2">Support : JPEG, JPG, PNG</span>
                                <div id="btn-line">
                                    <button class="btn-drag" type="submit">preview</button>
                                    <span class="text-drop" style="margin: 0 4%; font-size: 0.8rem;">OR</span>
                                    <button class="btn-drag" type="submit">cancel</button>
                                </div>
                                <input name="img" type="file" id="image">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer d-flex flex-column justify-content-center">
            <button type="submit" class="btn-submit">submit</button>
        </div>
    </form>
    </div>
    </div>
</div>