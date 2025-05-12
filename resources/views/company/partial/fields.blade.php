<div class="">
    {!! csrf_field() !!}
    {{$errors }}
    <div class="form-row">
        <div class="form-group col-md-8">
            <div class="mb-3">
                <label for="name" class="form-label">COMPANY NAME *</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="ENTER COMPANY NAME" oninput="this.value = this.value.toUpperCase()"  value="{{ old('name', $model->name ?? '') }}" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="code" class="form-label">COMPANY CODE *</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" placeholder="ENTER CODE" oninput="this.value = this.value.toUpperCase()"  value="{{ old('code', $model->code ?? '') }}" required>
            @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label class="form-label">ADDRESS</label>
        <div class="">
            <input type="text" class="form-control @error('address_1') is-invalid @enderror" id="address_1" name="address_1" placeholder="ENTER ADDRESS LINE 1" oninput="this.value = this.value.toUpperCase()"  value="{{ old('address_1', $model->address_1 ?? '') }}" required>
            @error('address_1')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-2">
            <input type="text" class="form-control @error('address_2') is-invalid @enderror" id="address_2" name="address_2" placeholder="ENTER ADDRESS LINE 2" oninput="this.value = this.value.toUpperCase()"  value="{{ old('address_2', $model->address_2 ?? '') }}" required>
            @error('address_2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label class="form-label">CITY</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="ENTER CITY" oninput="this.value = this.value.toUpperCase()"  value="{{ old('city', $model->city ?? '') }}" required>
            @error('city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label class="form-label">STATE</label>
            <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" placeholder="ENTER STATE" oninput="this.value = this.value.toUpperCase()"  value="{{ old('state', $model->state ?? '') }}" required>
            @error('state')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label class="form-label">MOBILE NUMBER</label>
            <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="MOBILE NUMBER"
                value="{{ old('mobile', $model->mobile ?? '') }}" required>
                @error('mobile')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label class="form-label">EMAIL ID</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email ID"
                value="{{ old('email', $model->email ?? '') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
    
        <div class="form-group col-md-4">
            <label class="form-label">WEBSITE</label>
            <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="COMPANY WEBSITE (optional)"
                value="{{ old('website', $model->website ?? '') }}">
                @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group col-md-4">
            <label class="form-label">GST NUMBER</label>
            <input type="text" class="form-control @error('gstin') is-invalid @enderror" name="gstin" placeholder="GSTIN" 
                value="{{ old('gstin', $model->gstin ?? '') }}" oninput="this.value = this.value.toUpperCase()" required>
                @error('gstin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-4">
            <label class="form-label">PAN NUMBER</label>
            <input type="text" class="form-control @error('pan') is-invalid @enderror" name="pan" placeholder="PAN NUMBER"
                value="{{ old('pan', $model->pan ?? '') }}" oninput="this.value = this.value.toUpperCase()" required>
                @error('pan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
    
        <div class="form-group col-md-4">
            <label class="form-label">CIN NUMBER</label>
            <input type="text" class="form-control @error('cin') is-invalid @enderror" name="cin" placeholder="CIN NUMBER"
                value="{{ old('cin', $model->cin ?? '') }}" oninput="this.value = this.value.toUpperCase()">
                @error('cin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group col-md-4">
            <label class="form-label">COMPANY LOGO</label>
            <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
            @error('logo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-outline-light"><b>Save Company</b></button>
        <a href="{{ url()->previous() }}" type="reset" class="btn btn-outline-light"><b>Reset</b></a>
    </div>
</div>