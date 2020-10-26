@csrf
<div class="form-group">
    <label for="make">Make</label>
    <input class="form-control border-0 bg-light shadow-sm" id="make" type="text" name="make"
        value="{{ old('make', $car->make) }}">
</div>

<div class="form-group">
    <label for="model">Model</label>
    <input class="form-control border-0 bg-light shadow-sm" id="model" type="text" name="model"
        value="{{ old('model', $car->model) }}">

</div>

<div class="former-group">
    <label for="year">Year</label>
    <input class="form-control border-0 bg-light shadow-sm" id="year" type="number" name="year"
        value="{{ old('year', $car->year) }}">

</div>

<div class="former-group">
    <label for="mileage">Mileage</label>
    <input class="form-control border-0 bg-light shadow-sm" id="mileage" type="number" name="mileage"
        value="{{ old('mileage', $car->mileage) }}">
</div>
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
