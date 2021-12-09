<h3>
    <span class="icon"><i class="ti-user"></i></span>
    <span class="title_text">Personal</span>
</h3>
<fieldset>
    <legend>
        <span class="step-heading">Data Guru</span>
        <span class="step-number">Step 1 / 2</span>
    </legend>
    <div class="form-group">
        <label for="nama_lengkap" class="form-label required"
        >Nama Lengkap</label
        >
        <input type="text" name="nama_lengkap" id="nama_lengkap" />
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
            <select id="birth_date" name="birth_date"></select>
            <span class="select-icon"
                ><i class="ti-angle-down"></i
            ></span>
            </div>
            <div class="form-date-item">
            <select id="birth_month" name="birth_month"></select>
            <span class="select-icon"
                ><i class="ti-angle-down"></i
            ></span>
            </div>
            <div class="form-date-item">
            <select id="birth_year" name="birth_year"></select>
            <span class="select-icon"
                ><i class="ti-angle-down"></i
            ></span>
            </div>
        </div>
        </div>

        <div class="form-select">
        <label for="gender" class="form-label">Gender</label>
        <div class="select-list">
            <select name="gender" id="gender">
            <option value="">Male</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
        </div>
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="form-label required">Alamat</label>
        <input type="text" name="alamat" id="alamat" />
    </div>

    <div class="form-group">
        <label for="phone" class="form-label required">Phone</label>
        <input type="number" name="phonr" id="phone" />
    </div>
</fieldset>

<h3>
    <span class="icon"><i class="ti-email"></i></span>
    <span class="title_text">Account</span>
</h3>
<fieldset>
    <legend>
        <span class="step-heading">Akun Guru: </span>
        <span class="step-number">Step 2 / 2</span>
    </legend>
    <div class="form-group">
        <label for="username" class="form-label required">Username</label>
        <input type="text" name="username" id="username" />
    </div>

    <div class="form-group">
        <label for="password" class="form-label required">Password</label>
        <input type="text" name="password" id="password" />
    </div>
</fieldset>
