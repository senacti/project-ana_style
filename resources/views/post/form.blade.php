<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="material" class="form-label">{{ __('Material') }}</label>
            <input type="text" name="Material" class="form-control @error('Material') is-invalid @enderror" value="{{ old('Material', $post?->Material) }}" id="material" placeholder="Material">
            {!! $errors->first('Material', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="Cantidad" class="form-control @error('Cantidad') is-invalid @enderror" value="{{ old('Cantidad', $post?->Cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('Cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="Costo" class="form-control @error('Costo') is-invalid @enderror" value="{{ old('Costo', $post?->Costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('Costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>