<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $bank?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="address" class="form-label">{{ __('Address') }}</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $bank?->address) }}" id="address" placeholder="Address">
            {!! $errors->first('address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="account_no" class="form-label">{{ __('Account No') }}</label>
            <input type="text" name="account_no" class="form-control @error('account_no') is-invalid @enderror" value="{{ old('account_no', $bank?->account_no) }}" id="account_no" placeholder="Account No">
            {!! $errors->first('account_no', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="iban" class="form-label">{{ __('Iban') }}</label>
            <input type="text" name="iban" class="form-control @error('iban') is-invalid @enderror" value="{{ old('iban', $bank?->iban) }}" id="iban" placeholder="Iban">
            {!! $errors->first('iban', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="swift" class="form-label">{{ __('Swift') }}</label>
            <input type="text" name="swift" class="form-control @error('swift') is-invalid @enderror" value="{{ old('swift', $bank?->swift) }}" id="swift" placeholder="Swift">
            {!! $errors->first('swift', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="manufracturer_address" class="form-label">{{ __('Manufracturer Address') }}</label>
            <input type="text" name="manufracturer_address" class="form-control @error('manufracturer_address') is-invalid @enderror" value="{{ old('manufracturer_address', $bank?->manufracturer_address) }}" id="manufracturer_address" placeholder="Manufracturer Address">
            {!! $errors->first('manufracturer_address', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>