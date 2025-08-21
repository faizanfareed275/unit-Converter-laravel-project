<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="card shadow rounded">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center mb-0">Unit Converter</h4>
                    </div>

                    <div class="card-body">
                        {{-- Error Display --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Form --}}
                        <form method="POST" action="{{ route('index.unit') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="value" class="form-label">Value</label>
                                <input type="text" class="form-control" name="value" id="value" required>
                            </div>

                            <div class="mb-3">
                                <label for="conversion" class="form-label">Conversion Type</label>
                                <select class="form-select" name="conversion" id="conversion" required>
                                    <option value="">Select Conversion</option>
                                    <option value="km_to_miles">Kilometers to Miles</option>
                                    <option value="miles_to_km">Miles to Kilometers</option>
                                    <option value="c_to_f">Celsius to Fahrenheit</option>
                                    <option value="f_to_c">Fahrenheit to Celsius</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">Convert</button>
                            </div>
                        </form>
                    </div>
                </div>

                @isset($result)
                    <div class="card mt-4 border-success">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Conversion Result</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Input:</strong> {{ $input }}</p>
                            <p><strong>Conversion:</strong> {{ ucwords(str_replace('_', ' ', $conversion)) }}</p>
                            <p><strong>Result:</strong> {{ $result }}</p>
                        </div>
                    </div>
                @endisset

            </div>
        </div>
    </div>

</body>
</html>
