<div class="row justify-content-center align-items-center gy-2 gx-3">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="password" class="form-label">Kata Sandi</label>
            <div>
                <input type="password" class="@error('password') is-invalid @enderror form-control" id="password"
                    name="password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
            <div>
                <input type="password" class="@error('password_confirmation') is-invalid @enderror form-control"
                    id="password_confirmation" name="password_confirmation">
                @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="form-footer mt-3">
    <button type="submit" class="btn btn-primary col-12">Ubah</button>
</div>