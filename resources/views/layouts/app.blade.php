<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PruebaAGH - COPOMEX</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-semibold" href="{{ route('estados.index') }}">
      PruebaAGH
      <span class="text-primary">COPOMEX</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>


<main class="py-4">
  @yield('content')
</main>

<footer class="bg-dark text-light mt-5">
  <div class="container py-3">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start">
        <small>
          © {{ date('Y') }} <strong>Angel Gutiérrez</strong>
        </small>
      </div>

      <div class="col-md-6 text-center text-md-end">
        <small>
          <span class="me-3"> angelgtzhernandez@gmail.com</span>
          <span> 5580483911</span>
        </small>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.bootstrap5.min.js"></script>

@stack('scripts')
</body>
</html>
