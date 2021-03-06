    <h3>
        <span class="icon"><i class="ti-user"></i></span>
        <span class="title_text">Murid</span>
    </h3>
    <fieldset>
    <legend>
        <span class="step-heading">Data Murid: </span>
        <span class="step-number">Step 1 / 3</span>
    </legend>
    <div class="form-group">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input
        type="text"
        name="nama_lengkap"
        id="nama_lengkap"
        required
        />
    </div>

    <div class="form-group">
        <label for="NISN" class="form-label">NISN</label>
        <input type="text" name="NISN" id="NISN" required />
    </div>

    <div class="form-group">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input
        type="text"
        name="tempat_lahir"
        id="tempat_lahir"
        required
        />
    </div>

    <div class="form-row">
        <div class="form-date">
            <label for="birth_date" class="form-label">Date of birth</label>
            <div class="form-date-group">
                <div class="form-date-item">
                    <select id="birth_date" name="birth_date" required></select>
                    <span class="select-icon"
                        ><i class="ti-angle-down"></i>
                    </span>
                </div>
                <div class="form-date-item">
                    <select
                        id="birth_month"
                        name="birth_month"
                        required>
                    </select>
                    <span class="select-icon"
                        ><i class="ti-angle-down"></i>
                    </span>
                </div>
                <div class="form-date-item">
                    <select id="birth_year" name="birth_year" required></select>
                    <span class="select-icon"
                        ><i class="ti-angle-down"></i>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-select">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <div class="select-list">
                <select name="gender" id="gender">
                <option value="" required>Laki-laki</option>
                <option value="laki-laki" required>Laki-laki</option>
                <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" required />
    </div>
</fieldset>

<h3>
    <span class="icon"><i class="ti-email"></i></span>
    <span class="title_text">Wali Murid</span>
</h3>
<fieldset>
    <legend>
        <span class="step-heading">Wali Murid: </span>
        <span class="step-number">Step 2 / 3</span>
    </legend>
    <div class="form-group">
        <label for="nama_wali" class="form-label">Nama Wali Murid</label>
        <input
        type="nama_wali"
        name="nama_wali"
        id="nama_wali"
        required
        />
    </div>

    <div class="form-group">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" name="phone" id="phone" required />
    </div>

    <div class="form-group">
        <label for="address" class="form-label">Alamat Wali Murid</label>
        <input type="text" name="address" id="address" required />
    </div>
    </fieldset>

<h3>
    <span class="icon"><i class="ti-email"></i></span>
    <span class="title_text">Akun</span>
</h3>
<fieldset>
    <legend>
        <span class="step-heading">Akun: </span>
        <span class="step-number">Step 3 / 3</span>
    </legend>

    <div class="form-group">
        <label for="user" class="form-label">Username</label>
        <input type="user" name="user" id="user" required />
    </div>

    <div class="form-group">
        <label for="password" class="form-label">password</label>
        <input type="text" name="password" id="password" required />
    </div>
</fieldset>
