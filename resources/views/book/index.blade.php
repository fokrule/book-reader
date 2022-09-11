<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Reader | Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    {{-- nav bar start --}}
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Link</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
    </nav>
    {{-- nav bar end --}}

    {{-- Main body start --}}
    <div class="container-fluid" style="height: 550px;">
        <div class="row" style="margin-top: 7px;text-align:center">
            <form method="POST" action="/profile">
                @csrf
                <div class="col">
                    <label for="file" class="control-label">Post file</label>
                    <input id="file" type="file" class="@error('file') is-invalid @enderror form-control">
                    @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col mt-1">
                    <Button class="btn btn-success"> 
                        Upload
                    </Button>
                </div>
            </form>
          </div>
    </div>
    {{-- Main body end --}}

    {{-- footer start --}}
    <footer class="bg-dark">
        <p class="text-center text-white">
            all right reserved &copy; Fokrul Hasan Forhad
        </p>
    </footer>
    {{-- footer end --}}
</body>
</html>
