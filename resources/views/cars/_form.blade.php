@csrf

<label>
    Car Make: <br>
    <input type="text" name="make" value="{{ old('make', $car->make) }}">
</label><br>
<label>
    Model Car: <br>
    <input type="text" name="model" value="{{ old('model', $car->model) }}">
</label><br>
<label>
    Car Year: <br>
    <input type="number" name="year" value="{{ old('year', $car->year) }}">
</label><br>
<label>
    Car Mileage: <br>
    <input type="number" name="mileage" value="{{ old('mileage', $car->mileage) }}">
</label><br>

<button>{{ $btnText }}</button>
