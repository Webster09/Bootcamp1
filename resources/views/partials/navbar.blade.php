<a href="http://style.css"></a>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: linear-gradient(120deg,#03045e,#FFFFFF)">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="mx-3 ">
                    <a href="">
                        <img width="60" height="50"src="img/telkomicons.png">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mt-1" aria-current="page" href="#">PENGADUAN ASPIRASI SISWA</a>
                </li>
            </ul>
            <a href="" class="navbar-brand mb-1 mx-5 "data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-door-open-fill mx-2" viewBox="0 0 16 16" style="color:#0077b6">
                    <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                </svg>
            </a>
        </div>
    </div>
</nav>

<div class="container">  @if (session()->has('LoginError'))
    <div class="alert alert-danger my-3 alert-dismissible fade show" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif</div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #03045e">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #FFFFFF">Login Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #FFFFFF"></button>
        </div>
        <div class="modal-body">
          <form action="/login" method="post">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Username</label>
              <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" autofocus name="username" id="recipient-name">
              @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Password:</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" autofocus name="password" id="">
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
      </div>
    </div>
  </div>
